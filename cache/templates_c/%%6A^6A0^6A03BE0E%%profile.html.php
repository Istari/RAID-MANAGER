<?php /* Smarty version 2.6.20, created on 2016-07-11 05:24:14
         compiled from profile.html */ ?>
<div class="contentHeader"><?php echo $this->_tpl_vars['header_data']['character_header']; ?>
</div><br>
<div class="contentBody">
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'raids_table.html', 'smarty_include_vars' => array('raid_data' => $this->_tpl_vars['char_data'],'jump_menu' => $this->_tpl_vars['char_jump_menu'],'record_counts' => $this->_tpl_vars['char_record_counts'],'column_name' => $this->_tpl_vars['char_column_name'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<br>
<form method="post" action="<?php echo $this->_tpl_vars['header_data']['form_action']; ?>
">
 <div align="center" class="button">
	<input type="submit" value="<?php echo $this->_tpl_vars['header_data']['button_addchar']; ?>
" name="add_char" class="mainoption">
 </div>
</form>
</div>
<br>
<div class="contentHeader"><?php echo $this->_tpl_vars['header_data']['raid_header']; ?>
</div><br>
<div class="contentBody">
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'raids_table.html', 'smarty_include_vars' => array('raid_data' => $this->_tpl_vars['raid_data'],'jump_menu' => $this->_tpl_vars['raid_jump_menu'],'record_counts' => $this->_tpl_vars['raid_record_counts'],'column_name' => $this->_tpl_vars['raid_column_name'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</div>
<br>