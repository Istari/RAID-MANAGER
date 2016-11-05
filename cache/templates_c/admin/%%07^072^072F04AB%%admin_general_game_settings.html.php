<?php /* Smarty version 2.6.20, created on 2016-07-11 05:02:59
         compiled from admin_general_game_settings.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'admin_general_game_settings.html', 13, false),)), $this); ?>
<form action="<?php echo $this->_tpl_vars['config_data']['form_action']; ?>
" method="post" name="configure" id="configure">
<div class="contentHeader"><?php echo $this->_tpl_vars['config_data']['game_header']; ?>
</div>
<br>
<div class="contentBody">
	<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
	  <tr>
	    <td valign="top" class="forumline">
	      <table width="100%" border="0" cellspacing="1" cellpadding="3" class="dataOutline">
	        <tr> 
	          <td width="200" class="row1"><strong><?php echo $this->_tpl_vars['config_data']['select_expansion_text']; ?>
</strong></td>
	          <td class="row2">
	           	<?php echo smarty_function_html_options(array('name' => 'game_expansion','options' => $this->_tpl_vars['config_data']['array_game_expansion'],'selected' => $this->_tpl_vars['config_data']['selected_array_game_expansion'],'class' => 'post'), $this);?>

	          </td>
	        </tr>
	      </table>
	    </td>
	  </tr>
	</table>
</div>
<br>
<div align="center" class="button">
	<input type="submit" value="<?php echo $this->_tpl_vars['config_data']['button_submit']; ?>
" name="submit" class="mainoption">
	<input type="reset" value="<?php echo $this->_tpl_vars['config_data']['button_reset']; ?>
" name="reset" class="liteoption">
</div>
</form>