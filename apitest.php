<?php
// echo "My first PHP script!"."<br>";
// $cars = array("Volvo", "BMW", "Toyota"); 
// echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . "."."<br>";

    require('routeros_begin_6.43_api.class.php');
    $API = new routeros_api();
    // $API->debug = true;
    $API->debug = false;

    // if ($API->connect('192.168.55.1','cattelecom','nopochO2018')) {
    if ($API->connect('192.168.77.1','nopochO','nopochO2018')) {
    // type1 (forEach --ข้อมูลเป็นตารางคล้าย excel)
        $array_type_1 = $API->comm('/ip/address/print');
        echo "<br><br>"."Result 1"."<br><br>";
        foreach($array_type_1 as $want){
            echo $want['address']."<br>";
        }
    }
    echo "<br><br>"."==End of Result 1=="."<br><br>";


    // type2 (forloop --ข้อมูลเป็นตารางคล้าย excel)


    // $array_type_2 = $API->comm('/ip/dhcp-server/lease/print');
    // $num = count($array_type_2);
    // echo "<br><br>"."Result 2 have = ".$num." lease"."<br><br>";
    // for($i=0; $i<$num; $i++){
    //     $no=$i+1;
    //     echo '<table border="1px solid #ddd" width="40%">';
    //         echo '<tr border="1px solid #ddd">';
    //             // echo "<td><center>".$no."</center></td>";
    //             echo "<td>".$no."</td>";
    //             echo "<td>".$array_type_2[$i]['.id']. "</td>";
    //             echo "<td>".$array_type_2[$i]['address']. "</td>";
    //             echo "<td>".$array_type_2[$i]['mac-address']. "</td>";
    //             echo "<td>".$array_type_2[$i]['host-name']. "</td>";
    //         echo "</tr>";
    //     echo '</table>';
        
    // }
    // echo "<br><br>"."==End of Result 2=="."<br><br>";

// type 3(ไปต้องวนลูปใดๆ --dโดยข้อมูลมีแถวเดียว แต่มี col เยอะมาก)


    // $array_type_3 = $API->comm('/system/resource/print');
    // echo "<br><br>"."Result 3"."<br><br>";
    // echo "cpu : ".$array_type_3['0']['cpu']."<br>";
    // echo "total-hdd-space : ".$array_type_3['0']['total-hdd-space']."<br>"; 
    // echo "architecture-name : ".$array_type_3['0']['architecture-name']."<br>";  
    // echo "<br><br>"."==End of Resultb 3=="."<br><br>";

    // ****************************************************************************************
    // $array_type_2 = $API->comm('/ip/hotspot/user/print');

    // ****************************************************************************************


    // $my_mc = "00:4E:01:99:0D:8B";
    // $API->write("/ip/hotspot/user/add",false);
    // $API->write("=name=$my_mc",false);
    // $API->write("=profile=default");
    // $API->read(); 
    
?>

    