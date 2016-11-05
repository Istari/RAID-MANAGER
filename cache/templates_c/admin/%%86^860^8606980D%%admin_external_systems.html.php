<?php /* Smarty version 2.6.20, created on 2016-07-11 05:02:13
         compiled from admin_external_systems.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'admin_external_systems.html', 21, false),)), $this); ?>
<form action="admin_externcfg.php" method="post" name="configure" id="configure">
<div class="contentHeader"><?php echo $this->_tpl_vars['config_data']['external_links_header']; ?>
</div><br>
<div class="contentBody">
  <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr> 
    <td valign="top"> 
      <table width="100%" border="0" cellspacing="1" cellpadding="3" class="dataOutline">
        <tr>
          <td width="200" class="row1"><strong><?php echo $this->_tpl_vars['config_data']['enable_armory_text']; ?>
</strong></td>
          <td class="row2">
          	<input type="checkbox" name="enable_armory" value="1" <?php echo $this->_tpl_vars['config_data']['enable_armory']; ?>
>
          </td>
          <td class="row2">
          	&nbsp;
          </td>
        </tr>
        <tr>
          <td width="200" class="row1"><strong><?php echo $this->_tpl_vars['config_data']['armory_cache_text']; ?>
</strong></td>
          <td class="row2">
           	<?php echo smarty_function_html_options(array('name' => 'armory_cache','options' => $this->_tpl_vars['config_data']['array_armory_cache'],'selected' => $this->_tpl_vars['config_data']['selected_armory_code'],'class' => 'post'), $this);?>

          </td>
          <td class="row2">
          	&nbsp;
          </td>
        </tr>
        <tr>
          <td width="200" class="row1"><strong><?php echo $this->_tpl_vars['config_data']['armory_cache_timeout_text']; ?>
</strong></td>
          <td class="row2">
           	<?php echo smarty_function_html_options(array('name' => 'armory_cache_timeout','options' => $this->_tpl_vars['config_data']['array_armory_cache_timeout'],'selected' => $this->_tpl_vars['config_data']['selected_armory_cache_timeout'],'class' => 'post'), $this);?>

          </td>
          <td class="row2">
          	<?php echo $this->_tpl_vars['config_data']['armory_cache_timeout_sup_text']; ?>

          </td>
        </tr>
        <tr>
          <td width="200" class="row1"><strong><?php echo $this->_tpl_vars['config_data']['enable_eqdkp_text']; ?>
</strong></td>
          <td class="row2">
          	<input type="checkbox" name="enable_eqdkp" value="1" <?php echo $this->_tpl_vars['config_data']['enable_eqdkp']; ?>
>
          </td>
          <td class="row2">
          	&nbsp;
          </td>
        </tr>
        <tr>
          <td width="200" class="row1"><strong><?php echo $this->_tpl_vars['config_data']['eqdkp_url_text']; ?>
</strong></td>
          <td class="row2">
          	<input name="eqdkp_url" type="text" value="<?php echo $this->_tpl_vars['config_data']['eqdkp_url']; ?>
" size="60" class="post">
          </td>
          <td class="row2">
          	&nbsp;
          </td>
        </tr>
         </table>
    </td></tr>
</table>
<br>
<?php if (( $this->_tpl_vars['config_data']['show_bridge_config'] == TRUE )): ?>
<div class="contentHeader"><?php echo $this->_tpl_vars['config_data']['configuration_extsys_bridge_config_header']; ?>
</div><br>
  <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr> 
    <td valign="top"> 
      <table width="100%" border="0" cellspacing="1" cellpadding="3" class="dataOutline">
        <tr>
          <td width="200" class="row1"><strong><?php echo $this->_tpl_vars['config_data']['configuration_extsys_group_text']; ?>
</strong></td>
          <td class="row2">
          			<?php echo smarty_function_html_options(array('name' => 'configuration_extsys_group','options' => $this->_tpl_vars['config_data']['array_group'],'selected' => $this->_tpl_vars['config_data']['selected_group_id'],'class' => 'post'), $this);?>

          			<br>
          			<?php echo $this->_tpl_vars['config_data']['configuration_extsys_group01']; ?>
<br>
          			<?php echo $this->_tpl_vars['config_data']['configuration_extsys_group02']; ?>
<br>
          			<?php echo $this->_tpl_vars['config_data']['configuration_extsys_group03']; ?>

          </td>
        </tr>
        <tr>
          <td width="200" class="row1"><strong><?php echo $this->_tpl_vars['config_data']['configuration_extsys_alt_group_text']; ?>
</strong></td>
          <td class="row2">
          			<?php echo smarty_function_html_options(array('name' => 'configuration_extsys_alt_group','options' => $this->_tpl_vars['config_data']['array_alt_group'],'selected' => $this->_tpl_vars['config_data']['selected_alt_group_id'],'class' => 'post'), $this);?>

          			<br>
          			<?php echo $this->_tpl_vars['config_data']['configuration_extsys_alt_group01']; ?>
<br>
          			<?php echo $this->_tpl_vars['config_data']['configuration_extsys_alt_group02']; ?>

          </td>
        </tr>

      </table>
    </td></tr>
  </table>
 
<br>
<?php endif; ?>

<div align="center" class="button">
	<input type="submit" name="submit" value="<?php echo $this->_tpl_vars['config_data']['button_submit']; ?>
" class="mainoption">
	<input type="reset" name="reset" value="<?php echo $this->_tpl_vars['config_data']['button_reset']; ?>
" class="liteoption">
</div>

</div>
</form>