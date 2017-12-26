<?php


class Example
{
    public $name = 'Rothee';
    protected $city = 'Faridpur';
    private $country = 'Bangladesh';


    public function __construct()
    {
        echo 'In construct';
//       $this->value = $data;
    }

    public function addition(){
        echo 'In addition';
//        echo $this->value;
    }

   protected function subtraction(){
        echo 'In subtruction';
    }
   private function division(){
        echo "In division";
    }

}