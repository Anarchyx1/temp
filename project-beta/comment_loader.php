<?php

    #Select dos comentarios
    $sql = "SELECT * FROM comentario_$categoria ORDER BY id desc";
    $result=mysqli_query($conn,$sql);
    #Printa uma linha por cada comentario
    while( $exibir = mysqli_fetch_array($result)){

        echo "<div class='container p-1'>";
            echo "<div class='row'>";
                echo "<div class='col-1 p-2 text-center' style='background-color: rgb(92, 232, 80)'>";
                echo "<img src='imagens/4chan.png' width='30' height='30'><br>";
                echo $exibir['usuario'];
                echo "</div>";                
                echo "<div class='col-11 p-2 text-bg-dark'>";
                echo $exibir['comentario'];
                echo "</div>";
            echo "</div>";
        echo "</div>";
    }
    ?>