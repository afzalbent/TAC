<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>KNOW YOUR SKILL </title>
 <link  rel="stylesheet" href="css/bootstrap.min.css"/>
 <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>    
 <link rel="stylesheet" href="css/main.css">
 <link  rel="stylesheet" href="css/font.css">
 <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:400,700,300'  type='text/css'>
 <link rel ="stylesheet" href="style_try.css" >

<script src="js/jquery.js" type="text/javascript"></script>
 <script src="log4_db.js" type="text/javascript"></script>
 <script src="js/bootstrap.min.js"  type="text/javascript"></script>
<style>
.row
{
height:100%;
width:100%;
}
#gallery
{
min-height:600px;
width:100%;
}
.col
{
height:210px;
width:210px;
margin-left:400px;
background:wite;
float:left;
margin:65px;
padding:25px;
}
.col img
{
height:100%;
width:100%;
filter:grayscale(100%);
}
.col img:hover
{
filter:grayscale(0%);
}
.col:hover
{
border-radius:20px;
transform:scale(1.1);
box-shadow:2px 2px 2px blue;
transition:all ease 1s;
}
.jerry
{
  top-margin:10px;
  font-color:orange;
  font-family:vardana;
  margin-left: 200px;
}
</style>
 
</head>
<body>
<div class="header">
<div class="row">
<div class="col-lg-6">
<span class="logo"><a href="landing.html" style="text-decoration:none; margin-left:10px; margin-top:10px; color:orange;">TAF</a></span></div>
<div class="col-md-4 col-md-offset-2">
<span class="pull-right top title1" ><span class="log1"><a href="new.html" class="log"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;Signout</button></a></span></div>
</div></div>


<div class="bg" style="background:#000 url(nature.jpg); background-repeat:no-repeat;">
<div class="row">
<div class="col-sm-12 jerry">
</div>
</div>
<div id="gallery">
<div class="row">
<div class="col col-sm-4" style="margin-left:210px;">
<a href="transportation.php"><img src="trans.png" alt="Transport"></a>
</div>
<div class="col col-sm-4">
<a href="accomodation.php"><img src="accomodation-icon.png" alt="Accomodation"/></a>
</div>
<div class="col col-sm-4">
<a href="food.php"><img src="food-icon.png" alt="Fooding"></a>
</div>
</div></div>
</div>




<!--Footer start-->
<div class="row footer" style=" background:#000 url(pic/bg2.png); height:150px; margin-left:0px; margin-top:0px; padding-top:10px; padding-right:20px;">
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
  <h4 style="font-family:'sarif'; text-align:'right'; ">TAF is a tool to help you find the best services available in Tirwa.</h4>
  </div></div>
    </p>
      </div>
    
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal --><!---/.end of footer-->


</body>
</html>
