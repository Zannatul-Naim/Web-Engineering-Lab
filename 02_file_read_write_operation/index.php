<?php require_once 'process_func.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Store</title>
    <style>
        form {
            padding-top: 100px;
            margin: 0 auto;
            width: 300px;
        }

        input {
            padding-right: 25px;
            margin-top: 5px;
            margin-bottom: 5px;
            padding: 0 5px 5px 5px;

        }
    </style>
</head>

<?php $books = getBooks(); ?>

<body>

    <form action="process.php" method="post">
        <label for="title">Title</label> <br>
        <input type="text" name="title" id="" placeholder="Book title" required> <br>
        <label for="author">Author</label> <br>
        <input type="text" name="author" id="" placeholder="Author name" required> <br>
        <label for="avail">Availability</label> <br>
        <input type="text" name="avail" id="" placeholder="availability yes or no" required> <br>
        <label for="pages">Pages</label> <br>
        <input type="number" name="pages" id="" placeholder="No. of Pages" required> <br>
        <label for="isbn">ISBN</label> <br>
        <input type="text" name="isbn" id="" placeholder="isbn no."> <br>
        <input type="submit" value="submit">

    </form>

    <br><br><br>
    <table border="1">
        <thead>
            <tr>
                <th width="300">Title</th>
                <th width="200">Author</th>
                <th width="5">Availability</th>
                <th width="10">Pages</th>
                <th width="20"></th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($books as $key => $book): ?>
            <tr>
                
                <td> <?= $book['title'] ?> </td>
                <td><?= $book['author'] ?></td>
                <td><?= $book['available']?"YES":"NO"?></td>
                <td><?= $book['pages'] ?> </td>
                <td><?= $book['isbn'] ?></td>
                
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>

</html>