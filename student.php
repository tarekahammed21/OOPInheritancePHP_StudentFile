<?php

class StudentBasicInfo{
    public $name;
    public $fname;
    public $mname;
    public $gender;
    public $email;
    public $contact;



    public function Data($n,$f,$m,$g,$e,$c){
        $this->name=$n;
        $this->fname=$f;
        $this->mname=$m;
        $this->gender=$g;
        $this->email=$e;
        $this->contact=$c;

    } 

    public function show(){
        echo "<b>Student Name: </b>" . $this->name ."<br>";
        echo "<b>Student Father's Name: </b>" . $this->fname ."<br>";
        echo "<b>Student Mother's Name: </b>" . $this->mname ."<br>";
        echo "<b>Student Gender: </b>" .  $this->gender . "<br>";
        echo "<b>Student Email: </b>" . $this->email . "<br>";
        echo "<b>Student Contact: </b>" . $this->contact . "<br>";

    }



}




class vars_Info{

    public $id;
    public $program;
    public $batch;
    public $cur_sem;
    public $var_mail;


    public function setData($id, $prog,$batch,$c_s, $v_m){
        
        $this->id=$id;
        $this->program=$prog;
        $this->batch=$batch;
        $this->cur_sem=$c_s;
        $this->var_mail=$v_m;
   }

   public function display(){

    echo"<b>Student ID: </b> " .  $this->id ."<br>";
    echo"<b>Program: </b> " . $this->program . "<br>";
    echo"<b>Batch: </b> " . $this->batch . "<br>";
    echo "<b>Current Semester: </b>". $this->cur_sem . "<br>";
    echo"<b>Varsity Mail: </b>".  $this->var_mail . "<br>";
   }



}



class CourseInfo{
    public $courseCode;
    public $courseTitle;
    public $facultyName;
    public $facultyInitial;
    public $courseType;


   public function setData($courseCode, $courseTitle, $facultyName,$facultyInitial, $courseType){

    $this->courseCode= $courseCode;
    $this->courseTitle= $courseTitle;
    $this->facultyName= $facultyName;
    $this->facultyInitial= $facultyInitial;
    $this->courseType= $courseType;

   }

   public function display(){

    echo"<b>Course Code: </b>" . $this->courseCode ."<br>";
    echo"<b>Course Title: </b>" . $this->courseTitle ."<br>";
    echo"<b>Faculty Name: </b>" . $this->facultyName ."<br>";
    echo "<b>Faculty Initial: </b>" . $this->facultyInitial . "<br>";
    echo"<b>Course Type: </b>" . $this->courseType . "<br>";
   }

}



?>