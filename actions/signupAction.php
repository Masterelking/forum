<?php

require 'database.php';

    //validation du formulaire
    if(isset($_POST['validate'])){

        //vérifier si l utulisateur a bien completer tout les champs
        if(!empty($_POST['pseudo']) AND !empty($_POST['lastname']) AND !empty($_POST['firstname']) AND !empty($POST['password']));
        //recuperation des données
        $user_pseudo=htmlspecialchars($_POST['pseudo']);
        $user_lastname=htmlspecialchars($_POST['lastname']);
        $user_firstname=htmlspecialchars($_POST['firstname']);
        $user_password = password_hash(htmlspecialchars($_POST['password']), PASSWORD_DEFAULT);

        //verification si l'utilisateur existe deja
        $checkIfUserExist=$bdd->prepare('SELECT pseudo FROM users WHERE pseudo=?');
        $chekIfUserAlreadyExist->execute(array($user_pseudo));
    

        if($checkUserAlreadyExixts->rowCount()==0){

            //insertion de l'utilisateur dans la base de données
            $insertUserOnWebsite=$bdd->prepare('INSERT INTO users(pseudo,lastname,firstname,password) VALUES(?,?,?,?)');
            $insertUserOnWebsite->execute(array($user_pseudo,$user_lastname,$user_firstname,$user_password));

            //recuperation des informations de l'utilisateur
            $getIfThisUserReq=$bdd->prepare('SELECT idpseudo,nom,prenom FROM users WHERE nom=?,prenom=?');
            $getInfoOfThisUserReq->execute(array($user_lastname,$user_firstname,$user_pseudo));


            $userInfos=$getInfoOfThisUserReq->fetch();

            //authentification de l'utilisateur et recuperation de ses données dans des variables globales session
            $SESSION['auth']=true;
            $_SESSION['id']=$usersInfos['id'];
            $_SESSION['pseudo']=$usersInfos['pseudo'];
            $_SESSION['lastname']=$usersInfos['lastname'];
            $_SESSION['firstname']=$usersInfos['firstname'];

            //redirection vers la page d'accueil

            header('Location: index.php');

        }else{$errorMsg="l'utilisateur existe deja sue le site.";

        }
    }else{

        $errorMsg="veuillez completer tous les champs...";
    }