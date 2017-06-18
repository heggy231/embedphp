<?php
$answer = 42;
$price = 10.99;
// recommended practice for quote use single quote
$title = "The Hitchhiker's Guide to the Galaxy";
$author = 'Douglas Adams';
$description = 'A hilarious romp. You will love the book, but maybe not the answer:';
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Storing values in variables</title>
<link href="../../styles/exercises.css" rel="stylesheet" type="text/css">
</head>

<body>
<h1>Editor's Choice</h1>
<p>This week's recommended reading:</p>
<h2><?php $title ?></h2>
<p class="author">by A.N. Other</p>
<p>Book description</p>
<p>Price: </p>
</body>
</html>