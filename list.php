<?php
// php .\list.php
include('bootstrap.php');

$students = $em->getRepository('Student')->findAll();
$works = $em->getRepository('Works')->findAll();

echo "Students:\n";
foreach ($students as $student) {
    echo "-" .$student->getName()
        . " id " . $student->getId() . ".\n";
}
echo "\nWorks:\n";
foreach ($works as $work) {
    echo "-\"" . $work->getTitle() . "\" by student id " .
        $work->getStudent()->getId() . ".\n";
}
