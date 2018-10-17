<?php

require '../classes/BookLibrary.php';

$books = BookLibrary::getBooks();
echo json_encode($books);