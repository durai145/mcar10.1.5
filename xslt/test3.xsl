<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
  <xsl:template match="INVENTORY">
    <INVENTORY>
      <xsl:apply-templates/>
    </INVENTORY>
  </xsl:template>

  <xsl:template match="ITEM">
    <ITEM>
      <xsl:for-each select="*">
        <xsl:attribute name="{name()}">
          <xsl:value-of select="text()"/>
        </xsl:attribute>

      </xsl:for-each>
    </ITEM>
  </xsl:template>
</xsl:stylesheet>
