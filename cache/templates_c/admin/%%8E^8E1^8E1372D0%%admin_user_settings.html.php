<?php /* Smarty version 2.6.20, created on 2016-07-11 05:21:01
         compiled from admin_user_settings.html */ ?>
<form action="admin_usersettings.php" method="post" name="configure" id="configure">
<div class="contentHeader"><?php echo $this->_tpl_vars['config_data']['user_rights_header']; ?>
</div><br>
<div class="contentBody">
  <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr> 
    <td valign="top"> 
      <table width="100%" border="0" cellspacing="1" cellpadding="3" class="dataOutline">
        <tr> 
          <td width="350" class="row1"><strong><?php echo $this->_tpl_vars['config_data']['multiple_text']; ?>
</strong></td>
          <td class="row2"><?php echo $this->_tpl_vars['config_data']['allow_multiple_signups']; ?>
</td>
        </tr>
        <tr> 
          <td class="row1"><strong><?php echo $this->_tpl_vars['config_data']['anonymous_text']; ?>
</strong></td>
          <td class="row2"><?php echo $this->_tpl_vars['config_data']['allow_anonymous_viewing']; ?>
</td>
        </tr>
        <tr> 
          <td class="row1"><strong><?php echo $this->_tpl_vars['config_data']['resop_text']; ?>
</strong></td>
          <td class="row2"><?php echo $this->_tpl_vars['config_data']['allow_resop']; ?>
</td>
        </tr>
      </table>
    </td></tr>
</table>
<br>
<div align="center" class="button"><?php echo $this->_tpl_vars['config_data']['buttons']; ?>
</div>
</div>
</form>