<?php
/**
 * Created by Aleandro.
 * User: N5
 * Date: 25/02/14
 * Time: 14.10
 */
$crumbs = explode("/",$_SERVER["REQUEST_URI"]); ?>
<ol class="breadcrumb hidden-xs">
<?php foreach($crumbs as $crumb){
    if($crumb!=""){

        $pos=strpos($crumb,"?");
        $stringa=substr($crumb,$pos);
        $final_page=str_replace($stringa,"",$crumb);

        if(basename($_SERVER["PHP_SELF"])==$final_page || basename($_SERVER["PHP_SELF"])==$crumb){
            echo"<li class='active'>".ucfirst(str_replace(array(".php","_",$stringa),array(""," ",""),$crumb))."</li>";
        }
        else {
            echo"<li>".ucfirst(str_replace(array(".php","_"),array(""," "),$crumb) . ' ')." </li>";
        }
    }
 } ?>
</ol>