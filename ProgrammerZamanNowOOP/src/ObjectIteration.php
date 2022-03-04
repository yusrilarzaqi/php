<?php
class Data {
  var string $first = "First";
  public string $second = "Second";
  private string $third = "Third";
  protected string $fourth = "Forth";

  public function getIterator() {
      yield "first" => $this->first;
      yield "second" => $this->second;
      yield "thrid" => $this->third;
      yield "Fourth" => $this->fourth;

    /* return new ArrayIterator([ */
    /*   "first" => $this->first, */
    /*   "second" => $this->second, */
    /*   "thrid" => $this->third, */
    /*   "Fourth" => $this->fourth, */
    /* ]); */
  }
}

$data = new Data();
var_dump($data);

foreach ($data as $key => $value) {
  echo "$key => $value" . PHP_EOL;
}

?>

