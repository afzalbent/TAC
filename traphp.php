  
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>TAF</title>
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

html {
    position: relative;
    min-height: 100%;
}
.carousel-fade .carousel-inner .item {
    opacity: 0;
    transition-property: opacity;
}
.carousel-fade .carousel-inner .active {
    opacity: 1;
}
.carousel-fade .carousel-inner .active.left,
.carousel-fade .carousel-inner .active.right {
    left: 0;
    opacity: 0;
    z-index: 1;
}
.carousel-fade .carousel-inner .next.left,
.carousel-fade .carousel-inner .prev.right {
    opacity: 1;
}
.carousel-fade .carousel-control {
    z-index: 2;
}
@media all and (transform-3d),
(-webkit-transform-3d) {
    .carousel-fade .carousel-inner > .item.next,
    .carousel-fade .carousel-inner > .item.active.right {
        opacity: 0;
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
    }
    .carousel-fade .carousel-inner > .item.prev,
    .carousel-fade .carousel-inner > .item.active.left {
        opacity: 0;
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
    }
    .carousel-fade .carousel-inner > .item.next.left,
    .carousel-fade .carousel-inner > .item.prev.right,
    .carousel-fade .carousel-inner > .item.active {
        opacity: 1;
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
    }
}
.item:nth-child(1) {
    background: url(z.jpg) no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}
.item:nth-child(2) {
    background: url(y.jpg) no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}
.item:nth-child(3) {
    background: url(x.jpg) no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}
.item:nth-child(3) {
    background: url(w.jpg) no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}.item:nth-child(3) {
    background: url(v.jpg) no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}.item:nth-child(3) {
    background: url(u.jpg) no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}
.carousel {
    z-index: -99;
}
.carousel .item {
    position: fixed;
    width: 100%;
    height: 100%;
}
.title {
  text-align: center;
  margin-top: 20px;
  padding: 10px;
  text-shadow: 2px 2px #000;
  color: #FFF;
}
</style>]]
<script>

$('.carousel').carousel();
</script>
</head>
<body>
<div class="header">
<div class="row">
<div class="col-lg-6">
<span class="logo"><a href="new.php" style="text-decoration:none; float:left; margin-left:10px; margin-top:10px; color:orange;">TAF</a></span></div>
<div class="col-md-4 col-md-offset-2">
<span class="pull-right top title1" ><span class="log1"><a href="new.html" class="log"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;Signout</button></a></span></div>
</div></div>
<div class="carousel slide carousel-fade" data-ride="carousel">

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
        </div>
        <div class="item">
        </div>
        <div class="item">
        </div>
    </div>
</div>

<!-- Remember to put all the content you want on top of the slider below the slider code -->
<div class="col-sm-2" style="float:left;"></div>
<div class="col-sm-8 mute" style=" margin-left:0px;background-color:white;height:600px;float:left;font-family:arial;opacity:0.7;font-size:20px;">
<h1><b>Sell your style!!</b></h1>
    <?php
if(isset($_POST['submitted'])) {
    //connecting to database
    include('connect2.php');

    $sloc = $_POST['loc'];
    $sdes = $_POST['des'];

    $query = "SELECT * FROM transport WHERE $sloc LIKE '%" .$sdes."%'";
    $result = mysqli_query($conn, $query) or die('error fetching data');
    $num_rows = mysqli_num_rows($result);
    
    echo "<table border='2' style='width:80%;height:80px;text-align:center;'>";
    echo "<tr> 
    <th style='border:1px solid black;background:#8b9eb6;font-color:red; cellspacing:2px; cellspadding:2px;'>Id</th>
    <th style='border:1px solid black;background:#8b9eb6;font-color:red;'>Name</th>
    <th style='border:1px solid black;background:#8b9eb6;font-color:red;'>Location</th>
    <th style='border:1px solid black;background:#8b9eb6;font-color:red;'>Destination</th>
    <th style='border:1px solid black;background:#8b9eb6;font-color:red;'>Contact</th>
    <th style='border:1px solid black;background:#8b9eb6;font-color:red;'>Type</th>";
    while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){

        echo"<tr><td>";
        echo $row['id'];
        echo"</td><td>";
        echo $row['name'];
        echo"</td><td>";
        echo $row['loc'];
        echo "</td><td>";
        echo $row['des'];
        echo"</td><td>";
        echo $row['contact'];
        echo"</td><td>";
        echo $row['type'];
        echo"</td><td>";
        }
        echo "</table>";
}
?>

</div>
<!--Footer start-->
<div class="row footer" style=" background:#000 url(pic/bg2.png); float:left; height:150px; width:1400px; margin-:0px; margin-top:0px; padding-top:10px; padding-right:30px;">
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
</body>
</html>


