<?php

namespace Piwik\Plugins\RerIntranetSubnetwork;

use Piwik\Container\StaticContainer;
use Piwik\Piwik;
use Piwik\Settings\Setting;
use Piwik\Settings\FieldConfig;
use Psr\Log\LoggerInterface;

/**
 * Defines Settings for RerIntranetSubnetwork.
 *
 * Usage like this:
 * $settings = new SystemSettings();
 * $settings->subnetwork_regex->getValue();
 */
class SystemSettings extends \Piwik\Settings\Plugin\SystemSettings
{
    /** @var Setting */
    public $subnetwork_regex;

    /** @var Setting */
    public $subnetwork_default;

    protected function init()
    {
        $this->subnetwork_default = $this->createSubnetworkDefaultSetting();
        $this->subnetwork_regex = $this->createSubnetworkRegexSetting();
    }

    private function createSubnetworkDefaultSetting()
    {
        return $this->makeSetting(
            'subnetwork_default',
            true,
            FieldConfig::TYPE_BOOL,
            function (FieldConfig $field) {
                $field->title = Piwik::translate('RerIntranetSubnetwork_SettingDefaultTitle');
                $field->description = Piwik::translate('RerIntranetSubnetwork_SettingDefaultDescription');
                $field->availableValues = [ true, false ];
            }
        );
    }

    private function createSubnetworkRegexSetting()
    {
        return $this->makeSetting(
            'subnetwork_regex',
            null,
            FieldConfig::TYPE_STRING,
            function (FieldConfig $field) {
                $field->title = Piwik::translate('RerIntranetSubnetwork_SettingTitle');
                $field->description = Piwik::translate('RerIntranetSubnetwork_SettingDescription');
                $field->uiControl = FieldConfig::UI_CONTROL_TEXT;
            //                $field->validate = function ($value, Setting $field) {
            //                    if ( '^' !== substr($value, 0, 2) || '/' !== substr($value, -1) )
            //                    {
            //                        throw new \Exception(Piwik::translate('RerIntranetSubnetwork_SettingException'));
            //                    }
            //                };
            }
        );
    }
}
