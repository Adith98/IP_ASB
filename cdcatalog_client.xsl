<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
<xsl:template match="/">
<h2 style="text-align:center">About us</h2>
<table style="margin-left: auto;
    margin-right: auto;" border="1">
<tr bgcolor="#9acd32">
<th style="text-align:left">Name</th>
<th style="text-align:left">Roll Number</th>
<th style="text-align:left">Year</th>
<th style="text-align:left">Division</th>
<th style="text-align:left">Batch</th>
</tr>
<xsl:for-each select="catalog/cd">
<tr>
<td>
<xsl:value-of select="title"/>
</td>
<td>
<xsl:value-of select="artist"/>
</td>
<td>
<xsl:value-of select="country"/>
</td>
<td>
<xsl:value-of select="company"/>
</td>
<td>
<xsl:value-of select="price"/>
</td>
</tr>
</xsl:for-each>
</table>
<a href="javascript:history.go(-1)">Go Back</a>
</xsl:template>
</xsl:stylesheet>