<?php
$grade = 95;
$result = ($grade > 90) ? "A" : (($grade > 80) ? "B" : (($grade > 70) ? "C" : "D"));
echo "Grade: " . $result;
?>  