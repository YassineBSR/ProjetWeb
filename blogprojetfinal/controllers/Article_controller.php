<?php

require_once '../blogprojetfinal/models/Article_model.php';

if (isset($_POST['action'])) {
    $datas = $_POST;
    createArticle($_POST);
}


function getAllArticle()
{
    $article = new Article();
    return $article->getAll();
}

$articles = getAllArticle();



function getOne($id)
{
    $article = new Article();
    $article->setId($id);
    return $article->getOne();
}



function createArticle($param)
{
  
    // valeurs affichées
    $article = new Article();
    $article->setTitle(htmlspecialchars($param['title']));
    $article->setUser_id(htmlspecialchars($param['user_id']));
    $article->setCategorie_id(htmlspecialchars($param['categorie_id']));
    $article->setContent(htmlspecialchars($param['content']));
    if ($article->create()) {
        $sucess = true;
        if ($sucess) {
            $article->setTitle('');
            $article->setUser_id('');
            $article->setCategorie_id(0);
            $article->setContent('');
            

        }
    }
    else{
        echo'here';
    }
}





      
    


