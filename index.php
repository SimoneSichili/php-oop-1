<?php 
    include __DIR__ . "/book.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Book</title>
</head>
<body>
    <div class="books">
        <div class="book">
            <h2><?php echo $book1->title; ?></h2>
            <h3><?php echo $book1->author; ?></h3>
            <h4><?php echo $book1->publisher; ?> - <?php echo $book1->year; ?></h4>
            <p><?php echo $book1->getShortDescription(150); ?></p>
        </div>
        <div class="book">
            <h2><?php echo $book2->title; ?></h2>
            <h3><?php echo $book2->author; ?></h3>
            <h4><?php echo $book2->publisher; ?> - <?php echo $book2->year; ?></h4>
            <p><?php echo $book2->getShortDescription(150); ?></p>
        </div>
        <div class="book">
            <h2><?php echo $book3->title; ?></h2>
            <h3><?php echo $book3->author; ?></h3>
            <h4><?php echo $book3->publisher; ?> - <?php echo $book3->year; ?></h4>
            <p><?php echo $book3->getShortDescription(150); ?></p>
        </div>
        <div class="book">
            <h2><?php echo $book4->title; ?></h2>
            <h3><?php echo $book4->author; ?></h3>
            <h4><?php echo $book4->publisher; ?> - <?php echo $book4->year; ?></h4>
            <p><?php echo $book4->getShortDescription(150); ?></p>
        </div>
        <div class="book">
            <h2><?php echo $book5->title; ?></h2>
            <h3><?php echo $book5->author; ?></h3>
            <h4><?php echo $book5->publisher; ?> - <?php echo $book5->year; ?></h4>
            <p><?php echo $book5->getShortDescription(150); ?></p>
        </div>
        <div class="book">
            <h2><?php echo $book6->title; ?></h2>
            <h3><?php echo $book6->author; ?></h3>
            <h4><?php echo $book6->publisher; ?> - <?php echo $book6->year; ?></h4>
            <p><?php echo $book6->getShortDescription(150); ?></p>
        </div>
        
    </div>
</body>
</html>