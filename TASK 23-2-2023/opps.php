
<?php
//  concept of OOPs:
//Feature Of oops :
// 1.class
// 2.object 
// 3.inheritance
// 4.Polymorphism
// 5.encapsulation
// 6.abstraction

// 1 . class
        // class is a group of code that can be access its code using its object. 

 //eg:
    class  A
    {
        public function test()
        {
            echo " My name is jigna";
        }
    }
    

// 2.object
     // An object is instance of class. object is create same name of class name and that can 
     // be accdess its claas method object create using "New" keyword.
// ex:
        class  A
        {
            public function test()
            {
                echo " My name is jigna";
            }
        }
        obj= new A;
        obj->test();


// 3.Inheritance
     // Inheritance is hirarchy of more than one class. inheritance is one parent 
     // class can access its property to its child class. extend is use to inherit 
     // one class data to another class. 
     //   types of inheritance
     // 1.single inheritance
     // 2.multiple inheritance 
     // 3.multilevel inheritance
// ex:
class  A
{
    public function test()
    {
        echo " My name is jigna";
    }
}
class B extend A
{
     public function test1()
     {
        echo " My name is jiya";
     }
}
obj=new B;
obj->test();
obj->test1();


// 4.Polymorphism
//  two type of method 
    //1. method overloading
    //2.method overriding
ex:
    1.method overloading
    class A
    {
         public function test($a,$b)
         {
            statement;
         }
    }
    class B extend A
    {
         public function test($a,$b,$c)
         {
            statement;
         }
    }
ex:
    2.method overriding
    class A
    {
         public function test($a,$b,$c)
         {
            statement;
         }
    }
    class B extend A
    {
         public function test($a,$b,$c)
         {
            statement;
         }
    }

// 5.encapsulation

Ex:
    trait A
    {
        public function test()
        {
            echo " my name is jigna";    
        }
    }
    trait B 
    {
        public function test1()
        {
            echo " my name is jigna";    
        }
    }
    trait C
     {
        use A;
        use B;
    }

// 6.abstraction
    // abstraction is access class method or its data without using object. its function or method call using :: operator.
     Ex:
     class A
     {
        public function test()
        {
            echo " my name is jigna";
        } 
     }
     class B extend A
     {
        public function test1()
        {
            echo " my name is jigna";
        } 
     }
     B::test();
     B::test1();