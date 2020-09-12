<!DOCTYPE html>
<html>
<body>

<?php
class Student{
  // Properties
  public $name="Jannatul Ferdousi";
  public $ID="CSE1901016037";
  public $Phonenumber="019201023";

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
  return $this->name;
  }
  function set_name($ID) {
    $this->ID = $ID;
  }
  function get_name() {
  return $this->ID;
  }

}
$obj=new Student();
echo $obj->get_name();
?>
 
</body>
</html>
ID 2455857334
passcode. vm62Ff