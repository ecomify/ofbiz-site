<?php //Variable declarations for region templates
  $head_title = '<title>The Apache OFBiz&reg; Project - Security</title>';
?>

<!-- content -->
  <!-- page content -->
  <section id="content" class="sidebar">
    <header class="headerPage">
      <div class="container clearfix">
        <div class="row">
          <h1 class="span8">Security</h1>
          <div class="span4" id="navTrail"> <a href="index.html" class="homeLink">home</a><span>/</span><a href="#">Community</a><span>/</span> <span class="current">Security</span> </div>
        </div>
      </div>
    </header>
    <div class="slice clearfix">
      <div class="container">
        <div class="row">
            <h2><a id="security"></a>Security Vulnerabilities</h2>
            <div class="divider"><span></span></div>
            <p>Please see the  <a href="https://www.apache.org/security" target="external">ASF Security Team webpage</a> for further information about reporting a security vulnerability as well as their contact information. </p>
            
            <p><strong>We strongly encourage OfBiz users to report security problems affecting OFBiz to the private security mailing lists (either security@ofbiz.apache.org or security@apache.org), before disclosing them in a public forum.</strong></p>
            
            <p>Note that we no longer create CVEs for post-auth attacks done using demo credentials, notably using the admin user. 
            <strong> <a href="https://s.apache.org/dsj2p"> Rather create bugs reports in our issue tracker (Jira) for that.</a></strong></p>
            
            <p>The main reason we no longer create CVEs for post-auth attacks done using demo credentials is because 
            <a href="https://ci.apache.org/projects/ofbiz/site/trunk/readme/html5/README.html#security"> we highly suggest to OFBiz users to not use credentials demo in production</a>
             and we expect OFBiz users to do so. We also reject post-auth vulnerabilities because we have a solid CSRF defense.</p>
            
            <p>You might be interested by our <a href="https://cwiki.apache.org/confluence/display/OFBIZ/Keeping+OFBiz+secure" target="external">Keeping OFBiz secure wiki page.</a></p>
            
            <h3>List of Known Vulnerabilities</h3>
            <ul class="iconsList">
                <li><i class="icon-pin"></i> <a href="//cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2021-44832" target="external">CVE-2021-44832</a>; affected all releases before 17.12.09 and 18.12.05; fixed in 17.12.09 and 18.12.05 with commits <a href="https://github.com/apache/ofbiz-framework/commit/00896e7" target="external">00896e7</a>, <a href="https://github.com/apache/ofbiz-plugins/commit/c69bc8f" target="external">c69bc8f</a>, <a href="https://github.com/apache/ofbiz-framework/commit/5b6e427" target="external">5b6e427</a>
                <li><i class="icon-pin"></i> <a href="//cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2021-45105" target="external">CVE-2021-45105</a>; affected all releases before 17.12.09 and 18.12.04; fixed in 17.12.09 and 18.12.04 with commits <a href="https://github.com/apache/ofbiz-framework/commit/00896e7" target="external">00896e7</a>, <a href="https://github.com/apache/ofbiz-plugins/commit/c69bc8f" target="external">c69bc8f</a>, <a href="https://github.com/apache/ofbiz-framework/commit/4442c2a" target="external">4442c2a</a>
                <li><i class="icon-pin"></i> <a href="//cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2021-44228" target="external">CVE-2021-44228</a>; affected all releases before 17.12.09 and 18.12.03; fixed in 17.12.09 and 18.12.03 with commits <a href="https://github.com/apache/ofbiz-framework/commit/00896e7" target="external">00896e7</a>, <a href="https://github.com/apache/ofbiz-plugins/commit/c69bc8f" target="external">c69bc8f</a>, <a href="https://github.com/apache/ofbiz-framework/commit/bccf140" target="external">bccf140</a>
                <li><i class="icon-pin"></i> <a href="//cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2021-37608" target="external">CVE-2021-37608</a>; affected all releases before 17.12.08; fixed in 17.12.08 with commit <a href="https://github.com/apache/ofbiz-framework/commit/8d49af4/" target="external">8d49af4</a>
                <li><i class="icon-pin"></i> <a href="//cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2021-30128" target="external">CVE-2021-30128</a>; affected all releases before 17.12.07; fixed in 17.12.07 with commits <a href="https://github.com/apache/ofbiz-framework/commit/643b9c7/" target="external">643b9c7</a> <a href="https://github.com/apache/ofbiz-plugins/commit/a343812/" target="external">a343812</a> <a href="https://github.com/apache/ofbiz-framework/commit/62e657f/" target="external">62e657f</a> <a href="https://github.com/apache/ofbiz-framework/commit/fcc0078/" target="external">fcc0078</a> <a href="https://github.com/apache/ofbiz-framework/commit/3f97578/" target="external">3f97578</a> <a href="https://github.com/apache/ofbiz-framework/commit/7fd9d05/" target="external">7fd9d05</a>.</li>
                <li><i class="icon-pin"></i> <a href="//cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2021-29200" target="external">CVE-2021-29200</a>; affected all releases before 17.12.07; fixed in 17.12.07 with commit <a href="https://github.com/apache/ofbiz-framework/commit/1bc8a20/" target="external">1bc8a20</a>.</li>
                <li><i class="icon-pin"></i> <a href="//cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2021-26295" target="external">CVE-2021-26295</a>; affected all releases before 17.12.07; fixed in 17.12.06 with commit <a href="https://github.com/apache/ofbiz-framework/commit/af9ed4e/" target="external">af9ed4e</a>.</li>
                <li><i class="icon-pin"></i> <a href="//cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2020-9496" target="external">CVE-2020-9496</a>; affected releases: 17.12.03; fixed in 17.12.04.</li>
                <li><i class="icon-pin"></i> <a href="//cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2020-13923" target="external">CVE-2020-13923</a>; affected all releases before 17.12.04; fixed in 17.12.04.</li>
                <li><i class="icon-pin"></i> <a href="//cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2019-12425" target="external">CVE-2019-12425</a>; affected releases: 17.12.01; fixed in 17.12.03 with commit <a href="//gitbox.apache.org/repos/asf?p=ofbiz-framework.git;h=793628b" target="external">793628b</a>.</li>
                <li><i class="icon-pin"></i> <a href="//cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2019-0235" target="external">CVE-2019-0235</a>; affected releases: 17.12.01; fixed in 17.12.03 with commits <a href="//gitbox.apache.org/repos/asf?p=ofbiz-framework.git;h=82ef7a5" target="external">82ef7a5</a>, <a href="//gitbox.apache.org/repos/asf?p=ofbiz-plugins.git;h=62f9b45" target="external">62f9b45</a>.</li>
                <li><i class="icon-pin"></i> <a href="//cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2020-1943" target="external">CVE-2020-1943</a>; affected releases: from 16.11.01 to 16.11.07; fixed in 17.12.01.</li>
                <li><i class="icon-pin"></i> <a href="//cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2019-12426" target="external">CVE-2019-12426</a>; affected releases: from 16.11.01 to 16.11.06; fixed in 16.11.07 with revision <a href="//svn.apache.org/viewvc?view=revision&revision=1869887" target="external">1869887</a>.</li>
                <li><i class="icon-pin"></i> <a href="//cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2018-17200" target="external">CVE-2018-17200</a>; affected releases: from 16.11.01 to 16.11.05; fixed in 16.11.06 with revisions <a href="//svn.apache.org/viewvc?view=revision&revision=1850017" target="external">1850017</a>, <a href="//svn.apache.org/viewvc?view=revision&revision=1850019" target="external">1850019</a>.</li>
                <li><i class="icon-pin"></i> <a href="//cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2019-0189" target="external">CVE-2019-0189</a>; affected releases: from 16.11.01 to 16.11.05; fixed in 16.11.06 with revisions specified in <a href="//issues.apache.org/jira/browse/OFBIZ-10770" target="external">OFBIZ-10770</a>, <a href="//issues.apache.org/jira/browse/OFBIZ-10837" target="external">OFBIZ-10837</a>.</li>
                <li><i class="icon-pin"></i> <a href="//cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2019-10073" target="external">CVE-2019-10073</a>; affected releases: from 16.11.01 to 16.11.05; fixed in 16.11.06 with revisions <a href="//svn.apache.org/viewvc?view=revision&revision=1858438" target="external">1858438</a>, <a href="//svn.apache.org/viewvc?view=revision&revision=1858543" target="external">1858543</a>, <a href="//svn.apache.org/viewvc?view=revision&revision=1860595" target="external">1860595</a>, <a href="//svn.apache.org/viewvc?view=revision&revision=1860616" target="external">1860616</a>.</li>
                <li><i class="icon-pin"></i> <a href="//cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2019-10074" target="external">CVE-2019-10074</a>; affected releases: from 16.11.01 to 16.11.05; fixed in 16.11.06 with revision <a href="//svn.apache.org/viewvc?view=revision&revision=1858533" target="external">1858533</a>.</li>
                <li><i class="icon-pin"></i> <a href="//cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2018-8033" target="external">CVE-2018-8033</a>; affected releases: from 16.11.01 to 16.11.04; fixed in 16.11.05 with revisions <a href="//svn.apache.org/viewvc?view=revision&revision=1833708" target="external">1833708</a>, <a href="//svn.apache.org/viewvc?view=revision&revision=1836141" target="external">1836141</a>.</li>
                <li><i class="icon-pin"></i> <a href="//cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2011-3600" target="external">CVE-2011-3600</a>; affected releases: from 16.11.01 to 16.11.04; fixed in 16.11.05 with revisions <a href="//svn.apache.org/viewvc?view=revision&revision=1833724" target="external">1833724</a>, <a href="//svn.apache.org/viewvc?view=revision&revision=1833708" target="external">1833708</a>, <a href="//svn.apache.org/viewvc?view=revision&revision=1836141" target="external">1836141</a>.</li>
                <li><i class="icon-pin"></i> <a href="//cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2017-15714" target="external">CVE-2017-15714</a>; affected releases: from 16.11.01 to 16.11.03; fixed in 16.11.04 with revision <a href="//svn.apache.org/viewvc?view=revision&revision=1818482" target="external">1759065</a></li>
                <li><i class="icon-pin"></i> <a href="//cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2016-6800" target="external">CVE-2016-6800</a>; affected releases: 13.07.*, 12.04.*, 11.04.*; fixed in 16.11.01 with revisions <a href="//svn.apache.org/viewvc?view=revision&revision=1759065" target="external">1759065</a> and <a href="//svn.apache.org/viewvc?view=revision&revision=1759218" target="external"> 1759218</a></li>
                <li><i class="icon-pin"></i> <a href="//cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2016-4462" target="external">CVE-2016-4462</a>; affected releases: 13.07.*, 12.04.*, 11.04.*; fixed in 16.11.01 with revisions <a href="//svn.apache.org/viewvc?view=revision&revision=1761978" target="external">1761978</a>, <a href="//svn.apache.org/viewvc?view=revision&revision=1761986" target="external">1761986</a> and <a href="//svn.apache.org/viewvc?view=revision&revision=1761987" target="external"> 1761987</a></li>
                <li><i class="icon-pin"></i> <a href="//cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2016-2170" target="external">CVE-2016-2170</a>; affected releases: 13.07.02 and earlier versions (13.07.*), 12.04.05 and earlier versions (12.04.*); fixed in 13.07.03 and 12.04.06</li>
                <li><i class="icon-pin"></i> <a href="//cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2015-3268" target="external">CVE-2015-3268</a>; affected releases: 13.07.02 and earlier versions (13.07.*), 12.04.05 and earlier versions (12.04.*); fixed in 13.07.03 and 12.04.06</li>
                <li><i class="icon-pin"></i> <a href="//cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2014-0232" target="external">CVE-2014-0232</a>; affected releases: 12.04.03 and earlier versions (12.04.*), 11.04.04 and earlier versions (11.04.*); fixed in 12.04.04 and 11.04.05</li>
                <li><i class="icon-pin"></i> <a href="//cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2013-2250" target="external">CVE-2013-2250</a>; affected releases: 12.04.01, 11.04.02 and earlier versions (11.04.*), 10.04.05 and earlier versions (10.04.*); fixed in 12.04.02, 11.04.03 and 10.04.06</li>
                <li><i class="icon-pin"></i> <a href="//cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2013-2137" target="external">CVE-2013-2137</a>; affected releases: 12.04.01, 11.04.02 and earlier versions (11.04.*), 10.04.05 and earlier versions (10.04.*); fixed in 12.04.02, 11.04.03 and 10.04.06</li>
                <li><i class="icon-pin"></i> <a href="//cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2013-0177" target="external">CVE-2013-0177</a>; affected releases: 11.04.01, 10.04.04 and earlier versions (10.04.*); fixed in 11.04.02 and 10.04.05</li>
                <li><i class="icon-pin"></i> <a href="//cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2012-3506" target="external">CVE-2012-3506</a>; affected releases: 10.04.02, 10.04 (10.04.01); fixed in 10.04.03</li>
                <li><i class="icon-pin"></i> <a href="//cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2012-1622" target="external">CVE-2012-1622</a>; affected releases: 10.04 (10.04.01); fixed in 10.04.02</li>
                <li><i class="icon-pin"></i> <a href="//cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2012-1621" target="external">CVE-2012-1621</a>; affected releases: 10.04 (10.04.01); fixed in 10.04.02</li>
                <li><i class="icon-pin"></i> <a href="//cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2010-0432" target="external">CVE-2010-0432</a>; affected releases: 09.04; fixed in 09.04.01</li>
            </ul>
        </div>
      </div>
    </div>
  </section>

<!-- content -->
