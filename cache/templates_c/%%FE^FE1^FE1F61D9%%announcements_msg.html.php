<?php /* Smarty version 2.6.20, created on 2016-07-10 22:45:32
         compiled from announcements_msg.html */ ?>
<div class="contentHeader"><?php echo $this->_tpl_vars['announcement_header']; ?>
</div>
<br>
<!-- BEGIN announcement_row -->
<?php unset($this->_sections['display_announcements']);
$this->_sections['display_announcements']['name'] = 'display_announcements';
$this->_sections['display_announcements']['loop'] = is_array($_loop=$this->_tpl_vars['announcement_data']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['display_announcements']['show'] = true;
$this->_sections['display_announcements']['max'] = $this->_sections['display_announcements']['loop'];
$this->_sections['display_announcements']['step'] = 1;
$this->_sections['display_announcements']['start'] = $this->_sections['display_announcements']['step'] > 0 ? 0 : $this->_sections['display_announcements']['loop']-1;
if ($this->_sections['display_announcements']['show']) {
    $this->_sections['display_announcements']['total'] = $this->_sections['display_announcements']['loop'];
    if ($this->_sections['display_announcements']['total'] == 0)
        $this->_sections['display_announcements']['show'] = false;
} else
    $this->_sections['display_announcements']['total'] = 0;
if ($this->_sections['display_announcements']['show']):

            for ($this->_sections['display_announcements']['index'] = $this->_sections['display_announcements']['start'], $this->_sections['display_announcements']['iteration'] = 1;
                 $this->_sections['display_announcements']['iteration'] <= $this->_sections['display_announcements']['total'];
                 $this->_sections['display_announcements']['index'] += $this->_sections['display_announcements']['step'], $this->_sections['display_announcements']['iteration']++):
$this->_sections['display_announcements']['rownum'] = $this->_sections['display_announcements']['iteration'];
$this->_sections['display_announcements']['index_prev'] = $this->_sections['display_announcements']['index'] - $this->_sections['display_announcements']['step'];
$this->_sections['display_announcements']['index_next'] = $this->_sections['display_announcements']['index'] + $this->_sections['display_announcements']['step'];
$this->_sections['display_announcements']['first']      = ($this->_sections['display_announcements']['iteration'] == 1);
$this->_sections['display_announcements']['last']       = ($this->_sections['display_announcements']['iteration'] == $this->_sections['display_announcements']['total']);
?>
	<table width="96%"  border="0" align="center" cellpadding="0" cellspacing="0">
	  <tr>
	    <td width="32" height="32" rowspan="3">
		  <img src="templates/default/images/gryphon.gif" border="0" height="32" width="32" alt="announcement icon">
		</td>
	    <td width="600">
			<div class="announceHeader"><?php echo $this->_tpl_vars['announcement_data'][$this->_sections['display_announcements']['index']]['announcement_title']; ?>
</div>
	    </td>
	  </tr>
	  <tr>
	    <td><hr></td>
	  </tr>
	  <tr>
	    <td>
			<div class="announceSubHeader">
				<?php echo $this->_tpl_vars['announcement_data'][$this->_sections['display_announcements']['index']]['announcement_author']; ?>
 @ <?php echo $this->_tpl_vars['announcement_data'][$this->_sections['display_announcements']['index']]['announcement_date']; ?>
 - <?php echo $this->_tpl_vars['announcement_data'][$this->_sections['display_announcements']['index']]['announcement_time']; ?>

			</div>
		</td>
	  </tr>
	  <tr>
	    <td colspan="2">&nbsp;</td>
	  </tr>
	  <tr>
	    <td colspan="2"><div class="announceText"><?php echo $this->_tpl_vars['announcement_data'][$this->_sections['display_announcements']['index']]['announcement_msg']; ?>
</div></td>
	  </tr>
	  <tr>
	    <td colspan="2">&nbsp;</td>
	  </tr>
	</table>
	<br>
	<!-- END announcement_row -->
<?php endfor; endif; ?>