SquadXML-Editor
===============

Create and edit your "squad.xml" file for ArmA and ArmA2 (see
www.arma2.com, trademark by Bohemia Interactive) via a webinterface.

Version
=======
1.2

Changelog
=========

-- 1.2
	Add UTF-8 support
	Removed "Auto-removes all non-ASCII characters"
-- 1.1 
	Auto-removes all non-ASCII characters
-- 1.0 
	Initial release


Requirements
============

*) Webserver with PHP 5.x


INSTALL
=======

1. Unzip folder "squadxml_editor.zip" 
2. Move the folder "squadxml" to your webserver
3. Make sure that the folder "squadxml -> xmlf" has write permission (755)


USAGE
=====

A. You have no "squad.xml"

	* Go to: "http://yourServer.com/squadxml/squadxml.php"
	* Just edit the fields and add members

B. You have a existing "squad.xml"

	IMPORTANT: Your existing "Squad.xml" has to be UTF-8 encoded!

	* Copy your "squad.xml" to "squadxml -> xmlf" and replace the 
	  "squad.xml" in the folder "xmlf".
	* Go to: "http://yourServer.com/squadxml/squadxml.php"
	* Start editing your "squad.xml"

	
IMPORTANT:

	* The URL of your squad.xml will be:
		"http://yourServer.com/squadxml/xmlf/squad.xml"
	* Dont forget to regular backup your "squad.xml" to a local drive 
	  or usb stick
	 
	 
Security
========

To prevent other people from accessing your "squad.xml" protect your files
with ".htacces" and ".htpasswd". Just rename the delivered "htaccess.txt" 
and "htpasswd.txt" files and change username and password in the ".htpasswd"

Default is user:"root" with password:"123456". Dont forget to edit these 
files while they are still "*.txt" files.

See "http://en.wikipedia.org/wiki/.htaccess" as first reference.
	

Copyright
=========

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
    along with "SquadXML-Editor". If not, see <http://www.gnu.org/licenses/>.

	
Contributions
=============

	Icons from the Iconset "Silk Icons" by www.famfamfam.com 
	(Creative Commons Attribution 2.5 License)