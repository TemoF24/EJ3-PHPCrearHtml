<?php
require_once 'cabecera.php';
require_once 'cuerpo.php';
require_once 'pie.php';
class Pagina {
    private $cabecera;
    private $cuerpo;
    private $pie;

    public function __construct($titulo, $css = "", $contenidoCuerpo = "", $contenidoPie = "") {
        $this->cabecera = new Cabecera($titulo, $css);
        $this->cuerpo = new Cuerpo($contenidoCuerpo);
        $this->pie = new Pie($contenidoPie);
    }

    public function agregarContenidoCuerpo($contenido) {
        $this->cuerpo->agregarContenido($contenido);
    }

    public function generar() {
        $html = "<!DOCTYPE html><html>";
        $html .= $this->cabecera->generar();
        $html .= $this->cuerpo->generar();
        $html .= $this->pie->generar();
        $html .= "</html>";
        return $html;
    }
}

$pagina = new Pagina("Mi Página Web", "estilos.css", "<h1>Bienvenido a mi página</h1><p>Este es el contenido principal del cuerpo.</p>", "<p>Pie Página Web</p>");

$pagina->agregarContenidoCuerpo("<p>Este es contenido adicional en el cuerpo de la página.</p>");

echo $pagina->generar();
?>
