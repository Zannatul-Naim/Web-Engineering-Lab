<?php

function getBooks() : array {
    $booksJson = file_get_contents(__DIR__ . './books.json');
    return json_decode($booksJson, true);
}

function updateBooks(array $books) {
    $booksJson = json_encode($books);
    file_put_contents(__DIR__ . './books.json', $booksJson);
}
?>