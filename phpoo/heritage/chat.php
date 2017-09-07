<?php


require_once './animal.php';

class Chat extends Animal
{
    // surcharge de l'attribut $espece dans Chat
    protected $espece='chat';
    
    public function identifier(){
        return parent::identifier() . '<br>je suis un chat';
    }
    public function crier(){
        echo 'Miou';
    }
    final public function ronronner(){
        echo 'Rouron';
    }
}


