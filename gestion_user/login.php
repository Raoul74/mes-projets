
<?php 
require_once ('./includes/header.php');

?>


<section>
    <div class="container">
        <div class="header">
            <h2> creér un compte </h2>
        </div>
        
        
        <form class="form" id="form" control="post" action="">
            <div class="control-form">
                <label for="username" id="username"> Nom de l'utilisateur</label> <br>
                <input type="text" id="username" placeholder="Mr Raoul">
            </div>
            
            
            <div class="control-form" class="post" action="">
                <label for="Email" id="Email"> Email</label> <br>
                <input type="text" id="Email" placeholder="Mr Raoul">
                
            </div>
            
            <div class="control-form" controls="post" action="">
                <label for="motdepasse" id="confirmmotdepasse"> Entrer votre mot de passe</label>
                <input type="text" id="mot de passe" placeholder="Mr Raoul" name ="confirmmotdepasse">
            </div>
            
            
            <button type="submit"> s'inscrire</button>
        </form>
        
    </div>
</section>
<?php 
require_once ('./includes/footer.php');

?>
