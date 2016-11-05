<?php /* Smarty version 2.6.20, created on 2016-07-11 05:02:04
         compiled from admin_general_rss_cfg.html */ ?>
<form action="<?php echo $this->_tpl_vars['config_data']['form_action']; ?>
" method="post" name="configure" id="configure">
<div class="contentHeader"><?php echo $this->_tpl_vars['config_data']['rss_header']; ?>
</div>
<br>
<div class="contentBody">
	<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
	  <tr>
	    <td valign="top" class="forumline">
	      <table width="100%" border="0" cellspacing="1" cellpadding="3" class="dataOutline">
		      <tr>
		        <td  width="200" class="row1"><strong><?php echo $this->_tpl_vars['config_data']['rss_site_text']; ?>
</strong></td>
		        <td class="row2"><?php echo $this->_tpl_vars['config_data']['rss_site_url']; ?>
</td>
		      </tr>
		      <tr>
		        <td class="row1"><strong><?php echo $this->_tpl_vars['config_data']['rss_export_text']; ?>
</strong></td>
		        <td class="row2"><?php echo $this->_tpl_vars['config_data']['rss_export_url']; ?>
</td>
		      </tr>
		      <tr>
		        <td class="row1"><strong><?php echo $this->_tpl_vars['config_data']['rss_feed_amt_txt']; ?>
</strong></td>
		        <td class="row2"><?php echo $this->_tpl_vars['config_data']['rss_feed_amt']; ?>
</td>
		      </tr>
			</table>
		</td>
	</tr>
</table>
</div>
<br>
<div align="center" class="button">
	<input type="submit" value="<?php echo $this->_tpl_vars['config_data']['button_submit']; ?>
" name="submit" class="mainoption">
	<input type="reset" value="<?php echo $this->_tpl_vars['config_data']['button_reset']; ?>
" name="reset" class="liteoption">
</div>
</form>