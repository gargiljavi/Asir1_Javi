<body style="background-color:#73E585;">
<table border="1" align="center" bgcolor="#EA8484" >


      
            <?php
			echo'<h1>Tablas de multiplicar</h1>';
            echo "<tr>";
            for ($cabecera="0";$cabecera<=10;$cabecera++){
                        echo "<th>";
                        echo $cabecera;
                        echo "</th>";
            }
            echo "</tr>";
            for ($x = 1; $x <=10; $x++){
                       echo "<tr>";
                       echo "<th>";
                       echo $x;
                       echo "</th>";
                            for ($y=1;$y<=10;$y++){                      
                                    $multiplicacion=$x*$y;                    
                                    echo "<td>";                      
                                    echo $multiplicacion;                      
                                    echo "</td>";              
                            }              
                    echo "</tr>";          
                    }      
    ?>      
    </table>
</body>