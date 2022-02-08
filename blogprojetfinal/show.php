<?php
include 'header.php';
require_once '../blogprojetfinal/controllers/Article_controller.php';

if (isset($_GET['id'])) {
    $article = getOne($_GET['id']);
}

?>

<div class="container">
    <button class="btn btn-light mt-3 text-decoration-none"><a href="../index.php" class="text-decoration-none">Retourner en arrière</a></button>
    <h1 class="text-light"><?= $article->title ?></h1>
    <h2 class="text-light text-right">Crée par <?= $article->username ?></h2>
    <div class="card mb-3">
        <div class="card-body">
            <div>
                <span class="badge text-info "><?= $article->name ?></span>
            </div>
            <p class="text-dark"><?= $article->content ?></p>
        </div>
    </div>
</div>
<?php
    include 'footer.php';
?>