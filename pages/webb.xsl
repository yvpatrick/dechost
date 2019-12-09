<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0"
 xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
 <xsl:template match="/">
  <html>
   <head>
    <title>Login</title>
   </head>
   <body>
   <table border="3"  align="center" >
     <tr>
      <th>FirstName</th>
      <th>LastName</th>
      <th>Email</th>
      <th>Password</th>
      <th>ConfirmPassword</th>
      <th>mobile</th>
     </tr>
      <xsl:for-each select="login/register">
     <tr>
      <td><xsl:value-of select="FirstName"/></td>
      <td><xsl:value-of select="LastName"/></td>
      <td><xsl:value-of select="Email"/></td>
      <td><xsl:value-of select="Password"/></td>
       <td><xsl:value-of select="ConfirmPassword"/></td>
        <td><xsl:value-of select="mobile"/></td>
     </tr>
      </xsl:for-each>
   </table>
   </body>
  </html>
</xsl:template>
</xsl:stylesheet>