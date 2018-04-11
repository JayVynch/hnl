<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>hn time date test</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="white">

        <?php
        $timestamp = time();
         $date = strtotime(date("Y"));
         $readabledate = strftime("%dth - %B - %Y",$date);
         $readabletime = strftime("%I:%M %p", $date);?>

         <h2 class="time"><?php echo $readabletime; ?></h2>
         <h1 class="date"><?php echo $readabledate; ?></h1>
    </div>
  </body>
</html>
