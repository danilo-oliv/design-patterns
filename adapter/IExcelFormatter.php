<?php

interface IExcelFormatter {
    public function formatColumns();
    public function formatRows();
    public function formatStyle();
}