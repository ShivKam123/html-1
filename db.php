<?php
function dcon()
{
    $db = new mysqli("localhost","root","","shivank");
    if($db->connect_error)
    {
        return false;
    } 
    return $db;
}
?>