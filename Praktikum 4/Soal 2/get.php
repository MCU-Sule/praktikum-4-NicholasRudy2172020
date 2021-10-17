<html>
  <head>
        <title>Hasil Form Post</title>
        <meta name =”author” content="Nicholas_Christopher_Rudy 2172020">
  </head>
  <body align="center">
<table border='3' align='center' cellspacing='0' width="300px">
    <form>
       <tr>
             <td colspan='2' align='center' bgcolor="#ADFF2F"> Kalkulator</Td> 
        </tr>
        <tr>
        <td bgcolor="#6ab04c" align="left"> Angka pertama </td>
        <?php
            echo"<td width = '150px' align='center'>$_GET[pertama]</td>";
            ?>
         </tr>
         <tr>
             <td bgcolor="#6ab04c" align="left"> Angka kedua </td>
        <?php
             echo "<td align='center'>$_GET[kedua]</Td>";
             ?>
       </tr>
         <tr>
             <td bgcolor="#6ab04c" align="left" >Operator</td>
        <?php
             echo "<td align='center'>$_GET[operator]</Td>";
             ?>
        </tr>
        <tr>
             <td colspan='2' bgcolor="#ADFF2F" align="center"> Hasil : <?php 
             $satu = $_GET["pertama"];
             $dua = $_GET["kedua"];
             $tiga = $_GET["operator"];
                if ($tiga =="+") {
                     echo $satu+$dua;
        } 
                else if ($tiga =="-") {
                     echo $satu-$dua;
    }
                else if ($tiga =="*") {
                     echo $satu*$dua;
    }
                else if ($tiga == "/") {
                    echo $satu/$dua;
    }
             ?> </Td>
         </tr>
</body>
  </html>