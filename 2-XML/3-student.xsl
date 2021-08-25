<?xml version="1.0" encoding ="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:template match="/">
<html>
    <table border="1">
        <tr>
            <th>NAME</th><th>CLASS</th><th>ROLL NO</th>
        </tr>
        
        <xsl:for-each select="database/student">
            <tr>
                <td><xsl:value-of select="name" /></td>
                <td><xsl:value-of select="class" /></td>
                <td><xsl:value-of select="rollno" /></td>
            </tr>
        </xsl:for-each>
    </table>
</html>
</xsl:template>
</xsl:stylesheet>
