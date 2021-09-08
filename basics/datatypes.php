<?php

$iamstring = 'iamstring';
$iaminteger = 908409587987797900888;
$iamboolean = true;

$iamarray = array("bmw", "audi", "benz");

function insertData()
{
    print("hello function");
    getData();
}


function getData()
{
    print("ok i am getting the data you can chill");
}

insertData();


// function dumpData()
// {
//     var_dump($iamstring);
//     var_dump($iaminteger);
//     var_dump($iamboolean);
// }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php basics</title>
</head>

<body>
    <div>

        <h1>Data types</h1>


    </div>
</body>

</html>
<?php
print("below the html");

class Car
{

    private $price;

    public $model;

    public $mileage;



    public function __construct($price, $model, $mileage)
    {

        print("i am initializing the function");
        $this->price = $price;
        $this->model = $model;
        $this->mileage = $mileage;
    }

    public function initializeTheObject()
    {
        print("initialize from initialize");
    }

    public function returnModelAndPrice()
    {
        return "This car's price is $this->price and model is $this->model";
    }

    public function changePrice($pricefrom)
    {
        return $this->price = $pricefrom;
    }
}
$mycar = new Car(40, 50, 546);



$mycar->changePrice(150);
echo $mycar->returnModelAndPrice();

?>