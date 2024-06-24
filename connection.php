<?php
$con  = mysqli_connect('localhost','root','','workshop');
if(mysqli_connect_errno())
{
    echo 'Database Connection Error';
    exit;
}