<?php
/**
 * Language file for the new Elections plugin for glFusion.
 *
 * @author      Lee Garner <lee@leegarner.com>
 * @copyright   Copyright (c) 2021 Lee Garner <lee@leegarner.com>
 * @package     elections
 * @version     v0.1.0
 * @license     http://opensource.org/licenses/gpl-2.0.php
 *              GNU Public License v2 or later
 * @filesource
 */
use Elections\MO;
use Elections\Config;

// Localization of the Admin Configuration UI
$LANG_configsections[Config::PI_NAME] = array(
    'label' => Config::get('pi_display_name'),
    'title' => MO::_('Elections Configuration'),
);

$LANG_confignames[Config::PI_NAME] = array(
    'hidemenu' => MO::_('Hide Menu Entry'),
    'maxquestions' => MO::_('Max. Questions per Election'),
    'maxanswers' => MO::_('Max. Options per Question'),
    'answerorder' => MO::_('Sort Results'),
    'cookietime' => MO::_('Voter Cookie Valid Duration'),
    'addresstime' => MO::_('Voter IP Address Valid Duration'),
    'delete_election' => MO::_('Delete Elections with Owner'),
    'aftersave' => MO::_('After Saving Election'),
    'displayblocks' => MO::_('Display glFusion Blocks'),
    'def_voting_gid' => MO::_('Default group allowed to vote'),
    'def_results_gid' => MO::_('Default group allowed to view results'),
    'allow_votemod' => MO::_('Default after-voting access'),
);

$LANG_configsubgroups[Config::PI_NAME] = array(
    'sg_main' => MO::_('Main Settings'),
);

$LANG_fs[Config::PI_NAME] = array(
    'fs_main' => MO::_('General Settings'),
    'fs_permissions' => MO::_('Default Permissions'),
);

$LANG_configSelect[Config::PI_NAME] = array(
    0 => array(
        1 => MO::_('True'),
        0 => MO::_('False'),
    ),
    1 => array(
        true => MO::_('True'),
        false => MO::_('False'),
    ),
    2 => array(
        'submitorder' => MO::_('As Submitted'),
        'voteorder' => MO::_('By Votes'),
    ),
    3 => array(
        0 => MO::_('No Access'),
        1 => MO::_('View Vote'),
        //2 => MO::_('Modify Vote'),
    ),
    9 => array(
        'item' => MO::_('Forward to Election'),
        'list' => MO::_('Display Admin List'),
        'plugin' => MO::_('Display Public List'),
        'home' => MO::_('Display Home'),
        'admin' => MO::_('Display Admin'),
    ),
    12 => array(
        0 => MO::_('No access'),
        2 => MO::_('Read-Only'),
        3 => MO::_('Read-Write'),
    ),
    13 => array(
        0 => MO::_('Left Blocks'),
        1 => MO::_('Right Blocks'),
        2 => MO::_('Left & Right Blocks'),
        3 => MO::_('None'),
    ),
);

?>
