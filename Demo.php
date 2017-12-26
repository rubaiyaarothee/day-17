<?php
require_once 'Example.php';

class Demo extends Example
{
public $age = 22;
    protected $location = "Farmgate";
    private $mobile = '01788';
    public function newOne(){
//        echo 'In new one';
        $this->addition();
    }
    private function newTwo(){
        echo 'In new two';
    }
    protected function newThree(){
        echo 'In new three';
    }

}