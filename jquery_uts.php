<!--<!DOCTYPE	html>	
<html>	
<head>	
<title>Page	Title</title>	
	<link	rel="stylesheet" href="jquery.mobile-1.3.2.min.css"/>	
	<script	src="jquery-1.9.1.min.js"></script>	
	<script	src="jquery.mobile-1.3.2.min.js"></script>	
</head>	
<body>	
<div id="homePage"	data-role="page">	
	<div	data-role="header">	
		<h1>Page	Title</h1>	
	</div>	
	<div data-role="content">	
		<p>My	page	content</p>	
		<p ><a href="#about">About this app</a></p>	
        <a href="#about" data-transition="slideup" data-role="button" data-icon="info">About	this app</a>
        <a href="#about" data-transition="fade" data-role="button" data-icon="arrow-l">About	this app</a>
        <a href="#about" data-transition="pop" data-role="button" data-icon="arrow-r">About this app</a>
        <a href="#about" data-transition="slidedown" data-role="button" data-icon="arrow-r">About this app</a></p>
	</div>
    <div data-role="content">	
		<p align="center">Does	app	rocks?</p>	
		<div data-role="controlgroup" data-type="horizontal" align="center">	
			<a href="#homePage" data-role="button">Yes</a>	
			<a href="#homePage" data-role="button">No</a>	
			<a href="#homePage" data-role="button">Maybe</a>
		</div>
        <li>	
			<h3	class="ui-li-heading">Fly	by	Night</h3>	
			<p	class="ui-li-desc">(1975)</p>
        </li>
	</div>		
	<div data-role="footer" data-id="foo1" data-position="fixed">
	<div data-role="navbar">
		<ul>
			<li><a href="a.html">Info</a></li>
			<li><a href="b.html">Friends</a></li>
			<li><a href="c.html">Albums</a></li>
			<li><a href="d.html">Emails</a></li>
		</ul>
	</div>/navbar 
</div>
</div>
<div data-role="page" id="about">	
	<div data-role="header">	
		<h1>About	This	App</h1>
        <p><a	href="#about" data-role="button">About this app</a></p>		
	</div>	
	
</div>	
<div data-role="page" id="about">	
	<div data-role="header">	
		<h1>About This App</h1>	
	</div>	
	<div data-role="content">	
		<p>This	app	rocks!	<a href="#homePage" data-transition="slideup" >Go home</a></p>	
	</div>	
</div>	
</body>	
</html>!-->
<html>	
<head>	
<title>Page	Title</title>
	<link	rel="stylesheet" href="jquery.mobile-1.3.2.min.css"/>	
	<script	src="jquery-1.9.1.min.js"></script>	
	<script	src="jquery.mobile-1.3.2.min.js"></script>
</head>	
<body>	
<div id="Home"	data-role="page">	
	<div	data-role="header">	
		<h1>Subtema 3 </h1>	
		<h1>Gaya dan Gerak</h1>
	</div>	
	<div data-role="content">	
		<h1><img src="..\tahukah_kamu\sepeda.png"></h1>
	</div>
      <div data-role="footer" data-id="foo1" data-position="fixed">
      <div data-role="navbar">
          <ul>
              <li><a href="#Home" class="ui-btn-active ui-state-persist">Home</a></li>
              <li><a href="#Menu">Menu</a></li>
          </ul>
      </div>
  </div>
</div>
<div data-role="page" id="Menu">	
	<div data-role="header">	
		<h1>Menu</h1>
        <a href="#Home" data-transition="slideup" data-role="button" data-icon="arrow-l">Back</a>
       		
	</div>	
    <div data-role="content">
    	<a href="#html" data-transition="slide" data-role="button" data-icon="arrow-r" data-iconpos="right"><img src="..\tahukah_kamu\taukah_kamu.png"></a>
        <a href="#CSS" data-transition="fade" data-role="button" data-icon="arrow-r"data-iconpos="right"><img src="..\tahukah_kamu\ayo_lakukan.png"></a>
        <a href="#JScript" data-transition="pop" data-role="button" data-icon="arrow-r" data-iconpos="right">Sekilas JScript</a>
    </div>
    <div data-role="footer" data-id="foo1" data-position="fixed">
      <div data-role="navbar">
          <ul>
              <li><a href="#Home">Home</a></li>
              <li><a href="#Menu" class="ui-btn-active ui-state-persist">Menu</a></li>
            
          </ul>
      </div>
  </div>	
</div>	

<div id="html"	data-role="page">	
	<div	data-role="header">	
		<h1>Sekilas HTML</h1>
        <a href="#Home" data-transition="slideup" data-role="button" data-icon="arrow-l">Back</a>	
	</div>	
	<div data-role="content">	
		Selamat Datang di tutorial singat sebagai pengantar web design.<br>
        Setelah mempelajari tutorial ini, anda akan:<br>
        <ul>
        	<li>Mengenal sekilas HTML</li>
        	<li>Mengenal sekilas CSS</li>
        	<li>Mengenal sekilas JScript</li>
        </ul>
        Untuk mempelajari ini, anda cukup menggunakan aplikasi Notepad atau yang lebih khusus HTML Editor seperti Notepad++, Edit++ dan untuk melihat hasilnya menggunakan Browser
	</div>
      <div data-role="footer" data-id="foo1" data-position="fixed">
      <div data-role="navbar">
          <ul>
              <li><a href="#Home">Home</a></li>
              <li><a href="#Menu">Menu</a></li>
              <li><a href="#Contact" data-rel="dialog">Contact</a></li>
          </ul>
      </div>
  </div>
</div>
<div id="CSS"	data-role="page">	
	<div	data-role="header">	
		<h1>Sekilas HTML</h1>
        <a href="#Menu" data-transition="slideup" data-role="button" data-icon="arrow-l">Back</a>	
	</div>	
	<div data-role="content">	
		Selamat Datang di tutorial singat sebagai pengantar web design.<br>
        Setelah mempelajari tutorial ini, anda akan:<br>
        <ul>
        	<li><a href="#html">Mengenal sekilas HTML</a></li>
        	<li><a href="#css">Mengenal sekilas CSS</a></li>
        	<li><a href="#css">Mengenal sekilas JScript</a></li>
        </ul>
        Untuk mempelajari ini, anda cukup menggunakan aplikasi Notepad atau yang lebih khusus HTML Editor seperti Notepad++, Edit++ dan untuk melihat hasilnya menggunakan Browser
	</div>
      <div data-role="footer" data-id="foo1" data-position="fixed">
      <div data-role="navbar">
          <ul>
              <li><a href="#Home">Home</a></li>
              <li><a href="#Menu">Menu</a></li>
              <li><a href="#Contact">Contact</a></li>
          </ul>
      </div>
  </div>
</div>
<div id="JScript" data-role="page">	
	<div	data-role="header">	
		<h1>Sekilas CSS</h1>
        <a href="#Menu" data-transition="slideup" data-role="button" data-icon="arrow-l">Back</a>	
	</div>	
	<div data-role="content">	
		Selamat Datang di tutorial singat sebagai pengantar web design.<br>
        Setelah mempelajari tutorial ini, anda akan:<br>
        <ul>
        	<li><a href="#html">Mengenal sekilas HTML</a></li>
        	<li><a href="#css">Mengenal sekilas CSS</a></li>
        	<li><a href="#css">Mengenal sekilas JScript</a></li>
        </ul>
        Untuk mempelajari ini, anda cukup menggunakan aplikasi Notepad atau yang lebih khusus HTML Editor seperti Notepad++, Edit++ dan untuk melihat hasilnya menggunakan Browser
	</div>
      <div data-role="footer" data-id="foo1" data-position="fixed">
      <div data-role="navbar">
          <ul>
              <li><a href="#Home">Home</a></li>
              <li><a href="#Menu">Menu</a></li>
              <li><a href="#Contact">Contact</a></li>
          </ul>
      </div>
  </div>
</div>
</body>	
</html>