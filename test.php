<?php

require_once 'bootstrap.php';

/*
$message = new Message();
$message->setText('xdxd');

$em->persist($message);
$em->flush();
*/

// $message = $em->getRepository('Message')->findAll();
// foreach ($message as $value) {
//   $value->setText($value->getText().'!');
//   $em->persist($value);
// }
//   $em->flush();


$student = new Student;
$phone = 865884509;
$student->setName('Petras')->setSurname('Jonikas')->setAdress('reikjaviko 9a')->setPhone($phone);

$em->persist($student);
$em->flush();
