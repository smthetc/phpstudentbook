<?php 
$egg = fopen("e.xlsx", "r");
for($o=0; $em=fgetcsv($egg,1000,";"); $O++){
    $num = count($em);
    echo "<h3>Строка $o (полей: $num):</h3>";
    for ($q=0; $q<$num; $q++)
        print "[$q]: $em[$q]</br>";
}
fclose($egg);

?>