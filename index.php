<?php

use Dado\Gs\Models\StudentModel;

require 'vendor/autoload.php';

$student = new StudentModel();



// $student->name="bebong123";
// $student->course="IT";
// $student->year_level=1;
// $student->section="D";

$student->delete(69);