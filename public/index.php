<?php
/**
 * Created by PhpStorm.
 * User: nisha
 * Date: 2/19/19
 * Time: 2:32 PM
 */
main::start();
class main {

    Static public function start() {
        $records=csv::getRecords();
        $table=html::generateTable($records);
        system::printPage($table);
}
}
class csv{
    Static public function getRecords() {
        $make = 'Hyundai';
        $model = 'I10';
        $car = AutomobileFactory::create($make, $model);
        //print_r($car);

        return $car;
    }
}

class html{
    Static public function generateTable($records) {
        $table=$records;
        return $table;


    }}
class system{
    Static public function printPage($page) {
        print_r($page);
    }
}
class Automobile
{
    private $vehicleMake;
    private $vehicleModel;

    public function __construct($make, $model)
    {
        $this->vehicleMake = $make;
        $this->vehicleModel = $model;
    }



    public function getMakeAndModel()
    {
        return $this->vehicleMake . ' ' . $this->vehicleModel;
    }
}

class AutomobileFactory
{
    public static function create($make, $model)
    {
        return new Automobile($make, $model);
    }
}
