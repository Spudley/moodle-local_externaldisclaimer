<?php
// This file is part of the Local External Disclaimer plugin for Moodle
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * @package    local_externaldisclaimer
 * @author     Simon Champion
 * @copyright  Simon Champion
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace Spudley\LocalExternalDisclaimer;

use admin_setting_configcheckbox;
use admin_setting_configtextarea;
use admin_settingpage;
use get_config;
use get_string;

class externalDisclaimer
{
    const PLGNAME = 'local_externaldisclaimer';

    private $enabled = false;
    private $config = [];

    public function __construct()
    {
        $this->enabled = get_config(self::PLGNAME, 'enabled');

        $this->config = [
            'internal' => get_config(self::PLGNAME, 'internal'),
            'external' => get_config(self::PLGNAME, 'external'),
            'disclaimer' => get_config(self::PLGNAME, 'disclaimer')
        ];
    }

    public function inject($PAGE)
    {
        if (!$this->enabled) {
            return;
        }

        $jsonArgs = json_encode($this->config);
        $PAGE->requires->js_call_amd('local_externaldisclaimer/externaldisclaimer', 'initialise', [$this->config]);
    }

    public function settings($ADMIN)
    {
        $settings = new admin_settingpage('local_externaldisclaimer', \get_string('pluginname', self::PLGNAME));

        $settings->add($this->createSettingCheckbox('enabled'));
        $settings->add($this->createSettingTextArea('internal'));
        $settings->add($this->createSettingTextArea('external'));
        $settings->add($this->createSettingTextArea('disclaimer'));

        $ADMIN->add('localplugins', $settings);
    }

    private function createSettingCheckbox($name, $default = false)
    {
        $fqName = self::PLGNAME.'/'.$name;
        $title = get_string($name, self::PLGNAME);
        $description = get_string($name.'_desc', self::PLGNAME);
        return new admin_setting_configcheckbox($fqName, $title, $description, $default, true, false);
    }

    private function createSettingTextArea($name, $default = '')
    {
        $fqName = self::PLGNAME.'/'.$name;
        $title = get_string($name, self::PLGNAME);
        $description = get_string($name.'_desc', self::PLGNAME);
        return new admin_setting_configtextarea($fqName, $title, $description, $default, true, false);
    }
}
