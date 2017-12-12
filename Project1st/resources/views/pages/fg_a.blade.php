  <link rel="stylesheet" type="text/css" href="bootstrap/dist/css/bootstrap.min.css">


  <nav id="myScrollspy" class="navbar navbar-default navbar-static"
role="navigation">
 <div class="navbar-header">
 <button class="navbar-toggle" type="button" data-toggle="collapse"
 data-target=".bs-js-navbar-scrollspy">
 <span class="sr-only">Toggle navigation</span>
 <span class="icon-bar"></span>
 <span class="icon-bar"></span>
 <span class="icon-bar"></span>
 </button>
 <a class="navbar-brand" href="#">Tutorial Name</a>
 </div>
 <div class="collapse navbar-collapse bs-js-navbar-scrollspy">
 <ul class="nav navbar-nav">
 <li class="active"><a href="#ios">iOS</a></li>
 <li><a href="#svn">SVN</a></li>
 <li class="dropdown">
 <a href="#" id="navbarDrop1" class="dropdown-toggle"
 data-toggle="dropdown">

 Java <b class="caret"></b>
 </a>
 <ul class="dropdown-menu" role="menu"
 aria-labelledby="navbarDrop1">
 <li><a href="#jmeter" tabindex="-1">jmeter</a></li>
 <li><a href="#ejb" tabindex="-1">ejb</a></li>
 <li class="divider"></li>
 <li><a href="#spring" tabindex="-1">spring</a></li>
 </ul>
 </li>
 </ul>
 </div>
</nav>
<div data-spy="scroll" data-target="#myScrollspy" data-offset="0"
 style="height:200px;overflow:auto; position: relative;">
 <div class="section">
 <h4 id="ios">iOS<small><a href="#" onclick="removeSection(this);">
 &times; Remove this section</a></small>
 </h4>
 <p>iOS is a mobile operating system developed and distributed by
 Apple Inc. Originally released in 2007 for the iPhone, iPod Touch,
 and Apple TV. iOS is derived from OS X, with which it shares
 the Darwin foundation. iOS is Apple's mobile version of the OS X
 operating system used on Apple computers.</p>
 </div>
 <div class="section">
 <h4 id="svn">SVN<small></small></h4>
 <p>Apache Subversion which is often abbreviated as SVN, is a software
 versioning and revision control system distributed under an open
 source license. Subversion was created by CollabNet Inc. in 2000,
 but now it is developed as a project of the Apache Software
 Foundation, and as such is part of a rich community of developers
 and users.</p>
 </div>
 <div class="section">
 <h4 id="jmeter">jMeter<small><a href="#" onclick="removeSection(this);">
 &times; Remove this section</a></small>
 </h4>
 <p>jMeter is an Open Source testing software. It is 100% pure Java
 application for load and performance testing.</p>
 </div>
 <div class="section">
 <h4 id="ejb">EJB</h4>
 <p>Enterprise Java Beans (EJB) is a development architecture for
 building highly scalable and robust enterprise level applications
 to be deployed on J2EE compliant Application Server such as JBOSS,
 Web Logic etc.</p>
 </div>
 <div class="section">
 <h4 id="spring">Spring</h4>
 <p>Spring framework is an open source Java platform that provides
 comprehensive infrastructure support for developing robust Java
 applications very easily and very rapidly.</p>
 <p>Spring framework was initially written by Rod Johnson and was
 first released under the Apache 2.0 license in June 2003.</p>
 </div>
</div>

<script type="text/javascript">
 $(function(){
 removeSection = function(e) {
 $(e).parents(".section").remove();

 $('[data-spy="scroll"]').each(function () {
 var $spy = $(this).scrollspy('refresh')
 });
 }
 $("#myScrollspy").scrollspy();
 $('#myScrollspy').on('activate.bs.scrollspy', function () {
 var currentItem = $(".nav li.active > a").text();
 $("#activeitem").html("Currently you are viewing - " + currentItem);
 })
});
</script>