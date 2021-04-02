<?php
abstract class car{
    public string $description;
    public function get_description():string
    {
        return $this->description;
    }
    abstract public  function  get_cost():int;
}
class
modelS
    extends  car{
    public string $description="Model S";
    public function get_cost():int
    {
        return 73000;
    }

}
class
model_LX extends car{
    public string $description="Model LX";
    public function get_cost(): int
    {
        return 77000;
    }
}

abstract  class carOption extends car{
    public car $decoratedCar;
    function __construct(){

    }
    public function get_description():string
    {

    }
    abstract public function get_cost():int;
}
class auto_pilot extends CarOption{
    public car $decoratedCar;
    function __construct(car $car)
    {
        parent::__construct();
        $this->decoratedCar=$car;
    }

    public function get_cost(): int
    {
        // TODO: Implement cost() method.
        return $this->decoratedCar->get_cost() + 5000;
    }

    public function get_description(): string
    {
        return $this->decoratedCar->get_description()." self driving car";
    }
}
class
rear_facing_seats
    extends CarOption{
    public car $decoratedCar;
    function __construct(car $car)
    {
        parent::__construct();
        $this->decoratedCar=$car;
    }

    public function get_cost(): int
    {
        return $this->decoratedCar->get_cost() + 2000;
    }

    public function get_description():string
    {
        return $this->decoratedCar->get_description() ." with rear facing seats";
    }
}
class
leather_seats extends carOption{
    public car $decoratedCar;
    function __construct(car $car)
    {
        $this->decoratedCar=$car;
        parent::__construct();
    }

    public function get_cost(): int
    {
        return $this->decoratedCar->get_cost() + 4000;
    }
    public function  get_description(): string
    {
        return $this->decoratedCar->get_description(). " leather seats car";
    }
}
class
sport_wheels extends carOption {
    public car $decoratedCar;
    function __construct(car $car)
    {
        $this->decoratedCar=$car;
        parent::__construct();
    }
    public function get_cost(): int
    {
       return $this->decoratedCar->get_cost() + 6000;
    }
    public function get_description(): string
    {
        return $this->decoratedCar->get_description() ." with sport wheels for life";
    }
}

echo "<pre>";
echo "<hr>";
$myTelsa= new modelS();
$myTelsa=new rear_facing_seats($myTelsa);
$myTelsa= new auto_pilot($myTelsa);
$myTelsa= new sport_wheels($myTelsa);
$myTelsa= new leather_seats($myTelsa);
echo
$myTelsa->get_description();
echo "</br>";
echo "cost:".$myTelsa->get_cost();
echo "<br>";
print_r
($myTelsa);


?>