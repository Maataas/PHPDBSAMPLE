<?php 
session_start();
include "./controllers/BookController.php";
include "./controllers/AuthorController.php";

$authors = AuthorController::index();
$books = BookController::index();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    
    // Arba išsaugosim knygą
    if (isset($_POST['save'])) {
        BookController::store();
        header("Location: ./index.php");
        die;
    }

    //Arba atnaujinsim knygą
    if (isset($_POST['update'])) {
        BookController::update();
        header("Location: ./index.php");
        die;
    }

    //arba ištrinsim knygą
    if (isset($_POST['destroy'])) {
       BookController::destroy();
       header("Location: ./index.php");
       die;
    }
}




if ($_SERVER['REQUEST_METHOD'] == "GET") {
    if(isset($_GET['edit'])){
        $book = BookController::show();
    }
    if(isset($_GET['sort'])){
        $books = BookController::sortFilter();
    }

    // atvaizduosim knygą


}




//paimti visas knygas
