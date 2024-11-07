<?php 
require "./classes/Book.php";
require "./classes/EBook.php";
require "./classes/Library.php";
require "./data.php";

$passedId =  $_GET['id'];

$book = new Book($booksData[$passedId]["Title"],$booksData[$passedId]["Author"],$booksData[$passedId]["Available"],$booksData[$passedId]["Description"],$booksData[$passedId]["Image"]);

$detail = $book->getDetails();

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



    <!-- Books Detail Section -->

    <div class="container my-5">
        <div class="card border border-0 rounded-3 shadow-lg bg-light">
            <div class="card-body">
                <div class="container">
                    <div class="row">

                        <div class="col-md-3">
                            <img src="<?= $detail["image"]?>"
                                alt="" class="img-fluid">
                        </div>
                        <div class="col-md-9">
                            <h4 class="card-title fw-bold"><?= $detail["title"]?></h4>
                            <h5 class="text-primary fw-semibold"><?= $detail["author"]?></h5>
                            <hr class="border-5 border-dark rounded-pill my-3">
                            <p class="card-text">Is Available: <?= $detail["available"] ? "<span class='bg-success py-1 px-3 rounded-4 text-white'>True</span>" : "<span class='bg-danger py-1 px-3 rounded-4 text-white'>False</span>"?></p>
                            <h6 class="fw-semibold">Description</h6>
                            <p class="card-text"><?= $detail["description"]?></p>
                            <div class="d-grid gap2">
                                <a href="#" class="btn btn-primary rounded-3">Save</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>