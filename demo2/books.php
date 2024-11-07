<?php
require "./classes/Book.php";
require "./classes/EBook.php";
require "./classes/Library.php";
require "./data.php";

$library = new Library();

foreach($booksData as $newBook){
    $library->addBook(new Book($newBook["Title"],$newBook["Author"],$newBook["Available"],$newBook["Description"],$newBook["Image"]));
}

$allBooks = $library->viewAllBooks();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="b">


    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Library Management System</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="./index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./books.php">Books</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./members">Members</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>



    <!-- Books Page Section -->

    <div class="container my-5">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Title</th>
                    <th scope="col">Author</th>
                    <th scope="col">Type</th>
                    <th scope="col">IsAvailable</th>
                    <th scope="col">Detail</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($allBooks as $index=>$book): ?>
                <tr>
                    <th scope="row"><?= $index+1 ?></th>
                    <td><?= $book->title?></td>
                    <td><?= $book->author ?></td>
                    <td>
                        <?php if($book instanceof Ebook){
                            echo "Ebook";
                        } else echo "Paperback";?>
                    </td>
                    <td>
                        <?php if($book->available){
                            echo "<span class='bg-success py-1 px-3 rounded-4 text-white'>True</span>";
                        } else echo "<span class='bg-danger py-1 px-3 rounded-4 text-white'>False</span>";?>
                    </td>
                    <td>
                        <a class="link-offset-2 link-underline link-underline-opacity-0" href="book_detail.php?id=<?= $index ?>">Details</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>