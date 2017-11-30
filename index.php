<?php declare (strict_types=1); ?>
<?php require __DIR__.'/data.php'; ?>
<?php require __DIR__.'/function.php'; ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>News Feed</title>
      <link rel="stylesheet" type="text/css" href="newsfeed.css">
   </head>
   <body>
      <?php
         foreach ($newsFeeds as $newsFeed) {
           $title = $newsFeed['title'];
           $author = $newsFeed['author']['name'];
           $date = $newsFeed['date'];
           $paragraph = $newsFeed['paragraph'];
           $likes = $newsFeed['likes'];
         ?>
      <h1><?php echo $title; ?></h1>
      <h3><?php echo $author; ?></h3>
      <h4><?php echo $date; ?></h4>
      <p><?php echo $paragraph; ?></p>
      <p><?php echo $likes; ?></p>
      <?php
         }
         ?>
