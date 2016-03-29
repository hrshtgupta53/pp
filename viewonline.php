<?php
  if(isset($_GET['name']))
  {
  	 $name = $_GET['name'];
	 $file = 'Mockpapers/'.$_GET['name'].'.pdf';
	 $filename = $_GET['name'].'.pdf';
	 header('Content-type: application/pdf');
	 header('Content-Disposition: inline; filename="' . $filename . '"');
	 header('Content-Transfer-Encoding: binary');
	 header('Accept-Ranges: bytes');
	 @readfile($file);
  }
  else
  {
  	header("location: mockpapers.php");
  }
?>