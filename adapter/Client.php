<?php

require_once("ExcelFormatter.php");
require_once("PDFFormatter.php");

//Lógica de seleção entre Excel e PDF

//Adapted
$excelFormatter = new ExcelFormatter();
//Adapter
$pdfFormatter = new PDFFormatter($excelFormatter);

//$excelFormatter->execute();
$pdfFormatter->executePDF();

