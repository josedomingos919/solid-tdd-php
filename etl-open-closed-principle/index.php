<?php
require __DIR__ . '/vendor/autoload.php';

use src\Leitor;

$leitorTXT = new Leitor();
$leitorTXT->setDiretorio(__DIR__ . '/arquivos');
$leitorTXT->setArquivo('dados.txt');
$array_txt = $leitorTXT->lerArquivo();

//---------------------------------- 
$leitorCSV = new Leitor();
$leitorCSV->setDiretorio(__DIR__ . '/arquivos');
$leitorCSV->setArquivo('dados.csv');
$array_csv  = $leitorTXT->lerArquivo();


//---------------------------------- 
$leitorXls = new Leitor();
$leitorXls->setDiretorio(__DIR__ . '/arquivos');
$leitorXls->setArquivo('dados.xlsx');
$array_xls  = $leitorTXT->lerArquivo();

echo '<br /><h4>TXT e CSV</h4><br />';
echo "<pre>";
print_r(array_merge($array_txt, $array_csv, $array_xls));
echo "</pre>";
