<?php 
include 'header.php';

require_once '../blogprojetfinal/controllers/Article_controller.php';
require_once '../blogprojetfinal/controllers/Categories_controller.php'
?>
<div class="form-group">
    <form action="#" method="POST">
        <div class="form-group">
            <label for="title">Title :</label>
            <input type="text" class="form-control" name="title">
        </div>
        <div class="form-group">
            <label for="user_id">Autheur :</label>
            <input type="text" class="form-control" name="user_id">
        </div>
        <div class="form-group">
            <select class='form-control' name='categorie_id'>;
     <option>Choisir catégorie...</option>
            <?php

// lire les catégories de produits depuis la base de données
// $stmt = $category->read();

// les mettre dans une liste déroulante de sélection

foreach ($categories as $category) {

    ?>   <option value="<?=$category->id?>"><?=$category->name?></option> <?php
}
?>
 </select>
        </div>
        <div class="form-group">
            <label for="content">Contenue :</label>
            <textarea name="content" id="" cols="100" rows="10"></textarea>
        </div>
        <button type="submit" name="action" class="btn btn-primary">Créer</button>
    </form>
</div>

<?php
include 'footer.php';
?>