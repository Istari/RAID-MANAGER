<?php /* Smarty version 2.6.20, created on 2016-09-06 03:39:48
         compiled from raid_force.html */ ?>
<div class="contentHeader"><?php echo $this->_tpl_vars['rf_select_data']['datatable_header']; ?>
</div>
<div class="contentBody">
<br>
<form method="post" action="<?php echo $this->_tpl_vars['rf_select_data']['form_action']; ?>
">
	<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
			<td align="center"><?php echo $this->_tpl_vars['rf_select_data']['rf_select_text']; ?>
 <?php echo $this->_tpl_vars['rf_select_data']['rf_select']; ?>
</td>
		</tr>
	</table>
</form>
</div>
<br>
  <div class="contentBody"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'raids_table.html', 'smarty_include_vars' => array('raid_data' => $this->_tpl_vars['rf_data'],'jump_menu' => $this->_tpl_vars['rf_jump_menu'],'column_name' => $this->_tpl_vars['rf_column_name'],'record_counts' => $this->_tpl_vars['rf_record_counts'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div><br>
<br>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'raid_force_new.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<br>