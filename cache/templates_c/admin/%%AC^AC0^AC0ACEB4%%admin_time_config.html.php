<?php /* Smarty version 2.6.20, created on 2016-07-11 05:02:08
         compiled from admin_time_config.html */ ?>
<form action="admin_timecfg.php" method="post" name="configure" id="configure">
<div class="contentHeader"><?php echo $this->_tpl_vars['config_data']['time_header']; ?>
</div><br>
<div class="contentBody">
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
	<tr>
		<td valign="top" class="forumline"> 
			<table width="100%" border="0" cellspacing="1" cellpadding="3" class="dataOutline">
				<tr>
					<td class="row1" width="20%"><strong><?php echo $this->_tpl_vars['config_data']['date_text']; ?>
</strong></td>
					<td class="row2" width="80%"><?php echo $this->_tpl_vars['config_data']['date_format']; ?>
</td>
				</tr>
				<tr> 
					<td class="row1"><strong><?php echo $this->_tpl_vars['config_data']['time_text']; ?>
</strong></td>
					<td class="row2"><?php echo $this->_tpl_vars['config_data']['time_format']; ?>
</td>
				</tr>
				<tr> 
					<td class="row1"><strong><?php echo $this->_tpl_vars['config_data']['ampm_text']; ?>
</strong></td>
					<td class="row2"><?php echo $this->_tpl_vars['config_data']['ampm']; ?>
</td>
				</tr>
				<tr>
					<td class="row1"><strong><?php echo $this->_tpl_vars['config_data']['timezone_text']; ?>
</strong></td>
					<td class="row2"><?php echo $this->_tpl_vars['config_data']['timezone']; ?>
</td>
				</tr>        
				<tr>
					<td class="row1"><strong><?php echo $this->_tpl_vars['config_data']['dst_text']; ?>
</strong></td>
					<td class="row2"><?php echo $this->_tpl_vars['config_data']['dst']; ?>
</td>
				</tr>				
			</table>
		</td>
	</tr>
</table>
<br>
<div align="center" class="button"><?php echo $this->_tpl_vars['config_data']['buttons']; ?>
</div>
</div>
</form>