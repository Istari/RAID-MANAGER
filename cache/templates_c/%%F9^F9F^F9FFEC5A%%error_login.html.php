<?php /* Smarty version 2.6.20, created on 2016-09-06 03:39:20
         compiled from error_login.html */ ?>
<div align="center">
<div class="errorHeader"><?php echo $this->_tpl_vars['login_frm']['errorlogin_header']; ?>
</div>
<div class="errorBody">
<br/>
<form action="<?php echo $this->_tpl_vars['login_frm']['form_action']; ?>
" method="post" >

	<div align="center"><?php echo $this->_tpl_vars['login_frm']['login_fail']; ?>
</div>
	<br/>
	<br/>
	<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" >
	  <tr>
		<td>&nbsp;</td>
	  </tr>
	  <tr>
		<td ><div align="center">
		  <table width="100%" border="0" cellspacing="2" cellpadding="2">
			<tr>
			  <td><div align="right"><?php echo $this->_tpl_vars['login_frm']['username']; ?>
</div></td>
			  <td><div align="left">
						<input name="username" type="text" value="<?php echo $this->_tpl_vars['login_frm']['username']; ?>
" size="15" maxlength="45" onFocus="if(this.value=='<?php echo $this->_tpl_vars['login_frm']['username']; ?>
')this.value='';"  class="post">
					</div></td>
			</tr>
			<tr>
			  <td><div align="right"><?php echo $this->_tpl_vars['login_frm']['password']; ?>
</div></td>
			  <td><div align="left">
			  	<input name="password" type="password" value="password" size="15" onFocus="this.value='';" class="post">
				</div></td>
			</tr>
		  </table>
		</div>
		</td>
	  </tr>
 	  <tr>
		<td>
			<div align="center"><?php echo $this->_tpl_vars['login_frm']['forgot_password_line']; ?>
</div>
		</td>
	  </tr>
	  <tr>
		<td>&nbsp;</td>
	  </tr>
	  <tr>
		<td>&nbsp;</td>
	  </tr>

	  <tr>
		<td><div align="center">
			<input type="submit" name="login" value="<?php echo $this->_tpl_vars['login_frm']['bd_login']; ?>
" style="font-size:10px" class="mainoption"></div>
		</td>
	  </tr>
	</table>
	<input type="hidden" value="1" name="autologin">
	<br/>
</form>
</div>
</div>