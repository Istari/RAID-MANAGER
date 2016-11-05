<?php /* Smarty version 2.6.20, created on 2016-07-11 05:03:14
         compiled from admin_lua_output_cfg.html */ ?>
<div class="contentHeader"><?php echo $this->_tpl_vars['options_header']; ?>
</div>
<br>
<form action="<?php echo $this->_tpl_vars['lua_output_form']['form_action']; ?>
" method="post" name="update_options" id="update_options">
	<div class="contentBody">
		<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
			<tr>
				<td align="center">
					<b><?php echo $this->_tpl_vars['lua_output_form']['options_header']; ?>
</b>
			    	<table width="100%" border="0" cellspacing="1" cellpadding="3" class="dataOutline">
						<tr>
							<td width="200" class="row1"><?php echo $this->_tpl_vars['lua_output_form']['sort_signups_text']; ?>
</td>
							<td class="row2"><?php echo $this->_tpl_vars['lua_output_form']['sort_signups']; ?>
</td>
						</tr>
						<tr>
							<td width="200" class="row1"><?php echo $this->_tpl_vars['lua_output_form']['sort_queue_text']; ?>
</td>
							<td class="row2"><?php echo $this->_tpl_vars['lua_output_form']['sort_queue']; ?>
</td>
						</tr>
						<tr>
							<td width="200" class="row1"><?php echo $this->_tpl_vars['lua_output_form']['output_format_text']; ?>
</td>
							<td class="row2"><?php echo $this->_tpl_vars['lua_output_form']['output_format']; ?>
</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr><td>&nbsp</td></tr>
			<tr>
				<td align="center"><?php echo $this->_tpl_vars['lua_output_form']['Buttons']; ?>
</td>
			</tr>
		</table>
	</div>
</form>