<?php
require_once 'toro.php';

/**
 * display the skin which contains all of our javascript
 */
class UiHandler extends ToroHandler {
    public function get() { 
        echo file_get_contents('ui.html');
    }
}

?>
