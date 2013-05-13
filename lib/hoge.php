<?php
function _write_log() {
	 
	//REF http://www.artsnet.jp/archives/328
	//REF http://d.hatena.ne.jp/gapao/20090510/1242025196
	//REF http://cutfromthenorth.com/save-page-output-as-html-with-cakephp/
	$fname = "C:/WORKS/WS/Cake/cakephp-2.3.1/app/log.txt";
	//     	$fname = "/log.txt";
	 
	$file = new File($fname);
	 
	$file->create();
	 
	$file->write("abcde ".time()."\n", "a");
	 
	$file->close();
	 
	//     	$file.write("abcde", "w");
	 
	//     	$file.close();
	 
	//     	$file = fopen($fname, "w");
	 
	//     	if( $file == false )
		//     	{
		//     		echo ( "Error in opening file" );
		//     		exit();
		//     	}
	 
		//     	fwrite($file, "abcde\n");
	 
		//     	fclose($file);
	 
}//public function _write_log() {
