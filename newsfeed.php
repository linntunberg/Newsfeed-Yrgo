<?php
declare(strict_types=1);

$newsFeeds = [

  ['title' => 'Doggie Dog','author' =>['id'=> 001, 'name' => 'Dogger McDogson'],'date'=>'30 October 2017', 'paragraph'=> "Pats doggorino shoober heckin good boys and girls, blep. Heckin angery woofer much ruin diet big ol pupper the neighborhood pupper many pats pupperino, length boy yapper stop it fren.  Yapper stop it fren pats boof puggo you are doing me the shock shoober adorable doggo, borkf blop stop it fren puggorino the neighborhood pupper aqua doggo. <br><br> Borkf most angery pupper I have ever seen heckin good boys super chub vvv big ol, doing me a frighten pupper super chub. Mlem pupper blep the neighborhood pupper, heckin good boys and girls puggorino.", 'likes' => 'Likes: 21'],
  ['title' => 'Border Collies','author' =>['id'=> 002, 'name' => 'Pug Pugson'],'date'=>'29 October 2017', 'paragraph'=> "Much ruin diet clouds shoober heckin angery woofer super chub h*ck woofer long woofer, maximum borkdrive woofer doge long doggo vvv.<br><br>Most angery pupper I have ever seen long woofer boof shoob shoober doing me a frighten, ur givin me a spook pupperino heckin good boys. Such treat wow such tempt sub woofer tungg corgo, maximum borkdrive noodle horse pupperino", 'likes' => 'Likes: 33'],
  ['title' => 'Dogs','author' =>['id'=> 003, 'name' => 'Dogson Doggie'],'date'=>'28 October 2017', 'paragraph'=> "Ruff h*ck you are doing me a frighten many pats wow very biscit most angery pupper I have ever seen, wow such tempt heckin good boys smol borking doggo with a long snoot for pats.<br><br>Mlem heck much ruin diet long doggo snoot puggorino, big ol pupper waggy wags big ol pupper.", 'likes' => 'Likes: 43'],
  ['title' => 'Huskies','author' =>['id'=> 004, 'name' => 'Husky Huskerson'],'date'=>'27 October 2017', 'paragraph'=> "Super chub doggo super chub thicc, lotsa pats heckin angery woofer. Smol borking doggo with a long snoot for pats h*ck porgo noodle horse shoob, long water shoob doggo such treat.<br><br>Heckin good boys lotsa pats borking doggo doing me a frighten big ol doing me a frighten you are doing me the shock I am bekom fat, heckin good boys aqua doggo smol long doggo boof. Aqua doggo shoober woofer such treat, adorable doggo.", 'likes' => 'Likes: 25'],
  ['title' => 'Pugs','author' =>['id'=> 005, 'name' => 'Doggie Johnson'],'date'=>'26 October 2017', 'paragraph'=> "Extremely cuuuuuute puggo waggy wags he made many woofs porgo clouds, lotsa pats floofs extremely cuuuuuute shoob. He made many woofs long water shoob wow very biscit vvv sub woofer super chub, doing me a frighten very hand that feed shibe sub woofer fat boi long woofer, ur givin me a spook very hand that feed shibe heckin angery woofer puggorino.<br><br>Doggo ipsum such treat borking doggo shibe yapper smol doing me a frighten, boofers most angery pupper I have ever seen he made many woofs you are doing me the shock.", 'likes' => 'Likes: 36'],
];
?>
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

   <div class="w3-container">


<?php
  foreach ($newsFeeds as $newsFeed) {
    $title = $newsFeed['title'];
    $author = $newsFeed['author']['name'];
    $date = $newsFeed['date'];
    $paragraph = $newsFeed['paragraph'];
    $likes = $newsFeed['likes'];
    echo
    (" <h1>$title</h1>
       <h3>$author</h3>
       <h4>$date</h4>
       <p>$paragraph</p>
       <p>$likes</p>
       <hr> ");


  }
?>;

  </body>
  </html>
