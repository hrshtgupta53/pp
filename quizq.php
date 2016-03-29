<!DOCTYPE html>
<!--
    Free Responsive Template by templatemo
    http://www.templatemo.com
-->
<html>
  <head>
    <title>Java Quiz</title>
    <meta name="keywords" content="smoothy, responsive bootstrap, one page, green, white, free html5 template, templatemo" />
	<meta name="description" content="Smoothy is free HTML5 one-page template for multi-purpose that is based on responsive bootstrap framework." />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/templatemo_style.css" rel="stylesheet">
   	<link rel="stylesheet" href="css/templatemo_misc.css">
   	<style type="text/css">
   	label
   	{font-size: 16px;}
   	img.pics:hover
{
  -webkit-transform: scale(1.2,1.2);
    -moz-transform:scale(1.2,1.2);
    opacity: 1;
    -webkit-opacity: 1;
    -moz-opacity: 1;
}
   	</style>
    <link href="css/circle.css" rel="stylesheet">
    <link href="css/jquery.bxslider.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/nivo-slider.css">
    <link rel="stylesheet" href="css/slimbox2.css" type="text/css" media="screen" />
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,600' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/JavaScript" src="js/slimbox2.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/ddsmoothmenu.js"></script>

<!--/***********************************************
* Smooth Navigational Menu- (cpp) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

-->


<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "templatemo_flicker", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script>

  </head>
  <body>
    <header>
    <!-- start menu -->
    <div id="templatemo_home">
    	<div class="templatemo_top">
      <div class="container templatemo_container">
        <div class="row">
          <div class="col-sm-3 col-md-3">
            <div class="logo">
              <a rel="nofollow" href="./index.html"><img src="images/templatemo_logo.png" alt="logo"></a>
            </div>
          </div>
          <div class="col-sm-9 col-md-9 templatemo_col9">
          	<div id="top-menu">
            <nav class="mainMenu">
              <ul class="nav">
                <li><a class="menu" href="#templatemo_home">Home</a></li>
              </ul>
            </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    <div class="clear"></div>
    <!-- end menu -->
            
  </header>
  	<div class="templatemo_lightgrey_about" id="templatemo_about">
	<div class="container">
    	<div class="col-xs-6 col-sm-6 col-md-3 templatemo_col12">
        	<div class="item project-post">
						<div class="templatemo_about_box">
                        	<div class="square_coner">
                     		   <span class="texts-a"><a  href="./mockpapers.php"><img class = "pics" src="port002.png" height="80" width="80"></img></a></span>
                      	  </div>
                     	   </div>
					</div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-3 templatemo_col12">
        	<div class="item project-post">
						<div class="templatemo_about_box">
                        	<div class="square_coner">
                     		   <span class="texts-a"><a  href="./quiz.php"><img class = "pics" src="port001.png" height="80" width="80"></img></a></span>
                      	  </div>
                     	    </div>
					</div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-3 templatemo_col12 templatemo_margintop10">
        	<div class="item project-post">
						<div class="templatemo_about_box">
                        	<div class="square_coner">
                     		   <span class="texts-a"><a  href="./placement.php"><img class = "pics" src="port003.png" height="80" width="80"></img></a></span>
                      	  </div>
                     	   </div>
					</div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-3 templatemo_col12 templatemo_margintop10">
        	<div class="item project-post">
						<div class="templatemo_about_box">
                        	<div class="square_coner">
                     		   <span class="texts-a"><a href="./question.php?page=1"><img class = "pics" src="port004.png" height="80" width="80"></img></a></span>
                      	  </div>
                     	  </div>
					</div>
        </div>
    </div>
    </div>


<?php
if(isset($_GET['q']))
{
echo '<form method="post" action="quizq.php';
echo '?q='.$_GET['q'];
echo '">';
echo '<div style="padding:30px;margin:30px;">';

	$i = 1;
	$conn = mysqli_connect("localhost", "root1", "root1", "python");
	if($_GET['q']==1)
		$sql = "select * from java where id between 1 and 25";
	else if($_GET['q']==2)
		$sql = "select * from java where id between 26 and 50";
	else if($_GET['q']==3)
		$sql = "select * from java where id between 51 and 75";
	else if($_GET['q']==4)
		$sql = "select * from java where id between 76 and 100";
	else if($_GET['q']==5)
		$sql = "select * from java where id between 101 and 125";
	else if($_GET['q']==6)
		$sql = "select * from java where id between 126 and 150";
	else if($_GET['q']==7)
		$sql = "select * from java where id between 151 and 175";
	else if($_GET['q']==8)
		$sql = "select * from java where id between 176 and 200";
	$query = mysqli_query($conn, $sql);
	while($row = mysqli_fetch_array($query))
	{
		echo '<div style="color:#5ac90e;font-size:20px;font-weight:bold;">QUES NO '.$i.''.$row['question'].'</div> ';
		$sql2 = "select * from java where id=".$row['id'];
		$query2 = mysqli_query($conn, $sql2);	
		$row2 = mysqli_fetch_array($query2);
		echo '<input type="radio" name="'.$i.'" value="A" style="width:30px;cursor:pointer;" onmousedown="this.cpp=this.checked" onclick="if (this.cpp) { this.checked
= false }">';
		echo '<label style="cursor:default;">'.substr($row2['optionA'], 5, (strlen($row2['optionA'])-11)).'</label>';
    $count = 0;
		if(isset($_POST['submit']))
		{
			if(isset($_POST[$i]))
			{
				if($_POST[$i]=='A')
				{
					$sql3 = "select * from java where id=".$row['id'];
					$query3 = mysqli_query($conn, $sql3);	
					$row3 = mysqli_fetch_array($query3);
					if($_POST[$i]==$row3['answer'])
          {
            echo '<img src="right.png" style="margin-left:50px;width:12px;height:12px">';       
            $count++;
          }
					else
					{
						echo '<img src="wrong.png" style="margin-left:50px;width:12px;height:12px">';				
						echo '<label style="margin-left:5px;font-size:17px;">(Correct Answer: ';
						echo $row3['answer'];
						echo ')</label>';
					}
				}
			}
			else
			{
				$sql3 = "select * from java where id=".$row['id'];
				$query3 = mysqli_query($conn, $sql3);	
				$row3 = mysqli_fetch_array($query3);
				if($row3['answer']=='A')
					echo '<label style="margin-left:40px;font-size:17px;">(Correct Answer)</label>';
			}
		}
		echo "<br />";
		echo '<input type="radio" name="'.$i.'" value="B" style="width:30px;cursor:pointer;" onmousedown="this.cpp=this.checked" onclick="if (this.cpp) { this.checked
= false }">';
		echo '<label>'.substr($row2['optionB'], 5, (strlen($row2['optionB'])-11)).'</label>';
		if(isset($_POST['submit']))
		{
			if(isset($_POST[$i]))
			{
				if($_POST[$i]=='B')
				{
					$sql3 = "select * from java where id=".$row['id'];
					$query3 = mysqli_query($conn, $sql3);	
					$row3 = mysqli_fetch_array($query3);
					if($_POST[$i]==$row3['answer'])
          {
            echo '<img src="right.png" style="margin-left:50px;width:12px;height:12px">';       
            $count++;
          }
					else
					{
						echo '<img src="wrong.png" style="margin-left:50px;width:12px;height:12px">';				
						echo '<label style="margin-left:5px;font-size:17px;">(Correct Answer: ';
						echo $row3['answer'];
						echo ')</label>';
					}
				}
			}
			else
			{
				$sql3 = "select * from java where id=".$row['id'];
				$query3 = mysqli_query($conn, $sql3);	
				$row3 = mysqli_fetch_array($query3);
				if($row3['answer']=='B')
					echo '<label style="margin-left:40px;font-size:17px;">(Correct Answer)</label>';
			}
		}
		echo "<br />";
		echo '<input type="radio" name="'.$i.'" value="cpp" style="width:30px;cursor:pointer;" onmousedown="this.cpp=this.checked" onclick="if (this.cpp) { this.checked
= false }">';
		echo '<label>'.substr($row2['optionC'], 5, (strlen($row2['optionC'])-11)).'</label>';
		if(isset($_POST['submit']))
		{
			if(isset($_POST[$i]))
			{
				if($_POST[$i]=='C')
				{
					$sql3 = "select * from java where id=".$row['id'];
					$query3 = mysqli_query($conn, $sql3);	
					$row3 = mysqli_fetch_array($query3);
					if($_POST[$i]==$row3['answer'])
          {
            echo '<img src="right.png" style="margin-left:50px;width:12px;height:12px">';       
            $count++;
          }
					else
					{
						echo '<img src="wrong.png" style="margin-left:50px;width:12px;height:12px">';				
						echo '<label style="margin-left:5px;font-size:17px;">(Correct Answer: ';
						echo $row3['answer'];
						echo ')</label>';
					}
				}
			}
			else
			{
				$sql3 = "select * from java where id=".$row['id'];
				$query3 = mysqli_query($conn, $sql3);	
				$row3 = mysqli_fetch_array($query3);
				if($row3['answer']=='C')
					echo '<label style="margin-left:40px;font-size:17px;">(Correct Answer)</label>';
			}
		}
		echo "<br />";
		echo '<input type="radio" name="'.$i.'" value="D" style="width:30px;cursor:pointer;" onmousedown="this.cpp=this.checked" onclick="if (this.cpp) { this.checked
= false }">';
		echo '<label>'.substr($row2['optionD'], 5, (strlen($row2['optionD'])-11)).'</label>';
		if(isset($_POST['submit']))
		{
			if(isset($_POST[$i]))
			{
				if($_POST[$i]=='D')
				{
					$sql3 = "select * from java where id=".$row['id'];
					$query3 = mysqli_query($conn, $sql3);	
					$row3 = mysqli_fetch_array($query3);
					if($_POST[$i]==$row3['answer'])
          {
            echo '<img src="right.png" style="margin-left:50px;width:12px;height:12px">';       
            $count++;
          }
					else
					{
						echo '<img src="wrong.png" style="margin-left:50px;width:12px;height:12px">';				
						echo '<label style="margin-left:5px;font-size:17px;">(Correct Answer: ';
						echo $row3['answer'];
						echo ')</label>';
					}
				}
			}
			else
			{
				$sql3 = "select * from java where id=".$row['id'];
				$query3 = mysqli_query($conn, $sql3);	
				$row3 = mysqli_fetch_array($query3);
				if($row3['answer']=='D')
					echo '<label style="margin-left:40px;font-size:17px;">(Correct Answer)</label>';
			}
		}
		echo "<br />";
		$i++;
	}
  if(isset($_POST['submit']))
  {
    echo '<br>';
    echo "YOUR SCORE: ".$count."/25";
    echo '<br><br><br>';    
  }
  echo '</div>';
}
else
{
	header("location: quiz.php");
	exit();
}
?>
<center><input type="submit" value="Submit" name="submit" style="position:relative;top:-60px;"></center>
</form>
<!--Footer Start-->
   <!--Footer End-->
	<!-- Bottom Start -->
  <div class="templatemo_bottom">
      <div class="container"></div>
    </div>
    <!-- Bottom End -->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- <script src="https://code.jquery.com/jquery.js"></script> -->
    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.cycle2.min.js"></script>
    <script src="js/jquery.cycle2.carousel.min.js"></script>
    <script src="js/jquery.nivo.slider.pack.js"></script>
    <script>$.fn.cycle.defaults.autoSelector = '.slideshow';</script>
    <script type="text/javascript">
      $(function(){
          var default_view = 'grid';
          if($.cookie('view') !== 'undefined'){
              $.cookie('view', default_view, { expires: 7, path: '/' });
          }
          function get_grid(){
              $('.list').removeClass('list-active');
              $('.grid').addClass('grid-active');
              $('.prod-cnt').animate({opacity:0},function(){
                  $('.prod-cnt').removeClass('dbox-list');
                  $('.prod-cnt').addClass('dbox');
                  $('.prod-cnt').stop().animate({opacity:1});
              });
          }
          function get_list(){
              $('.grid').removeClass('grid-active');
              $('.list').addClass('list-active');
              $('.prod-cnt').animate({opacity:0},function(){
                  $('.prod-cnt').removeClass('dbox');
                  $('.prod-cnt').addClass('dbox-list');
                  $('.prod-cnt').stop().animate({opacity:1});
              });
          }
          if($.cookie('view') == 'list'){
              $('.grid').removeClass('grid-active');
              $('.list').addClass('list-active');
              $('.prod-cnt').animate({opacity:0});
              $('.prod-cnt').removeClass('dbox');
              $('.prod-cnt').addClass('dbox-list');
              $('.prod-cnt').stop().animate({opacity:1});
          }

          if($.cookie('view') == 'grid'){
              $('.list').removeClass('list-active');
              $('.grid').addClass('grid-active');
              $('.prod-cnt').animate({opacity:0});
                  $('.prod-cnt').removeClass('dboxlist');
                  $('.prod-cnt').addClass('dbox');
                  $('.prod-cnt').stop().animate({opacity:1});
          }

          $('#list').click(function(){
              $.cookie('view', 'list');
              get_list()
          });

          $('#grid').click(function(){
              $.cookie('view', 'grid');
              get_grid();
          });

          /* filter */
          $('.menuSwitch ul li').click(function(){
              var CategoryID = $(this).attr('category');
              $('.menuSwitch ul li').removeClass('cat-active');
              $(this).addClass('cat-active');

              $('.prod-cnt').each(function(){
                  if(($(this).hasClass(CategoryID)) == false){
                     $(this).css({'display':'none'});
                  };
              });
              $('.'+CategoryID).fadeIn();

          });
      });
    </script>
	<script src="js/jquery.singlePageNav.js"></script>

    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider({
          prevText: '',
          nextText: '',
          controlNav: false,
        });
    });
    </script>
    <script>
      $(document).ready(function(){

        // hide #back-top first
        $("#back-top").hide();

        // fade in #back-top
        $(function () {
          $(window).scroll(function () {
            if ($(this).scrollTop() > 100) {
              $('#back-top').fadeIn();
            } else {
              $('#back-top').fadeOut();
            }
          });

          // scroll body to 0px on click
          $('#back-top a').click(function () {
            $('body,html').animate({
              scrollTop: 0
            }, 800);
            return false;
          });
        });

      });
      </script>
      <script type="text/javascript">
      <!--
          function toggle_visibility(id) {
             var e = document.getElementById(id);
             if(e.style.display == 'block'){
                e.style.display = 'none';
                $('#togg').text('show footer');
            }
             else {
                e.style.display = 'block';
                $('#togg').text('hide footer');
            }
          }
      //-->
      </script>
      <script type="text/javascript" src="js/lib/jquery.mousewheel-3.0.6.pack.js"></script>

      <script type="text/javascript">
      $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
          if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
              $('html,body').animate({
                scrollTop: target.offset().top
              }, 1000);
              return false;
            }
          }
        });
      });
      </script>
      <script src="js/stickUp.min.js" type="text/javascript"></script>
      <script type="text/javascript">
        //initiating jQuery
        jQuery(function($) {
          $(document).ready( function() {
            //enabling stickUp on the '.navbar-wrapper' class
            $('.mWrapper').stickUp();
          });
        });
      </script>
      <script>
     $('a.menu').click(function(){
    $('a.menu').removeClass("active");
    $(this).addClass("active");
	});
      </script>

      <script> <!-- scroll to specific id when click on menu -->
      	 // Cache selectors
var lastId,
    topMenu = $("#top-menu"),
    topMenuHeight = topMenu.outerHeight()+15,
    // All list items
    menuItems = topMenu.find("a"),
    // Anchors corresponding to menu items
    scrollItems = menuItems.map(function(){
      var item = $($(this).attr("href"));
      if (item.length) { return item; }
    });

// Bind click handler to menu items
// so we can get a fancy scroll animation
menuItems.click(function(e){
  var href = $(this).attr("href"),
      offsetTop = href === "#" ? 0 : $(href).offset().top-topMenuHeight+1;
  $('html, body').stop().animate({
      scrollTop: offsetTop
  }, 300);
  e.preventDefault();
});

// Bind to scroll
$(window).scroll(function(){
   // Get container scroll position
   var fromTop = $(this).scrollTop()+topMenuHeight;

   // Get id of current scroll item
   var cur = scrollItems.map(function(){
     if ($(this).offset().top < fromTop)
       return this;
   });
   // Get the id of the current element
   cur = cur[cur.length-1];
   var id = cur && cur.length ? cur[0].id : "";

   if (lastId !== id) {
       lastId = id;
       // Set/remove active class
       menuItems
         .parent().removeClass("active")
         .end().filter("[href=#"+id+"]").parent().addClass("active");
   }
});
      </script>
<script type='text/javascript' src='js/logging.js'></script>
</body>
</html>
<!--
    Free Template by templatemo
    http://www.templatemo.com
-->