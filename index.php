<?php
include ('Student.php');

$students = array();

// Add first student
$first = new Student();
$first->surname = "Doe";
$first->first_name = "John";
$first->add_email('home','john@doe.com');
$first->add_email('work','jdoe@mcdonalds.com');
$first->add_grade(65);
$first->add_grade(75);
$first->add_grade(55);
$students['j123'] = $first;

// Add second student
$second = new Student();
$second->surname = "Einstein";
$second->first_name = "Albert";
$second->add_email('home','albert@braniacs.com');
$second->add_email('work1','a_einstein@bcit.ca');
$second->add_email('work2','albert@physics.mit.edu');
$second->add_grade(95);
$second->add_grade(80);
$second->add_grade(50);
$students['a456'] = $second;

// Add 3rd student
$third = new Student();
$third->surname = "Dylan";
$third->first_name = "Bob";
$third->add_email('home', 'bob@home.com');
$third->add_email('work1', 'bob@work1.com');
$third->add_email('work2', 'bob@work2.com');

$third->add_grade(90);
$third->add_grade(75);
$third->add_grade(65);
$students['b777'] = $third;

ksort($students); // sorts student names

// outputs the students from Students class
foreach($students as $student) {
	echo $student->toString();
}

?>
