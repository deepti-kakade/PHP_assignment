<?php
interface IAnimal{
    public function talk();
}
abstract class Cat implements IAnimal{
    public $name;
    abstract public function printInfo();
}

class Kitten extends Cat {
    public function talk(){
        print "Kitten muaw\n";
    }
    public function printInfo(){
        print "This is a Kitten\n";
    }
}
class Tomcat extends Cat{
    public function talk(){
        print "Tomcat muaw\n";
    }
    public function printInfo(){
        print "This is a Tomcat\n";
    }


}

class Dog implements IAnimal{
    public function talk(){
        print "jaff\n";
    }
}


class TestAnimal{
    public function __construct(){
        $animals = array(new Kitten(),new Tomcat(),new Dog());
        foreach($animals as $animal)
        {
         if($animal instanceof Cat){
             $animal->talk();
             $animal->printInfo();
         }
            else{
                $animal->talk();
            }
        }
    }
}

new TestAnimal();
?>
