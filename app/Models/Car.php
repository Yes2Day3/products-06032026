<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    public $name;
    public $year;
    public $totalDistance;
    function __construct($name, $year, $totalDistance){
        $this->name = $name;
        $this->year = $year;
        $this->totalDistance = $totalDistance;
    }
    public function showDistance(){
        return $this->totalDistance;
    }
    public function drive($distance){
        $this->totalDistance += $distance;
    }
    public static function create($name, $year, $totalDistance){
        return new Car($name, $year, $totalDistance);
    }
}
