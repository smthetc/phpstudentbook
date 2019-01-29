<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php 
function br(){
    for ($ll=1; $ll < 3; $ll++) { 

        echo "</br>";
    }
}
    
echo "</br>";

$a = array(10, 20, 30);
echo $a;
echo "<br/>";

$str = "caca";
if (strpos($str,"caca") !== false)
echo "это PHP-программа";
echo "<br/>";

for ($i=0,$x=0; $x<16; $x++) {
    for ($y=0; $y<16; $y++) {
        $chars[$x][$y] = array($i, chr($i));
        $i++;
    }
}
echo "<br/>";

$st = " test est iblock   ";
echo trim($st);
echo "<br/>";

$gatz = "press button to push other button in the mech";
$eva = 8;
$what = "daddy long legs";
$what2 = "DADDY long legs, daddy long legs, daddy long legs, Daddy long Legs, Yagrewopkculegskculegf";
$s = "leg";
$text = "sunday monday happy days";
$from = "sunday";
$to = "suicideday";
$code = "site of russian government.com";
$superspecialprojectofgovernmentusa = "<body> </body>";
$superspecialprojectofgovernmentusa1 = "<input><input><input><input><input><input><input><input><input>";
$stroka = "what' the '****";
$slash2="fasfdasdf\a";
$bigboy = "AAAAAAAAAAAA";
$lowboy = "aaaaaaaaaaaa";
$bigletter = "abbbbbb";
$kod = "хаха не раскодируешь";
$zakod = "w";
$perekod = "k";
$locale = "ru_RU.CP1251";
$category = "LC_ALL";
$neformal = "changes";
$name = "Alyosha";
$age = "много";
echo strlen($what);
br();
echo strpos($what, $s);
br();
echo strrpos($what2, $s);
br();
echo strcmp($what, $what2);
br();
echo strcasecmp($what, $what2);
br();
echo substr($gatz, $eva);
br();
echo str_replace($from, $to, $text);
br();
echo urlencode($code);
br();
echo rawurldecode($code);
br();
echo htmlspecialchars($superspecialprojectofgovernmentusa);
br();
echo htmlspecialchars_decode($superspecialprojectofgovernmentusa1);
br();
echo addslashes($stroka);
br();
echo stripslashes($slash2);
br();
echo strtolower($bigboy);
br();
echo strtoupper($lowboy);
br();
echo ucfirst($bigletter);
br();
echo setlocale($category, $locale);
br();
echo convert_cyr_string($kod, $zakod, $perekod);
br();
echo sprintf("War never %s%%", $neformal);
br();
printf("Вам достаточно %s лет, ваше имя %s,", 12, Kolya);
br();
echo sprintf("%01d-%02d-%03d", 12, 11, 19);
br();

$bat =  array('a' => 1,
 'b' => 3,
  'c' => 1213,
   'o' => 6,
    'n' => 0,
     'h' => 13);
echo $bat['c'];
asort($bat);
print_r($bat);
br();
arsort($bat);
print_r($bat);
br();
ksort($bat);
print_r($bat);
br();
krsort($bat);
print_r($bat);
br();
function cmp($a,$b){
    $a = preg_replace('@^(a|an|the) @', '', $a);
    $b = preg_replace('@^(a|an|the) @', '', $b);
    return strcasecmp($a, $b);
}
$a = array('an Elephant Smith' => 3, 'a castle' => 2, 'the end' => 1, 'Bad boy' => 31);

uksort($a, "cmp");
foreach ($a as $key => $value) {
    echo "$key: $value\n";
}
br();
br();
br();
$not = array('a' => "reg", 'b' => "politic", 'd' => 'down', 'g' => "answer", 'u' => "question", 'c' => "kiki");
asort($not);
$not = array_reverse($not);
print_r($not);
br();
br();

$sh = array("a156.jpg", "a123.jpg", "a1.jpg", "a2.jpg");
natsort($sh);
print_r($sh);
br();
br();
array_keys($bat);
print_r($bat);
br();
$ne = array("apple", "orange", "egg", "melon");
list($fruit, $fruit2, $product, $berry) = $ne;

echo "$fruit - red, $fruit2 - orange, $product - from chicken, $berry - from farm.";
br();
sort($ne);
print_r($ne);
br();
rsort($ne);
print_r($ne);
br();

echo M_PI+12;
br();
echo round(M_PI);
br();
echo ceil(M_PI);
br();
echo floor(M_PI);
br();
echo mt_rand(-2065039360,2065039360);
br();
echo base_convert("1021010101", 2, 16);
br();
$en = array("7.1","12","15","123","142","1115","4123","120","8");
echo min($en);
br();
$en = array("7.1","12","15","123","142","1115","4123","120","8");
echo max($en);
br();
function bam($a0, $a1){
    $ee = pow($a0,$a1);
    $ar = is_infinite($ee);
    if($ar !== true){
        echo "work"."-->".$ee;
    }
    else{
        echo "don't work"."-->".$ee;
    }
}
bam(2,12);
br();
function cam($b1){
    $ee = sqrt($b1);
    $ar = is_nan($ee);
    if($ar !== true){
        echo "work"."-->".$ee;
    }
    else{
        echo "don't work"."-->".$ee;
    }
}
cam(121);
br();
echo exp(2);
br();
br();
$f = fopen("1.txt", "r+t");
$f2 = fopen("2.txt", "r+t");
fwrite($f, "wakaqkaka");
fwrite($f2, "makakakak");
echo fread($f, 100).br().fread($f2, 100);

br();


function e(){
    for ($z=1; $z < 6; $z++) { 

        echo "<p><input>$z</p>";
    }
}
e();
echo "<hr>";


echo file_get_contents("m.txt");
br();
$ais = fopen($fname="s.txt", "rt");
$lines = explode("\n", fread($f, filesize($fname)));
echo "=============================================";
print_r($lines);
echo $lines;
br();
echo basename("/domains/text/s.txt");
br();
echo dirname("/domains/text/s.txt");
br();
echo realpath("s.txt");
br();
copy("s.txt", "wat.txt");
br();

br();
function hell(){
    fopen("gotit.txt", "w");
    echo "unlink: true";
    unlink("gotit.txt") or die("epor");
}

function help(){
    fopen("gotit2.txt", "w");
    echo "rename: true";
    rename("gotit2.txt", "wat2.txt");
    unlink("wat2.txt") or die("epor");
}
hell();
br();
help();
tempnam("/text", "4815162342");

br();





















?>

<form action="function.php" method="post" name="form1" target="_blank">

</body>
</html>