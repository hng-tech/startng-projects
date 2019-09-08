<?php

//Get User ID from transaction ref

$txref = '90-VLTH-5gdjhd';
$uArray = explode('-', $txref);
$userId = (int) $uArray[0];

echo $userId;
