<?php



abstract class Observable{
    
    private $observers = array();
    
    public function addObserver(Observer $observer){
        array_push($this->observers, $observer);
    }

    public function notifyObserver(){

        for($i=0;$i<count($this->observers);$i++){
            $widget = $this->observers[$i];
            $widget->update($this);
        }
    }

}



class DataSource extends Observable{

    private $menu;
    

    function __construct(){
        $this->menu = array();
     

    }

    public function addRecord($menu){
        array_push($this->menu, $menu);
        $this-> notifyObserver();
    }


    public function getData(){
        return array($this->menu);
    }

}


?>