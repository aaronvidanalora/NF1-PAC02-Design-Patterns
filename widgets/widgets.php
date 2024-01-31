<?php

interface Observer{
    public function update(Observable $subject);
}



abstract class Widget implements Observer{
    
    protected $internalData = array();

    abstract public function draw();

    public function update(Observable $subject){
        $this->internalData = $subject->getData();
    }

}

class BasicWidget extends Widget{

    public function draw() {
        $html = "<link rel=\"stylesheet\" href=\"estilo.css\">";
        $html .= "<header class=\"header\">";
        $html .= "<a href=\"\" class=\"logo\">CSS NAV</a>";
        $html .= "<input class=\"menu-btn\" type=\"checkbox\" id=\"menu-btn\" />";
        $html .= "<ul>";
    
        $numFilas = count($this->internalData[0]); // numero de filas
    
        for ($i = 0; $i < $numFilas; $i++) {
            $menu = $this->internalData[0];
            $html .= "<li><a href=\"#work\">$menu[$i]</a></li>";
        }
    
        $html .= "</ul>";
        $html .= "</header>";
    
        echo $html;
    }
    

}


class FancyWidget extends Widget{

    public function draw(){

        $html = "<table border=0 cellpadding=5 width=270 bgcolor=#6699BB>";
        $html.= "<tr><td colspan=3 bgcolor=#cccccc>";
        $html.= "<b><span class=blue>Our Latest Prices</span></b></td></tr>";
        $html.= "<tr><th>instrument</th><th>price</th><th>date issued</th></tr>";

        $numFilas = count($this->internalData[0]); // numero de filas

        for($i=0; $i<$numFilas;$i++){
            $instrumentos = $this->internalData[0];
            $precios = $this->internalData[1];
            $anyos = $this->internalData[2];

            $html.= "<tr><td>$instrumentos[$i]</td><td>$precios[$i]</td><td>$anyos[$i]</td></tr>";

        }

        $html.= "</table>";

        echo $html;
    }

}

?>