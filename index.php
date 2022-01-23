<?php
//https://www.fembed.com/v/2r4wwc2wk4q72wp

$converter = $_GET['id'];

$url = str_replace('/v/', "/api/source/", $converter);


$ch = curl_init(); 
curl_setopt($ch, CURLOPT_URL, $url); 
curl_setopt($ch, CURLOPT_POST, 1);

$data = curl_exec($ch);
curl_close($ch);


$respuestFinal = rtrim($data, "1");


echo'
<script>
valor = document.querySelector("body").innerText;
    jaison = JSON.parse(valor);
    datos = jaison.data

    if (datos.length == 3){
        
        console.log(datos[2].file);
        window.open(datos[2].file, "_self");
    }
    else if (datos.length == 2) {

        console.log(datos[1].file);
        window.open(datos[1].file, "_self");
        
    }
    else if (datos.length == 1) {
        console.log(datos[0].file);
        window.open(datos[0].file, "_self");
        
    } else {
        console.log("nada");
    }
    </script>
'

?>
