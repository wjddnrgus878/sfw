<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>sw1</title>
  </head>
  <body>
    <p style="font-size:17pt;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LEVEL1. SW1 ʕ•ﻌ•ʔ Where is the Code..? ʕ•ﻌ•ʔ</p>
    <?php   
      echo 5;
      $conn = mysqli_connect('localhost','root','123123','id');
      if(preg_match('/sw1|=|-|_|\*|;| |\#|\.|\'|\"|\`"&/i', $_GET[pw])) exit("(๑´◡ુ`๑) NO NO");
      if(preg_match('/if|length|union|regex|is|match|between|binary|or|not|convert|union|select|limit|having|hex|ascii|admin|ord|chr|mid|substr|char|=/i', $_GET[pw])) exit("(๑´◡ુ`๑) NO NO");
      $query = "SELECT id FROM sw1_db WHERE id='' and pw={$_GET[pw]}";
      echo "<hr>query : <strong> {$query} </strong><hr><br>";
      $result = mysqli_fetch_array(mysqli_query($conn, $query));
      if($result['id']&&$result['id']==='admin'&&$result['id']!='guest')
      {
          echo ('you cleard!');
      }
     ?>
  </body>
</html>