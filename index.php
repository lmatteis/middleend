<?php
require_once 'toro.php';
require_once 'handlers.php';

$site = new ToroApplication(array(
    array('/', 'UiHandler')
));

$site->serve();
?>
