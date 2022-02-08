<?php
include 'header.php';
require_once 'controllers/Article_controller.php';
?>

<main>
<div class="container">
<h1 class="text-light">Les derniers articles</h1>

<?php foreach ($articles as $article): ?>
    <div class="card mb-3">
        <div class="card-body">
            <h2><?= $article["title"] ?></h2>
            <div>
                <span class="badge badge-succes text-info"><?= $article["name"] ?></span>
            </div>
            <small class="text-info">Publié le <?= $article["created_at"] ?></small>
            <p><?= $article["content"] ?></p>
            <button class="btn btn-danger"> <a href="show.php?id=<?= $article["id"] ?>">Lire plus</a></button>
        </div>
    </div>
<?php endforeach ?>
</div>
</main>
<?php
include 'footer.php';
?>

