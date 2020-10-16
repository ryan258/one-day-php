<?php
// 1. Make the class (movie.php)
// 2. Create aka "instantiate" an object aka "instance" from the class ($var = new Movie(...args))

include 'Movie.php';
$mov1 = new Movie('N0001', 'Lusso', 4.99);
// makes
// $mov1->id = 'N0001';
// out of the class' $this->id = $pId;
$mov2 = new Movie('P0002', 'Junior', 5.99);

// access the object/instance property values with $obj->prop
// echo $mov1->id.'<br>'; a private property will throw an error
echo $mov1->title.'<br>';
echo $mov1->conversion('Japan').'<br>';

// access the DISCOUNT class constant from the Movie class. with (::)
echo Movie::DISCOUNT.'<br>';
echo $mov1::DISCOUNT.'<br>';
echo $mov2::DISCOUNT.'<br>';

echo $mov1->displayHeading('H1');

//// Rocking with __get & __set
// making $rentalPrice private makes it inaccessible here.
$mov1->rentalPrice = -20;
echo $mov1->rentalPrice.'<br>';

$mov1->id = 'A12387';
echo $mov1->id;

$mov1->rentalPrice = 5.99;
echo $mov1->rentalPrice;

// we'll print the __toString function
echo '<br>';
echo $mov1;