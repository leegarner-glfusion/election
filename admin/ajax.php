<?php
/**
 * Common admistrative AJAX functions.
 *
 * @author      Lee Garner <lee@leegarner.com>
 * @copyright   Copyright (c) 2020 Lee Garner <lee@leegarner.com>
 * @package     elections
 * @version     v0.1.0
 * @since       v0.1.0
 * @license     http://opensource.org/licenses/gpl-2.0.php
 *              GNU Public License v2 or later
 * @filesource
 */

/** Include required glFusion common functions */
require_once '../../../lib-common.php';
use Elections\MO;

// This is for administrators only.  It's called by Javascript,
// so don't try to display a message
if (!plugin_ismoderator_elections()) {
    COM_accessLog("User {$_USER['username']} tried to illegally access the shop admin ajax function.");
    $retval = array(
        'status' => false,
        'statusMessage' => MO::_('Access Denied'),
    );
    header('Content-Type: application/json');
    header("Cache-Control: no-cache, must-revalidate");
    //A date in the past
    header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
    echo json_encode($retval);
    exit;
}
use Elections\Election;

if (isset($_POST['action'])) {
    $action = $_POST['action'];
} elseif (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = '';
}

$title = NULL;      // title attribute to be set
switch ($action) {
case 'toggle':
    switch ($_POST['component']) {
    case 'election':
        switch ($_POST['type']) {
        case 'status':
            $newval = Election::toggleEnabled($_POST['oldval'], $_POST['id']);
            break;
         default:
            exit;
        }
        break;
    default:
        exit;
    }

    // Common output for all toggle functions.
    $retval = array(
        'id'    => $_POST['id'],
        'type'  => $_POST['type'],
        'component' => $_POST['component'],
        'newval'    => $newval,
        'statusMessage' => $newval != $_POST['oldval'] ?
            MO::_('Item(s) have been updated.') : MO::_('Item(s) are unchanged.'),
        'title' => $title,
    );
}

// Return the $retval array as a JSON string
header('Content-Type: application/json');
header("Cache-Control: no-cache, must-revalidate");
//A date in the past
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
echo json_encode($retval);
exit;
