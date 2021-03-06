<?php

// Autoload do projeto.
require 'vendor/autoload.php';

// Classe responsável pela manipulação da planilha.
use PhpOffice\PhpSpreadsheet\Spreadsheet;

// Classe que salvará a planilha em ".xlsx".
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

// Instanciando uma nova planilha.
$spreadsheet = new Spreadsheet();

// Retornando a aba ativa.
$sheet = $spreadsheet->getActiveSheet();

// Definindo a célula A1.
$sheet->setCellValue('A1', 'Nome');

// Definindo a célula B1.
$sheet->setCellValue('B1', 'Nota 1');

$sheet->setCellValue('C1', 'Nota 2');

$sheet->setCellValue('D1', 'Media');

$sheet->setCellValue('A2', 'pokemaobr');

$sheet->setCellValue('B2', 5);

$sheet->setCellValue('C2', 3.5);

// Definindo a fórmula para o cálculo da média.
$sheet->setCellValue('D2', '=((B2+C2)/2)');

$sheet->setCellValue('A3', 'bob');

$sheet->setCellValue('B3', 7);

$sheet->setCellValue('C3', 8);

$sheet->setCellValue('D3', '=((B3+C3)/2)');

$sheet->setCellValue('A4', 'boina');

$sheet->setCellValue('B4', 9);

$sheet->setCellValue('C4', 9);

$sheet->setCellValue('D4', '=((B4+C4)/2)');

// Instanciando uma nova planilha.
$writer = new Xlsx($spreadsheet);

// Salvando a planilha na extensão definida.
$writer->save('spreadsheet1.xlsx');
