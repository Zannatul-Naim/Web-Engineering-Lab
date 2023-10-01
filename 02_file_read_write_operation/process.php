
<?php

    $tmp_book['title'] =  (string) $_POST['title'];
    $tmp_book['author'] = (string) $_POST['author'];
    $tmp_book['available'] =  (bool) strtolower($_POST['avail']) == 'yes' ? true:false;
    $tmp_book['pages'] =  (int) $_POST['pages'];
    $tmp_book['isbn']=    (string) $_POST['isbn'];

    echo '<pre>';
    print_r($tmp_book);
    echo '</pre>';

    $booksJson = file_get_contents(__DIR__ . './books.json');
    $books = json_decode($booksJson, true);
    $books[] = $tmp_book;
    $booksJson = json_encode($books);
    file_put_contents(__DIR__ . './books.json', $booksJson);

    echo "<br><br><b>Successfully added your information</b>";

?>