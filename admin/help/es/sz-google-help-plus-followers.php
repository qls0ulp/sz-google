<?php

/**
 * This file contains information related to a help section 
 * of the plugin. Each directory is a specific language
 *
 * @package SZGoogle
 * @subpackage Admin
 * @author Massimo Della Rovere
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 */

if (!defined('SZ_PLUGIN_GOOGLE') or !SZ_PLUGIN_GOOGLE) die(); 

// Variable definition HTML for the preparation of the
// string which contains the documentation of this feature

$HTML = <<<EOD

<h2>Descripción</h2>

<p>With this feature you can put a badge on a web page containing the list of followers attached to a page or a profile on this 
google+. The badge will display the thumbnails of the profiles that follow the resource on google+ and is also added a button to add 
your profile page or directly to a circle. At this time the badge issued by google is not responsive, however, the plugin adds a 
parameter width="auto" means that javascript will try to calculate the width of the container and pass it to the code of google+.</p>

<p>Para insertar este componente debe utilizar el código corto <b>[sz-gplus-followers]</b>, si desea utilizarlo en una barra lateral,
usted tiene que utilizar el widget desarrollado para esta función que se encuentran en el menú apariencia => widgets. Para los más 
exigentes hay otra posibilidad, tiene que utilizar una función llamada PHP <b>szgoogle_gplus_get_badge_followers(\$options)</b>.</p>

<h2>Personalización</h2>

<p>Independientemente de la forma que va a utilizar, el componente se puede personalizar de diferentes maneras, sólo tiene que 
utilizar los parámetros puesto a disposición y listada en la tabla. En cuanto el widgets, se requieren los parámetros directamente
desde la interfaz gráfica de usuario, mientras que si se utiliza la función PHP o shortcode tiene que especificar manualmente.</p>

<h2>Parámetros y opciones</h2>

<table>
	<tr><th>Parámetro</th> <th>Descripción</th>     <th>Valores</th>                <th>Defecto</th></tr>
	<tr><td>id</td>        <td>page or profile</td> <td>cadena</td>                 <td>configuración</td></tr>
	<tr><td>align</td>     <td>alignment</td>       <td>left,center,right,none</td> <td>none</td></tr>
	<tr><td>width</td>     <td>width</td>           <td>valor,auto</td>             <td>configuración</td></tr>
	<tr><td>height</td>    <td>height</td>          <td>valor,auto</td>             <td>configuración</td></tr>
</table>

<h2>Ejemplo de Shortcode</h2>

<p>Los shortcodes son códigos de macro que se insertan en un artículo de wordpress. Son procesados ​​por los plugins,
temas o incluso el núcleo. El plugin de SZ-Google tiene una gama de shortcodes que se pueden utilizar para las 
funciones previstas. Cada shortcode tiene varias opciones de configuración para las personalizaciones.</p>

<pre>[sz-gplus-followers url="https://plus.google.com/+wpitalyplus"/]</pre>

<h2>Ejemplo de código PHP</h2>

<p>Si desea utilizar las funciones de PHP del plugin, asegurarse de que el módulo específico está activo, cuando se ha 
verificado esto, incluir las funciones en su tema y especifica las distintas opciones a través de una matriz. Es recomendable
comprobar si hay la función, de esta manera no tendrá errores de PHP cuando el Plugin es deshabilitado o desinstalado.</p>

<pre>
\$options = array(
  'url'    => 'https://plus.google.com/+wpitalyplus',
  'width'  => 'auto',
  'height' => 'auto',
);

if (function_exists('szgoogle_gplus_get_badge_followers')) {
  echo szgoogle_gplus_get_badge_followers(\$options);
}
</pre>

<h2>Advertencias</h2>

<p>El plugin <b>SZ-Google</b> se ha desarrollado con una técnica de módulos de carga individuales para optimizar el rendimiento general,
así que antes de utilizar un shortcode, un widget o una función PHP debe comprobar que aparece el módulo general y la opción específica
permitido a través de la opción que se encuentra en el panel de administración.</p>

EOD;

// Call function for creating the page of standard
// documentation based on the contents of the HTML variable

$this->moduleCommonFormHelp(__('google+ badge followers','szgoogleadmin'),NULL,NULL,false,$HTML,basename(__FILE__));