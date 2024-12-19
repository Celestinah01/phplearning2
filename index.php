<?php 

// Parent class: sportsCar
class sportsCar {
    //properties
    public $brand;
    public $model;
    public $horsepower;
    public $topSpeed;
    

    public function __construct($brand, $model, $horsepower, $topSpeed)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->horsepower = $horsepower;
        $this->topSpeed = $topSpeed;
    }
    

    public function accelerate(){
        return "The {$this->brand} {$this->model} accelerates to {$this->topSpeed} km/h!";
    }


    public function displaySpecs() {
        return "sportsCar specs:\n".
               "Brand: {$this->brand}\n".
               "Model: {$this->model}\n" .
               "Horsepower: {$this->horsepower} HP\n" .
               "Top Speed: {$this->topSpeed} km/h\n";
              
    }

}
// child class: luxuryCar
class luxuryCar extends sportsCar {
    public $interiorMaterial;
    public $hasMassageSeats;


    public function __construct($brand, $model, $horsepower, $topSpeed, $interiorMaterial, $hasMassageSeats)
    {
        // Call parent constructor
        parent::__construct($brand, $model, $horsepower, $topSpeed);

        $this->interiorMaterial = $interiorMaterial;
        $this->hasMassageSeats = $hasMassageSeats;

    }

    public function accelerate() {
        $parentAccelerate = parent::accelerate();
        return $parentAccelerate . " In unparalleled luxury and comfort!";
    }
}

$luxuryCar = new LuxuryCar("Mercedes-Benz", "S-Class", 429, 250, "Nappa Leather", true);

echo $luxuryCar->accelerate() . "\n\n";

echo $luxuryCar->displaySpecs();
?>