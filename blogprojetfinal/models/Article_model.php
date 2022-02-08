<?php


class Article extends Database {

    private $id = 0;
    private $title = '';
    private $user_id = 0;
    private $categorie_id = 0;
    private $content = '';
    private $created_at = '';

    private $table = 'articles';

    public function __construct()
    {
        parent::__construct();
    }

    public function getAll()
    {
        $query = "SELECT
        art.`id`,
        art.`title`,
        art.`user_id`,
        art.`categorie_id`,
        art.`content`,
        art.`created_at`,
        cat.`name`,
        users.`username`
    FROM
        ". $this->table ." AS art
    INNER JOIN `categories` AS cat
    ON
        art.`categorie_id` = cat.`id`
    INNER JOIN `users` ON art.`user_id` = `users`.`id`";


    $stmt = $this->conn->query($query);
    if (is_object($stmt)) {
        $articles = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
      
       return $articles;
   }

   public function getOne()
   {
       // on utilise la méthode prepare car notre requête a pas besoin d'un paramètre envoyé par l'utilisateur.

       $query = "SELECT
       art.`id`,
       art.`title`,
       art.`user_id`,
       art.`categorie_id`,
       art.`content`,
       art.`created_at`,
       cat.`name`,
       users.`username`
   FROM
       ". $this->table ." AS art
   INNER JOIN `categories` AS cat
   ON
       art.`categorie_id` = cat.`id`
   INNER JOIN `users` ON art.`user_id` = `users`.`id` WHERE art.`id` = :id";

$stmt = $this->conn->prepare($query);
$stmt->bindValue(':id', $this->id, PDO::PARAM_INT);
if ($stmt->execute()) {
    $result = $stmt->fetch(PDO::FETCH_OBJ);
}
return $result;

   }



public function create()
{
    $query = 'INSERT INTO ' . $this->table . '(
        `title`,
        `user_id`,
        `categorie_id`,
        `content`
    )
    VALUES(
        :title,
        :user_id,
        :categorie_id,
        :content
    )';
    $stmt = $this->conn->prepare($query);
    $stmt->bindValue(':title', $this->title, PDO::PARAM_STR);
    $stmt->bindValue(':user_id', $this->user_id, PDO::PARAM_INT);
    $stmt->bindValue(':categorie_id', $this->categorie_id, PDO::PARAM_INT);
    $stmt->bindValue(':content', $this->content, PDO::PARAM_STR);
    return $stmt->execute();
}



   







    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of title
     */ 
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */ 
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of user_id
     */ 
    public function getUser_id()
    {
        return $this->user_id;
    }

    /**
     * Set the value of user_id
     *
     * @return  self
     */ 
    public function setUser_id($user_id)
    {
        $this->user_id = $user_id;

        return $this;
    }

    /**
     * Get the value of categorie_id
     */ 
    public function getCategorie_id()
    {
        return $this->categorie_id;
    }

    /**
     * Set the value of categorie_id
     *
     * @return  self
     */ 
    public function setCategorie_id($categorie_id)
    {
        $this->categorie_id = $categorie_id;

        return $this;
    }

    /**
     * Get the value of content
     */ 
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set the value of content
     *
     * @return  self
     */ 
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get the value of created_at
     */ 
    public function getCreated_at()
    {
        return $this->created_at;
    }

    /**
     * Set the value of created_at
     *
     * @return  self
     */ 
    public function setCreated_at($created_at)
    {
        $this->created_at = $created_at;

        return $this;
    }

    
 }



