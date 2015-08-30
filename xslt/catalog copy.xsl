<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
<xsl:template match="*">
<html>
<body>
<table border="1">
<tr>
<td>
<xsl:value-of select="name(.)" />
</td>
<td>

	<table border="2">
		<xsl:for-each select="@*">
			<tr>
			<td>
		  <xsl:value-of select="name(.)"/>
			</td>
			<td>
		  <xsl:value-of select="."/>
			</td>
			</tr>
		</xsl:for-each>
	</table>
</td>
<td>
<xsl:for-each select="*">
	<xsl:value-of select="name(.)" />
	<table border="2">
		<xsl:for-each select="@*">
			<tr>
			<td>
		  <xsl:value-of select="name(.)"/>
			</td>
			<td>
		  <xsl:value-of select="."/>
			</td>
			</tr>
		</xsl:for-each>
	</table>

	</xsl:for-each>
</td>
</tr>
</table>
</body>
</html>
</xsl:template>
</xsl:stylesheet>
