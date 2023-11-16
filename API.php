<?php

namespace Piwik\Plugins\RerIntranetSubnetwork;

use Piwik\DataTable\Row;
use Piwik\Archive;
use Piwik\DataTable;
use Piwik\Metrics;
use Piwik\Piwik;

/**
 * @see plugins/RerIntranetSubNetwork/functions.php
 */

require_once PIWIK_INCLUDE_PATH . '/plugins/RerIntranetSubnetwork/functions.php';

/**
 * API for plugin RerIntranetSubnetwork
 * @method static \Piwik\Plugins\RerIntranetSubnetwork\API getInstance()
 */
class API extends \Piwik\Plugin\API
{
    public function getIntranetSubnetwork($idSite, $period, $date, $segment = false)
    {
        Piwik::checkUserHasViewAccess($idSite);
        $archive = Archive::build($idSite, $period, $date, $segment);
        $dataTable = $archive->getDataTable(Archiver::INTRANETSUBNETWORK_RECORD_NAME);
        $dataTable->filter('Sort', array(Metrics::INDEX_NB_VISITS));
        $dataTable->queueFilter('ColumnCallbackReplace', ['label', __NAMESPACE__ . '\getSubnetName']);
        $dataTable->queueFilter('ReplaceColumnNames');

        $column = 'nb_visits';
        $percCol = 'nb_visits_percentage';
        $percColName = 'General_ColumnPercentageVisits';

        $visitsSums = $archive->getDataTableFromNumeric($column);

        // check whether given tables are arrays
        if ($dataTable instanceof DataTable\Map) {
            $tableArray = $dataTable->getDataTables();
            $visitSumsArray = $visitsSums->getDataTables();
        } else {
            $tableArray = array($dataTable);
            $visitSumsArray = array($visitsSums);
        }
        // walk through the results and calculate the percentage
        foreach ($tableArray as $key => $table) {
            foreach ($visitSumsArray as $k => $visits) {
                if ($k == $key) {
                    $visitsSumTotal = (is_object($visits))
                        ?
                        (float)$visits->getFirstRow()->getColumn($column)
                        :
                        (float)$visits;
                }
            }

            // Skip aggregation of percentages when AddSummaryRow is called.
            $columnAggregationOps = $table->getMetadata(DataTable::COLUMN_AGGREGATION_OPS_METADATA_NAME);
            $columnAggregationOps[$percCol] = 'skip';
            $table->setMetadata(DataTable::COLUMN_AGGREGATION_OPS_METADATA_NAME, $columnAggregationOps);

            if (isset($visitsSumTotal)) {
                $table->filter(
                    'ColumnCallbackAddColumnPercentage',
                    [
                        $percCol,
                        Metrics::INDEX_NB_VISITS,
                        $visitsSumTotal,
                        1
                    ]
                );
                // we don't want <0% or >100%:
                $table->filter('RangeCheck', array($percCol));
            }
        }

        return $dataTable;
    }
}
