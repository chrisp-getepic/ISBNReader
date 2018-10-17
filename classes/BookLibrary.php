<?php declare(strict_types=1);

Class BookLibrary {
    private static $books = array();

    public static function getBooks() : array {
        return self::$books;
    }
}