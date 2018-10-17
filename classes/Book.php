<?php declare(strict_types=1);

Class Book {

    public $title;
    public $author;

    public function __construct(string $title='', string $author='')
    {
        $this->title = $title;
        $this->author = $author;
    }
}