<?php
class Cabecera {
    private $titulo;
    private $css;

    public function __construct($titulo, $css = "") {
        $this->titulo = $titulo;
        $this->css = $css;
    }

    public function generar() {
        $html = "<head>";
        $html .= "<title>" . htmlspecialchars($this->titulo) . "</title>";
        
        if (!empty($this->css)) {
            $html .= "<link rel='stylesheet' type='text/css' href='" . htmlspecialchars($this->css) . "'>";
        }
        
        $html .= "</head>";
        return $html;
    }
}
?>