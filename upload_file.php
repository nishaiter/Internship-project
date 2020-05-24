<?php

 $targetfolder = "upload/";

 $targetfolder = $targetfolder . basename( $_FILES['file']['name']) ;

if(move_uploaded_file($_FILES['file']['tmp_name'], $targetfolder))

 {
 echo "The file ". basename( $_FILES['file']['name']). " is uploaded";

 }
 else {

 echo "Problem uploading file";

 }

		
 if ($handle = opendir('.')) {
    while (false !== ($file = readdir($handle))) {
      if ($file != "." && $file != "..") {
        $thelist .= '<li><a href="'.$file.'">'.$file.'</a></li>';
      }
    }
    closedir($handle);
  }
?>
<h1>List of files:</h1>
<ul><?php echo $thelist; ?></ul>
