<html>
  <table border="1", cellpadding="10", cellspacing="0">
    <?php
    for ($i = 1; $i < 5; $i++) {
       echo "<tr>";
       for($j = 1; $j < 5; $j++){
         echo "<td>  $i, $j </td>";
       }
       echo "</tr>";
    }
    ?>
  </table>
</html>