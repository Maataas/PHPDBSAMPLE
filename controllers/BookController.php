<?php

include "./models/Book.php" ;
include "./Validate.php" ;

class BookController{

    public static function index()
    {
        $books = Book::all();
        return $books;
    }

    public static function sortFilter()
    {
        $books = Book::sortFilter();
        return $books;
    }

    public static function show()
    {
        $book = Book::find($_GET['id']);
        return $book;
    }

    public static function store()
    {
        if ( Validate::book()   ) {
            $_SESSION['success'] = "Jūs sėkmingai įrašėte knygą";
            Book::create();
        }
    }

    public static function update()
    {
        $book = new Book($_POST['id'], $_POST['title'], $_POST['genre'], $_POST['author_id']);
        $book->update();
    }

    public static function destroy()
    {
      Book::destroy($_POST['id']);
    }

}

?>