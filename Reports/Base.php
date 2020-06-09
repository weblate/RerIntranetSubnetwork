<?php

namespace Piwik\Plugins\RerIntranetSubnetwork\Reports;

use Piwik\Plugin\Report;

abstract class Base extends Report
{
    protected function init()
    {
        $this->categoryId = 'General_Visitors';
    }
}
