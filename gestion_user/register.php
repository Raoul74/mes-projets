

<?php
require_once ('./includes/header.php');

@$email = htmlspecialchars($_POST['email']);
@$pseudo = htmlspecialchars($_POST['username']);
$errors = [];  
if (isset($_POST)){
  
    if (empty($pseudo)  || !preg_match("#^[a-zA-Z0-9_]+$#", $pseudo) ){
        $errors['username']="G";
    }else {
    }
        if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] =" Email non valide";
        }else{
            
        }
        if (empty($_POST['motdepasse'])){
            $errors['motdepasse'] = "vous devez entrer un mot de passe ";
        }else if ($_POST['motdepasse'] !== $_POST['confirm_mdp']){
            $errors['motdepasse'] = "votre mot de passe ne correspond pas!";
        }
    
}
?>



<?php 
if (!empty($errors)){
    echo '<div  style="color:white; 
    text-align: center;
    background-color:red";
    margin-bottom:10px;
    font-size:23px;
    ">' .reset($errors).'</div>';
}
?>
 

<section>
    <div class="container">
        <div class="header">
            <h2>créer</h2>
        </div>
        
        <form class="form" id="form" control="post" action="" method="post">
            <div class="control-form" controls="post" >
                <label for="username" id="username"> Nom de l'utilisateur</label> <br>
                <input type="text" id="username" placeholder="Mr Raoul" value="<?= isset($pseudo)? $pseudo :'';?> " name="username">
            </div>
            
            
            <div class="control-form" class="post"  >
                <label for="email" id="email"> Email</label> <br>
                <input type="email" id="email" placeholder="Mr Raoul" value="<?= isset($email)? $email :'';?> "  name="email">
            </div>
            
            
            <div class="control-form" controls="post" >
                <label for="motdepasse" id="motdepasse"> Entrer votre mot de passe</label>
                <input type="text" id="mot de passe" placeholder="Mr Raoul" name ="motdepasse" >
            </div>

            <div class="control-form" controls="post" >
                <label for="motdepasse" id="confirm_mdp"> Entrer votre mot de passe</label>
                <input type="text" id="mot de passe" placeholder="Mr Raoul" name ="confirm_mdp" >
            </div>
            
            
            <button type="submit"> s'inscrire</button>
        </form>
        
    </div>
</section>

<?php 

require_once ('./includes/footer.php');
?>

