$dbname = "gp_2017_2018";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$kevtherm=0;
$aoureltherm=0;
$xristinatherm=0;
$boutsitherm=0;
$papadaktherm=0;
$nikostherm=0;
$kapsalistherm=0;
$giorgostherm=0;
$doulgetherm=0;
$sql = "SELECT * FROM meteorologikos ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $kevtherm=$row["day_nigth"];
        $aoureltherm=$row["date"];
        $xristinatherm=$row["hour"];
        $boutsitherm=$row["temp"];
        $papadaktherm=$row["humidity"];
        $nikostherm=$row["BARO"];
        $kapsalistherm=$row["wdir"];
        $giorgostherm=$row["wind_speed"];
        $doulgetherm=$row["insect_of_rain"];

    }

 } else {
      echo "0 results";
  }
 $conn->close();
 ?>
 <table>
   <tr>
 <th><img src="https://i.imgur.com/SXMRDm9.png" style="width:50px; height:50"></th>
 <th><img src="https://i.imgur.com/o121blp.png" style="width:50px; height:50"></th>
 <th><img src="https://i.imgur.com/0yGO1EZ.png" style="width:50px; height:50"></th>
 <th><img src="https://i.imgur.com/pcRwVTJ.png" style="width:50px; height:50"></th>
 <th><img src="https://i.imgur.com/s5NCaj9.png" style="width:50px; height:50"></th>
 <th><img src="https://i.imgur.com/81guYEI.png" style="width:50px; height:50"></th>
 <th><img src="https://i.imgur.com/YPvFopV.png" style="width:50px; height:50"></th>
 <th><img src="https://i.imgur.com/PaSe2ba.png" style="width:50px; height:50"></th>
 <th><img src="https://i.imgur.com/WRJywFJ.png" style="width:50px; height:50"></th>
	</tr>
   <tr>
 <th>Θερμοκεασία</th>
 <th>Ηλιοφάνεια</th>
 <th>Μερικώς Συνεφιασμένος</th>
 <th>Ασθενής Βροχή</th>
 <th>Σχεδόν Αίθριος</th>
 <th>Βροχερός</th>
 <th>Χιονώδης</th>
 <th>Θυελλώδης</th>
 <th>Ανεμώδης</th>
 </tr>
 <tr>
 <td>
  <?php
  	echo $kevtherm
  ?>
 </td>
 <td>
   <?php
   	echo $aoureltherm
   ?>
 </td>
 <td>
   <?php
 	echo $xristinatherm
   ?>
 </td>
 <td>
   <?php
 	echo $boutsitherm
   ?>
 </td>
 <td>
   <?php
 	echo $papadaktherm
   ?>
 </td>
 <td>
   <?php
 	echo $nikostherm
   ?>
 </td>
 <td>
   <?php
 	echo $kapsalistherm
   ?>
 </td>
 </tr>
 </table> 
 </body>
 </html>

