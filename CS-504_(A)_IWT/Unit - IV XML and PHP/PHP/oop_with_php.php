<!DOCTYPE html>
<html>
<body>

<?php
class Fruit {
  // Properties
  public $name;
  public $color;

  // Methods
  function set_name($name): void {
    $this->name = $name;
  }
  function get_name(): mixed {
    return $this->name;
  }
  function set_color($color): void {
    $this->color = $color;
  }
  function get_color(): mixed {
    return $this->color;
  }
}

$apple = new Fruit();
$apple->set_name('Apple');
$apple->set_color('Red');
echo "Name: " . $apple->get_name();
echo "<br>";
echo "Color: " .  $apple->get_color();
?>
 
</body>
</html>
