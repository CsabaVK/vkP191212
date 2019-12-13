<?php
$filmek = array(
array(
'cim' => 'Passió',
'rendezo' => 'Mel Gibson',
'ev' => '2004',
'szereplok'=> array(
'Jim Caviezel',
'Maia Morgenstern',
'Christo Jivkov',
),
),
array(
'cim' => 'Pio atya - A csodák embere',
'rendezo' => 'Carlo Carlei',
'ev' => '2000',
'szereplok'=> array(
'Sergio Castellitto',
'Sergio Albelli',
),
),
);

$file = "filmek.txt";
$mode = "a+";
?>
<?php
$f = fopen($file, $mode);

if ($f) {
    echo "file opened";
    fputs($f, "Hello fájl!");1
   fclose($f);
}
?>
