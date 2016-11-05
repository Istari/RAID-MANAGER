<?php /* Smarty version 2.6.20, created on 2016-07-11 05:21:05
         compiled from admin_data_table_config.html */ ?>
<div class="contentHeader"><?php echo $this->_tpl_vars['header_data']['datatable_header']; ?>
</div>
<div class="contentBody">
<br>
<form method="post" action="<?php echo $this->_tpl_vars['header_data']['form_action']; ?>
">
	<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
			<td align="center"><?php echo $this->_tpl_vars['header_data']['view_select_text']; ?>
 <?php echo $this->_tpl_vars['header_data']['view_select']; ?>
</td>
		</tr>
	</table>
</form>
</div>
<br>
<div class="contentHeader"><?php echo $this->_tpl_vars['edit_data']['edit_header']; ?>
</div>
<div class="contentBody">
<form method="post" action="<?php echo $this->_tpl_vars['edit_data']['form_action']; ?>
">
	<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
    	<tr>
    		<th><?php echo $this->_tpl_vars['edit_data']['column_name_header']; ?>
</th>
    		<th><?php echo $this->_tpl_vars['edit_data']['visible_header']; ?>
</th>
    		<th><?php echo $this->_tpl_vars['edit_data']['position_header']; ?>
</th>
    		<th><?php echo $this->_tpl_vars['edit_data']['image_url_header']; ?>
</th>
    		<th><?php echo $this->_tpl_vars['edit_data']['default_sort_header']; ?>
</th>
    	</tr>
    	<?php unset($this->_sections['view_data_section']);
$this->_sections['view_data_section']['name'] = 'view_data_section';
$this->_sections['view_data_section']['loop'] = is_array($_loop=$this->_tpl_vars['view_data']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['view_data_section']['show'] = true;
$this->_sections['view_data_section']['max'] = $this->_sections['view_data_section']['loop'];
$this->_sections['view_data_section']['step'] = 1;
$this->_sections['view_data_section']['start'] = $this->_sections['view_data_section']['step'] > 0 ? 0 : $this->_sections['view_data_section']['loop']-1;
if ($this->_sections['view_data_section']['show']) {
    $this->_sections['view_data_section']['total'] = $this->_sections['view_data_section']['loop'];
    if ($this->_sections['view_data_section']['total'] == 0)
        $this->_sections['view_data_section']['show'] = false;
} else
    $this->_sections['view_data_section']['total'] = 0;
if ($this->_sections['view_data_section']['show']):

            for ($this->_sections['view_data_section']['index'] = $this->_sections['view_data_section']['start'], $this->_sections['view_data_section']['iteration'] = 1;
                 $this->_sections['view_data_section']['iteration'] <= $this->_sections['view_data_section']['total'];
                 $this->_sections['view_data_section']['index'] += $this->_sections['view_data_section']['step'], $this->_sections['view_data_section']['iteration']++):
$this->_sections['view_data_section']['rownum'] = $this->_sections['view_data_section']['iteration'];
$this->_sections['view_data_section']['index_prev'] = $this->_sections['view_data_section']['index'] - $this->_sections['view_data_section']['step'];
$this->_sections['view_data_section']['index_next'] = $this->_sections['view_data_section']['index'] + $this->_sections['view_data_section']['step'];
$this->_sections['view_data_section']['first']      = ($this->_sections['view_data_section']['iteration'] == 1);
$this->_sections['view_data_section']['last']       = ($this->_sections['view_data_section']['iteration'] == $this->_sections['view_data_section']['total']);
?>
    	<tr>
    		<td><?php echo $this->_tpl_vars['view_data'][$this->_sections['view_data_section']['index']]['column_name']; ?>
</td>
    		<td><?php echo $this->_tpl_vars['view_data'][$this->_sections['view_data_section']['index']]['visible']; ?>
</td>
    		<td><?php echo $this->_tpl_vars['view_data'][$this->_sections['view_data_section']['index']]['position']; ?>
</td>
    		<td><?php echo $this->_tpl_vars['view_data'][$this->_sections['view_data_section']['index']]['image_url']; ?>
</td>
    		<td><?php echo $this->_tpl_vars['view_data'][$this->_sections['view_data_section']['index']]['default_sort']; ?>
</td>
    	</tr>    		
    	<?php endfor; endif; ?>
	</table><br>
	<div align="center" class="button"><?php echo $this->_tpl_vars['edit_data']['buttons']; ?>
</div>
</form>
</div>