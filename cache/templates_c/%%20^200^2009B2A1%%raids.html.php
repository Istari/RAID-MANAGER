<?php /* Smarty version 2.6.20, created on 2016-07-11 05:22:51
         compiled from raids.html */ ?>
<div class="contentHeader"></div><br>
<div class="contentBody">
<form method="post" action="<?php echo $this->_tpl_vars['header_data']['form_action']; ?>
">
 <div align="center" class="button">
	<input type="submit" value="<?php echo $this->_tpl_vars['header_data']['button_addraid']; ?>
" name="add_raid" class="mainoption">
 </div>
</form>
</div>
<br>
<div class="contentHeader"><?php echo $this->_tpl_vars['header_data']['new_raids_header']; ?>
</div>
<br>
<div class="contentBody">
<form action="<?php echo $this->_tpl_vars['header_data']['form_action_raids_table']; ?>
" class="post">

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'raids_table.html', 'smarty_include_vars' => array('raid_data' => $this->_tpl_vars['new_data'],'jump_menu' => $this->_tpl_vars['current_jump_menu'],'record_counts' => $this->_tpl_vars['curr_record_counts'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<br>
<?php if ($this->_tpl_vars['header_data']['button_mark_raid_as_old'] != ""): ?>
<div align="center" class="button" >
<?php if ($this->_tpl_vars['header_data']['button_mark_raid_as_old'] != ""): ?>
	<input type="submit" value="<?php echo $this->_tpl_vars['header_data']['button_mark_raid_as_old']; ?>
" name="mark_raid_as_old" class="mainoption">
<?php endif; ?>
<?php if ($this->_tpl_vars['header_data']['button_raids_del'] != ""): ?>
	<input type="submit" value="<?php echo $this->_tpl_vars['header_data']['button_raids_del']; ?>
" name="raids_del" class="mainoption">
<?php endif; ?>
</div>
</form>
<?php endif; ?>
</div>
<br>
<?php if ($this->_tpl_vars['header_data']['show_recurrance']): ?>
<div class="contentHeader"><?php echo $this->_tpl_vars['header_data']['recur_raids_header']; ?>
</div>
<br>
<div class="contentBody"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'raids_table.html', 'smarty_include_vars' => array('raid_data' => $this->_tpl_vars['rec_data'],'jump_menu' => $this->_tpl_vars['recurring_jump_menu'],'record_counts' => $this->_tpl_vars['recur_record_counts'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
<br>
<?php endif; ?>
<div class="contentHeader"><?php echo $this->_tpl_vars['header_data']['old_raids_header']; ?>
</div>
<br>
<div class="contentBody"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'raids_table.html', 'smarty_include_vars' => array('raid_data' => $this->_tpl_vars['old_data'],'jump_menu' => $this->_tpl_vars['previous_jump_menu'],'record_counts' => $this->_tpl_vars['prev_record_counts'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
<br>