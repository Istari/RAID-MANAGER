<?php /* Smarty version 2.6.20, created on 2016-07-11 05:20:59
         compiled from admin_raid_signupgroups.html */ ?>
<form action="<?php echo $this->_tpl_vars['config_data']['action']; ?>
" method="post" name="configure" id="configure">
<div class="contentHeader"><?php echo $this->_tpl_vars['config_data']['signup_rights_header']; ?>
</div><br>
<div class="contentBody">
  <table width="100%" border="2" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td class="row1" valign="top"></td>
    <td class="row2" valign="top" colspan="4"><strong><?php echo $this->_tpl_vars['config_data']['on_queue_text']; ?>
</strong></td>
    <td class="row1" valign="top" colspan="4"><strong><?php echo $this->_tpl_vars['config_data']['cancelled_text']; ?>
</strong></td>
    <td class="row2" valign="top" colspan="4"><strong><?php echo $this->_tpl_vars['config_data']['drafted_text']; ?>
</strong></td>
  </tr>
  <tr>
  	<td class="row1" valign="top">&nbsp;</td>
  	<td class="row2" valign="top"><?php echo $this->_tpl_vars['config_data']['draft_row_header']; ?>
</td>
  	<td class="row2" valign="top"><?php echo $this->_tpl_vars['config_data']['comments_row_header']; ?>
</td>
  	<td class="row2" valign="top"><?php echo $this->_tpl_vars['config_data']['cancel_row_header']; ?>
</td>
  	<td class="row2" valign="top"><?php echo $this->_tpl_vars['config_data']['delete_row_header']; ?>
</td>
  	<td class="row1" valign="top"><?php echo $this->_tpl_vars['config_data']['queue_row_header']; ?>
</td>
  	<td class="row1" valign="top"><?php echo $this->_tpl_vars['config_data']['draft_row_header']; ?>
</td>
  	<td class="row1" valign="top"><?php echo $this->_tpl_vars['config_data']['comments_row_header']; ?>
</td>
  	<td class="row1" valign="top"><?php echo $this->_tpl_vars['config_data']['delete_row_header']; ?>
</td>
  	<td class="row2" valign="top"><?php echo $this->_tpl_vars['config_data']['queue_row_header']; ?>
</td>
  	<td class="row2" valign="top"><?php echo $this->_tpl_vars['config_data']['comments_row_header']; ?>
</td>
  	<td class="row2" valign="top"><?php echo $this->_tpl_vars['config_data']['cancel_row_header']; ?>
</td>
  	<td class="row2" valign="top"><?php echo $this->_tpl_vars['config_data']['delete_row_header']; ?>
</td>
  </tr>
  <tr> 
	<td class="row1" valign="top"><strong><?php echo $this->_tpl_vars['config_data']['user_text']; ?>
</strong></td>
    <td class="row2" align="center" valign="top"><?php echo $this->_tpl_vars['config_data']['user_queue_promote']; ?>
</td>
    <td class="row2" align="center" valign="top"><?php echo $this->_tpl_vars['config_data']['user_queue_comments']; ?>
</td>
    <td class="row2" align="center" valign="top"><?php echo $this->_tpl_vars['config_data']['user_queue_cancel']; ?>
</td>
    <td class="row2" align="center" valign="top"><?php echo $this->_tpl_vars['config_data']['user_queue_delete']; ?>
</td>
    <td class="row1" align="center" valign="top"><?php echo $this->_tpl_vars['config_data']['user_cancel_queue']; ?>
</td>
    <td class="row1" align="center" valign="top"><?php echo $this->_tpl_vars['config_data']['user_cancel_promote']; ?>
</td>
    <td class="row1" align="center" valign="top"><?php echo $this->_tpl_vars['config_data']['user_cancel_comments']; ?>
</td>
    <td class="row1" align="center" valign="top"><?php echo $this->_tpl_vars['config_data']['user_cancel_delete']; ?>
</td>
    <td class="row2" align="center" valign="top"><?php echo $this->_tpl_vars['config_data']['user_drafted_queue']; ?>
</td>
    <td class="row2" align="center" valign="top"><?php echo $this->_tpl_vars['config_data']['user_drafted_comments']; ?>
</td>
    <td class="row2" align="center" valign="top"><?php echo $this->_tpl_vars['config_data']['user_drafted_cancel']; ?>
</td>
    <td class="row2" align="center" valign="top"><?php echo $this->_tpl_vars['config_data']['user_drafted_delete']; ?>
</td>
  </tr>
  <tr> 
    <td class="row1"><strong><?php echo $this->_tpl_vars['config_data']['raidlead_text']; ?>
</strong></td>
    <td class="row2" align="center" valign="top"><?php echo $this->_tpl_vars['config_data']['rl_queue_promote']; ?>
</td>
    <td class="row2" align="center" valign="top"><?php echo $this->_tpl_vars['config_data']['rl_queue_comments']; ?>
</td>
    <td class="row2" align="center" valign="top"><?php echo $this->_tpl_vars['config_data']['rl_queue_cancel']; ?>
</td>
    <td class="row2" align="center" valign="top"><?php echo $this->_tpl_vars['config_data']['rl_queue_delete']; ?>
</td>
    <td class="row1" align="center" valign="top"><?php echo $this->_tpl_vars['config_data']['rl_cancel_queue']; ?>
</td>
    <td class="row1" align="center" valign="top"><?php echo $this->_tpl_vars['config_data']['rl_cancel_promote']; ?>
</td>
    <td class="row1" align="center" valign="top"><?php echo $this->_tpl_vars['config_data']['rl_cancel_comments']; ?>
</td>
    <td class="row1" align="center" valign="top"><?php echo $this->_tpl_vars['config_data']['rl_cancel_delete']; ?>
</td>
    <td class="row2" align="center" valign="top"><?php echo $this->_tpl_vars['config_data']['rl_drafted_queue']; ?>
</td>
    <td class="row2" align="center" valign="top"><?php echo $this->_tpl_vars['config_data']['rl_drafted_comments']; ?>
</td>
    <td class="row2" align="center" valign="top"><?php echo $this->_tpl_vars['config_data']['rl_drafted_cancel']; ?>
</td>
    <td class="row2" align="center" valign="top"><?php echo $this->_tpl_vars['config_data']['rl_drafted_delete']; ?>
</td>
  </tr>
  <tr> 
    <td class="row1"><strong><?php echo $this->_tpl_vars['config_data']['admin_text']; ?>
</strong></td>
    <td class="row2" align="center" valign="top"><?php echo $this->_tpl_vars['config_data']['admin_queue_promote']; ?>
</td>
    <td class="row2" align="center" valign="top"><?php echo $this->_tpl_vars['config_data']['admin_queue_comments']; ?>
</td>
    <td class="row2" align="center" valign="top"><?php echo $this->_tpl_vars['config_data']['admin_queue_cancel']; ?>
</td>
    <td class="row2" align="center" valign="top"><?php echo $this->_tpl_vars['config_data']['admin_queue_delete']; ?>
</td>
    <td class="row1" align="center" valign="top"><?php echo $this->_tpl_vars['config_data']['admin_cancel_queue']; ?>
</td>
    <td class="row1" align="center" valign="top"><?php echo $this->_tpl_vars['config_data']['admin_cancel_promote']; ?>
</td>
    <td class="row1" align="center" valign="top"><?php echo $this->_tpl_vars['config_data']['admin_cancel_comments']; ?>
</td>
    <td class="row1" align="center" valign="top"><?php echo $this->_tpl_vars['config_data']['admin_cancel_delete']; ?>
</td>
    <td class="row2" align="center" valign="top"><?php echo $this->_tpl_vars['config_data']['admin_drafted_queue']; ?>
</td>
    <td class="row2" align="center" valign="top"><?php echo $this->_tpl_vars['config_data']['admin_drafted_comments']; ?>
</td>
    <td class="row2" align="center" valign="top"><?php echo $this->_tpl_vars['config_data']['admin_drafted_cancel']; ?>
</td>
    <td class="row2" align="center" valign="top"><?php echo $this->_tpl_vars['config_data']['admin_drafted_delete']; ?>
</td>
  </tr>  
</table>
</div>
<center>
<?php echo $this->_tpl_vars['config_data']['cancel_def']; ?>
<br>
<?php echo $this->_tpl_vars['config_data']['comments_def']; ?>
<br>
<?php echo $this->_tpl_vars['config_data']['delete_def']; ?>
<br>
<?php echo $this->_tpl_vars['config_data']['draft_def']; ?>
<br>
<?php echo $this->_tpl_vars['config_data']['queue_def']; ?>
<br>
</center>
<br>

<div align="center" class="button">
	<input type="submit" name="submit" value="<?php echo $this->_tpl_vars['config_data']['button_submit']; ?>
" class="mainoption">
	<input type="reset" name="reset" value="<?php echo $this->_tpl_vars['config_data']['button_reset']; ?>
" class="liteoption">
</div>

</form>