<?php
interface IAnimal{
public function talk();
}

class Dog implements IAnimal{
public function talk(){
print "jaff\n";
}
}
class Cat implements IAnimal{
    public function talk(){
       print "muaw\n";
    }
}
print "Dog Class:\n";
$dog_instance = new Dog();
$dog_instance->talk();
print "Cat Class:\n";
$cat_instance = new Cat();
$cat_instance->talk();
?>