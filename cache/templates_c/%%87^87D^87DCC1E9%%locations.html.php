<?php /* Smarty version 2.6.20, created on 2016-07-11 05:22:59
         compiled from locations.html */ ?>
<div class="contentHeader"><?php echo $this->_tpl_vars['header_data']['header']; ?>
</div><br>
<div class="contentBody"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'raids_table.html', 'smarty_include_vars' => array('raid_data' => $this->_tpl_vars['loc_data'],'jump_menu' => $this->_tpl_vars['loc_jump_menu'],'record_counts' => $this->_tpl_vars['loc_record_counts'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'locations_new.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>