<?php

namespace Piwik\Plugins\RerIntranetSubnetwork;

use Piwik\Metrics;

class Archiver extends \Piwik\Plugin\Archiver
{
    const INTRANETSUBNETWORK_RECORD_NAME = 'RerIntranetSubnetwork_Title';
    const INTRANETSUBNETWORK_FIELD = "location_subnetwork";

    public function aggregateMultipleReports()
    {
        $this->getProcessor()->aggregateDataTableRecords(array(self::INTRANETSUBNETWORK_RECORD_NAME));
    }

    /**
     * Archive the IntranetSubNetwork count
     */

    public function aggregateDayReport()
    {
        $metrics = $this->getLogAggregator()->getMetricsFromVisitByDimension(self::INTRANETSUBNETWORK_FIELD)->asDataTable();
        $this->getProcessor()->insertBlobRecord(self::INTRANETSUBNETWORK_RECORD_NAME, $metrics->getSerialized());
    }
}
