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
<!--echo to display simple variables-->
<h2><?php echo $title; ?></h2>
<p class="author">by <?php print $author; ?></p>
<!--answer: 42 added space . ' ' .-->
<p><?= $description . ' ' . $answer; ?></p>
<p>Price: </p>
</body>
</html>