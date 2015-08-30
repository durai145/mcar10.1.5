<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0"  xmlns:ns1="http://www.heaerie.com">

<xsl:function name="ns1:functionName">
    	<xsl:param name="employee_name"/>
    	<xsl:value-of select="$employee_name"/>
    </xsl:function>

<xsl:template match="*">
<html>
<body>
<table border="1">
<tr>
<td>
		<xsl:value-of select="name(.)" />
</td>
</tr>
</table>
</body>
</html>
</xsl:template>
</xsl:stylesheet>
