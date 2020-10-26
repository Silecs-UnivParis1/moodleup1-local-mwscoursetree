<?php
/**
 * @package    local
 * @subpackage mwscoursetree
 * @copyright  2013 Silecs {@link http://www.silecs.info/societe}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$plugin->version   = 2013021500;        // The current plugin version (Date: YYYYMMDDXX)
$plugin->requires  = 2020100300;        // Requires this Moodle version
$plugin->component = 'local_mwscoursetree';  // Full name of the plugin (used for diagnostics)

$plugin->dependencies = [
	'local_coursehybridtree' => 2020100300,
	'local_up1_courselist' => 2020100300,
	'local_jquery' =>  2020100300
];

