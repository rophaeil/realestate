<?php

$xml = simplexml_load_file('dataset.xml');


foreach($xml as $value){
    echo $value->Name . "<br>";
    echo $value->CommandLine . "\t ";
    echo $value->Input . "\t ";
    echo $value->Output . "\t ";
    
}