<img src="../super_dyadya-1128019180_i_4490_full.orig.jpg" width="200" height="200" >
<br>

<?php
	
	//phpinfo();
	$dir_name = "images";
// 	$dir_name = "../images";	//=> Failed to open
	
	// REF opendir http://phpspot.net/php/pg%E3%83%87%E3%82%A3%E3%83%AC%E3%82%AF%E3%83%88%E3%83%AA%E3%81%AE%E3%83%95%E3%82%A1%E3%82%A4%E3%83%AB%E3%83%AA%E3%82%B9%E3%83%88%E3%82%92%E5%8F%96%E5%BE%97.html
	if ($dir = opendir($dir_name)) {
		while (($file = readdir($dir)) !== false) {
			if ($file != "." && $file != "..") {
// 				echo "$file\n";
				echo "<a href=\"../images/$file\">$file</a><br>";
			}
		}
		
				closedir($dir);
				
	}//if ($dir = opendir("data/")) {
	
?>

<hr/>
<a href="http://cosmos-ifm-1.herokuapp.com/images" target="_blank">IFM_R_1</a><br/>
<a href="http://cosmos-cr6.herokuapp.com/" target="_blank">CR6</a><br/>
<a href="https://dashboard.heroku.com/apps" target="_blank">Heroku apps</a><br/>

<!-- <a href="../images/toranomon_explanation-1.bmp">toranomon_explanation-1.bmp</a><br> -->

<!-- <a href="../images/toranomon_explanation-2.bmp">toranomon_explanation-2.bmp</a><br> -->