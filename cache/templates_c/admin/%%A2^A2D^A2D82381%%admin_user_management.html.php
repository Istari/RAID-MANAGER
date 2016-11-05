<?php /* Smarty version 2.6.20, created on 2016-07-11 05:20:56
         compiled from admin_user_management.html */ ?>
<div class="contentHeader"><?php echo $this->_tpl_vars['header_data']['users_header']; ?>
</div>
<br>
<form action="<?php echo $this->_tpl_vars['perm_mod_data']['form_action']; ?>
" method="POST">
<div class="contentBody"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => '../raids_table.html', 'smarty_include_vars' => array('raid_data' => $this->_tpl_vars['users_data'],'jump_menu' => $this->_tpl_vars['users_jump_menu'],'record_counts' => $this->_tpl_vars['users_record_counts'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
<br>
<div class="contentHeader"><?php echo $this->_tpl_vars['perm_mod_data']['perm_mod_header']; ?>
</div>
<div class="contentBody">
  <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr> 
    <td valign="top"> 
      <table width="50%" border="0" align="center" cellspacing="1" cellpadding="3" class="dataOutline">
        <tr>
			<td><?php echo $this->_tpl_vars['perm_mod_data']['dropdown_desc']; ?>
</td>
		</tr>
		<tr>
			<td align="center"><?php echo $this->_tpl_vars['perm_mod_data']['priv_dropdown']; ?>
</td>
		</tr>
		<tr><td>&nbsp;</td></tr>
		<tr>
			<td align="center"><?php echo $this->_tpl_vars['perm_mod_data']['action_buttons']; ?>
</td>
		</tr>
	  </table>
	</td>
  </tr>
  </table>
</div>
</form>
<br>