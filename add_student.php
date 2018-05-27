<?php
// php .\add_student.php <name> <surname> <adress> <phone> <email>
include('bootstrap.php');

$student = new Student();
$student->setName($argv[1])
    ->setSurname($argv[2])
    ->setAdress($argv[3])
    ->setPhone($argv[4])
    ->setEmail($argv[5]);
$em->persist($student);
$em->flush();

echo "Created a student with id " . $student->getId() . "\n";
