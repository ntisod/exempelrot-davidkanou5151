<?php
$poeng = array("Magd"=>"159", "Millad"=>"120", "Deved"=>"137");
arsort($poeng);

foreach($poeng as $x => $x_value) {
  echo "Key = " . $x . ", Value = " . $x_value;
  echo "<br>";

}
?>
