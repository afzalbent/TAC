<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>TAF</title>
<link  rel="stylesheet" href="css/bootstrap.min.css"/>
 <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>    
 <link rel="stylesheet" href="css/main.css">
 <link  rel="stylesheet" href="css/font.css">
 <script src="js/jquery.js" type="text/javascript"></script>

  <script src="js/bootstrap.min.js"  type="text/javascript"></script>
</head>

<body>

<!--container-->
<div class="container-fluid"  style="background:#000 url(nature.jpg);">>
<!--header-->
<div class="header">
<div class="row">
<div class="col-lg-6">
<span class="logo"><a href="new.php" style="text-decoration:none; margin-left:10px; margin-top:10px; color:orange;">TAF</a></span></div>
<div class="col-md-4 col-md-offset-2">
<span class="pull-right top title1" ><span class="log1"><a href="new.html" class="log"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;Signout</button></a></span></div>
</div></div><!--end of header-->
<!--slider-->
<div class="container-fluid">
<!---row for slider--->
<div class="row b" style="background-color:#ff9700;">
<div class="col-sm-7" style="float:left;margin-left:0px;">
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
	<li data-target="#carousel-example-generic" data-slide-to="3"></li>
	<li data-target="#carousel-example-generic" data-slide-to="4"></li>
	<li data-target="#carousel-example-generic" data-slide-to="5"></li>
	<li data-target="#carousel-example-generic" data-slide-to="6"></li>
    <li data-target="#carousel-example-generic" data-slide-to="7"></li>
	<li data-target="#carousel-example-generic" data-slide-to="8"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="a.jpg" alt="center" id="images">
      <div class="carousel-caption">

      </div>
    </div>
	  <div class="item">
      <img src="b.jpg" alt="..." id="images">
      <div class="carousel-caption">
      </div>
    </div>
	  <div class="item">
      <img src="c.jpg" alt="..." id="images">
      <div class="carousel-caption">
   
      </div>
    </div>
	  <div class="item">
      <img src="d.jpg" alt="..." id="images">
      <div class="carousel-caption">
    
      </div>
    </div>
	  <div class="item">
      <img src="e.jpg" alt="..." id="images">
      <div class="carousel-caption">

      </div>
    </div>
	  <div class="item">
      <img src="h.jpg" alt="..." id="images">
      <div class="carousel-caption">
      
      </div>
    </div>
	  <div class="item">
      <img src="i.jpg" alt="..." id="images">
      <div class="carousel-caption">
      
      </div>
    </div>
	  <div class="item">
      <img src="j.jpg" alt="..." id="images">
      <div class="carousel-caption">
      
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

</div>
<div class="col-sm-5 mute" style=" margin-left:0px;background-color:#0066b6;height:400px;float:right;opacity:0.5;font-weight:bold;font-size:30px;">
<center><form action="phpofslider.php" method="post"><br>
Select your Location"
<select name="loc">
<option value= "tirwa">Tirwa</option>
<option value= "aher">Aher</option>
<option value= "engineering college">Engineering college</option>
<option value= "medicalc">Medical college</option>
<option value= "gandhic">Gandhi Chauraha</option>
</select><br><br>
Select your Destination"
<select name="des">
<option value= "tirwa">Tirwa</option>
<option value= "aher">Aher</option>
<option value= "engineering college">Engineering college</option>
<option value= "medicalc">Medical college</option>
<option value= "gandhic">Gandhi Chauraha</option>
</select><br><br>
<button class="btn btn-danger" style="height:50px; background-color:red;"><b>submit</button>
<form action="delete.php" method="post">
<button class="btn btn-danger" style="height:50px; background-color:red;"><b>delete</button><br><br>
</form>
</form></center>
</div>
</div>
</div>
<!--Footer start-->
<div class="row footer" style=" background:#000 url(pic/bg2.png); height:150px; margin-:0px; margin-top:0px; padding-top:10px; padding-right:30px;">
<div class="col-md-3 box">
  <h4 align="center" style="font-family:'vardana'; color:orange;"><h4 align="center" style="font-family:'vardana'; color:orange;">Terms & Condition</h4>
    <img src="pic/ic/copyright.png"style="height:40px;width:40px;">
</div>


<div class="col-md-3 box"><a href="#" data-toggle="modal" data-target="#aboutus">
<h4 align="center" style="font-family:'vardana'; color:orange;">
About us</h4>
<img src="pic/ic/about.png" style="height:40px;width:40px;margin-left:30px;"></a>
</div>


<div class="col-md-3 box"><a href="developer.php">
<h4 style="font-family:'vardana'; color:orange;">Developers</h4><a href="developer.php"><img src="pic/ic/dl.png" style="height:40px;width:40px;align:center;margin-left:-30px;"></a></div>
 
 
<div class="col-md-3 box"><h4 align="center" style="font-family:'vardana'; color:orange;">Contact Us</h4>
<div class="row">
  <div class="col-sm-3"><a href="https://m.facebook.com/Know-your-skills-1880663715368981/"><img src="pic/ic/fb.png" style="height:40px;width:40px; text-decoration:none;"></a></div>
  <div class="col-sm-3"><a href="www.whatsapp.com"><img src="pic/ic/wt.png" style="height:40px;width:40px;"></a></div>
   <div class="col-sm-3"> <a href="www.instagram.com"><img src="pic/ic/insta.png" style="height:40px;width:40px;"></a></div>
   <div class="col-sm-3">   <a href="www.twitter.com"><img src="pic/ic/tweet.png" style="height:40px;width:40px;"></a></div>
</div></div>



</div>


<div class="modal fade title1" id="aboutus">
  <div class="modal-dialog">
    <div class="modal-content" style="background:#000 url(pic/bg1.jpg)">
      <div class="modal-header">
        <h3 class="modal-title" style="font-family:'sarif'; align:'center'; "><span style="color:orange"><b>ABOUT THIS SITE<b> </span></h3>
      </div>
	  
      <div class="modal-body">
        <p>
		<div class="row">
		<div class="col-md-3">
		 <img src="pic/about.jpg" width=130 height=150 alt="developers" class="img-rounded">
		 </div>
		 <div class="col-md-9">
	<h4 style="font-family:'sarif'; text-align:'right'; "> TAF is a tool to help you find the best services available in Tirwa.</h4>
	</div></div>
		</p>
      </div>
    
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal --><!---/.end of footer-->
</div>



</body>
</html>
