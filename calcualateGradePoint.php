<?php
// Define a class to represent a student's marks
class StudentMark {
    public $subject;
    public $marks;

    public function __construct($subject, $marks) {
        $this->subject = $subject;
        $this->marks = $marks;
    }
}

// Define a function to calculate grades based on marks
function calculateGrade($marks) {
    if ($marks >= 90) {
        return 'A';
    } elseif ($marks >= 80) {
        return 'B';
    } elseif ($marks >= 70) {
        return 'C';
    } elseif ($marks >= 60) {
        return 'D';
    } elseif ($marks >= 50) {
        return 'E';
    } else {
        return 'F';
    }
}

// Define a function to process an array of student marks and assign grades
function assignGrades($studentMarks) {
    $gradedSubjects = array();

    foreach ($studentMarks as $studentMark) {
        $grade = calculateGrade($studentMark->marks);
        $gradedSubjects[] = array(
            'subject' => $studentMark->subject,
            'marks' => $studentMark->marks,
            'grade' => $grade
        );
    }

    return $gradedSubjects;
}

// Example usage
$studentMarks = array(
    new StudentMark('Math', 95),
    new StudentMark('English', 85),
    new StudentMark('History', 78),
    new StudentMark('Science', 65),
    new StudentMark('Art', 55),
    new StudentMark('Physical Education', 45)
);

$gradedSubjects = assignGrades($studentMarks);

echo "Grading System:\n";
foreach ($gradedSubjects as $subject) {
    echo "Subject: " . $subject['subject'] . ", Marks: " . $subject['marks'] . ", Grade: " . $subject['grade'] . "\n";
}
?>
