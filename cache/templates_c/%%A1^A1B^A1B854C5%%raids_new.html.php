<?php /* Smarty version 2.6.20, created on 2016-07-11 05:22:53
         compiled from raids_new.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'raids_new.html', 16, false),)), $this); ?>
<a name="new"></a>
<div class="contentHeader">
	<?php echo $this->_tpl_vars['page']['raids_new']; ?>

</div>
<br>
<div class="contentBody">
	<form action="<?php echo $this->_tpl_vars['page']['form_action']; ?>
" method="post" name="new_raid" id="new_raid">
		<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
			<tr>
				<td> 
					<table width="100%" border="0" cellspacing="1" cellpadding="3" class="dataOutline">
						<tr>
							<td width="200" class="row1"><strong><?php echo $this->_tpl_vars['page']['location_text']; ?>
</strong></td>
							<td class="row2">
							<?php if ($this->_tpl_vars['page']['mode'] == 'new'): ?>
					          	<?php echo smarty_function_html_options(array('name' => 'name','options' => $this->_tpl_vars['page']['array_raid_name'],'selected' => $this->_tpl_vars['page']['selected_raid_name'],'onChange' => "MM_jumpMenu('self',this,0)",'class' => 'post'), $this);?>

							<?php else: ?>
					          	<?php echo smarty_function_html_options(array('name' => 'name','options' => $this->_tpl_vars['page']['array_raid_name'],'selected' => $this->_tpl_vars['page']['selected_raid_name'],'class' => 'post','id' => 'name'), $this);?>

							<?php endif; ?>
							</td>
						</tr>
						<tr>
							<td width="200" class="row1"><strong><?php echo $this->_tpl_vars['page']['date_text']; ?>
</strong></td>
							<td class="row2"><?php echo $this->_tpl_vars['page']['date']; ?>
</td>
						</tr>
						<tr>
							<td width="200" class="row1"><strong><?php echo $this->_tpl_vars['page']['raid_force_text']; ?>
</strong></td>
							<td class="row2"><?php echo $this->_tpl_vars['page']['raid_force']; ?>
</td>
						</tr>
						<tr>
							<td width="200" class="row1"><strong><?php echo $this->_tpl_vars['page']['invite_text']; ?>
</strong></td>
							<td class="row2"><?php echo $this->_tpl_vars['page']['i_time_hour']; ?>
 <?php echo $this->_tpl_vars['page']['i_time_minute']; ?>
 <?php echo $this->_tpl_vars['page']['i_time_ampm']; ?>
</td>
						</tr>
						<tr>
							<td width="200" class="row1"><strong><?php echo $this->_tpl_vars['page']['start_text']; ?>
</strong></td>
							<td class="row2"><?php echo $this->_tpl_vars['page']['s_time_hour']; ?>
 <?php echo $this->_tpl_vars['page']['s_time_minute']; ?>
 <?php echo $this->_tpl_vars['page']['s_time_ampm']; ?>
</td>
						</tr>
						<tr>
							<td class="row1"><strong><?php echo $this->_tpl_vars['page']['freeze_text']; ?>
</strong></td>
							<td class="row2"><?php echo $this->_tpl_vars['page']['freeze']; ?>
</td>
						</tr>
						<tr>
							<td class="row1"><strong><?php echo $this->_tpl_vars['page']['eventtype_text']; ?>
</strong></td>
							<td class="row2"><?php echo $this->_tpl_vars['page']['event_type']; ?>
</td>
						</tr>
						<tr>
							<td class="row1"><strong><?php echo $this->_tpl_vars['page']['dungeon_text']; ?>
</strong></td>
							<td class="row2"><?php echo $this->_tpl_vars['page']['location']; ?>
</td>
						</tr>
						<tr>
							<td class="row1"><strong><?php echo $this->_tpl_vars['page']['description_text']; ?>
</strong></td>
							<td class="row2">
								<textarea name="description" cols="50" rows="10" wrap="PHYSICAL" class="post" id="message" style="width:300;height:150"><?php echo $this->_tpl_vars['page']['description_value']; ?>
</textarea>
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
		<br>
		<?php if ($this->_tpl_vars['page']['mode'] == 'new' && $this->_tpl_vars['page']['show_recurrance']): ?> 
			<div class="contentHeader"><?php echo $this->_tpl_vars['page']['recurrance_header']; ?>
</div>
			<br>
			<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
				<tr>
					<td>
						<table width="100%" border="0" cellspacing="1" cellpadding="3" class="dataOutline">
							<tr>
								<td width="200" class="row1"><strong><?php echo $this->_tpl_vars['page']['recurring_check_text']; ?>
</strong></td>
								<td class="row2"><?php echo $this->_tpl_vars['page']['recurring_checkbox']; ?>
</td>
							</tr>
							<tr>
								<td width="200" class="row1"><strong><?php echo $this->_tpl_vars['page']['recur_interval_text']; ?>
</strong></td>
								<td class="row2"><?php echo $this->_tpl_vars['page']['recur_interval']; ?>
</td>
							</tr>
							<tr>
								<td width="200" class="row1"><strong><?php echo $this->_tpl_vars['page']['recur_length_text']; ?>
</strong></td>
								<td class="row2"><?php echo $this->_tpl_vars['page']['recur_length']; ?>
</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
			<br>
		<?php endif; ?>
		<div class="contentHeader">
			<?php echo $this->_tpl_vars['page']['limits_text']; ?>

		</div>
		<br>
		<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
			<tr>
				<td>
					<table width="100%" border="0" cellspacing="1" cellpadding="3" class="dataOutline">
						<tr>
							<td width="200" class="row1"><strong><?php echo $this->_tpl_vars['page']['max_text']; ?>
</strong></td>
							<td class="row2">
								<input name="max" type="text" class="post" style="width:20px" value="<?php echo $this->_tpl_vars['page']['maximum']; ?>
" maxlength="2">
							</td>
						</tr>
						<tr>
							<td width="200" class="row1"><strong><?php echo $this->_tpl_vars['page']['minlvl_text']; ?>
</strong></td>
							<td class="row2">
								<input name="min_lvl" type="text" class="post" style="width:20px" value="<?php echo $this->_tpl_vars['page']['minimum_level']; ?>
" maxlength="2">
							</td>
						</tr>
						<tr>
							<td width="200" class="row1"><strong><?php echo $this->_tpl_vars['page']['maxlvl_text']; ?>
</strong></td>
							<td class="row2">
								<input name="max_lvl" type="text" class="post" style="width:20px" value="<?php echo $this->_tpl_vars['page']['maximum_level']; ?>
" maxlength="2">
							</td>
						</tr>
        				<?php unset($this->_sections['class_data_sec']);
$this->_sections['class_data_sec']['name'] = 'class_data_sec';
$this->_sections['class_data_sec']['loop'] = is_array($_loop=$this->_tpl_vars['class_limits']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['class_data_sec']['show'] = true;
$this->_sections['class_data_sec']['max'] = $this->_sections['class_data_sec']['loop'];
$this->_sections['class_data_sec']['step'] = 1;
$this->_sections['class_data_sec']['start'] = $this->_sections['class_data_sec']['step'] > 0 ? 0 : $this->_sections['class_data_sec']['loop']-1;
if ($this->_sections['class_data_sec']['show']) {
    $this->_sections['class_data_sec']['total'] = $this->_sections['class_data_sec']['loop'];
    if ($this->_sections['class_data_sec']['total'] == 0)
        $this->_sections['class_data_sec']['show'] = false;
} else
    $this->_sections['class_data_sec']['total'] = 0;
if ($this->_sections['class_data_sec']['show']):

            for ($this->_sections['class_data_sec']['index'] = $this->_sections['class_data_sec']['start'], $this->_sections['class_data_sec']['iteration'] = 1;
                 $this->_sections['class_data_sec']['iteration'] <= $this->_sections['class_data_sec']['total'];
                 $this->_sections['class_data_sec']['index'] += $this->_sections['class_data_sec']['step'], $this->_sections['class_data_sec']['iteration']++):
$this->_sections['class_data_sec']['rownum'] = $this->_sections['class_data_sec']['iteration'];
$this->_sections['class_data_sec']['index_prev'] = $this->_sections['class_data_sec']['index'] - $this->_sections['class_data_sec']['step'];
$this->_sections['class_data_sec']['index_next'] = $this->_sections['class_data_sec']['index'] + $this->_sections['class_data_sec']['step'];
$this->_sections['class_data_sec']['first']      = ($this->_sections['class_data_sec']['iteration'] == 1);
$this->_sections['class_data_sec']['last']       = ($this->_sections['class_data_sec']['iteration'] == $this->_sections['class_data_sec']['total']);
?>
							<tr> 
								<td width="200" class="row1"><strong><?php echo $this->_tpl_vars['class_limits'][$this->_sections['class_data_sec']['index']]['lang_id']; ?>
</strong></td>
								<td class="row2"><?php echo $this->_tpl_vars['class_limits'][$this->_sections['class_data_sec']['index']]['lmt']; ?>
</td>
							</tr>
				        <?php endfor; endif; ?>
				        <?php unset($this->_sections['role_data_sec']);
$this->_sections['role_data_sec']['name'] = 'role_data_sec';
$this->_sections['role_data_sec']['loop'] = is_array($_loop=$this->_tpl_vars['role_limits']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['role_data_sec']['show'] = true;
$this->_sections['role_data_sec']['max'] = $this->_sections['role_data_sec']['loop'];
$this->_sections['role_data_sec']['step'] = 1;
$this->_sections['role_data_sec']['start'] = $this->_sections['role_data_sec']['step'] > 0 ? 0 : $this->_sections['role_data_sec']['loop']-1;
if ($this->_sections['role_data_sec']['show']) {
    $this->_sections['role_data_sec']['total'] = $this->_sections['role_data_sec']['loop'];
    if ($this->_sections['role_data_sec']['total'] == 0)
        $this->_sections['role_data_sec']['show'] = false;
} else
    $this->_sections['role_data_sec']['total'] = 0;
if ($this->_sections['role_data_sec']['show']):

            for ($this->_sections['role_data_sec']['index'] = $this->_sections['role_data_sec']['start'], $this->_sections['role_data_sec']['iteration'] = 1;
                 $this->_sections['role_data_sec']['iteration'] <= $this->_sections['role_data_sec']['total'];
                 $this->_sections['role_data_sec']['index'] += $this->_sections['role_data_sec']['step'], $this->_sections['role_data_sec']['iteration']++):
$this->_sections['role_data_sec']['rownum'] = $this->_sections['role_data_sec']['iteration'];
$this->_sections['role_data_sec']['index_prev'] = $this->_sections['role_data_sec']['index'] - $this->_sections['role_data_sec']['step'];
$this->_sections['role_data_sec']['index_next'] = $this->_sections['role_data_sec']['index'] + $this->_sections['role_data_sec']['step'];
$this->_sections['role_data_sec']['first']      = ($this->_sections['role_data_sec']['iteration'] == 1);
$this->_sections['role_data_sec']['last']       = ($this->_sections['role_data_sec']['iteration'] == $this->_sections['role_data_sec']['total']);
?>
						    <?php if ($this->_tpl_vars['role_limits'][$this->_sections['role_data_sec']['index']]['lang_id'] != ""): ?>
								<tr>
									<td width="200" class="row1"><strong><?php echo $this->_tpl_vars['role_limits'][$this->_sections['role_data_sec']['index']]['lang_id']; ?>
</strong></td>
									<td class="row2"><?php echo $this->_tpl_vars['role_limits'][$this->_sections['role_data_sec']['index']]['lmt']; ?>
</td>
								</tr>
						    <?php endif; ?>
				        <?php endfor; endif; ?>
					</table>
				</td>
			</tr>
		</table>
	<br>
<div align="center" class="button">
	<input type="submit" value="<?php echo $this->_tpl_vars['page']['button_submit']; ?>
" name="submit" class="mainoption">
	<input type="reset" value="<?php echo $this->_tpl_vars['page']['button_reset']; ?>
" name="reset" class="liteoption">
</div>
<?php echo $this->_tpl_vars['page']['event_id_info']; ?>

</form>
</div>	