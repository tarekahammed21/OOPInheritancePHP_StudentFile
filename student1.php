<?php
require "student.php";

class student1_basic_info extends StudentBasicInfo

{

    public $fcontact;
    public $mcontact;
    public $loc_gur;
    public $lcontact;
    public $emcontact;

    public function setData1($fcontact, $mcontact, $loc_gur, $lcontact, $emcontact)
    {
        $this->fcontact = $fcontact;
        $this->mcontact = $mcontact;
        $this->loc_gur = $loc_gur;
        $this->lcontact = $lcontact;
        $this->emcontact = $emcontact;
    }

    public function display1()
    {
        echo "<b>Father's Contact: </b>" . $this->fcontact . "<br>";
        echo "<b>Mothers's Contact: </b>" .  $this->mcontact . "<br>";
        echo "<b>Local Gurdian Name: </b>" .  $this->loc_gur . "<br>";
        echo "<b>Local Gurdian's Contact: </b>" .  $this->lcontact . "<br>";
        echo "<b>Emergency Contact: </b>" .   $this->emcontact . "<br>";
    }

    public function Nationality()
    {
        echo "<b>**Bangladeshi**</b>";
    }
}

//echo"Welcome to Student database"; 
echo "<h1>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <u>WELCOME TO STUDENT DATABASE</u></h1>";

function student1_basic_Output()
{
    echo "<h2>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    <u>Student's Basic Information</u></h2>";
    $student1 = new StudentBasicInfo();
    $student1->Data("Md. Tarek Ahammed Raju", "Mr. Harun Or Rashid Shake", "Taslima Akter", "Male", "ahammedtarek21@gmail.com", "01932478333");
    $student1->show();

    $student1 = new student1_basic_info();
    $student1->Nationality();
    echo "<br>";
    echo "<h2>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    <u>Student's Contact Information</u></h2>";
    // echo "<br><h1>Student's Contact Information:</h1>";
    $student1->setData1("+880 1234 567890", "880 1234 567890", "Mr Sahjahan Khan", "880 1234 567890", "01932478333");
    $student1->display1();
}


class student_var_info extends vars_Info
{

    public $stuType;

    public function StudentType($stuType)
    {

        $this->stuType = $stuType;
    }

    public function display()
    {
        echo "<b>Student Type: </b>" . $this->stuType . "<br>";
    }
}



function student1_varsityInfo_Output()
{
    echo "<h2>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    <u>Student's Academic Information</u></h2>";

    $student1 = new vars_Info();
    $student1->setData("2018100000015", "BSC in CSE", "49", "13 sem running", "2018100000015@seu.edu.bd");
    $student1->display();
    $student1 = new student_var_info();
    $student1->StudentType("Regular");
    $student1->display();
}


class student1_CourseInfo extends CourseInfo
{

    public function credit()
    {
        echo "<b>Total Credits: </b> 144" . "<br>";
        echo "<b>Complete Credits: </b> 131" . "<br>";
        echo "<b>Due Credits: </b> 13" . "<br>";
    }
}


function student1_CourseInfo_Output()
{


    echo "<h2>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    <u>Student's Course Information</u></h2>";


    $course1 = new CourseInfo();
    $course1->setData("ETE2024.2", "Communication Theory Lab", "Limon Mollah", "LM", "Regular");
    $course1->display();
    echo "<br>";

    $course2 = new CourseInfo();
    $course2->setData("CSE4012.2", "Computer Networking Lab", "Sakib Mahmud", "SMA", "Regular");
    $course2->display();
    echo "<br>";

    $course3 = new CourseInfo();
    $course3->setData("ETE2023.1", "Communication Theory", "Mohammod Ashraful Hoque", "AHQ", "Regular");
    $course3->display();
    echo "<br>";

    $course4 = new CourseInfo();
    $course4->setData("CSE2026.1", "Algorithm Lab", "Sakib Mahmud", "SMA", "Regular");
    $course4->display();
    echo "<br>";

    $course5 = new CourseInfo();
    $course5->setData("EEE2012.2", "Electronic Devices And Circuits I Lab", "Bashra Sultana", "BAS", "Regular");
    $course5->display();
    echo "<br>";

    $course6 = new CourseInfo();
    $course6->setData(" CSE4011.2", "Computer Networking", "Mohammod Sohel Rana", "MDSR", "Regular");
    $course6->display();
    echo "<br>";

    echo "<h2>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    <u>Student's Credits Information</u></h2>";
    $student1 = new student1_CourseInfo();
    $student1->credit();
}


echo student1_basic_Output();
echo student1_varsityInfo_Output();
echo student1_CourseInfo_Output();


?>