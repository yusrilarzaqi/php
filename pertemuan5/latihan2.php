<?php 
$angka = [6,5,8,0,4,1];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <style>
        .box{
          background-color: #8de2f7;
          width: 200px;height: 200px;
          /*margin-left: 50px;
          margin-bottom: 100px;*/
          position: relative;
          float: left;
          line-height: 100px;
          text-align: center;
        }
  </style>
</head>
<body>
  <?php foreach($angka as $num) : ?>
    <div class="box"><?= $num; ?></div>
  <?php endforeach; ?>
</body>
</html>