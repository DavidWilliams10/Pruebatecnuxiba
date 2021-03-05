<?php
    $userid=($_GET['userid']);
    echo "<html>
    <header><title>Practica1-POSTS</title></header>
    <body>";
    echo "<div style='border: 2px solid blue; background-color: #09BEA0;' style='display:block'>";
    $data = json_decode( file_get_contents('https://jsonplaceholder.typicode.com/users/'.$userid.'/todos'), true );
    
    for ($i=19; $i < count($data) ; $i--) { 
        $var = 0;
        echo "<div>";
        $id = $data[$i]["id"]."<br>";
        echo $id;
        echo $data[$i]["title"]."<br>";
        echo "</div>";
        if ($i === $var) {
        break;
      
        }
    }
    echo "</div>";
    echo "
    </body>
    </html>";
    echo "<div style='border: 2px solid blue; background-color: #09BEA0;' style='display:block'>";
    echo "<h6>FORMULARIO</h6>";
    echo "<form name='miform' method='POST' action = 'dos.php' onsubmit = 'return validar();'>";
    echo "<input type='text' placeholder='Id User' name='id' required='' value=".$userid." readonly><br>";
    echo "<input type='text' placeholder='Title' name='title' required=''><br>";
    echo "<input id ='cbox' type='checkbox' name='cbox' value='0'><label for='cbox'>Completado</label><br>";
    echo "<input type='submit' name='enviar' value='Enviar'>";
    echo "</form>";
    echo "</div>";
    
?>
<script >
    function validar(){
        var elemento = document.forms["miform"]["cbox"].checked;
        if (elemento == true) {
            //alert("Seleccionado");
            $("#cbox").attr('value', 'True')
        }if(elemento == false){
            //alert("No Seleccionado");
            $("#cbox").attr('value', 'False')
        }
    }
</script>
<script src="jquery-3.1.1.min.js"></script>
