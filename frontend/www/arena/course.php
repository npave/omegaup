<?php
require_once('../../server/bootstrap.php');

$show_intro = false;

try {
    /*
     * @TODO: Check if we should show intro
     */
    if (isset($_REQUEST['assignment_alias'])) {
        $show_assignment = true;
    }
} catch (Exception $e) {
    header('HTTP/1.1 404 Not Found');
    die(file_get_contents('../404.html'));
}

if ($show_intro) {
    $smarty->display('../../templates/arena.course.intro.tpl');
} elseif ($show_assignment) {
    $smarty->display('../../templates/arena.course.assignment.tpl');
} else {
    $smarty->display('../../templates/arena.course.tpl');
}