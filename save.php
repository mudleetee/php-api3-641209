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
    if(isset($_POST['idcard']))         $idcard     = $_POST['idcard'];
    if(isset($_POST['phone']))          $phone      = $_POST['phone'];
    if(isset($_POST['iden']))           $iden_new   = $_POST['iden'];
    $ment = $idcard . "@" . $phone ;

    // $ccr_office_ddns = "574b05dbebf3.sn.mynetname.net";
    $ccr_office_ddns = "125.26.234.37";
    $mt_skm_amnaj_ddns = "554f040ec530.sn.mynetname.net";
    $mt_bangchakreng_ddns = "63fb051ac0ab.sn.mynetname.net";
    $obt_saunlaung_ddns = "8eee0ae75a8f.sn.mynetname.net"; 
    $freewifi_vaccine_obj_ddns = "d52f0e3fcba1.sn.mynetname.net";
    $pwa_ddns = "5e6b04782a49.sn.mynetname.net";
    $suansunantha3_rehab_ddns = "6efe07eafa82.sn.mynetname.net";
    $Bangjakrang_CCTV_ddns ="8c1808509e3d.sn.mynetname.net"; 

    switch ($iden_new) {
      case "ccr_office":
        $mt = $ccr_office_ddns;
        $u = "nopochO";
        $p = "nopochO2018";
        break;
      case "obt_saunlaung":
        $mt = $obt_saunlaung_ddns;
        $u = "skm";
        $p = "ntskm";
        break;
      case "bangjakreng":
        $mt = $mt_bangchakreng_ddns;
        $u = "3471j0005";
        $p = "3471j0005";
        break;
      case "freewifi_vaccine_obj":
        $mt = $freewifi_vaccine_obj_ddns;
        $u = "skm";
        $p = "totskm1234";
        break;
      case "PWA-WiFi":
        $mt = $pwa_ddns;
        $u = "skm";
        $p = "ntskm";
        break;
      case "suansunantha3_rehab":
        $mt = $suansunantha3_rehab_ddns;
        $u = "skm";
        $p = "ntskm";
        break;
      case "Bangjakrang@CCTV":
          $mt = $Bangjakrang_CCTV_ddns;
          $u = "skm";
          $p = "ntskm";
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
        echo "<meta http-equiv=\"refresh\" content=\"1;URL=".$dest."\" />";
        
    }
?>