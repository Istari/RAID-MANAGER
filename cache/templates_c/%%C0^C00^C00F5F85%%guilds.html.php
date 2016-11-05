<?php /* Smarty version 2.6.20, created on 2016-09-06 03:39:48
         compiled from guilds.html */ ?>
<div class="contentHeader"><?php echo $this->_tpl_vars['header_data']['header']; ?>
</div><br>
<div class="contentBody"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'raids_table.html', 'smarty_include_vars' => array('raid_data' => $this->_tpl_vars['guild_data'],'jump_menu' => $this->_tpl_vars['guild_jump_menu'],'column_name' => $this->_tpl_vars['guild_column_name'],'record_counts' => $this->_tpl_vars['guild_record_counts'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div><br>
<br>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'guilds_new.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<br>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'raid_force.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>