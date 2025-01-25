<?php
session_start();
if(!isset($SESSION['auth'])){
    header('Location: login.php');
}
