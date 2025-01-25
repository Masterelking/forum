<?php

try{
    session_start();

    $bdd= new PDO('mysql:host=localhost;dbname=forum;charset=utf8', 'root', '');

}
catch(Exception $e)
{
    die(' une Erreur a été trouver : '.$e->getMessage());
}