
<?php require 'actions/signupAction.php'; ?>

<!DOCTYPE html>

<html lang="en">
<?php include 'includes/head.php'; ?>
<body>
    <form class="container" action="signup.php" method="post">
        <?php if(isset($errorMsg)){
            echo '<div class="alert alert-danger" role="alert">'.$errorMsg.'</div>';
        } ?>
        <div class="mb-3">
            <label for="username" class="form-label">pseudo</label>
            <input type="text" name="pseudo" class="form-control" id="username">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Nom</label>
            <input type="name" name="lastname" class="form-control" id="email">

        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Prénom</label>
            <input type="email" name="firstname" class="form-control" id="firstname">

        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Mot de passe</label>
            <input type="password" name="password" class="form-control" id="password">

        </div>
        <button type="submit" class="btn btn-primary" name="validate">S'inscrire</button>
        <a href="login.php"><p>j'ai deja un compte je me connecte</p></a>
    </form>
</body>
</html>