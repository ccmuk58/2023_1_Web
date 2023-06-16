<?php
session_start();
include_once('dbconn.php');
$email = $_SESSION['pz_uid'];
$uname = $_SESSION['pz_uname'];
