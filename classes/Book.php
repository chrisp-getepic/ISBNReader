<?php declare(strict_types=1);

Class Book {

    public $title;
    public $author;
    public $ISBN;

    public function __construct(string $title='', string $author='', string $ISBN='')
    {
        $this->title = $title;
        $this->author = $author;
        $this->ISBN = $ISBN;
    }
}