<?php
    class Person{
        // Add Access provide
            # - public: we can access from anywhere outside of class
            # - private : we can access only in this class
            # - protect: we can access from this class and anythere class extend this class

        private $name;
        private $email;

        // Here we can access without instanite object
        // public static $ageLimit = 30;

        // Set as private
        private static $ageLimit = 30;

        // It run when we instanite object
        public function __construct($name, $email) {
            $this->name=$name;
            $this->email=$email;
            // echo "Person Created.<br>";
            echo __CLASS__ . " Created! <br>";
        }

        public function __destruct()
        {
           echo __CLASS__." destroyed.<br>";
        }

        public function getName() {
            return $this->name .'<br>';
        }

        public function setName($name) {
            $this->name = $name;
        }

        public function getEmail() {
            return $this->email .'<br>';
        }

        public function setEmail($email) {
            $this->email = $email;
        }

        public static function getAge(){
            return self::$ageLimit ."<br>";
        }

    }

    // $person1 = new Person('Adam Smith', 'adam@demo.com');

    // $person1 = new Person;

    /*
        - This not very good practice when we interact with propetery
          make them private and write public function to mainplate them
    */

    // $person1->name = 'Smith John';
    // echo $person1->name;

    // Use function to access
    // $person1->setName('Smith John');
    // echo $person1->getName();

    // echo Person::$ageLimit ."<br>";
    echo Person::getAge();

    class Customer extends Person {
        private $balance;
        public function __construct($name, $email, $balance) {
            parent::__construct($name, $email, $balance);
            // $this->name=$name;
            // $this->email=$email;
            $this->balance=$balance;


            echo "A new ". __CLASS__ . " has been Created! <br>";
        }

        public function getBalance() {
            return $this->balance .'<br>';
        }

        public function setBalance($balance) {
            $this->balance = $balance;
        }
    }

    $customer1 = new Customer('Doe', 'joh@demo.com', 300);

     echo $customer1->getBalance();
