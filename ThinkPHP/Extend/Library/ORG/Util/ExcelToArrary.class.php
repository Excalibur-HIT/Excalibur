<?php
class ExcelToArrary {
  public function __construct() {
		vendor('PHPExcel');
		Vendor("PHPExcel.IOFactory"); 	
		
  }
  public function read($filename,$encode,$file_type){
	        if(strtolower ( $file_type )=='xls')//�ж�excel������Ϊ2003����2007
			{
				vendor('PHPExcel.Reader.Excel5'); 
				$objReader = PHPExcel_IOFactory::createReader('Excel5');
			}elseif(strtolower ( $file_type )=='xlsx')
			{
				vendor('PHPExcel.Reader.Excel2007');
				$objReader = PHPExcel_IOFactory::createReader('Excel2007');
			}
			$objReader->setReadDataOnly(true);
			$objPHPExcel = $objReader->load($filename);
			$objWorksheet = $objPHPExcel->getActiveSheet();
			$highestRow = $objWorksheet->getHighestRow();
			$highestColumn = $objWorksheet->getHighestColumn();
			$highestColumnIndex = PHPExcel_Cell::columnIndexFromString($highestColumn);
			$excelData = array();
			for ($row = 1; $row <= $highestRow; $row++) {
				for ($col = 0; $col < $highestColumnIndex; $col++) {
					$excelData[$row][] =(string)$objWorksheet->getCellByColumnAndRow($col, $row)->getValue();
					}
			}
			return $excelData;
			
	  }
	  
/*	  function unicode_decode($name)
{
        $name = strtolower($name);  
        // ת�����룬��Unicode����ת���ɿ��������utf-8����  
        $pattern = '/([\w]+)|(\\\u([\w]{4}))/i';  
        preg_match_all($pattern, $name, $matches);  
        if (!empty($matches))  
        {  
            $name = '';  
            for ($j = 0; $j < count($matches[0]); $j++)  
            {  
                $str = $matches[0][$j];  
                if (strpos($str, '\\u') === 0)  
                {  
                    $code = base_convert(substr($str, 2, 2), 16, 10);  
                    $code2 = base_convert(substr($str, 4), 16, 10);  
                    $c = chr($code).chr($code2);  
                    $c = iconv('UCS-2', 'UTF-8', $c);  
                    $name .= $c;  
                }  
                else  
                {  
                    $name .= $str;  
                }  
            }  
        }  
        return $name;
}  */

	}
?>