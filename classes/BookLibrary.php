<?php declare(strict_types=1);
require '../classes/Book.php';

Class BookLibrary {
    private static $books = array();

    public static function getBooks() : array {
        $book = new Book('book1', 'author', '1234');
        self::$books[] = $book;
        $book = new Book('book2', 'author', '5678');
        self::$books[] = $book;
        $book = new Book('book3', 'author', '9012');
        self::$books[] = $book;

        $url = "https://openlibrary.org/api/books?bibkeys=ISBN:9780980200447&jscmd=data&format=json";
        $response = http_get($url, array("timeout"=>1), $info);
        print_r($info);
        return self::$books;
    }
}