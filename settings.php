<?php
/**
 * @package    local_externaldisclaimer
 * @author     Simon Champion
 * @copyright  Simon Champion
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

use Spudley\LocalExternalDisclaimer\externalDisclaimer;

defined('MOODLE_INTERNAL') || die();

require_once(__DIR__.'/externalDisclaimer.php');

if (is_siteadmin()) {
    $externalDisclaimer = new externalDisclaimer();
    $externalDisclaimer->settings($ADMIN);
}
