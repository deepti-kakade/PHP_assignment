<?php
class School{
    public $name;
    public $classes=array();
    public function __construct($name,$classObj){
        $this->name = $name;
        $this->classes = $classObj;
    }
    public function __destruct(){
        print "Destroying School\n";
    }
}

class ClassInSchool{
    public $class_number,$class_name;
    public $teachers = array();
    public $students = array();

    public function __construct($class_number,$class_name,$teacherObj,$students)
    {
        $this->class_number = $class_number;
        $this->class_name = $class_name;
        $this->teachers = $teacherObj;
        $this->students = $students;
    }
    public function __destruct(){
        print "Destroying Classes\n";
    }
}

class Student{

    public $name,$student_id,$class_number;
    public function __construct($name,$id,$class_number)
    {
        $this->name= $name;
        $this->student_id = $id;
        $this->class_number = $class_number;
    }
    public function __destruct(){
        print "Destroying Student\n";
    }
}

class Discipline{
    public $discipline_name, $number_of_lectures, $number_of_exercises;

    public function __construct($discipline_name, $number_of_lectures, $number_of_exercises)
    {
        $this->discipline_name = $discipline_name;
        $this->number_of_lectures = $number_of_lectures;
        $this->number_of_exercises = $number_of_exercises;
    }
    public function __destruct(){
        print "Destroying Disciplines\n";
    }
}
class Teacher{
    public $name,$title;
    public $disciplines = array();
    public function __construct($name,$title,$disciplines)
    {
        $this->name = $name;
        $this->title = $title;
        $this->disciplines = $disciplines;
    }
    public function __destruct(){
        print "Destroying Teacher\n";
    }
}

class Test{
    public function __construct(){

        $disciplines =array();
        $disciplines[0] = new Discipline("a", 1, 2);
        $disciplines[1] = new Discipline("b",2,3);

        $disciplines1 = array();
        $disciplines1[0] = new Discipline("c", 1, 2);
        $disciplines1[1] = new Discipline("d",2,3);
        $teachers = array();
        $teachers[0] = new Teacher("aa","bb",$disciplines);
        $teachers[1] = new Teacher("aaa","bbb",$disciplines);

        $teachers1 = array();
        $teachers1[0] = new Teacher("aaaa","bbbb",$disciplines1);
        $teachers1[1] = new Teacher("aaaaaa","bbbbb",$disciplines1);

        $students = array();
        $students[0] = new Student('deepti',1,1);
        $students[1] = new Student('snehal',2,1);

        $students1 = array();
        $students1[0] = new Student('ketki',3,2);
        $students1[1] = new Student('unnati',4,2);

        $classes = array();
        $classes[0] = new ClassInSchool(1,"abc",$teachers,$students);
        $classes[1] = new ClassInSchool(2,"ccc",$teachers1,$students1);

        $school = new School("a",$classes);
        print_r($school);

    }
    public function __destruct(){
        print "Destroying Test\n";
    }

}
$test = new Test();
$test = null;
?>