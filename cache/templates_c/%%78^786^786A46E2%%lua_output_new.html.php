<?php /* Smarty version 2.6.20, created on 2016-07-11 05:23:54
         compiled from lua_output_new.html */ ?>
<div class="contentHeader"><?php echo $this->_tpl_vars['options_header']; ?>
</div>
<br>
 
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'lua_output_lua.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php if ($this->_tpl_vars['lua_output_form']['raid_id_set']): ?>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'lua_output_macro.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endif; ?>