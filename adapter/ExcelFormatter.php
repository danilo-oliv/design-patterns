<?php

require_once("IExcelFormatter.php") ;

/**
 * Adapted
 */
class ExcelFormatter implements IExcelFormatter {
    public function formatColumns(){
        echo 'Col A, Col B, Col C, ...';
    }
    public function formatRows(){
        echo 'Formatando linhas...';
    }
    public function formatStyle(){
        echo 'Adiciona logo do cliente';
    }

    public function execute(){
        // Extrair do PDF a planilha
        $this->formatColumns();
        $this->formatRows();
        $this->formatStyle();
    }
}   