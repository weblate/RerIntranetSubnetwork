<?php

namespace Piwik\Plugins\RerIntranetSubNetwork;

use Piwik\Piwik;

function getSubnetName($in)
{
    if (empty($in)) {
        return Piwik::Translate('General_Unknown');
    }

    return $in;
}
