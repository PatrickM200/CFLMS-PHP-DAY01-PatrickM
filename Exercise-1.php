<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise-1</title>
    <style>
    h1 {
        position: absolute;
        top: 50%;
        width: 100%;
        text-align: center;
    }
    </style>
</head>
<body>
    <?php
    $name = "<h1>PatrickM</h1>";
    echo $name; 
    
    $date = date("D");
    if ($date=="Mon")
    echo "Happy Monday!";
    else
    echo "Have a nice day!";


    
    
    ?>
    <?php
    $date = date("D");
    if ($date=="Mon")
    echo "Today is Monday!";
    elseif ($date=="Tue")
    echo "Today Tuesday!";
    elseif ($date=="Wed")
    echo "Today Wednesday!";
    elseif ($date=="Thu")
    echo "Today Thursday!";
    elseif ($date=="Fri")
    echo "Today Frieday!";
    elseif ($date=="Sat")
    echo "Today Saturday!";
    elseif ($date=="Sun")
    echo "Today Sunday!";
?>

    <?php

$name = "PatrickM";
$i = 0;

while($i <=50) {
echo ("<br>$name");
$i++;
}
?>
    <?php

$name = "PatrickM";

for($i=0; $i<50; $i++) {
echo ("<br>$name");
}
?>
    <?php

$name = "PatrickM";
$i = 0;
do
{
    echo ("<br>$name");
    $i++;
}
while($i<50);
?>
    <?php
$array = array (1,2,3,4,5,6,7,8,9,10);

foreach ($array as $num)
{
    echo "The number is $num <br>";
}
?>
    <?php
$array = array (1,2,3,4,5,6,7,8,9,10);

foreach ($array as $num)
{
    echo "The number is $num <br>";
}
?>
<?php
$marks = array(
"mark" => array
(
"power" => 35,
"maths" => 30,
"chemistry"  => 39
),
"anthony" =>  array
(
"physics" => 30,
"maths" => 32,
"chemistry"  => 29
),
"eric" =>  array
(
"physics" => 31 ,
"maths" => 22,
"chemistry" => 39
)
);
foreach ( $marks as $mark ) {

    echo '<dl style="margin-bottom: 1em;">';
  
    foreach ( $mark as $key => $value ) {
      echo "<dt>$key</dt><dd>$value</dd>";
    }
  
    echo '</dl>';
  }
?>
    
</body>
</html>