<?php
//array of names
$a[]= "martina2001@gmail.com";
$a[]= "jana2003@gmail.com";
$a[]= "marwan2002@gmail.com";

//get the q parameter from URL
$q= $_REQUEST["q"];
$hint="";

if($q !== "") {
    $q= strtolower($q);
    $len=strlen($q);
    foreach($a as $Email) {
        if(stristr($q, substr($Email, 0,  $len))) {
            if($hint === "")  //identical: checks type and value
            {
                $hint= $Email;
            }
            else {
                $hint.=",$Email";
            }
        }

    }

}
 //if no hint is found
 echo $hint === "" ? "no suggestion" : $hint;

?>