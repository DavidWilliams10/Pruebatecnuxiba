<?php
    $userid=($_GET['userid']);
    echo "<html>
    <header><title>Prueba 1</title></header>
    <body>";
    $data = json_decode( file_get_contents('https://jsonplaceholder.typicode.com/users/'.$userid.'/posts'), true );
    //$data2 = json_decode( file_get_contents('https://jsonplaceholder.typicode.com/users/'.$userid.'/comments'), true );

    foreach ($data as $objeto) {
        echo 
        "<div style='border: 2px solid blue; background-color: #09BEA0;' style='display:block'>";
            foreach ($objeto as $key => $value) {
                if ($key=="title" || $key=="body") {
                    echo "<h3>".$value."</h3>";

                }
                if ($key=="id"){
                    $comments = json_decode( file_get_contents('https://jsonplaceholder.typicode.com/post/'.$value.'/comments'), true );
                    foreach ($comments as $comentarios) {
                        foreach ($comentarios as $key2 => $value2) {
                            if ($key2=="name" || $key2=="email") {
                            	
                                echo "<h6>".$value2."</h6>";
                            }  
                            if ($key2=="body") {
                                echo "<h6>".$value2."</h6>";
                            }
                        }
                    }
                    
                }
            }

            echo "
        </div><br>";
    }
    echo "
    </body>
    </html>
    ";
    
?>