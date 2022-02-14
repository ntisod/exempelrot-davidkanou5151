<?php
$t = date("H");

if ($t < "8") {
  echo "God Morgon!";
} elseif ($t < "12") {
  echo "God dunderbar förmiddag!";
} elseif ($t < "16"){
  echo "God dag!";
} elseif ($t < "19") {
  echo "God eftermiddag!";
} elseif ($t < "21"){
  echo "God jättefin kväll!";
} elseif ($t < "23") {
  echo "God dunder fin natt!";
}
?>