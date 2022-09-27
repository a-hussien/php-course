
<?php

 $filename = "C:/Users/a_hus/Desktop/"; 
 
 $files = glob($filename. '*.txt');
 
 $days_seconds = 259200; // for three dayes 3 *24 *60 *60
 
 $empty_count = 0;
 
 $older_count = 0;
 
 foreach ($files as $file)
 {
	 
	 if(is_file($file))
	 {
		 
		if (filesize($file) === 0)
		{
			$empty_count++;
			// delete file
			unlink($file);
			
		}
		elseif(time() - filectime($file) > $days_seconds)
		{
			$older_count++;
			// delete file
			unlink($file);
		}
		
	 }
 }
 
 $logtoFile = "Deleted Empty Files Count: ".$empty_count . " files on Date: " . date("Y-m-d H:i:s") . "\n";
 $logtoFile .= "Deleted older Files Count: ".$older_count . " files on Date: " . date("Y-m-d H:i:s") . "\n";
 
 $myfile = fopen($filename."log_deleted_sessions.txt", "a") or die("Unable to open file!");
			fwrite($myfile, $logtoFile);
			fclose($myfile);
 