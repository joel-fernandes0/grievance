
<?php
// Array with names
$a[] = "Anna";
$a[] = "Bakugou";
$a[] = "Cinderella";
$a[] = "Diana";
$a[] = "Edward";
$a[] = "Mei";
$a[] = "Fiona";
$a[] = "Garima";
$a[] = "Hanabi";
$a[] = "Ichigo";
$a[] = "Joel";
$a[] = "Kiana";
$a[] = "Linda";
$a[] = "Nilesh";
$a[] = "Okabe";
$a[] = "Prajakta";
$a[] = "Aryabhatta";
$a[] = "Rem";
$a[] = "Cecilia";
$a[] = "Sarika";
$a[] = "Eve";
$a[] = "Emilia";
$a[] = "Saurabh";
$a[] = "Thorfinn";
$a[] = "Unik";
$a[] = "Violet";
$a[] = "Liza";
$a[] = "Elizabeth";
$a[] = "Sonali";
$a[] = "Wukong";
$a[] = "Vicky";

// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from ""
if ($q !== "") {
  $q = strtolower($q);
  $len=strlen($q);
  foreach($a as $name) {
    if (stristr($q, substr($name, 0, $len))) {
      if ($hint === "") {
        $hint = $name;
      } else {
        $hint .= ", $name";
      }
    }
  }
}

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;
?> 