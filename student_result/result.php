<?php
$subject1 = 33;
$subject2 = 100; 
$subject3 = 67;
$subject4 = 90;
$subject5 = 70;

function calculateresult($subject1,$subject2,$subject3,$subject4,$subject5){
    switch(true){
        case ($subject1 < 0 || $subject1 > 100):
            case ($subject2 < 0 || $subject2 > 100):
            case ($subject3 < 0 || $subject3 > 100):
            case ($subject4 < 0 || $subject4 > 100):
            case ($subject5 < 0 || $subject5 > 100):
                echo "Mark range is invalid\n";
                return;
            case ($subject1 < 33 || $subject2 < 33 || $subject3 < 33 || $subject4 < 33 || $subject5 < 33):
                echo "Student has failed\n";
                return;
    }
      //calculate total mark and average
      $total = $subject1 + $subject2 + $subject3 + $subject4 + $subject5;
      $average = $total / 5;
  // Determine Grade
  switch (true) {
    case ($average >= 80 && $average <= 100):
        $grade = "A+";
        break;
    case ($average >= 70 && $average < 80):
        $grade = "A";
        break;
    case ($average >= 60 && $average < 70):
        $grade = "A-";
        break;
    case ($average >= 50 && $average < 60):
        $grade = "B";
        break;
    case ($average >= 40 && $average < 50):
        $grade = "C";
        break;
    case ($average >= 33 && $average < 40):
        $grade = "D";
        break;
    default:
        $grade = "F";
}  
echo "Total Marks: " . $total . "\n";
echo "Average Marks: " . $average . "\n";
echo "Grade: " . $grade . "\n";

}
calculateresult($subject1,$subject2,$subject3,$subject4,$subject5);