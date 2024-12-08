<!DOCTYPE html>
<html>
<body>

<?php
$myfile = fopen("my_files\webdictionary.txt", "r") or die("Unable to open file!");
// Output one character until end-of-file
while(!feof($myfile)) {
  echo fgetc($myfile);
}
fclose($myfile);
?>
</body>
</html>