<!DOCTYPE html>
<html>
<head>
<style>
p{
	text-align:center;
}

img{
	display:inline-block;
	height:150px;
	width:100px;
}
</style>
</head>

<body bgcolor="5A9A30">
<title> Your Hand </title>
<h1 align = "center"> The deck has been shuffled. Here is your hand </h1>
<h2 align = "center"> The page can be refreshed to get a new hand </h2>
<p>

<?php 
  //The json file is placed into an array and then shuffled
  $file_string = file_get_contents("./cards.json");
  $deck = json_decode($file_string, true);
  shuffle($deck);
  $counter = 0;

  //Loops through the deck and picks the first five cards
  foreach ($deck as $card_name => $card) 
  {
	if($counter < 5)
	{
      //php tag is ended, so an html image tag can be used to display each card.
	  ?>
	   <img src ="<?= $card['image'] ?>">
	  <?php
	}
	else
	{
	  break;
	}
	$counter++;
  }	
?>

</p>
</body>
</html>