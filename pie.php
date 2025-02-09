<?php
class Pie {
    private $contenido;

    public function __construct($contenido = "") {
        $this->contenido = $contenido;
    }

    public function generar() {
        return "<footer>" . $this->contenido . "</footer>";
    }
}
?>