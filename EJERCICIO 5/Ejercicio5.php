<!DOCTYPE html>
<body background = "https://www.eluniverso.com/resizer/dqjXvCarpBAgzYxQDjEsgDwnpqQ=/1000x670/smart/filters:quality(70)/cloudfront-us-east-1.images.arcpublishing.com/eluniverso/PWCSSP4OY5ENTELHYDZFJV4MOE.jpg">
<html>
    <head>
    <meta charset= "UTF-8"/>
    <title>FLOR</title>
    <link rel = "stylesheet" type = "text/css" href = "style.css"/>
</head>
<body>
    <center>
        <fieldset style = "background-color:PINK; width:350px; margin-top: 50px; top:10px; left:200px; position:absolute; Border-
        radius:10px; box-shadow:0 0 100px 30px yellow">
        <TABLE BORDER=5>
<TR><TD>
<MARQUEE DIRECTION=RIGHT><font color = "purple"><b>*_* PALABRAS REPETIDAS  </b></font></MARQUEE>
    </TD></TR>
</TABLE><br>
</font>
<fieldset>
<legend>/////</legend>
    <form method = "post" action = ""><br>
    <b><font color = "PURPLE">INGRESE TEXTO :</b></font>
    <input style ="background-color:White;Border-radius:500px 600px" type = "text" name = "numero1"
    placeholder = "Introduce el texto " size = "100" calss = "form-input" required/><br><br>

    <p>
    <h>
    <input style = "Border-radius:30px 30px; background-color:pink"
                            type = "submit" value = "NUEVO" name = "btnnuevo"> &nbsp &nbsp &nbsp &nbsp
                            &nbsp &nbsp
        
    <input style = "Border-radius: 30px 30px; background-color:pink"
                            type = "submit" value = "IMPRIMIR" name = "btncalcular">
        <p>
</form>
</body>
<?php
     $texto = "";
        if(isset($_POST['btncalcular']))
            $texto = $_POST['numero1'];


                $rta=tagme($texto);
                    print_r($rta);

                function tagme($txt){
            $txt = preg_replace("/[^a-z A-Z0-9_\-]/","",trim(strtolower($txt)));
        $txt = preg_replace("/(\s){2,}/",'$1',$txt);
    $txt=str_replace(" ", ",", $txt);
  $txt=explode(',', $txt);
$txt=array_count_values($txt);
arsort($txt);
return $txt;
}
 
?>