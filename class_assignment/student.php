<?php
class Student{
    public $full_name,$courses,$specialty,$university,$email,$phone;

    function Student($full_name){
        print "*************************************\n";
        print "Constructor Accepts Name and Print\n";
        print "*************************************\n";
        print "$full_name\n";
        print "*************************************\n\n";
    }

    public function set_student_information($full_name,$courses,$specialty,$university,$email,$phone)
    {

        $this->full_name = $full_name;
        $this->courses = $courses;
        $this->specialty = $specialty;
        $this->university = $university;
        $this->email = $email;
        $this->phone = $phone;
    }
    public function get_information()
    {
        print "*************************************\n";
        print "This is Student Detail\n";
        print "*************************************\n";
        print "Name of Student: ";
        print $this->full_name."\n";
        print "Course of Student: ";
        print $this->courses."\n";
        print "Specialty of Student: ";
        print $this->specialty."\n";
        print "University of Student: ";
        print $this->university."\n";
        print "Email of Student: ";
        print $this->email."\n";
        print "Phone Number of Student: ";
        print $this->phone."\n";
        print "*************************************\n";
    }

}
print "Student 1 \n";
$student = new Student("Deepti Kakade");
$student->set_student_information("Deepti Kakade","Engineering","IT","Pune University","deepti@weboniselab.com","8390108472");
$student->get_information();
print "Student 2\n";
$student1 = new Student("Snehal Sakare");
$student1->set_student_information("Snehal Sakare","Computer Science","MCA","Pune University","snehal@weboniselab.com","8390108472");
$student1->get_information();
?>

