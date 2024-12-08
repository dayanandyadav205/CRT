<!DOCTYPE html>
<html>
<body>

<?php
$myfile = fopen("<my_files>/newfile.txt", "w") or die("Unable to open file!");
$txt = "dayanand Doe\n";
fwrite($myfile, $txt);
$txt = "Jane Doe\n";
fwrite($myfile, $txt);
$txt = "Amit Dev\n";
fwrite($myfile, $txt);
fclose($myfile);
?>

</body>
</html>