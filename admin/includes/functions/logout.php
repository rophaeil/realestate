<?php
session_start();
include('model.class.php');
$action = new model();
$action->logout();