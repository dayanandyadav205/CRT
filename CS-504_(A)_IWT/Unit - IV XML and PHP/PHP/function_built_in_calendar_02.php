<!DOCTYPE html>
<html>
<body>

<?php
$d=unixtojd(mktime(0,0,0,12,11,2024));
print_r(cal_from_jd($d,CAL_JULIAN));
?>

</body>
</html>