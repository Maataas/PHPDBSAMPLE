<?php

class Validate
{

    public static function Book() //jei naudosime updatinimui, reikia tikrinti ar POSTe yra id(book) ir Jei taip - tikrinti ar tas id atititinka realia knyga
    {
        $author = Author::find($_POST['authorId']);
        if (strlen($_POST['title']) == 0) {
            $_SESSION['errors']['title'] = "Įveskite knygos pavadinimą";
        }

        if (strlen($_POST['genre']) == 0) {
            $_SESSION['errors']['genre'] = "Įveskite knygos žanrą";
        }

        // $hasAuthor = false;
        // foreach ($authors as $author) {
        //     if ($author->id == $_POST['authorId']) {
        //         $hasAuthor = true;
        //         break;
        //     }
        // }

        if ($author->id == null) {
            $_SESSION['errors']['author'] = "Tokio autoriaus nėra";
        }

        if (isset($_SESSION['errors'])) {
            return false;
        }
        return true;
    }
}