<?php

require_once("IPDFFormatter.php");

/**
 * Adapter
 */
class PDFFormatter implements IPDFFormatter{

    private $excelFormatter;

    public function __construct(ExcelFormatter $excelFormatter){
        $this->excelFormatter = $excelFormatter;
    }

    public function extractSheetFromPDF(){
        echo 'Extraindo planilha do PDF...';
    }

    public function executePDF(){
        $this->extractSheetFromPDF();
        $this->excelFormatter->execute();
    }


}