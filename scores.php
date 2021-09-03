<!DOCTYPE HTML>
<html>
	<head>
		<title>Mahoney's Championship</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="golf4.css" />
		
	</head>
	<body class="is-preload">

	

		<!-- Heading -->
			<div id="heading" >
				<h1>Mahoney's Championship</h1>
			</div>

				<!-- Highlights -->

<?php
$servername = "localhost";
$username = "f29507_1";
$password = "3610750409";
$dbname = "f29507_pitchandputt";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM scores ORDER BY date desc";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	 echo "<table >";
  // output data of each row
  while($row = $result->fetch_assoc()) {
	  $colorlooney1 = "#ffffff";
				$colorlooney2 = "#ffffff";
				$colorlooney3 = "#ffffff";
				$colorlooney4 = "#ffffff";
				$colorlooney5 = "#ffffff";
				$colorlooney6 = "#ffffff";
				$colorlooney7 = "#ffffff";
				$colorlooney8 = "#ffffff";
				$colorlooney9 = "#ffffff";
				$colorlooney10 = "#ffffff";
				$colorlooney11 = "#ffffff";
				$colorlooney12 = "#ffffff";
				$colorlooney13 = "#ffffff";
				$colorlooney14 = "#ffffff";
				$colorlooney15 = "#ffffff";
				$colorlooney16 = "#ffffff";
				$colorlooney17 = "#ffffff";
				$colorlooney18 = "#ffffff";
				$colordunnocks1 = "#ffffff";
				$colordunnocks2 = "#ffffff";
				$colordunnocks3 = "#ffffff";
				$colordunnocks4 = "#ffffff";
				$colordunnocks5 = "#ffffff";
				$colordunnocks6 = "#ffffff";
				$colordunnocks7 = "#ffffff";
				$colordunnocks8 = "#ffffff";
				$colordunnocks9 = "#ffffff";
				$colordunnocks10 = "#ffffff";
				$colordunnocks11 = "#ffffff";
				$colordunnocks12 = "#ffffff";
				$colordunnocks13 = "#ffffff";
				$colordunnocks14 = "#ffffff";
				$colordunnocks15 = "#ffffff";
				$colordunnocks16 = "#ffffff";
				$colordunnocks17 = "#ffffff";
				$colordunnocks18 = "#ffffff";
				$red = "#db3332";
				$blue = "#5868d0";
				
				  if ($row['looney1'] < 3 && $row['looney1'] !== NULL) $colorlooney1 = $red; else if ($row['looney1'] > 3) $colorlooney1 = $blue;
				  if ($row['looney2'] < 3 && $row['looney2'] !== NULL) $colorlooney2 = $red; else if ($row['looney2'] > 3) $colorlooney2 = $blue;
				  if ($row['looney3'] < 3 && $row['looney3'] !== NULL) $colorlooney3 = $red; else if ($row['looney3'] > 3) $colorlooney3 = $blue;
				  if ($row['looney4'] < 3 && $row['looney4'] !== NULL) $colorlooney4 = $red; else if ($row['looney4'] > 3) $colorlooney4 = $blue;
				  if ($row['looney5'] < 3 && $row['looney5'] !== NULL) $colorlooney5 = $red; else if ($row['looney5'] > 3) $colorlooney5 = $blue;
				  if ($row['looney6'] < 3 && $row['looney6'] !== NULL) $colorlooney6 = $red; else if ($row['looney6'] > 3) $colorlooney6 = $blue;
				  if ($row['looney7'] < 3 && $row['looney7'] !== NULL) $colorlooney7 = $red; else if ($row['looney7'] > 3) $colorlooney7 = $blue;
				  if ($row['looney8'] < 3 && $row['looney8'] !== NULL) $colorlooney8 = $red; else if ($row['looney8'] > 3) $colorlooney8 = $blue;
				  if ($row['looney9'] < 3 && $row['looney9'] !== NULL) $colorlooney9 = $red; else if ($row['looney9'] > 3) $colorlooney9 = $blue;
				  if ($row['looney10'] < 3 && $row['looney10'] !== NULL) $colorlooney10 = $red; else if ($row['looney10'] > 3) $colorlooney10 = $blue;
				  if ($row['looney11'] < 3 && $row['looney11'] !== NULL) $colorlooney11 = $red; else if ($row['looney11'] > 3) $colorlooney11 = $blue;
				  if ($row['looney12'] < 3 && $row['looney12'] !== NULL) $colorlooney12 = $red; else if ($row['looney12'] > 3) $colorlooney12 = $blue;
				  if ($row['looney13'] < 3 && $row['looney13'] !== NULL) $colorlooney13 = $red; else if ($row['looney13'] > 3) $colorlooney13 = $blue;
				  if ($row['looney14'] < 3 && $row['looney14'] !== NULL) $colorlooney14 = $red; else if ($row['looney14'] > 3) $colorlooney14 = $blue;
				  if ($row['looney15'] < 3 && $row['looney15'] !== NULL) $colorlooney15 = $red; else if ($row['looney15'] > 3) $colorlooney15 = $blue;
				  if ($row['looney16'] < 3 && $row['looney16'] !== NULL) $colorlooney16 = $red; else if ($row['looney16'] > 3) $colorlooney16 = $blue;
				  if ($row['looney17'] < 3 && $row['looney17'] !== NULL) $colorlooney17 = $red; else if ($row['looney17'] > 3) $colorlooney17 = $blue;
				  if ($row['looney18'] < 3 && $row['looney18'] !== NULL) $colorlooney18 = $red; else if ($row['looney18'] > 3) $colorlooney18 = $blue;
				  
				  if ($row['dunnocks1'] < 3 && $row['dunnocks1'] !== NULL) $colordunnocks1 = $red; else if ($row['dunnocks1'] > 3) $colordunnocks1 = $blue;
				  if ($row['dunnocks2'] < 3 && $row['dunnocks2'] !== NULL) $colordunnocks2 = $red; else if ($row['dunnocks2'] > 3) $colordunnocks2 = $blue;
				  if ($row['dunnocks3'] < 3 && $row['dunnocks3'] !== NULL) $colordunnocks3 = $red; else if ($row['dunnocks3'] > 3) $colordunnocks3 = $blue;
				  if ($row['dunnocks4'] < 3 && $row['dunnocks4'] !== NULL) $colordunnocks4 = $red; else if ($row['dunnocks4'] > 3) $colordunnocks4 = $blue;
				  if ($row['dunnocks5'] < 3 && $row['dunnocks5'] !== NULL) $colordunnocks5 = $red; else if ($row['dunnocks5'] > 3) $colordunnocks5 = $blue;
				  if ($row['dunnocks6'] < 3 && $row['dunnocks6'] !== NULL) $colordunnocks6 = $red; else if ($row['dunnocks6'] > 3) $colordunnocks6 = $blue;
				  if ($row['dunnocks7'] < 3 && $row['dunnocks7'] !== NULL) $colordunnocks7 = $red; else if ($row['dunnocks7'] > 3) $colordunnocks7 = $blue;
				  if ($row['dunnocks8'] < 3 && $row['dunnocks8'] !== NULL) $colordunnocks8 = $red; else if ($row['dunnocks8'] > 3) $colordunnocks8 = $blue;
				  if ($row['dunnocks9'] < 3 && $row['dunnocks9'] !== NULL) $colordunnocks9 = $red; else if ($row['dunnocks9'] > 3) $colordunnocks9 = $blue;
				  if ($row['dunnocks10'] < 3 && $row['dunnocks10'] !== NULL) $colordunnocks10 = $red; else if ($row['dunnocks10'] > 3) $colordunnocks10 = $blue;
				  if ($row['dunnocks11'] < 3 && $row['dunnocks11'] !== NULL) $colordunnocks11 = $red; else if ($row['dunnocks11'] > 3) $colordunnocks11 = $blue;
				  if ($row['dunnocks12'] < 3 && $row['dunnocks12'] !== NULL) $colordunnocks12 = $red; else if ($row['dunnocks12'] > 3) $colordunnocks12 = $blue;
				  if ($row['dunnocks13'] < 3 && $row['dunnocks13'] !== NULL) $colordunnocks13 = $red; else if ($row['dunnocks13'] > 3) $colordunnocks13 = $blue;
				  if ($row['dunnocks14'] < 3 && $row['dunnocks14'] !== NULL) $colordunnocks14 = $red; else if ($row['dunnocks14'] > 3) $colordunnocks14 = $blue;
				  if ($row['dunnocks15'] < 3 && $row['dunnocks15'] !== NULL) $colordunnocks15 = $red; else if ($row['dunnocks15'] > 3) $colordunnocks15 = $blue;
				  if ($row['dunnocks16'] < 3 && $row['dunnocks16'] !== NULL) $colordunnocks16 = $red; else if ($row['dunnocks16'] > 3) $colordunnocks16 = $blue;
				  if ($row['dunnocks17'] < 3 && $row['dunnocks17'] !== NULL) $colordunnocks17 = $red; else if ($row['dunnocks17'] > 3) $colordunnocks17 = $blue;
				  if ($row['dunnocks18'] < 3 && $row['dunnocks18'] !== NULL) $colordunnocks18 = $red; else if ($row['dunnocks18'] > 3) $colordunnocks18 = $blue;
	  
	  
				  $foo = $row['date'];
							$myText = (string)$foo;
							$year = substr($myText,2,2);
							$myText3 = substr($myText,4,10);
							$month = substr($myText3,1,2);
							$day = substr($myText3,4,5);
							
							
							$check_live = $row['dunnocks18'];
				
				
				  
				  
				echo '<tr class = "holenumber" bgcolor="orange"><td  style="">'.'' .$day."-".$month."-".$year.''. '</td><td>Total</td></tr>';
				 
				 
				 echo '<tr><td class = "holenumber" style="" bgcolor="green">KL</td> <td style="">'.nl2br($row['looney1']+ $row['looney2']+$row['looney3']+ $row['looney4']+$row['looney5']+ $row['looney6']+$row['looney7']+ $row['looney8']+$row['looney9']+ $row['looney10']+$row['looney11']+ $row['looney12']+$row['looney13']+ $row['looney14']+$row['looney15']+ $row['looney16']+$row['looney17']+ $row['looney18']). '</td></tr>';
				 
				 echo '<tr><td class = "holenumber" style="" bgcolor="yellow">POD</td><td style="">'.nl2br($row['dunnocks1']+ $row['dunnocks2']+$row['dunnocks3']+ $row['dunnocks4']+$row['dunnocks5']+ $row['dunnocks6']+$row['dunnocks7']+ $row['dunnocks8']+$row['dunnocks9']+ $row['dunnocks10']+$row['dunnocks11']+ $row['dunnocks12']+$row['dunnocks13']+ $row['dunnocks14']+$row['dunnocks15']+ $row['dunnocks16']+$row['dunnocks17']+ $row['dunnocks18']). '</td></tr>';
				 
				 
				 
						
						 
				  echo '<tr class = "main" bgcolor="orange"><td  style="min-width:60px">'.'<strong>' .$day."-".$month."-".$year.'</strong>'. '</td><td>01</td><td>02</td><td>03</td>
				 <td>04</td><td>05</td><td>06</td>
				 <td>07</td><td>08</td><td>09</td></tr>';
				 
				 
				 echo '<tr><td class = "main" style="min-width:60px" bgcolor="green">KL</td><td bgcolor="'.$colorlooney1.'">'.nl2br($row['looney1']).'</td><td bgcolor="'.$colorlooney2.'">'.nl2br($row['looney2']). '</td><td bgcolor="'.$colorlooney3.'">'.nl2br($row['looney3']). '</td>
				 <td bgcolor="'.$colorlooney4.'">'.nl2br($row['looney4']).'</td><td bgcolor="'.$colorlooney5.'">'.nl2br($row['looney5']). '</td><td bgcolor="'.$colorlooney6.'">'.nl2br($row['looney6']). '</td>
				 <td bgcolor="'.$colorlooney7.'">'.nl2br($row['looney7']).'</td><td bgcolor="'.$colorlooney8.'">'.nl2br($row['looney8']). '</td><td bgcolor="'.$colorlooney9.'">'.nl2br($row['looney9']). '</td>';
				 
				 echo '<tr><td class = "main" style="min-width:60px" bgcolor="yellow">POD</td><td bgcolor="'.$colordunnocks1.'">'.nl2br($row['dunnocks1']).'</td><td bgcolor="'.$colordunnocks2.'">'.nl2br($row['dunnocks2']). '</td><td bgcolor="'.$colordunnocks3.'">'.nl2br($row['dunnocks3']). '</td>
				 <td bgcolor="'.$colordunnocks4.'">'.nl2br($row['dunnocks4']).'</td><td bgcolor="'.$colordunnocks5.'">'.nl2br($row['dunnocks5']). '</td><td bgcolor="'.$colordunnocks6.'">'.nl2br($row['dunnocks6']). '</td>
				 <td bgcolor="'.$colordunnocks7.'">'.nl2br($row['dunnocks7']).'</td><td bgcolor="'.$colordunnocks8.'">'.nl2br($row['dunnocks8']). '</td><td bgcolor="'.$colordunnocks9.'">'.nl2br($row['dunnocks9']). '</td>';
				 
				 
				 
				 
				 echo '<tr class = "main" bgcolor="orange"><td  style="min-width:60px">'.'<strong>' .$day."-".$month."-".$year.'</strong>'. '</td>
				 <td>10</td><td>11</td><td>12</td>
				 <td>13</td><td>14</td><td>15</td>
				 <td>16</td><td>17</td><td>18</td></tr>';
				 
				  echo '<tr><td class = "main" style="min-width:60px" bgcolor="green">KL</td>
				 <td bgcolor="'.$colorlooney10.'">'.nl2br($row['looney10']).'</td><td bgcolor="'.$colorlooney11.'">'.nl2br($row['looney11']). '</td><td bgcolor="'.$colorlooney12.'">'.nl2br($row['looney12']). '</td>
				 <td bgcolor="'.$colorlooney13.'">'.nl2br($row['looney13']).'</td><td bgcolor="'.$colorlooney14.'">'.nl2br($row['looney14']). '</td><td bgcolor="'.$colorlooney15.'">'.nl2br($row['looney15']). '</td>
				 <td bgcolor="'.$colorlooney16.'">'.nl2br($row['looney16']).'</td><td bgcolor="'.$colorlooney17.'">'.nl2br($row['looney17']). '</td><td bgcolor="'.$colorlooney18.'">'.nl2br($row['looney18']). '</td>';
				 
				  echo '<tr><td class = "main" style="min-width:60px" bgcolor="yellow">POD</td><td bgcolor="'.$colordunnocks10.'">'.nl2br($row['dunnocks10']).'</td><td bgcolor="'.$colordunnocks11.'">'.nl2br($row['dunnocks11']). '</td><td bgcolor="'.$colordunnocks12.'">'.nl2br($row['dunnocks12']). '</td>
				 <td bgcolor="'.$colordunnocks13.'">'.nl2br($row['dunnocks13']).'</td><td bgcolor="'.$colordunnocks14.'">'.nl2br($row['dunnocks14']). '</td><td bgcolor="'.$colordunnocks15.'">'.nl2br($row['dunnocks15']). '</td>
				 <td bgcolor="'.$colordunnocks16.'">'.nl2br($row['dunnocks16']).'</td><td bgcolor="'.$colordunnocks17.'">'.nl2br($row['dunnocks17']). '</td><td bgcolor="'.$colordunnocks18.'">'.nl2br($row['dunnocks18']). '</td>';
			
  }
  echo "</table>";
} else {
  echo "0 results";
}
$conn->close();
?>

			

			

	</body>
</html>
