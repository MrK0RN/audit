<?php
$private_key = filter_var(trim($_GET['id']),FILTER_SANITIZE_STRING);
$zz = filter_var(trim($_GET['inf']),FILTER_SANITIZE_STRING);
$FamN = filter_var(trim($_GET['FamN']),FILTER_SANITIZE_STRING);
$SecN = filter_var(trim($_GET['SecN']),FILTER_SANITIZE_STRING);
$FatN = filter_var(trim($_GET['FatN']),FILTER_SANITIZE_STRING);
$BD = filter_var(trim($_GET['BD']),FILTER_SANITIZE_STRING);
$prof = filter_var(trim($_GET['prof']),FILTER_SANITIZE_STRING);

