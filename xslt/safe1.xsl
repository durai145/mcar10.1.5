<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
<xsl:template match="*">
<html>
<body>
<h2>My CD Collection</h2>
<table border="1">
<tr bgcolor="#9acd32">
<th>Title</th>
<th>Artist</th>
</tr>
<xsl:value-of select="name(.)" />
<xsl:for-each select="*">
<tr>
<td>
<xsl:value-of select="name(.)" />
</td>
<td>
	<xsl:for-each select="*">

<xsl:attribute name="{name()}">
<xsl:value-of select="text()"/>
</xsl:attribute>
		
		<table border="1">
		<tr>
			<td>
				<xsl:value-of select="name(.)" />
			</td>
			<td>
				name
				<xsl:value-of select="@name" />
				<xsl:value-of select="@type" />
			</td>
			<td>
	<xsl:for-each select="*">
		<table  border="1">
		<tr>
			<td>
				<xsl:value-of select="name(.)" />
			</td>
			<td>
				<xsl:value-of select="." />
				<xsl:value-of select="@type" />
			</td>
			<td>
	<xsl:for-each select="*">
		<table  border="1">
		<tr>
			<td>
				<xsl:value-of select="name(.)" />
			</td>
			<td>
				<xsl:value-of select="." />
			</td>
			<td>
	<xsl:for-each select="*">
		<table>
		<tr>
			<td>
				<xsl:value-of select="name(.)" />
			</td>
			<td>
				<xsl:value-of select="." />
			</td>
			<td>
	<xsl:for-each select="*">
		<table  border="1">
		<tr>
			<td>
				<xsl:value-of select="name(.)" />
			</td>
			<td>
				<xsl:value-of select="." />
				<xsl:value-of select="@type" />
			</td>
			<td>
	<xsl:for-each select="*">
		<table  border="1">
		<tr>
			<td>
				<xsl:value-of select="name(.)" />
			</td>
			<td>
				<xsl:value-of select="." />
			</td>
			<td>
	<xsl:for-each select="*">
		<table  border="1">
		<tr>
			<td>
				<xsl:value-of select="name(.)" />
			</td>
			<td>
				<xsl:value-of select="." />
				<xsl:value-of select="@type" />
			</td>
			<td>
	<xsl:for-each select="*">
		<table  border="1">
		<tr>
			<td>
				<xsl:value-of select="name(.)" />
			</td>
			<td>
				<xsl:value-of select="." />
			</td>
			<td>
	<xsl:for-each select="*">
		<table  border="1">
		<tr>
			<td>
				<xsl:value-of select="name(.)" />
			</td>
			<td>
				<xsl:value-of select="." />
				<xsl:value-of select="@type" />
			</td>
			<td>
	<xsl:for-each select="*">
		<table  border="1">
		<tr>
			<td>
				<xsl:value-of select="name(.)" />
			</td>
			<td>
				<xsl:value-of select="." />
				<xsl:value-of select="@type" />
			</td>
		</tr>
		</table>
	</xsl:for-each>
			</td>
		</tr>
		</table>
	</xsl:for-each>
			</td>
		</tr>
		</table>
	</xsl:for-each>
			</td>
		</tr>
		</table>
	</xsl:for-each>
			</td>
		</tr>
		</table>
	</xsl:for-each>
			</td>
		</tr>
		</table>
	</xsl:for-each>
			</td>
		</tr>
		</table>
	</xsl:for-each>
			</td>
		</tr>
		</table>
	</xsl:for-each>
			</td>
		</tr>
		</table>
	</xsl:for-each>
			</td>
		</tr>
		</table>
	</xsl:for-each>

</td>
</tr>
</xsl:for-each>
</table>
</body>
</html>
</xsl:template>
</xsl:stylesheet>
