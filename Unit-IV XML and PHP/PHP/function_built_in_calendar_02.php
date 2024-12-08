<!DOCTYPE html>
<html>
<body>

<?php
$d=unixtojd(mktime(0,0,0,6,15,2007));
print_r(cal_from_jd($d,CAL_JULIAN));
?>

</body>
</html>