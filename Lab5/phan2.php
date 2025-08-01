<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <style>
        table{
            width: 100%;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
        }
    </style>

<body>
    
    <h1>Student management</h1>

    <?php
$students = [];

function addStudent(&$students, $id, $name, $grades) {
    array_push($students, ['id' => $id, 'name' => $name, 'grades' => $grades]);
}

function removeStudentById(&$students, $id) {
    foreach ($students as $key => $student) {
        if ($student['id'] == $id){
            unset($students[$key]);
            break;
        }
    }
    $students = array_values($students);
}

function findStudentByName(&$students, $name){
    foreach ($students as $student){
        if ($student['name'] == $name){
            return $student;
        }
    }
    return null;
}

function calculateAverageGrade($grades){
    if(count($grades) == 0)
        return 0;
    return array_sum($grades) / count($grades);
}

function getStudentByAverageGrade($students, $minAverageGrade){
    $result = [];
    foreach ($students as $student){
        $averageGrade = calculateAverageGrade($student['grades']);
        if ($averageGrade > $minAverageGrade){
            array_push($result, $student);
        }
    }
    return $result;
}

function displayStudents($students){
    echo "<table>";
    echo "<tr><th>ID</th><th>Name</th><th>Grades</th><th>Average Grade</th></tr>";
    foreach ($students as $student){
        $averageGrade = calculateAverageGrade($student['grades']);
        echo "<tr>";
        echo "<td>" . $student['id'] . "</td>";
        echo "<td>" . $student['name'] . "</td>";
        echo "<td>" . implode(",", $student['grades']) . "</td>";
        echo "<td>" . number_format($averageGrade, 2) . "</td>";
        echo "</tr>";
    }
    echo "</table>";
}

addStudent($students, 1, "Student 1", [85, 90, 78]); 
addStudent($students, 2, "Student 2", [86, 97, 52]); 
addStudent($students, 3, "Student 3", [76, 95, 34]); 
addStudent($students, 4, "Student 4", [98, 45, 21]); 

echo "<h2>All students</h2>";
displayStudents($students);

removeStudentById($students, 2);
echo '<h2>After Removing Student with ID 2</h2>';
displayStudents($students);

$student = findStudentByName($students, "Student 3");
echo '<h2>Student: Student 3</h2>';
if ($student){
    echo "ID: " . $student['id'] . ", Name: " . $student['name'] . ", Grades: " . implode(",", $student['grades']);
} else { 
    echo "Student not found.";
}

$topStudents = getStudentByAverageGrade($students, 75);
echo "<h2>Students with Average Grade Greater than 75</h2>";
displayStudents($topStudents);
?>
    
</body>
</html>