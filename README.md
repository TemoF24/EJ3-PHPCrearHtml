# Página Web Modular en PHP

Este proyecto demuestra cómo crear una página web utilizando clases en PHP para estructurar los diferentes elementos de la página: la cabecera, el cuerpo y el pie de página. El código está diseñado de forma modular, lo que permite agregar fácilmente contenido a cada parte de la página.

## Descripción

El script está dividido en tres partes principales:

- **Cabecera**: Contiene el título de la página y los estilos CSS.
- **Cuerpo**: Contiene el contenido principal de la página.
- **Pie**: Contiene el pie de página de la web.

Se utiliza la clase `Pagina` para ensamblar la página final con las partes mencionadas.

### Funcionalidad

1. **Clase Cabecera**: Se encarga de la parte superior de la página, donde se incluye el título y los enlaces a los archivos CSS.
2. **Clase Cuerpo**: Representa el contenido principal de la página, el cual se puede agregar dinámicamente.
3. **Clase Pie**: Representa la parte inferior de la página, donde se puede agregar información adicional o enlaces.

## Estructura de Archivos

1. **cabecera.php**: Define la clase `Cabecera`, encargada de generar la cabecera de la página web.
2. **cuerpo.php**: Define la clase `Cuerpo`, que genera el contenido del cuerpo de la página.
3. **pie.php**: Define la clase `Pie`, que se utiliza para generar el pie de página.
4. **index.php**: El script principal donde se generan y ensamblan los componentes de la página web.
