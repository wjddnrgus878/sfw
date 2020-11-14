<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>sw3</title>
  </head>
  <body>
    <p style="font-size:17pt;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LEVEL3. SW3 (ง •_•)ง</p>
    
    <?php
    $conn = mysqli_connect('localhost','root','123123','id');
    //if(preg_match('/sw3|=| |\#|\.|\\|\'|\"|\`"&/i', $_GET[pw])) exit("👮🏻 ♀️? NO NO");
    //if(preg_match('/or|if|union|regex|is|match|between|binary|or|not|convert|union|select|limit|having|hex|ascii|admin|ord|chr|mid|substr|char|=/i', $_GET[pw])) exit("👮🏻 ♂️? NO NO");
    $query = "SELECT id FROM sw3_db WHERE id='admin' and pw={$_GET[pw]}";
    echo "<hr>query : <strong> {$query} </strong><hr><br>";
    $result = mysqli_fetch_array(mysqli_query($conn, $query));
    if($result['id']) 
    {
        if($result['id'] == 'admin')
        {
            echo "be the best";
        }
    } else {
      exit();
    }
    ?>
  </body>
</html>