<?xml version="1.0"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform" xmlns="http://www.w3.org/1999/xhtml">
    <xsl:include href="helpers.xsl"/>

    <xsl:output indent="yes" method="xml" omit-xml-declaration="yes" doctype-public="-//W3C//DTD XHTML 1.0 Transitional//EN" doctype-system="http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"/>

    <xsl:template match="/" name="root">
        <xsl:param name="pageId" select="''"/>
        <html>
            <xsl:if test="$pageId!=''">
                <xsl:attribute name="id"><xsl:value-of select="$pageId" /></xsl:attribute>
            </xsl:if>
            <head>
                <title><xsl:value-of select="$title"/></title>
                <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet"/>
                <link rel="stylesheet" href="{$root}css/template.css" type="text/css" />
                <script type="text/javascript" src="{$root}js/jquery-1.7.1.min.js"> </script>
                <script type="text/javascript" src="{$root}js/bootstrap.min.js"> </script>
                <script type="text/javascript" src="{$root}js/template.js"> </script>
            </head>
            <body>
                <xsl:call-template name="content"/>
            </body>
        </html>
    </xsl:template>

</xsl:stylesheet>
