<?php /* Smarty version 2.6.20, created on 2016-07-11 05:03:10
         compiled from admin_style_cfg.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'admin_style_cfg.html', 35, false),)), $this); ?>
<form action="<?php echo $this->_tpl_vars['config_data']['form_action']; ?>
" method="post" name="configure" id="configure">
<div class="contentHeader"><?php echo $this->_tpl_vars['config_data']['general_header']; ?>
</div>
<br>
<div class="contentBody">
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
	<tr>
    	<td valign="top" class="forumline">
           <table width="100%" border="0" cellspacing="1" cellpadding="3" class="dataOutline">

		      <tr>
		        <td width="200" class="row1"><strong><?php echo $this->_tpl_vars['config_data']['header_logo_path_text']; ?>
</strong></td>
		        <td class="row2"><input name="header_logo" size="60" type="text" class="post" value="<?php echo $this->_tpl_vars['config_data']['header_logo_path_value']; ?>
"></td>
		      </tr>
		      <tr>
		        <td class="row1"><strong><?php echo $this->_tpl_vars['config_data']['header_link_text']; ?>
</strong></td>
		        <td class="row2"><input name="header_link" size="60" type="text" class="post" value="<?php echo $this->_tpl_vars['config_data']['header_link_value']; ?>
"></td>
		      </tr>
			</table>
		</td>
	</tr>
</table>
</div>
<br>
<div class="contentHeader"><?php echo $this->_tpl_vars['config_data']['template_cfg_header']; ?>
</div><br>
<div class="contentBody">
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
	<tr>
    	<td valign="top" class="forumline"> 
           <table width="100%" border="0" cellspacing="1" cellpadding="3" class="dataOutline">

		      <tr> 
		        <td width="200" class="row1"><strong><?php echo $this->_tpl_vars['config_data']['template_text']; ?>
</strong></td>
		        <td class="row2">
		        	<?php echo smarty_function_html_options(array('name' => 'template','options' => $this->_tpl_vars['config_data']['array_template_type'],'selected' => $this->_tpl_vars['config_data']['selected_template_type']), $this);?>

				</td>
		      </tr>
		      <tr> 
		        <td width="200" class="row1"><strong><?php echo $this->_tpl_vars['config_data']['template_width_text']; ?>
</strong></td>
		        <td class="row2">
		        	<?php echo smarty_function_html_options(array('name' => 'template_width','options' => $this->_tpl_vars['config_data']['array_template_width'],'selected' => $this->_tpl_vars['config_data']['selected_template_width']), $this);?>

				</td>
		      </tr>
			</table>
		</td>
	</tr>
</table>           
<br>
</div>
<div align="center" class="button">
	<input type="submit" value="<?php echo $this->_tpl_vars['config_data']['button_submit']; ?>
" name="submit" class="mainoption">
	<input type="reset" value="<?php echo $this->_tpl_vars['config_data']['button_reset']; ?>
" name="reset" class="liteoption">
</div>
</form>