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

use Spudley\LocalExternalDisclaimer\externalDisclaimer;

require_once(__DIR__.'/externalDisclaimer.php');


function local_externalDisclaimer_extend_navigation(global_navigation $navigation) {
    global $PAGE;
    $externalDisclaimer = new externalDisclaimer();
    $externalDisclaimer->inject($PAGE);
}
