<?xml version="1.0"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform" xmlns="http://www.w3.org/1999/xhtml">
  <xsl:output indent="yes" method="html" />
  <xsl:include href="chrome.xsl" />

  <xsl:template name="content">

      <div id="content">

          <h1>Markers</h1>
          <xsl:if test="count(/project/file/markers) &lt; 1">
            <div class="alert alert-success">No markers have been found in this project.</div>
          </xsl:if>
          <div id="marker-accordion">
            <xsl:for-each select="/project/file">
                <xsl:if test="markers">
                    <h3>
                        <a href="#">
                            <xsl:value-of select="@path"/>
                            &#160;
                            <span class="badge"><xsl:value-of select="count(markers/*)"/></span>
                        </a>
                    </h3>
                    <div>
                        <table class="table">
                            <tr><th>Type</th><th>Line</th><th>Description</th></tr>
                            <xsl:for-each select="markers/*">
                                <xsl:sort select="line"/>
                                <tr>
                                    <td><xsl:value-of select="name()"/></td>
                                    <td><xsl:value-of select="@line"/></td>
                                    <td><xsl:value-of select="." disable-output-escaping="yes"/></td>
                                </tr>
                            </xsl:for-each>
                        </table>
                    </div>
                </xsl:if>
            </xsl:for-each>
        </div>

    </div>
  </xsl:template>

</xsl:stylesheet>
