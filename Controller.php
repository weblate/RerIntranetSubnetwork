<?php

namespace Piwik\Plugins\RerIntranetSubnetwork;

use Piwik\Piwik;
use Piwik\View;
use Piwik\ViewDataTable\Factory;

class Controller extends \Piwik\Plugin\Controller
{
    public function getIntranetSubnetwork($fetch = false)
    {
        Piwik::checkUserHasSomeViewAccess();
#        $this->checkTokenInUrl();

        $view = Factory::build('pie', 'RerIntranetSubnetwork.getIntranetSubnetwork', $this->pluginName . '.' . __FUNCTION__);
#        $view = Factory::build( 'table', 'RerIntranetSubnetwork.getIntranetSubnetwork', $this->pluginName . '.' . __FUNCTION__ );
#        $view = Factory::build( $this->pluginName, "RerIntranetSubnetwork.getIntranetSubnetwork", $this->pluginName . '.' . __FUNCTION__ );
        $this->setPeriodVariablesView($view);
        $column = 'nb_visits';
        $percCol = 'nb_visits_percentage';
        $percColName = 'General_ColumnPercentageVisits';
        if ($view->period == 'day') {
            $column = 'nb_uniq_visitors';
        }
        $view->config->columns_to_display = ['label', $percCol, $column ];
        $view->config->addTranslation('label', Piwik::translate('RerIntranetSubnetwork_SubnetworkName'));
#        $view->config->addTranslation($percCol, str_replace('% ', '%&nbsp;', Piwik::translate($percColName)));
        $view->config->addTranslation($percCol, Piwik::translate($percColName));
        $view->requestConfig->filter_sort_column = $percCol;

        return $view->render();
    }
}
