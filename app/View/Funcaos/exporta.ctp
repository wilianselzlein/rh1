<?php
  /**
   * Export all member records in .xls format
   * with the help of the xlsHelper
   */
 
  //declare the xls helper
  $xls= new xlsHelper(new View(null));
 
  //input the export file name
  $xls->setHeader('Relatorio_'.date('Y_m_d'));
 
  $xls->addXmlHeader();
  $xls->setWorkSheetName('Relatorio');
   
  //1st row for columns name
  $xls->openRow();
  $xls->writeString('Código');
  $xls->writeString('Nome');
  $xls->closeRow();
   
  //rows for data
  foreach ($models as $model):
    $xls->openRow();
    $xls->writeNumber($model['Funcao']['codigo']);
    $xls->writeString($model['Funcao']['nome']);
    $xls->closeRow();
  endforeach;
  
  $xls->addXmlFooter();
  exit();
?>