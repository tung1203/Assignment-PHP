<?php
/*
* Helper url redirect
*/
function redirect($page) {
    header('Location: ' .URLROOT . '/' . $page);
}
