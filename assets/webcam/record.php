<?php
/* JPEGCam Test Script */
/* Receives JPEG webcam submission and saves to local file. */
/* Make sure your directory has permission to write files as your web server user! */

$filename = "ARP_".date("YmdHis").".jpg";



$result = file_put_contents( '../../uploads/webcam/'.$filename, file_get_contents('php://input') );
if (!$result) {
	print "ERROR: Failed to write data to $filename, check permissions\n  $result";
	exit();
}

$url = 'uploads/webcam/' . $filename;
print $url;
 

?>
