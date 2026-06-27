<?php
// 1. Function to display college information
function collegeInfo()
{
    echo "<h3>College Information</h3>";
    echo "College Name: ABC College<br>";
    echo "Course Name: Bachelor of Computer Applications (BCA)<br>";
    echo "Academic Year: 2025-2026<br><br>";
}

// 2. Function to display student details
function studentDetails($studentName, $enrollmentNo, $semester)
{
    echo "<h3>Student Details</h3>";
    echo "Student Name: " . $studentName . "<br>";
    echo "Enrollment Number: " . $enrollmentNo . "<br>";
    echo "Semester: " . $semester . "<br><br>";
}

// 3. Function to calculate percentage
function calculatePercentage($sub1, $sub2, $sub3, $sub4, $sub5)
{
    $totalMarks = $sub1 + $sub2 + $sub3 + $sub4 + $sub5;
    $percentage = ($totalMarks / 500) * 100; // Assuming each subject is out of 100

    echo "<h3>Marks Details</h3>";
    echo "Total Marks: " . $totalMarks . "<br>";

    return $percentage;
}

// 4. Function to welcome student
function welcomeStudent()
{
    echo "<h3>Welcome Student!</h3>";
}

// Calling functions

collegeInfo();

studentDetails("Parimal Sitapara", "ENR2025001", 3);

$percentage = calculatePercentage(85, 90, 78, 88, 92);
echo "Percentage: " . number_format($percentage, 2) . "%<br><br>";

// Checking whether function exists before calling
if (function_exists('welcomeStudent')) {
    welcomeStudent();
} else {
    echo "Error: Function welcomeStudent() does not exist.";
}
?>