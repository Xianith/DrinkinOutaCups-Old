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
$xml = simplexml_load_file("$path_dir");
$myValue = $_GET["value"];
$indexOfChildOne = 0;
foreach($xml as $key0 => $value){
	if ( $indexOfChildOne == $myValue ) {
		$saveNodeIndexOfChildOne = $indexOfChildOne;
	}
	$indexOfChildOne++;
}
if ($saveNodeIndexOfChildOne > 4) {
	$saveNodeIndexOfChildOneFix = $saveNodeIndexOfChildOne - 5;
	unset($xml->member[$saveNodeIndexOfChildOneFix]);
}
$xml = $xml->asXML();
$fp = fopen($path_dir,'w');
$write = fwrite($fp,$xml);
require_once("squadxml.php");
?>