<?php

function db()
{
$db= new mysqli("localhost","root","","shivank");
return $db;

}

?>