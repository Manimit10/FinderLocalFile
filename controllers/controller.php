<?php
class controller 
{
    #this function is representer of showing template
    public function templateShow()
    {
        include "view/template.php";
    }
    #Map illustrater function
    public function Map ()
    {
        if($_GET)
	    {
            $country = $_GET["myCountry"];
            $arrenger = mapWriter::recorreCsv($country);
            return $arrenger;
        }
    }
}
?>