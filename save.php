<html>
<title>Hotspot login page</title>
<body>



<?php
    echo '<pre>';
    print_r($_POST);
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
    if(isset($_POST['idcard']))         $idcard     = $_POST['idcard'];
    if(isset($_POST['phone']))          $phone      = $_POST['phone'];
    if(isset($_POST['iden']))           $iden_new   = $_POST['iden'];
    $ment = $idcard . "@" . $phone ;

    $ccr_office_ddns = "574b05dbebf3.sn.mynetname.net";
    $mt_skm_amnaj_ddns = "554f040ec530.sn.mynetname.net";
    $mt_bangchakreng_ddns = "63fb051ac0ab.sn.mynetname.net";
    $mt_fromcat = "61.7.169.24";

    switch ($iden_new) {
      case "ccr_office":
        $mt = $ccr_office_ddns;
        $u = "nopochO";
        $p = "nopochO2018";
        break;
      case "bangjakreng":
        $mt = $mt_bangchakreng_ddns;
        $u = "3471j0005";
        $p = "3471j0005";
        break;
      case "cattelecom":
        $mt = $mt_fromcat;
        $u = "cattelecom";
        $p = "nopochO2018";
        break;
      default:
        echo "Your favorite color is neither red, blue, nor green!";
    }
    
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
    if ($API->connect($mt,$u,$p)) { 
    // if ($API->connect('574b05dbebf3.sn.mynetname.net','nopochO','nopochO2018')) {      
        // print "MAC Address= $my_mc<br />";
        // $my_mc = "00:4E:01:99:0D:8B";    
        $API->write("/ip/hotspot/user/add",false);
        $API->write("=name=$my_mc",false);
        // $API->write("=profile=mac");
        $API->write("=profile=mac",false);
        $API->write("=comment=$ment");
        $API->read();

        // echo '<script language="javascript">';
        // echo 'alert("message successfully sent")';
        // echo '</script>';

        // <meta http-equiv="refresh" content="3;url=http://www.ireallyhost.com">
        // echo "<meta http-equiv=\"refresh\" content=\"3;URL=http://www.google.com/\" />";
        // echo "<meta http-equiv=\"refresh\" content=\"1;URL=".$dest."\" />";
        
    }
?>

<form name="login" action="http://nt.wifi/login02.html" method="post">
    <!-- <input type="text" name="username" value="demo">
    <input type="password" name="password" value="none"> -->
    <input type="hidden" name="username" value="<?php $($my_mc) ?>">
    <input type="hidden" name="domain" value="">
    <input type="hidden" name="dst" value="http://www.mikrotik.com/">
    <input type="submit" name="login" value="log in">
</form>


</body>
</html>