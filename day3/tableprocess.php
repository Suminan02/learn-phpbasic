<?php
echo json_encode($_POST);
$username="";
$password="";
$c_password="";
$name="";
$lastname="";
$email="";
$cid="";
$phone="";
$address="";

if(isset($_POST['username'])&&$_POST['username'] !=''){
  $username=$_POST['username'];
}
if($username==""){
  $response = array('ret_code'=>'000','msg'=>"empty input username");
  write_log(json_encode($response));
  echo json_encode($response);
  exit;
}
if(isset($_POST['password'])&&$_POST['password'] !=''){
  $password=$_POST['password'];
}
if($password==""){
  $response = array('ret_code'=>'001','msg'=>"empty input password");
  write_log(json_encode($response));
  echo json_encode($response);
  exit;
}
if(isset($_POST['c_password'])&&$_POST['c_password'] !=''){
  $c_password=$_POST['c_password'];
}
if($c_password==""){
  $response = array('ret_code'=>'002','msg'=>"empty input confirm password");
  write_log(json_encode($response));
  echo json_encode($response);
  exit;
}
if($c_password!=$password){
  $response = array('ret_code'=>'010','msg'=>"password and confirm password not same");
  write_log(json_encode($response));
  echo json_encode($response);
  exit;
}
if(isset($_POST['name'])&&$_POST['name'] !=''){
  $name=$_POST['name'];
}
if($name==""){
  $response = array('ret_code'=>'003','msg'=>"empty name");
  write_log(json_encode($response));
  echo json_encode($response);
  exit;
}
if(isset($_POST['lastname'])&&$_POST['lastname'] !=''){
  $lastname=$_POST['lastname']; 
}
if($lastname==""){
  $response = array('ret_code'=>'004','msg'=>"empty lastname");
  write_log(json_encode($response));
  echo json_encode($response);
  exit;
}
if(isset($_POST['email'])&&$_POST['email'] !=''){
  $email=$_POST['email'];
}
if($email==""){
  $response = array('ret_code'=>'0052','msg'=>"empty email");
  write_log(json_encode($response));
  echo json_encode($response);
  exit;
}
if(isset($_POST['cid'])&&$_POST['cid'] !=''){
  $cid=$_POST['cid'];
}
if($cid==""){
  $response = array('ret_code'=>'006','msg'=>"empty citizen id");
  write_log(json_encode($response));
  echo json_encode($response);
  exit;
}
if(isset($_POST['phone'])&&$_POST['phone'] !=''){
  $phone=$_POST['phone'];
}
if(isset($_POST['address'])&&$_POST['address'] !=''){
  $phone=$_POST['address'];
}
        $response = array('ret_code'=>'101','msg'=>"success","data"=>$_POST);
        write_log(json_encode($response));
        echo json_encode($response);

        function write_log($log){
          //Something to write to txt log
          $date_log = date("Y-m-d H:i:s").PHP_EOL.
          "IP :".get_client_ip().$_SERVER['REMOTE_ADDR'].PHP_EOL.
          "DATA : ".$log.PHP_EOL."-------------------------".PHP_EOL;
          //Save string to log, use FILE_APPEND to append.
          file_put_contents('logs/log_'.date("Ymd").'.txt', $date_log, FILE_APPEND);
      }

      function get_client_ip() {
        $ipaddress = '';
        if (getenv('HTTP_CLIENT_IP'))
            $ipaddress = getenv('HTTP_CLIENT_IP');
        else if(getenv('HTTP_X_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
        else if(getenv('HTTP_X_FORWARDED'))
            $ipaddress = getenv('HTTP_X_FORWARDED');
        else if(getenv('HTTP_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_FORWARDED_FOR');
        else if(getenv('HTTP_FORWARDED'))
           $ipaddress = getenv('HTTP_FORWARDED');
        else if(getenv('REMOTE_ADDR'))
            $ipaddress = getenv('REMOTE_ADDR');
        else
            $ipaddress = 'UNKNOWN';
        return $ipaddress;
    }
?>