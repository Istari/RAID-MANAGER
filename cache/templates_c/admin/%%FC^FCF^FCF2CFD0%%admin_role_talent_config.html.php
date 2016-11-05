<?php /* Smarty version 2.6.20, created on 2016-07-11 05:21:08
         compiled from admin_role_talent_config.html */ ?>
<div class="contentHeader"><?php echo $this->_tpl_vars['header_data']['roletalent_header']; ?>
</div><br>
<div class="contentBody"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => '../raids_table.html', 'smarty_include_vars' => array('raid_data' => $this->_tpl_vars['roletalent_data'],'jump_menu' => $this->_tpl_vars['roletalent_jump_menu'],'record_counts' => $this->_tpl_vars['roletalent_record_counts'],'column_name' => $this->_tpl_vars['roletalent_column_name'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div><br>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'admin_role_talent_new.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>