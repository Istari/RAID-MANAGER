<?php /* Smarty version 2.6.20, created on 2016-07-10 22:45:32
         compiled from raids_table.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'raids_table.html', 52, false),)), $this); ?>
<div class="contentBody">
	<?php if (! empty ( $this->_tpl_vars['raid_data'] )): ?>
		<table width="100%" cellpadding="3" cellspacing="0" border="0" class="dataOutline">
			<caption><?php echo $this->_tpl_vars['record_counts']['recordHeader']; ?>
</caption>
			<tr>
				<td align="left" colspan="<?php echo $this->_tpl_vars['record_counts']['columnCount']; ?>
"><?php echo $this->_tpl_vars['jump_menu']; ?>
</td>
			</tr>
			<tr class="listHeader">
				<?php unset($this->_sections['create_columns']);
$this->_sections['create_columns']['name'] = 'create_columns';
$this->_sections['create_columns']['loop'] = is_array($_loop=$this->_tpl_vars['column_name']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['create_columns']['show'] = true;
$this->_sections['create_columns']['max'] = $this->_sections['create_columns']['loop'];
$this->_sections['create_columns']['step'] = 1;
$this->_sections['create_columns']['start'] = $this->_sections['create_columns']['step'] > 0 ? 0 : $this->_sections['create_columns']['loop']-1;
if ($this->_sections['create_columns']['show']) {
    $this->_sections['create_columns']['total'] = $this->_sections['create_columns']['loop'];
    if ($this->_sections['create_columns']['total'] == 0)
        $this->_sections['create_columns']['show'] = false;
} else
    $this->_sections['create_columns']['total'] = 0;
if ($this->_sections['create_columns']['show']):

            for ($this->_sections['create_columns']['index'] = $this->_sections['create_columns']['start'], $this->_sections['create_columns']['iteration'] = 1;
                 $this->_sections['create_columns']['iteration'] <= $this->_sections['create_columns']['total'];
                 $this->_sections['create_columns']['index'] += $this->_sections['create_columns']['step'], $this->_sections['create_columns']['iteration']++):
$this->_sections['create_columns']['rownum'] = $this->_sections['create_columns']['iteration'];
$this->_sections['create_columns']['index_prev'] = $this->_sections['create_columns']['index'] - $this->_sections['create_columns']['step'];
$this->_sections['create_columns']['index_next'] = $this->_sections['create_columns']['index'] + $this->_sections['create_columns']['step'];
$this->_sections['create_columns']['first']      = ($this->_sections['create_columns']['iteration'] == 1);
$this->_sections['create_columns']['last']       = ($this->_sections['create_columns']['iteration'] == $this->_sections['create_columns']['total']);
?>
					<?php if ($this->_tpl_vars['column_name'][$this->_sections['create_columns']['index']]['visible']): ?>
						<?php if ($this->_tpl_vars['column_name'][$this->_sections['create_columns']['index']]['img_url'] != NULL): ?>
							<?php if ($this->_tpl_vars['header_data']['sort_descending']): ?>
								<th>
								<!--
									<a href="<?php echo $this->_tpl_vars['header_data']['sort_url_base']; ?>
Sort=<?php echo $this->_tpl_vars['column_name'][$this->_sections['create_columns']['index']]['column_name']; ?>
&SortDescending=0">
										<img border="0" height="18" width="18" alt="<?php echo $this->_tpl_vars['column_name'][$this->_sections['create_columns']['index']]['col_text']; ?>
" onMouseout="hideddrivetip();" onMouseover="ddrivetip('<?php echo $this->_tpl_vars['header_data']['sort_text']; ?>
 <?php echo $this->_tpl_vars['column_name'][$this->_sections['create_columns']['index']]['col_text']; ?>
');" src="templates/<?php echo $this->_tpl_vars['header_data']['template_name']; ?>
/<?php echo $this->_tpl_vars['column_name'][$this->_sections['create_columns']['index']]['img_url']; ?>
"></img>
									</a>
								-->
								<a class="tooltip" href="<?php echo $this->_tpl_vars['header_data']['sort_url_base']; ?>
Sort=<?php echo $this->_tpl_vars['column_name'][$this->_sections['create_columns']['index']]['column_name']; ?>
&SortDescending=0">
									<img src="templates/<?php echo $this->_tpl_vars['header_data']['template_name']; ?>
/<?php echo $this->_tpl_vars['column_name'][$this->_sections['create_columns']['index']]['img_url']; ?>
" border="0" height="18" width="18" alt="<?php echo $this->_tpl_vars['column_name'][$this->_sections['create_columns']['index']]['col_text']; ?>
" />
										<span class="mediumIconText"><?php echo $this->_tpl_vars['header_data']['sort_text']; ?>
 <?php echo $this->_tpl_vars['column_name'][$this->_sections['create_columns']['index']]['col_text']; ?>
</span>
								</a>
								</th>

							<?php else: ?>
								<th>
								<!--
									<a href="<?php echo $this->_tpl_vars['header_data']['sort_url_base']; ?>
Sort=<?php echo $this->_tpl_vars['column_name'][$this->_sections['create_columns']['index']]['column_name']; ?>
&SortDescending=1">
										<img border="0" height="18" width="18" alt="<?php echo $this->_tpl_vars['column_name'][$this->_sections['create_columns']['index']]['col_text']; ?>
" onMouseout="hideddrivetip();" onMouseover="ddrivetip('<?php echo $this->_tpl_vars['header_data']['sort_text']; ?>
 <?php echo $this->_tpl_vars['column_name'][$this->_sections['create_columns']['index']]['col_text']; ?>
');" src="templates/<?php echo $this->_tpl_vars['header_data']['template_name']; ?>
/<?php echo $this->_tpl_vars['column_name'][$this->_sections['create_columns']['index']]['img_url']; ?>
"></img>
									</a>
								-->
								<a class="tooltip" href="<?php echo $this->_tpl_vars['header_data']['sort_url_base']; ?>
Sort=<?php echo $this->_tpl_vars['column_name'][$this->_sections['create_columns']['index']]['column_name']; ?>
&SortDescending=1">
									<img src="templates/<?php echo $this->_tpl_vars['header_data']['template_name']; ?>
/<?php echo $this->_tpl_vars['column_name'][$this->_sections['create_columns']['index']]['img_url']; ?>
" border="0" height="18" width="18" alt="<?php echo $this->_tpl_vars['column_name'][$this->_sections['create_columns']['index']]['col_text']; ?>
" />
										<span class="mediumIconText"><?php echo $this->_tpl_vars['header_data']['sort_text']; ?>
 <?php echo $this->_tpl_vars['column_name'][$this->_sections['create_columns']['index']]['col_text']; ?>
</span>
								</a>
								</th>
							<?php endif; ?>								
						<?php elseif ($this->_tpl_vars['column_name'][$this->_sections['create_columns']['index']]['column_name'] == 'Buttons'): ?>
							<th>&nbsp;</th>
						<?php else: ?>
							<?php if ($this->_tpl_vars['header_data']['sort_descending']): ?>
								<th><a href="<?php echo $this->_tpl_vars['header_data']['sort_url_base']; ?>
Sort=<?php echo $this->_tpl_vars['column_name'][$this->_sections['create_columns']['index']]['column_name']; ?>
&SortDescending=0"><?php echo $this->_tpl_vars['column_name'][$this->_sections['create_columns']['index']]['col_text']; ?>
</a></th>
							<?php else: ?>
								<th><a href="<?php echo $this->_tpl_vars['header_data']['sort_url_base']; ?>
Sort=<?php echo $this->_tpl_vars['column_name'][$this->_sections['create_columns']['index']]['column_name']; ?>
&SortDescending=1"><?php echo $this->_tpl_vars['column_name'][$this->_sections['create_columns']['index']]['col_text']; ?>
</a></th>
							<?php endif; ?>							
						<?php endif; ?>
					<?php endif; ?>
				<?php endfor; endif; ?>
			</tr>
			<?php unset($this->_sections['raids_data_sec']);
$this->_sections['raids_data_sec']['name'] = 'raids_data_sec';
$this->_sections['raids_data_sec']['loop'] = is_array($_loop=$this->_tpl_vars['raid_data']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['raids_data_sec']['show'] = true;
$this->_sections['raids_data_sec']['max'] = $this->_sections['raids_data_sec']['loop'];
$this->_sections['raids_data_sec']['step'] = 1;
$this->_sections['raids_data_sec']['start'] = $this->_sections['raids_data_sec']['step'] > 0 ? 0 : $this->_sections['raids_data_sec']['loop']-1;
if ($this->_sections['raids_data_sec']['show']) {
    $this->_sections['raids_data_sec']['total'] = $this->_sections['raids_data_sec']['loop'];
    if ($this->_sections['raids_data_sec']['total'] == 0)
        $this->_sections['raids_data_sec']['show'] = false;
} else
    $this->_sections['raids_data_sec']['total'] = 0;
if ($this->_sections['raids_data_sec']['show']):

            for ($this->_sections['raids_data_sec']['index'] = $this->_sections['raids_data_sec']['start'], $this->_sections['raids_data_sec']['iteration'] = 1;
                 $this->_sections['raids_data_sec']['iteration'] <= $this->_sections['raids_data_sec']['total'];
                 $this->_sections['raids_data_sec']['index'] += $this->_sections['raids_data_sec']['step'], $this->_sections['raids_data_sec']['iteration']++):
$this->_sections['raids_data_sec']['rownum'] = $this->_sections['raids_data_sec']['iteration'];
$this->_sections['raids_data_sec']['index_prev'] = $this->_sections['raids_data_sec']['index'] - $this->_sections['raids_data_sec']['step'];
$this->_sections['raids_data_sec']['index_next'] = $this->_sections['raids_data_sec']['index'] + $this->_sections['raids_data_sec']['step'];
$this->_sections['raids_data_sec']['first']      = ($this->_sections['raids_data_sec']['iteration'] == 1);
$this->_sections['raids_data_sec']['last']       = ($this->_sections['raids_data_sec']['iteration'] == $this->_sections['raids_data_sec']['total']);
?>
			<?php echo smarty_function_cycle(array('name' => 'classname','assign' => 'classname','values' => "row1,row2"), $this);?>

			<tr class="<?php echo $this->_tpl_vars['classname']; ?>
" onmouseover="this.className='rowHover';" onmouseout="this.className='<?php echo $this->_tpl_vars['classname']; ?>
';">
				<?php unset($this->_sections['display_column_data']);
$this->_sections['display_column_data']['name'] = 'display_column_data';
$this->_sections['display_column_data']['loop'] = is_array($_loop=$this->_tpl_vars['column_name']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['display_column_data']['show'] = true;
$this->_sections['display_column_data']['max'] = $this->_sections['display_column_data']['loop'];
$this->_sections['display_column_data']['step'] = 1;
$this->_sections['display_column_data']['start'] = $this->_sections['display_column_data']['step'] > 0 ? 0 : $this->_sections['display_column_data']['loop']-1;
if ($this->_sections['display_column_data']['show']) {
    $this->_sections['display_column_data']['total'] = $this->_sections['display_column_data']['loop'];
    if ($this->_sections['display_column_data']['total'] == 0)
        $this->_sections['display_column_data']['show'] = false;
} else
    $this->_sections['display_column_data']['total'] = 0;
if ($this->_sections['display_column_data']['show']):

            for ($this->_sections['display_column_data']['index'] = $this->_sections['display_column_data']['start'], $this->_sections['display_column_data']['iteration'] = 1;
                 $this->_sections['display_column_data']['iteration'] <= $this->_sections['display_column_data']['total'];
                 $this->_sections['display_column_data']['index'] += $this->_sections['display_column_data']['step'], $this->_sections['display_column_data']['iteration']++):
$this->_sections['display_column_data']['rownum'] = $this->_sections['display_column_data']['iteration'];
$this->_sections['display_column_data']['index_prev'] = $this->_sections['display_column_data']['index'] - $this->_sections['display_column_data']['step'];
$this->_sections['display_column_data']['index_next'] = $this->_sections['display_column_data']['index'] + $this->_sections['display_column_data']['step'];
$this->_sections['display_column_data']['first']      = ($this->_sections['display_column_data']['iteration'] == 1);
$this->_sections['display_column_data']['last']       = ($this->_sections['display_column_data']['iteration'] == $this->_sections['display_column_data']['total']);
?>
					<?php $this->assign('foo', ($this->_tpl_vars['column_name'][$this->_sections['display_column_data']['index']]['column_name'])); ?>
					<?php if ($this->_tpl_vars['column_name'][$this->_sections['display_column_data']['index']]['visible']): ?>
						<td><?php echo $this->_tpl_vars['raid_data'][$this->_sections['raids_data_sec']['index']][$this->_tpl_vars['foo']]; ?>
</td>
					<?php endif; ?>
				<?php endfor; endif; ?>
			</tr>
			<?php endfor; endif; ?>
		</table>
	<?php else: ?>
		<table width="100%" cellpadding="3" cellspacing="0" border="0" class="dataOutline">
			<tr class="listHeader">
				<th>Empty</th>
			</tr>
		</table>
	<?php endif; ?>
</div>