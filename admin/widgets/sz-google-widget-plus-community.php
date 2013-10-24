<?php
/* ************************************************************************** */
/* Controllo se definita la costante del plugin                               */
/* ************************************************************************** */
if (!defined('SZ_PLUGIN_GOOGLE_MODULE') or !SZ_PLUGIN_GOOGLE_MODULE) die();

// Definizione dei nome per le varibili per CSS id

$ID_title         = $this->get_field_id('title');
$ID_method        = $this->get_field_id('method');
$ID_specific      = $this->get_field_id('specific');
$ID_width         = $this->get_field_id('width');
$ID_width_auto    = $this->get_field_id('width_auto');
$ID_layout        = $this->get_field_id('layout');
$ID_theme         = $this->get_field_id('theme');
$ID_photo         = $this->get_field_id('photo');
$ID_owner         = $this->get_field_id('owner');
$ID_align         = $this->get_field_id('align');

// Definizione dei nome per le varibili per CSS name

$NAME_title       = $this->get_field_name('title');
$NAME_method      = $this->get_field_name('method');
$NAME_specific    = $this->get_field_name('specific');
$NAME_width       = $this->get_field_name('width');
$NAME_width_auto  = $this->get_field_name('width_auto');
$NAME_layout      = $this->get_field_name('layout');
$NAME_theme       = $this->get_field_name('theme');
$NAME_photo       = $this->get_field_name('photo');
$NAME_owner       = $this->get_field_name('owner');
$NAME_align       = $this->get_field_name('align');

// Definizione dei nome per le varibili contenuto

$VALUE_title      = esc_attr($title);
$VALUE_method     = esc_attr($method);
$VALUE_specific   = esc_attr($specific);
$VALUE_width      = esc_attr($width);
$VALUE_width_auto = esc_attr($width_auto);
$VALUE_layout     = esc_attr($layout);
$VALUE_theme      = esc_attr($theme);
$VALUE_photo      = esc_attr($photo);
$VALUE_owner      = esc_attr($owner);
$VALUE_align      = esc_attr($align);

?>
<!-- WIDGETS (Tabella per contenere il FORM del widget) -->

<table style="width:100%">

<!-- WIDGETS (Campo con inserimento del titolo widget) -->

<tr><td colspan="3">
	<label for="<?php echo $ID_title ?>"><?php echo ucfirst(__('title','szgoogleadmin')) ?>:</label>
	<input class="widefat" id="<?php echo $ID_title ?>" name="<?php echo $NAME_title ?>" type="text" value="<?php echo $VALUE_title ?>"/>
</td></tr>

<!-- WIDGETS (Campo per selezione ID di configurazione o specifico) -->

<tr><td colspan="3">
	<select class="sz-google-switch-hidden widefat" data-switch="sz-google-switch-specific" data-close="1" onchange="szgoogle_switch_hidden(this);" id="<?php echo $ID_method ?>" name="<?php echo $NAME_method ?>">
		<option value="1" <?php selected("1",$VALUE_method) ?>><?php echo ucfirst(__('configuration ID','szgoogleadmin')) ?></option>
		<option value="2" <?php selected("2",$VALUE_method) ?>><?php echo ucfirst(__('specific ID','szgoogleadmin')) ?></option>
	</select>
</td></tr>

<!-- WIDGETS (Campo per inserimento di uno specifico ID) -->

<tr class="sz-google-switch-specific"><td colspan="3">
	<input class="widefat" id="<?php echo $ID_specific ?>" name="<?php echo $NAME_specific ?>" type="text" value="<?php echo $VALUE_specific ?>" placeholder="<?php echo __('insert specific ID','szgoogleadmin') ?>"/>
</td></tr>

<!-- WIDGETS (Campo per specificare la dimensione) -->

<tr><td colspan="3"><hr></td></tr>

<tr>
	<td><label for="<?php echo $ID_width ?>"><?php echo ucfirst(__('width','szgoogleadmin')) ?>:</label></td>
	<td><input id="<?php echo $ID_width ?>" class="sz-google-checks-width" name="<?php echo $NAME_width ?>" type="number" size="5" step="1" min="180" max="450" value="<?php echo $VALUE_width ?>"/></td>
	<td><input id="<?php echo $ID_width_auto ?>" class="sz-google-checks-hidden checkbox" data-switch="sz-google-checks-width" onchange="szgoogle_checks_hidden(this);" name="<?php echo $NAME_width_auto ?>" type="checkbox" value="1" <?php echo checked($VALUE_width_auto) ?>>&nbsp;<?php echo ucfirst(__('auto','szgoogleadmin')) ?></td>
</tr>

<tr><td colspan="3"><hr></td></tr>

<!-- WIDGETS (Campo per specificare il parametro layout -->

<tr>
	<td><label for="<?php echo $ID_layout ?>"><?php echo ucfirst(__('layout','szgoogleadmin')) ?>:</label></td>
	<td><input type="radio" name="<?php echo $NAME_layout ?>" value="portrait"  <?php if ($VALUE_layout == 'portrait') echo ' checked'?>>&nbsp;<?php echo ucfirst(__('portrait','szgoogleadmin')) ?></td>
	<td><input type="radio" name="<?php echo $NAME_layout ?>" value="landscape" <?php if ($VALUE_layout != 'portrait') echo ' checked'?>>&nbsp;<?php echo ucfirst(__('landscape','szgoogleadmin')) ?></td>
</tr>

<!-- WIDGETS (Campo per specificare il parametro theme -->

<tr>
	<td><label for="<?php echo $ID_theme ?>"><?php echo ucfirst(__('theme','szgoogleadmin')) ?>:</label></td>
	<td><input type="radio" name="<?php echo $NAME_theme ?>" value="light" <?php if ($VALUE_theme == 'light') echo ' checked'?>>&nbsp;<?php echo ucfirst(__('light','szgoogleadmin')) ?></td>
	<td><input type="radio" name="<?php echo $NAME_theme ?>" value="dark"  <?php if ($VALUE_theme != 'light') echo ' checked'?>>&nbsp;<?php echo ucfirst(__('dark','szgoogleadmin')) ?></td>
</tr>

<!-- WIDGETS (Campo per specificare il parametro photo -->

<tr>
	<td><label for="<?php echo $ID_photo ?>"><?php echo ucfirst(__('photo','szgoogleadmin')) ?>:</label></td>
	<td><input type="radio" name="<?php echo $NAME_photo ?>" value="true"  <?php if ($VALUE_photo == 'true') echo ' checked'?>>&nbsp;<?php echo ucfirst(__('enabled','szgoogleadmin')) ?></td>
	<td><input type="radio" name="<?php echo $NAME_photo ?>" value="false" <?php if ($VALUE_photo != 'true') echo ' checked'?>>&nbsp;<?php echo ucfirst(__('disabled','szgoogleadmin')) ?></td>
</tr>

<!-- WIDGETS (Campo per specificare il parametro owner -->

<tr>
	<td><label for="<?php echo $ID_owner ?>"><?php echo ucfirst(__('owner','szgoogleadmin')) ?>:</label></td>
	<td><input type="radio" name="<?php echo $NAME_owner ?>" value="true"  <?php if ($VALUE_owner == 'true') echo ' checked'?>>&nbsp;<?php echo ucfirst(__('enabled','szgoogleadmin')) ?></td>
	<td><input type="radio" name="<?php echo $NAME_owner ?>" value="false" <?php if ($VALUE_owner != 'true') echo ' checked'?>>&nbsp;<?php echo ucfirst(__('disabled','szgoogleadmin')) ?></td>
</tr>

<tr><td colspan="3"><hr></td></tr>

<!-- WIDGETS (Campo per specificare il parametro align -->

<tr>
	<td><label for="<?php echo $ID_align ?>"><?php echo ucfirst(__('align','szgoogleadmin')) ?>:</label></td>
	<td colspan="2"><select class="widefat" id="<?php echo $ID_align ?>" name="<?php echo $NAME_align ?>">
		<option value="none"   <?php echo selected("none"  ,$VALUE_align) ?>><?php echo __('none'  ,'szgoogleadmin') ?></option>
		<option value="left"   <?php echo selected("left"  ,$VALUE_align) ?>><?php echo __('left'  ,'szgoogleadmin') ?></option>
		<option value="center" <?php echo selected("center",$VALUE_align) ?>><?php echo __('center','szgoogleadmin') ?></option>
		<option value="right"  <?php echo selected("right" ,$VALUE_align) ?>><?php echo __('right' ,'szgoogleadmin') ?></option>
	</select></td>
</tr>

<!-- WIDGETS (Chiusura tabella principale widget form) -->

</table>

<!-- WIDGETS (Codice javascript per funzioni UI) -->

<script type="text/javascript">
	jQuery(document).ready(function(){
		szgoogle_switch_hidden_ready();
		szgoogle_checks_hidden_ready();
	});
</script>