
<?php

$lineNumber = 1000;
$columnDivider = ";"; # Divide Column
$carracterDivider = '"'; // Creating qoutation
$fileName = "countries.csv"; #Address of File
# Read the CSV File
$opener = fopen($fileName, "r");
if (!$opener) {
    exit("Cannot Open the $fileName");
}
#  Reading the file
$fileNumber = 1;
while (($file = fgetcsv($opener, $lineNumber, $columnDivider, $carracterDivider)) !== false) {
    if ($fileNumber === 1) {
        echo "These are: ";
    }
    
    foreach ($file as $columNumber => $column) {
        echo "In the Column of $columNumber there is a $column\n"; 
    }
    
    echo "\n\n";
    $fileNumber++;
}

fclose($opener);

?>