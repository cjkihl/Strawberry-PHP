<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform" xmlns="http://www.w3.org/1999/xhtml">
    <xsl:output indent="yes" method="html" />
    <xsl:include href="chrome.xsl" />
    <xsl:include href="sidebar/header.xsl" />
    <xsl:include href="sidebar/footer.xsl" />
    <xsl:include href="sidebar/sections/api.xsl"/>
    <xsl:include href="sidebar/sections/charts.xsl"/>
    <xsl:include href="sidebar/sections/files.xsl"/>
    <xsl:include href="sidebar/sections/namespaces.xsl"/>
    <xsl:include href="sidebar/sections/packages.xsl"/>
    <xsl:include href="sidebar/sections/reports.xsl"/>

    <xsl:param name="section.api.show" />
    <xsl:param name="section.packages.show" />
    <xsl:param name="section.namespaces.show" />
    <xsl:param name="section.files.show" />
    <xsl:param name="section.files.show-elements" />
    <xsl:param name="section.charts.show" />
    <xsl:param name="section.reports.show" />

    <xsl:template name="content">
        <div id="sidebar">
            <div id="sidebar-header">
                <xsl:call-template name="sidebar-header"/>
            </div>

            <div id="sidebar-nav">
                <xsl:if test="$section.api.show != 'false'">
                    <xsl:if test="count(/project/file/*/docblock/tag[@name='api']|/project/file/class/*/docblock/tag[@name='api']|/project/file/interface/*/docblock/tag[@name='api']) > 0">
                    <h3 data-toggle="collapse" data-target="#sidebar-api-menu" id="sidebar-api">API</h3>
                    <div class="collapse" id="sidebar-api-menu">
                        <xsl:call-template name="sidebar-section-api"/>
                    </div>
                    </xsl:if>
                </xsl:if>

                <xsl:if test="$section.packages.show != 'false'">
                    <xsl:if test="count(/project/package[@name != 'Default']) > 0">
                    <h3 data-toggle="collapse" data-target="#sidebar-packages-menu" id="sidebar-packages" class="collapsed">Packages</h3>
                    <div class="collapse" id="sidebar-packages-menu">
                        <xsl:call-template name="sidebar-section-packages"/>
                    </div>
                    </xsl:if>
                </xsl:if>


                <xsl:if test="$section.namespaces.show != 'false'">
                    <xsl:if test="count(/project/namespace[@name != 'default']) > 0">
                    <h3 data-toggle="collapse" data-target="#sidebar-namespaces-menu" id="sidebar-namespaces" class="collapsed">Namespaces</h3>
                    <div class="collapse" id="sidebar-namespaces-menu">
                        <xsl:call-template name="sidebar-section-namespaces"/>
                    </div>
                    </xsl:if>
                </xsl:if>

                <xsl:if test="$section.files.show != 'false'">
                <h3 data-toggle="collapse" data-target="#sidebar-files-menu" id="sidebar-files" class="collapsed">Files</h3>
                <div class="collapse" id="sidebar-files-menu">
                    <xsl:call-template name="sidebar-section-files"/>
                </div>
                </xsl:if>

                <xsl:if test="$section.charts.show != 'false'">
                <h3 id="sidebar-charts">Charts</h3>
                <div class="sidebar-section">
                    <ul style="list-style-image: url('css/phpdoc/images/icons/chart15x12.png');">
                        <xsl:call-template name="sidebar-section-charts"/>
                    </ul>
                </div>
                </xsl:if>

                <xsl:if test="$section.reports.show != 'false'">
                    <h3 id="sidebar-reports">Reports</h3>
                    <div class="sidebar-section">
                        <ul style="list-style-image: url('css/phpdoc/images/icons/reports9x12.png');">
                            <xsl:call-template name="sidebar-section-reports"/>
                        </ul>
                    </div>
                </xsl:if>
            </div>

            <div id="sidebar-footer">
                <xsl:call-template name="sidebar-footer"/>
            </div>
        </div>
    </xsl:template>

</xsl:stylesheet>
