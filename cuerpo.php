<?php
class Cuerpo {
    private $contenido;

    public function __construct($contenido = "") {
        $this->contenido = $contenido;
    }

    public function agregarContenido($contenido) {
        $this->contenido .= $contenido;
    }

    public function generar() {
        return "<body>" . $this->contenido . "</body>";
    }
}
?>