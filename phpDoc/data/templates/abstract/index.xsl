<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform" xmlns="http://www.w3.org/1999/xhtml">
    <xsl:output indent="yes" method="html"/>
    <xsl:include href="chrome.xsl"/>
    <xsl:include href="chrome/header.xsl"/>
    <xsl:include href="sidebar/sections/charts.xsl"/>
    <xsl:include href="sidebar/sections/reports.xsl"/>

    <xsl:template match="/">
        <xsl:call-template name="root">
            <xsl:with-param name="pageId" select="'frameset'" />
        </xsl:call-template>
    </xsl:template>

    <xsl:template name="content">
        <div class="container-fluid">
            <header class="row">
                <section class="col-sm-5">
                    <xsl:call-template name="page-header" />
                </section>
                <section class="col-sm-7">
                    <ul class="nav nav-tabs pull-right">
                        <xsl:call-template name="sidebar-section-charts"/>
                        <xsl:call-template name="sidebar-section-reports"/>
                    </ul>
                </section>
            </header>
            <div class="row">
                <section class="col-sm-3">
                    <iframe name="nav" id="nav" src="{$root}nav.html"/>
                </section>
                <section class="col-sm-9">
                    <iframe name="content" id="content" src="{$root}content.html"/>
                </section>
            </div>
            <footer class="row">
                <section class="col-sm-12">
                </section>
            </footer>
        </div>
    </xsl:template>

</xsl:stylesheet>
