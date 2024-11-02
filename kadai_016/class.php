
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>kadai_016</title>
</head>

<body>
  <p>
<?php
class Food{
 private $name;
 private $price;

 public function show_name(string $name){
  $this->name = $name;
 }
 public function show_price(int $price){
  $this->price = $price;
 }
 public function __construct(string $name, int $price){
$this->name=$name;
$this->price=$price;
 }

}
$food = new Food('potato',250);
print_r($food);
echo '<br>';


class Animal{
private $name;
private $height;
private $weight;
public function show_name(string $name){
  $this->name = $name;
 }
public function show_height(int $height){
  $this->heigt = $height;
 }
 public function show_weight(int $weight){
  $this->weight = $weight;
 }
 public function __construct(string $name, int $height, int $weight){
  $this->name=$name;
  $this->height=$height;
  $this->weight=$weight;
 }
}
$animal = new Animal('dog',60,5000);
print_r($animal);
echo'<br>';

?>
  </p>
</body>