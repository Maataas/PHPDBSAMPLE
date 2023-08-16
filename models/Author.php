<?php
class Author{
public $id;
public $name;
public $surname;

  
public function __construct($id = null, $name = "", $surname = "") {
    $this->id = $id;
    $this->name = $name;
    $this->surname = $surname;
}


public static function all(){
    $authors = [];
    $db = new DB();
    $query = "SELECT * FROM `authors`";
    $result = $db->conn->query($query);
    while ($row = $result->fetch_assoc()) {
        $authors[] = new Author($row['id'], $row['name'], $row['surname']);
    }
    $db->conn->close();
    return $authors;
}

public static function find($id){
    $author = new Author();
    $db = new DB();
    $stmt = $db->conn->prepare("SELECT * FROM `authors` WHERE `id` = ?");
    $stmt->bind_param("i",$id);
    $stmt->execute();
    $result = $stmt->get_result();
    while ($row = $result->fetch_assoc()) {
        $author = new Author($row['id'], $row['name'], $row['surname']);
    }
    $stmt->close();
    $db->conn->close();
    return $author;
}


// public static function create(){
//     $db = new DB();
//     $stmt = $db->conn->prepare("INSERT INTO `books`(`title`, `genre`, `author_id`) VALUES (?,?,?)");
//     $stmt->bind_param("ssi",$_POST['title'], $_POST['genre'],$_POST['author_id']);
//     $stmt->execute();
//     $stmt->close();
//     $db->conn->close();
// }

// public function update(){
//     $db = new DB();
//     $stmt = $db->conn->prepare("UPDATE `books` SET `title`= ?,`genre`=?,`author_id`=? WHERE `id` = ?");
//     $stmt->bind_param("ssii",$this->title, $this->genre, $this->authorId, $this->id);
//     $stmt->execute();
//     $stmt->close();
//     $db->conn->close();
// }

// public static function destroy($id){
//     $db = new DB();
//     $stmt = $db->conn->prepare("DELETE FROM `books` WHERE `id` = ?");
//     $stmt->bind_param("i",$id);
//     $stmt->execute();

//     $stmt->close();
//     $db->conn->close(); 
// }

}



?>