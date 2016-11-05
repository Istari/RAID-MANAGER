<?php /* Smarty version 2.6.20, created on 2016-07-11 05:20:58
         compiled from admin_permissions_new.html */ ?>
<a name="new"></a>
<div class="contentHeader"><?php echo $this->_tpl_vars['header_text']; ?>
</div><br>
<div class="contentBody">
<form action="<?php echo $this->_tpl_vars['perms_new']['form_action']; ?>
" method="post" name="new_announcement" id="new_announcement">
  <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr valign="top"> 
    <td><table width="100%" border="0" cellpadding="3" cellspacing="1" class="dataOutline">
		  <tr valign="top">
            <td class="row1" colspan="1"><div align="left"><strong><?php echo $this->_tpl_vars['perms_new']['name_text']; ?>
</strong></div></td>
            <td class="row2" colspan="7"><div align="left"><?php echo $this->_tpl_vars['perms_new']['name']; ?>
</div></td>
		  </tr>
		  <tr valign="top">
            <td class="row1" colspan="1"><div align="left"><strong><?php echo $this->_tpl_vars['perms_new']['description_text']; ?>
</strong></div></td>
            <td class="row2" colspan="7"><div align="left"><?php echo $this->_tpl_vars['perms_new']['description']; ?>
</div></td>
		  </tr>
	      <tr valign="top">
            <td class="row2"><div align="center"><strong><?php echo $this->_tpl_vars['perms_new']['announcements_text']; ?>
</strong></div></td>
			<td class="row2"><div align="center"><strong><?php echo $this->_tpl_vars['perms_new']['configuration_text']; ?>
</strong></div></td>
            <td class="row2"><div align="center"><strong><?php echo $this->_tpl_vars['perms_new']['guilds_text']; ?>
</strong></div></td>
            <td class="row2"><div align="center"><strong><?php echo $this->_tpl_vars['perms_new']['locations_text']; ?>
</strong></div></td>
            <td class="row2"><div align="center"><strong><?php echo $this->_tpl_vars['perms_new']['profile_text']; ?>
</strong></div></td>
            <td class="row2"><div align="center"><strong><?php echo $this->_tpl_vars['perms_new']['raids_text']; ?>
</strong></div></td>
          </tr>
          <tr valign="top"> 
            <td class="row1"><div align="center"><?php echo $this->_tpl_vars['perms_new']['announcements']; ?>
</div></td>
			<td class="row1"><div align="center"><?php echo $this->_tpl_vars['perms_new']['configuration']; ?>
</div></td>
            <td class="row1"><div align="center"><?php echo $this->_tpl_vars['perms_new']['guilds']; ?>
</div></td>
            <td class="row1"><div align="center"><?php echo $this->_tpl_vars['perms_new']['locations']; ?>
</div></td>
            <td class="row1"><div align="center"><?php echo $this->_tpl_vars['perms_new']['profile']; ?>
</div></td>
            <td class="row1"><div align="center"><?php echo $this->_tpl_vars['perms_new']['raids']; ?>
</div></td>
          </tr>
        </table></td>
  </tr>
  <tr> 
    <td><br><div align="center" class="button"><?php echo $this->_tpl_vars['buttons']; ?>
</div></td>
  </tr>
</table>
</form>
</div>