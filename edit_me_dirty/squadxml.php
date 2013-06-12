<?php
/* 
copyright 2011 by TomNedry, tom.nedry@gmx.net

	This file is part of "SquadXML-Editor".

    "SquadXML-Editor" is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    "SquadXML-Editor" is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with "SquadXML-Editor".  If not, see <http://www.gnu.org/licenses/>.
*/
INCLUDE 'setup.php' ; 
INCLUDE ($langinclude) ;
function curPageURL() {
 $pageURL = 'http';
 if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
 $pageURL .= "://";
 if ($_SERVER["SERVER_PORT"] != "80") {
  $path_parts = pathinfo($_SERVER["REQUEST_URI"]);
  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$path_parts['dirname'];
 } else {
  $path_parts = pathinfo($_SERVER["REQUEST_URI"]);
  $pageURL .= $_SERVER["SERVER_NAME"].$path_parts['dirname'];
 }
 return $pageURL;
}

$xml = simplexml_load_file("$path_dir");
//print_r ($xml);
$rowColor = "ab";
$myUrl = curPageURL().'/xmlf/squad.xml';
?>
<html>
<head>
<title>SquadXML-Editor</title>
<link rel="stylesheet" type="text/css" href="squadxml.css">
</head>
<body>
<h1>SquadXML-Editor</h1>
<p>Be sure to use a proper Player ID. <br /><br />You can put anything in the ICQ, as it shows IM: a badass! <br /><br /> Set the email to name@drinkinoutacups.com</p>
<h2><?php echo $lng_modeOverview; ?></h2>
<p>squad.xml URL: <a href="../squad.xml">drinkinoutacups.com/squad.xml</a></p>
<?php
$indexOfChildOne = 0;
echo '<table cellpadding="0" cellspacing="0" >';

foreach($xml as $key0 => $value){
	if ($rowColor == "ab") {$rowColor = "ba";} else {$rowColor = "ab";}
	if ($indexOfChildOne < 1) {
		foreach($xml->attributes() as $attributeskey0 => $attributesvalue1){
			echo '<tr class="'.$rowColor.'"><td class="keytext">'.$attributeskey0.': </td><td colspan="2">'.utf8_decode($attributesvalue1).'</td>';
			echo '<td>';
			echo '<a href="./squadxml_edit.php?key=xxx&value='.$indexOfChildOne.'"><img src="./gfx/application_edit.png" alt="'.$lng_change.'"></a>';
			echo '</td>';
			echo '<td></td>';
			$rowColor = "ab";
		}
	}
	echo '<tr class="'.$rowColor.'"><td class="keytext">'.$key0.': </td>';
	if ($indexOfChildOne < 5) {echo '<td colspan="2">'.utf8_decode($value).'</td>';}
	
	foreach($value->attributes() as $attributeskey0 => $attributesvalue1){
		echo '<td>';
		echo '<span  class="keytext">'.$attributeskey0.'</span>: <b>'.utf8_decode($attributesvalue1).'</b>';
		echo '</td>';
	}
	echo '<td>';
	echo '<a href="./squadxml_edit.php?key='.$key0.'&value='.$indexOfChildOne.'"><img src="./gfx/application_edit.png" alt="'.$lng_change.'"></a>';
	echo '</td>';
	if ($indexOfChildOne > 4) {
		echo '<td>';
		echo '<a href="./squadxml_del.php?value='.$indexOfChildOne.'" onclick="return confirm(\''.$lng_deleteMessage.'\');"><img src="./gfx/cross.png" alt="'.$lng_delete.'"></a>';
		echo '</td>';
	} else {echo '<td></td>';}
	echo "</tr>\r\n";
	$indexOfChildOne++;
	////////////////////////////////////////////////
	if ($indexOfChildOne > 5) {
	echo '<tr class="'.$rowColor.'"><td></td><td colspan="4">';
	foreach($value as $key => $value2){
		echo '<span  class="keytext">'.$key.'</span>: '.utf8_decode($value2).'<span  class="keytext"> , </span>';
		foreach($value2->attributes() as $attributeskey => $attributesvalue2){
			echo '<td>'.$attributeskey.': '.utf8_decode($attributesvalue2).'</td>';
		}
	}
	echo "</td></tr>\r\n";
	}
echo '<tr><td colspan="5" class="hrpart"></td></tr>';	
}

echo '</table>';
$indexOfChildOne + 1;
echo '<br/><a href="./squadxml_edit.php?key='.$key0.'&value='.$indexOfChildOne.'"><img src="./gfx/add.png" alt="'.$lng_add.'"> '.$lng_add.'</a>';
?>
<p class="footer">SquadXML-Editor v1.2, 2011 by TomNedry (tom.nedry@gmx.net, <a href="http://arma.airpressuretendency.net">arma.airpressuretendency.net</a>), Licence: <a href="http://www.gnu.org/licenses/" target="_blank">GPL3</a></p>
</body>
</html>