<?php

$studentGrades = array(
    array("Math" => 85, "English" => 92, "Science" => 78),
    array("Math" => 88, "English" => 95, "Science" => 90),
    array("Math" => 75, "English" => 80, "Science" => 88)
);

function calculateAverageGrades($grades) {
    $averages = array();
    
    foreach ($grades as $studentGrades) {
        $average = array_sum($studentGrades) / count($studentGrades);
        $averages[] = $average;
    }
    
    return $averages;
}
$averageGrades = calculateAverageGrades($studentGrades);

for ($i = 0; $i < count($averageGrades); $i++) {
    echo "Student " . ($i + 1) . " average grade: " . $averageGrades[$i] . "<br>";
}

?>
