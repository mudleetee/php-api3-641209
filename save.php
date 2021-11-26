<?php
    echo '<pre>';
    // print_r($_POST);
    echo '</pre>';
    // echo '<hr>';
    // var_dump($_POST);
    // echo '<hr>';
    // echo '<br>';
    // $uname = $_POST["username"];
    // $pwd = $_POST["password"];

    // print "<p><b>Method POST</b><br />";

    if(isset($_POST['username']))       $uname      = $_POST['username'];
    if(isset($_POST['password']))       $pwd        = $_POST['password'];
    if(isset($_POST['mac']))            $my_mc      = $_POST['mac'];
    if(isset($_POST['dst']))            $dest       = $_POST['dst'];

    
    // echo "username              : <b>".$uname."</b><br>";
    // echo "password              : <b>".$pwd."</b><br>";
    // echo "MAC Address           : <b>".$my_mc."</b><br>";
    // echo "destination           : <b>".$dest ."</b><br>";


    
    // if(isset($_POST['Name']))       $Name     = $_POST['Name'];
    // if(isset($_POST['Password']))   $Password = $_POST['Password'];
    // if(isset($_POST['Message']))    $Message  = $_POST['Message'];
    // print "Name = $Name<br />";
    // print "Password = $Password<br />";
    // print "Message = $Message</p>";

    require('routeros_begin_6.43_api.class.php');
    $API = new routeros_api();
    // $API->debug = true;
    $API->debug = false;

    // if ($API->connect('192.168.55.1','cattelecom','nopochO2018')) {
    if ($API->connect('574b05dbebf3.sn.mynetname.net','nopochO','nopochO2018')) {
    // if ($API->connect('192.168.77.1','nopochO','nopochO2018')) {
        
        // print "MAC Address= $my_mc<br />";
        // $my_mc = "00:4E:01:99:0D:8B";
        $API->write("/ip/hotspot/user/add",false);
        $API->write("=name=$my_mc",false);
        $API->write("=profile=mac");
        $API->read();

        // echo '<script language="javascript">';
        // echo 'alert("message successfully sent")';
        // echo '</script>';

        // <meta http-equiv="refresh" content="3;url=http://www.ireallyhost.com">
        // echo "<meta http-equiv=\"refresh\" content=\"3;URL=http://www.google.com/\" />";
        echo "<meta http-equiv=\"refresh\" content=\"1;URL=".$dest."\" />";
        
    }
?>