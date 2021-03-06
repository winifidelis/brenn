
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Brenn Sports</title>

  <!-- Bootstrap Core CSS -->
  <link href="bootstrap.min.css" rel="stylesheet">

  <!-- Custom Fonts -->
  <link href="all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
  <link href="simple-line-icons.css" rel="stylesheet">

  <meta property="og:description" content="MADARIN TRICOT." />
  <meta property="twitter:description" content="MADARIN TRICOT." />
  <meta name="description" itemprop="description" content="MADARIN TRICOT." />
  <meta property="og:image:url" content="forWhatsapp.jpeg">
  <meta property="twitter:image" content="forWhatsapp.jpeg">
  
  
  <style type="text/css">
    body {
       background: #FFFFFF; 
    }
  </style>


</head>

<body id="page-top" bgcolor="FF0000">

  <header class="masthead d-flex">
    <div class="container text-center">
	  <br />
      <img src="logo.png">
	  <br />
	  <br />
	  <br />
	  <a href="https://api.whatsapp.com/send?phone=556299898153&text=Ol%C3%A1%2C%20gostaria%20de%20saber%20mais%20sobre%20as%20roupas%20de%20esporte%20e%20fitness."><img src="whatsappVarejo.png"></a>
	  <br />
	  <a href="https://www.instagram.com/brenn.sports/"><img src="instagram.png"></a>
	  <br />
	  <img src="ecommerce.png">
    </div>
    <div class="overlay"></div>
  </header>


  <!-- Bootstrap core JavaScript -->
  <script src="jquery.min.js"></script>
  <script src="bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="jquery.easing.min.js"></script>

</body>

</html>
<?php
$user_agent = $_SERVER['HTTP_USER_AGENT'];

function getOS() { 

   global $user_agent;

   $os_platform  =  "SO desconhecido";

   $os_array  =  array(
                        '/windows nt 10/i'     =>  'Windows 10',
                        '/windows nt 6.3/i'     =>  'Windows 8.1',
                        '/windows nt 6.2/i'     =>  'Windows 8',
                        '/windows nt 6.1/i'     =>  'Windows 7',
                        '/windows nt 6.0/i'     =>  'Windows Vista',
                        '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
                        '/windows nt 5.1/i'     =>  'Windows XP',
                        '/windows xp/i'         =>  'Windows XP',
                        '/windows nt 5.0/i'     =>  'Windows 2000',
                        '/windows me/i'         =>  'Windows ME',
                        '/win98/i'              =>  'Windows 98',
                        '/win95/i'              =>  'Windows 95',
                        '/win16/i'              =>  'Windows 3.11',
                        '/macintosh|mac os x/i' =>  'Mac OS X',
                        '/mac_powerpc/i'        =>  'Mac OS 9',
                        '/linux/i'              =>  'Linux',
                        '/ubuntu/i'             =>  'Ubuntu',
                        '/iphone/i'             =>  'iPhone',
                        '/ipod/i'               =>  'iPod',
                        '/ipad/i'               =>  'iPad',
                        '/android/i'            =>  'Android',
                        '/blackberry/i'         =>  'BlackBerry',
                        '/webos/i'              =>  'Mobile'
                    );

   foreach ($os_array as $regex => $value) { 

       if (preg_match($regex, $user_agent)) {
          $os_platform    =   $value;
       }

   }   

return $os_platform;

}

function get_client_ip() {
    $ipaddress = '';
    if (isset($_SERVER['HTTP_CLIENT_IP']))
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_X_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if(isset($_SERVER['REMOTE_ADDR']))
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}

try {
	date_default_timezone_set('America/Sao_Paulo');
    $horaAcesso = date('d/m/Y \??\s H:i:s');
	
	$user_os = getOS();
	
    $arquivo = "acessos.txt";
	$fp = fopen($arquivo, "a+");
	fwrite($fp, "acesso: ".$horaAcesso." - Sistema Operacional: ".$user_os." - IP: ".get_client_ip()."\n");
	fclose($fp);
	
	
}catch(Exception $e){
    
}
?>