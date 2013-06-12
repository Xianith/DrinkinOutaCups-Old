<?xml version="1.0" encoding="ISO-8859-1"?>
<xsl:stylesheet
	version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform" xmlns:php="http://php.net/xsl">
<xsl:template match="text()">
	<xsl:value-of select="."/>
</xsl:template>
<xsl:template match="*">
	<xsl:apply-templates/>
</xsl:template>
<xsl:template match="/">

<html>

	<head>
		<title>Drinkin Outa Cups</title>
		<link rel="stylesheet" href="doc.css" type="text/css" media="all"/>
		<link rel="stylesheet" href="squad.css" type="text/css" media="all"/>
		<link rel="stylesheet" href="news.css" type="text/css" media="all"/>
		<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/2.9.0/build/reset/reset-min.css"/>
	</head>

	<body>
	
		<div id="bg">
		</div>
			
		<div id="title">
			<h1><img style="height:100px;" src="doc.png"/></h1>
		</div>
		
		<div id="main">
		
			<div id="menu">
				<a href="./">News</a> | <a href="./rules.php">Rules</a> | <a href="./donate.php">Donate</a> | <a href="../forums">Forums</a> | <!--<strike>Forums</strike> |--><a href="./clan.php">Clan</a> | <b style="color: #c6a673"><a href="./squad.xml" style="font-style: bold; color:#c6a673">Roster</a></b>
			</div>

			<div id="news">
				<TABLE class="member_info">
										<Tr>
											<Th>Officers<br/><hr/></Th>
										</Tr>
										<xsl:for-each select="/squad/member">
										<xsl:if test="remark='Officer' or remark='Second in Command'">
										<TR>
											<!--<xsl:attribute name="class">
											  <xsl:choose>
												 <xsl:when test="position() mod 2 = 0">one</xsl:when>
												 <xsl:otherwise>two</xsl:otherwise>
											  </xsl:choose>
											</xsl:attribute>-->
											<TD class="member_name">
											  <xsl:value-of select="name"/>
											</TD>
										</TR>
									</xsl:if>
										</xsl:for-each>
										
									</TABLE>
			</div>	
			
			<div id="news">
				<TABLE class="member_info">
										<Tr>
											<Th>Members<br/><hr/></Th>
										</Tr>
										<xsl:for-each select="/squad/member">
										<xsl:sort select="name"/>
										<xsl:if test="remark='Member'">
										<TR>
											<!--<xsl:attribute name="class">
											  <xsl:choose>
												 <xsl:when test="position() mod 2 = 0">one</xsl:when>
												 <xsl:otherwise>two</xsl:otherwise>
											  </xsl:choose>
											</xsl:attribute>-->
											<TD class="member_name">
											  <xsl:value-of select="name"/>
											</TD>
										</TR>
									</xsl:if>
										</xsl:for-each>
										
									</TABLE>
			</div>	

		</div>
	</body>
</html>

</xsl:template>
</xsl:stylesheet>