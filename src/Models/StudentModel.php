<?php

namespace Dado\Gs\models;

use  Dado\Gs\Core\Crud;
use  Dado\Gs\Core\Database;

class StudentModel extends Database implements Crud{


    public int $id;
    public string $name;
    public string $course;
    public int $year_level;
    public string $section;
        

    public function __construct(){
        parent::__construct();
        $this->id = 0;
        $this->name ="";
        $this->course ="";
        $this->year_level = 0;
        $this->section ="";
    }





    public function create(){
        $query = $this->conn->prepare("INSERT INTO `student`(`id`, `name`, `course`, `year_level`, `section`)
        VALUES ('$this->id','$this->name','$this->course','$this->section','$this->year_level')");
        if($query->execute()){
            echo "Student Created successfully!";
        }

    }

    public function read(){
        try {
            $sql="SELECT * FROM student";
            $results = $this->conn->query($sql);
            return $results->fetch_all(MYSQLI_ASSOC);
        } catch (\throwable $th){
            echo $th->getMessage();
        }

    }
    public function update($id){
        $this->id=$id;
        $query = $this->conn->prepare
        ("UPDATE `student` SET id='$this->id',name='$this->name',course='$this->course',year_level='$this->year_level',section='$this->section'WHERE id = $this->id"); 
        if($query->execute()){
         echo "Student Updated Succesfully!!\n";
        }
         
       }
     
     public function delete($id){
        $this->id=$id;
         $query = $this->conn->prepare("DELETE FROM `student`WHERE id = $id");
         if($query ->execute()){
             echo "Student Deleted!!";
         }
     }
 }
 
 
    
    