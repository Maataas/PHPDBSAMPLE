<?php
include "./models/DB.php";
class Book{
public $id;
public $title;
public $genre;
public $authorId;

  
public function __construct($id = null, $title = "", $genre = "", $authorId = null) {
    $this->id = $id;
    $this->title = $title;
    $this->genre = $genre;
    $this->authorId = $authorId;
}


public static function all(){
    $books = [];
    $db = new DB();
    $query = "SELECT * FROM `books`";
    $result = $db->conn->query($query);

    while ($row = $result->fetch_assoc()) {
        $books[] = new Book($row['id'], $row['title'], $row['genre'], $row['author_id']);
    }
    $db->conn->close();
    return $books;
}

public static function find($id){
    $book = new Book();
    $db = new DB();
    $stmt = $db->conn->prepare("SELECT * FROM `books` WHERE `id` = ?");
    $stmt->bind_param("i",$id);
    $stmt->execute();
    $result = $stmt->get_result();
    while ($row = $result->fetch_assoc()) {
        $book = new Book($row['id'], $row['title'], $row['genre'], $row['author_id']);
    }
    $stmt->close();
    $db->conn->close();
    return $book;
}


public static function create(){
    $db = new DB();
    $stmt = $db->conn->prepare("INSERT INTO `books`(`title`, `genre`, `author_id`) VALUES (?,?,?)");
    $stmt->bind_param("ssi",$_POST['title'], $_POST['genre'],$_POST['author_id']);
    $stmt->execute();
    $stmt->close();
    $db->conn->close();
}

public function update(){
    $db = new DB();
    $stmt = $db->conn->prepare("UPDATE `books` SET `title`= ?,`genre`=?,`author_id`=? WHERE `id` = ?");
    $stmt->bind_param("ssii",$this->title, $this->genre, $this->authorId, $this->id);
    $stmt->execute();
    $stmt->close();
    $db->conn->close();
}

public static function destroy($id){
    $db = new DB();
    $stmt = $db->conn->prepare("DELETE FROM `books` WHERE `id` = ?");
    $stmt->bind_param("i",$id);
    $stmt->execute();

    $stmt->close();
    $db->conn->close(); 
}

}



?>