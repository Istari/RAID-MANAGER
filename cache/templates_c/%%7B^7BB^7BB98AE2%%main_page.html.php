<?php /* Smarty version 2.6.20, created on 2016-07-10 22:45:32
         compiled from main_page.html */ ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'announcements_msg.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div class="contentHeader"><?php echo $this->_tpl_vars['header_data']['new_raids_header']; ?>
</div><br>
<div class="contentBody"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'raids_table.html', 'smarty_include_vars' => array('raid_data' => $this->_tpl_vars['new_data'],'jump_menu' => $this->_tpl_vars['current_jump_menu'],'record_counts' => $this->_tpl_vars['curr_record_counts'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div><br>
<div class="contentHeader"><?php echo $this->_tpl_vars['header_data']['old_raids_header']; ?>
</div><br>
<div class="contentBody"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'raids_table.html', 'smarty_include_vars' => array('raid_data' => $this->_tpl_vars['old_data'],'jump_menu' => $this->_tpl_vars['previous_jump_menu'],'record_counts' => $this->_tpl_vars['prev_record_counts'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div><br>