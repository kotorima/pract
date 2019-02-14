<?php 
namespace View;
require "index.php";
// function show($obj){
//     echo "<pre>";
//       var_dump($obj);
//     echo "</pre>";
//}
function change_field($mouse = '', $keyboard = '', $monitor = ''){
    return new PC($mouse, $keyboard, $monitor);
}

class PC {
    public $mouse;
    public $keyboard;
    public $monitor;

    public function __construct(){
        $this->mouse = 'sus';
        $this->keyboard = 'genius';
        $this->monitor = 'aser';
    }


    public function __tostring(){
        return "'mouse: '{$this->mouse}'   keyboard: '{$this->keyboard}'   monitor: '{$this->monitor}";
    }

    // public static function show() {
    //     $mouse = 'uss';
    //     $keyboard = 'genius';
    //     $monitor = 'aser';
    //     echo 'мышь: '.$mouse.'</br>'.'клавиатура: '.$keyboard.'</br>'.'монитор: '.$monitor;
    // }
}