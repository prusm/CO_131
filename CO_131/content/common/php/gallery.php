<?php
$folder_path = 'content/common/images/resources/'; //image folder path

$folder = opendir($folder_path);

 while (false !== ($entry = readdir($folder))) {
	if ($entry != "." && $entry != ".." && $entry != "Thumb.db") {

		$file_path = $folder_path.$entry;
		$ext = strtolower(pathinfo($file_path, PATHINFO_EXTENSION));
		if($ext=='jpg' || $ext =='png' || $ext == 'gif')
		{
			echo '<img src="'.$file_path.'" />';
		}
	}
}

closedir($folder );
?>