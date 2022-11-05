<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo Production Page</title>
    <!-- (A) JS & CSS -->
    <link href="4-style.css" rel="stylesheet">
    <script src="5-script.js"></script>
</head>
<body>
    <!-- (B) BOOKS LIST -->
    <h1>OUR BOOKS</h1>
    <div id="our-books"><?php
        require "2-products.php";
        foreach ($products as $p) { ?>
            <div class="book-wrap" data-id="<?=$p["product_id"]?>">
            <div class="book-title"><?=$p["product_name"]?></div>
            <div class="book-desc"><?=$p["product_description"]?></div>
        </div>
        <?php}
    ?></div>
</body>
</html>
