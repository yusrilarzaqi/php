<?php

class Student {
  public string $id;
  public string $name;
  public int $ipk;
  public string $sample;

  public function setSample(string $sample): void {
    $this->sample = $sample;
  }
  
  public function __clone() {
    unset($this->sample);
  }

  public function __toString(): string {
    return "Student id:$this->id, name:$this->name, ipk:$this->ipk";
  }

  public function __invoke(...$args) {
    $join = join(",", $args);
    echo "Invoke Student with $join" . PHP_EOL;
  }

  public function __debugInfo(): array {
    return[
      "id" => $this->id,
      "name" => $this->name,
      "ipk" => $this->ipk,
      "sample" => $this->sample,
      "author" => "Yusril Arzaqi",
      "version" => "1.0.0"
    ];
  }
  
}

?>
