<!DOCTYPE html>
<html>
<body>

<?php
$d=cal_days_in_month(CAL_GREGORIAN,2,1965);
echo "There was $d days in February 1965.<br> <br>";

$d=cal_days_in_month(CAL_GREGORIAN,2,2024);
echo "There was $d days in February 2024.<br><br>";

$d=cal_days_in_month(CAL_GREGORIAN,2,2025);
echo "There will be $d days in February 2025.";
?>

</body>
</html>