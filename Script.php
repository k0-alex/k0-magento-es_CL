# Powered by Eduardo Cabrera ak Lalo!

<?php
$f=file("Temp_24x.csv");
 
array_map('unlink', glob("*.txt"));
 
$buffer = '';
foreach($f as $l){
    $buffer .= $l;
 
    if(preg_match("/,(\w[\w\_]*)$/", trim($l), $m)){
        file_put_contents(sprintf("%s.txt", $m[1]), $buffer, FILE_APPEND | LOCK_EX);
        $buffer = '';
    }
}
