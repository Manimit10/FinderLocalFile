<?php
class MapGenerator
{
    #Function for recovering CSV
    public function rangeCSV($country)
    {

        $array=["","","",""];
        $lineNumber = 1000;
        $columDivider = ";"; 
        $carracterDivider = '"';
        $fileName = "countries.csv"; 
        $opener = fopen($fileName, "r");

        if (!$opener) {
             exit("Cannot open the file $fileName");
        }

        $fileNumber = 1;
        while (($file = fgetcsv($opener, $lineNumber, $columDivider, $carracterDivider)) !== false) {
        foreach ($file as $columNumber => $column) {
            if ($column == $country) {
            $array=[$file[0],$file[1],$file[2],$file[3]];
            }
        }
        $fileNumber++;
        }

        fclose($opener);
        return $array;
      
    }  
}
?>