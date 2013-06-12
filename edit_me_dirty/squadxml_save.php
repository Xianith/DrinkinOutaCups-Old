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
if(isset($_POST['create_xml'])){
	$xml = simplexml_load_file("$path_dir");
	$saveNodeIndexOfChildOne = $_POST["indexOfChildOne"];
	$saveNodeId = $_POST["id"];
	$saveNodeNick = $_POST["nick"];
	$saveNodeName = $_POST["name"];
	$saveNodeEmail = $_POST["email"];
	$saveNodeIcq = $_POST["icq"];
	$saveNodeRemark = $_POST["remark"];
	$superMeta = $_POST["supermeta"];

	
	if ($saveNodeIndexOfChildOne == -1) {
		$xml[nick] = utf8_encode($superMeta);
	}
	if ($saveNodeIndexOfChildOne == 0) {
		$xml->name = utf8_encode($superMeta);
	}
	if ($saveNodeIndexOfChildOne == 1) {
		$xml->email = utf8_encode($superMeta);
	}
	if ($saveNodeIndexOfChildOne == 2) {
		$xml->web = utf8_encode($superMeta);
	}
	if ($saveNodeIndexOfChildOne == 3) {
		$xml->picture = utf8_encode($superMeta);
	}
	if ($saveNodeIndexOfChildOne == 4) {
		$xml->title = utf8_encode($superMeta);
	}
	if ($saveNodeIndexOfChildOne > 4) {
		$saveNodeIndexOfChildOneFix = $saveNodeIndexOfChildOne - 5;
		$xml->member[$saveNodeIndexOfChildOneFix]['id'] = utf8_encode($saveNodeId);
		$xml->member[$saveNodeIndexOfChildOneFix]['nick'] = utf8_encode($saveNodeNick);
		$xml->member[$saveNodeIndexOfChildOneFix]->name = utf8_encode($saveNodeName);
		$xml->member[$saveNodeIndexOfChildOneFix]->email = utf8_encode($saveNodeEmail);
		$xml->member[$saveNodeIndexOfChildOneFix]->icq = utf8_encode($saveNodeIcq);
		$xml->member[$saveNodeIndexOfChildOneFix]->remark = utf8_encode($saveNodeRemark);
	}
$xml = $xml->asXML();
$fp = fopen($path_dir,'w');
$write = fwrite($fp,$xml);
require_once("squadxml.php");
}
?>