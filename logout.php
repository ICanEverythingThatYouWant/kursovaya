<?php
session_start();
session_destroy();
header('location: autorized.php');
exit;