<?php 
date_default_timezone_set("BST");
$curryear=date("Y");
$year = date("Y")+1;
header('Location: /goals/'.$year);?>