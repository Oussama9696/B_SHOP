<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books Library</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="./css/bootstrap.css">

</head>
<body id="body">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">BOOKS LIBRARY</a>
        <div class="collapse navbar-collapse" id="navbar">
            <div class="navbar-nav">
            <a class="nav-item nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="books.php">Books</a>
            <a class="nav-item nav-link" href="contact.php">Contact us</a>
            </div>
        </div>
    </nav>
    
    <div class="container" id="cent">
        <h1>FIND YOUR BEST FRIEND!!</h1>
        <form action="search.php" method="POST">
            <input type="text" id="searchInput" name="searchQ">
            <button id="searchBtn" name="search">SEARCH</button>
        </form>
    </div>
</body>
</html>