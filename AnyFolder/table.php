<?php
  $R1C1 = "dummy";
  $R1C2 = "dummy";
  $R1C3 = "dummy";
  $R2C1 = "dummy2";
  $R2C2 = "dummy2";
  $R2C3 = "dummy2";
  $R3C1 = "dummy3";
  $R3C2 = "dummy3";
  $R3C3 = "dummy3";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>TEST TABLE</title>
  </head>
  <body>
      <table>
        <tr>
          <td name = "R1C1"><?php echo $R1C1; ?></td>
          <td name = "R1C2"><?php echo $R1C2; ?></td>
          <td name = "R1C3"><?php echo $R1C3; ?></td>
        </tr>
        <tr>
          <td name = "R2C1"><?php echo $R2C1; ?></td>
          <td name = "R2C2"><?php echo $R2C2; ?></td>
          <td name = "R2C3"><?php echo $R2C3; ?></td>
        </tr>
        <tr>
          <td name = "R3C1"><?php echo $R3C1; ?></td>
          <td name = "R3C2"><?php echo $R3C2; ?></td>
          <td name = "R3C3"><?php echo $R3C3; ?></td>
        </tr>
      </table>
    <form action = "PhpOffice/download.php" method = "post">
      <input type = "hidden" name = "R1C1" value = "<?php echo $R1C1; ?>">
      <input type = "hidden" name = "R1C2" value = "<?php echo $R1C2; ?>">
      <input type = "hidden" name = "R1C3" value = "<?php echo $R1C3; ?>">
      <input type = "hidden" name = "R2C1" value = "<?php echo $R2C1; ?>">
      <input type = "hidden" name = "R2C2" value = "<?php echo $R2C2; ?>">
      <input type = "hidden" name = "R2C3" value = "<?php echo $R2C3; ?>">
      <input type = "hidden" name = "R3C1" value = "<?php echo $R3C1; ?>">
      <input type = "hidden" name = "R3C2" value = "<?php echo $R3C2; ?>">
      <input type = "hidden" name = "R3C3" value = "<?php echo $R3C3; ?>">
      <input type ="submit" value = "ダウンロード">
    </form>
  </body>
</html>
