<!DOCTYPE html>
<html>
<body>

<?php

/* EDIT VARIABLES DOWN HERE */

$DOMPATH = 'PATH'; # DOM PATH
$link = 'www.google.com'; # site link
$id = 't01'; # table ID
$CSVName = './files/file.csv'; # PATH and name

/* !!! DON'T CHANGE ANYTHING DOWN HERE !!! */

mkdir ("../files"); # dir where csv files will be stored

function HTMLTableToCSV ($CSVName, $link, $id) { 

$html = file_get_html($link); 
$table = $html->find('table', $id); # find the table through table ID

$csv = fopen($CSVName, "w+"); 

foreach($html->find('tr') as $element) # find elements
{
       $th = array();
       foreach( $element->find('th') as $row) # find titles
       {
           $th [] = $row->plaintext;
       }
       fputcsv($csv, $th); 

       $td = array();
       foreach( $element->find('td') as $row) # find rows
       {
           $td [] = $row->plaintext;
       }
       fputcsv($csv, $td); 
    
}

fclose($csv);

if ($CSVName = true) {
    return true;
} else {
    return false;
}

}                                                                         

?>


</body>
</html>
