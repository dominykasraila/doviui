<?php
// php .\add_work.php <student_id> <title> <supervisor>
include('bootstrap.php');

$student = $em->find('Student', $argv[1]);

$work = new Works();
$work->setStudent($student)
    ->setTitle($argv[2])
    ->setSupervisor($argv[3]);
$em->persist($work);
$em->flush();



echo "Created a work with id " . $work->getId() .
    " of student with id " . $work->getStudent()->getId() . "\n";
