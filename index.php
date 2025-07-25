<?php

use Dado\Gs\Models\StudentModel;

require 'vendor/autoload.php';

$student = new StudentModel;

$student->id=23213;
$student->name="John doe";
$student->course="BSIT";
$student->year_level=4;
$student->section="D";

$student = StudentModel->read();
print_r($student);
