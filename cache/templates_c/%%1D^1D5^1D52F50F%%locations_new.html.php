<?php /* Smarty version 2.6.20, created on 2016-07-11 05:22:59
         compiled from locations_new.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'locations_new.html', 13, false),)), $this); ?>
<br>
<a name="new"></a>
<form action="<?php echo $this->_tpl_vars['locations_new']['form_action']; ?>
" method="post" name="new_raid" id="new_raid">
<div class="contentHeader"><?php echo $this->_tpl_vars['locations_new']['newlocation_header']; ?>
</div><br>
<div class="contentBody">
  <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td>
      <table width="100%" border="0" cellspacing="1" cellpadding="3" class="dataOutline">
        <tr>
          <td width="200" class="row1"><span class="headmed"><strong><?php echo $this->_tpl_vars['locations_new']['eventtype_text']; ?>
</strong></span></td>
          <td class="row2">
          	<?php echo smarty_function_html_options(array('name' => 'event_type','options' => $this->_tpl_vars['locations_new']['array_event_type'],'selected' => $this->_tpl_vars['locations_new']['selected_event_type'],'class' => 'post','onChange' => "MM_jumpMenu('self',this,0)"), $this);?>

          </td>
        </tr>
        <tr>
          <td width="200" class="row1"><span class="headmed"><strong><?php echo $this->_tpl_vars['locations_new']['expansion_text']; ?>
</strong></span></td>
          <td class="row2">
          	<?php echo smarty_function_html_options(array('name' => 'expansion','options' => $this->_tpl_vars['locations_new']['array_expansion'],'selected' => $this->_tpl_vars['locations_new']['selected_expansion'],'id' => 'expansion','class' => 'post','onChange' => "MM_jumpMenu('self',this,0)"), $this);?>

          </td>
        </tr>
		<tr>
          <td width="200" class="row1"><span class="headmed"><strong><?php echo $this->_tpl_vars['locations_new']['event_text']; ?>
</strong></span></td>
		  <?php if ($this->_tpl_vars['locations_new']['icon'] != ""): ?>
          	<td class="row2"><?php echo $this->_tpl_vars['locations_new']['event']; ?>
&nbsp;&nbsp;&nbsp;<img src="<?php echo $this->_tpl_vars['locations_new']['icon']; ?>
"></td>
          <?php else: ?>
          	<td class="row2"><?php echo $this->_tpl_vars['locations_new']['event']; ?>
</td>
		  <?php endif; ?>          
        </tr>
        <tr>
          <td width="200" class="row1"><span class="headmed"><strong><?php echo $this->_tpl_vars['locations_new']['location_text']; ?>
</strong></span></td>
          <td class="row2">
          	<input name="location" value="<?php echo $this->_tpl_vars['locations_new']['location_wow_name']; ?>
" type="text" id="location" style="width:350px" class="post" DISABLED>
          	&nbsp;&nbsp;<?php echo $this->_tpl_vars['locations_new']['location_read_only_text']; ?>

          </td>
        </tr>
        <tr>
          <td width="200" class="row1"><span class="headmed"><strong><?php echo $this->_tpl_vars['locations_new']['shortname_text']; ?>
</strong></span></td>
          <td class="row2">
          		<input name="name" type="text" id="name" value="<?php echo $this->_tpl_vars['locations_new']['location_shortname']; ?>
" class="post">
          </td>
        </tr>
        <tr>
          <td width="200" class="row1"><span class="headmed"><strong><?php echo $this->_tpl_vars['locations_new']['raid_force_text']; ?>
</strong></span></td>
          <td class="row2">
          	<!-- <?php echo smarty_function_html_options(array('name' => 'raid_force_id','options' => $this->_tpl_vars['locations_new']['array_raid_force'],'selected' => $this->_tpl_vars['locations_new']['selected_raid_force'],'class' => 'post','onChange' => "MM_jumpMenu('self',this,0)"), $this);?>
 -->
          	<?php echo smarty_function_html_options(array('name' => 'raid_force_name','options' => $this->_tpl_vars['locations_new']['array_raid_force'],'selected' => $this->_tpl_vars['locations_new']['selected_raid_force'],'class' => 'post'), $this);?>

          	</td>
        </tr>
        <tr>
          <td width="200" class="row1"><span class="headmed"><strong><?php echo $this->_tpl_vars['locations_new']['minlvl_text']; ?>
</strong></span></td>
          <td class="row2">
          	<input name="location_min_lvl" type="text" value="<?php echo $this->_tpl_vars['locations_new']['location_min_lvl']; ?>
"  class="post" style="width:20px" maxlength="2">
          </td>
        </tr>
        <tr>
          <td width="200" class="row1"><span class="headmed"><strong><?php echo $this->_tpl_vars['locations_new']['maxlvl_text']; ?>
</strong></span></td>
          <td class="row2">
            <input name="location_max_lvl" type="text" value="<?php echo $this->_tpl_vars['locations_new']['location_max_lvl']; ?>
"  class="post" style="width:20px" maxlength="2">
          </td>
        </tr>
        <tr>
          <td width="200" class="row1"><span class="headmed"><strong><?php echo $this->_tpl_vars['locations_new']['maxattendees_text']; ?>
</strong></span></td>
          <td class="row2">
          	<input name="number_max_chars" type="text" value="<?php echo $this->_tpl_vars['locations_new']['number_max_chars']; ?>
"  class="post" style="width:20px" maxlength="2">
          </td>
        </tr>
      </table>
    </td>
   </tr>
</table>
</div>
<br>
<div class="contentHeader"><?php echo $this->_tpl_vars['locations_new']['limits_header']; ?>
</div><br>
<div class="contentBody">
  <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td> 
     <table width="100%" border="0" cellspacing="1" cellpadding="3" class="dataOutline">
        <?php unset($this->_sections['class_data_sec']);
$this->_sections['class_data_sec']['name'] = 'class_data_sec';
$this->_sections['class_data_sec']['loop'] = is_array($_loop=$this->_tpl_vars['class_data']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
	            <td width="200" class="row1"><span class="headmed"><strong><?php echo $this->_tpl_vars['class_data'][$this->_sections['class_data_sec']['index']]['lang_id']; ?>
</strong></span></td>
	            <td class="row2"><?php echo $this->_tpl_vars['class_data'][$this->_sections['class_data_sec']['index']]['class']; ?>
</td>
	        </tr>
        <?php endfor; endif; ?>
        <?php unset($this->_sections['role_data_sec']);
$this->_sections['role_data_sec']['name'] = 'role_data_sec';
$this->_sections['role_data_sec']['loop'] = is_array($_loop=$this->_tpl_vars['role_data']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
		    <?php if ($this->_tpl_vars['role_data'][$this->_sections['role_data_sec']['index']]['lang_id'] != ""): ?>
		        <tr> 
		            <td width="200" class="row1"><span class="headmed"><strong><?php echo $this->_tpl_vars['role_data'][$this->_sections['role_data_sec']['index']]['lang_id']; ?>
</strong></span></td>
		            <td class="row2"><?php echo $this->_tpl_vars['role_data'][$this->_sections['role_data_sec']['index']]['role']; ?>
</td>
		        </tr>
		    <?php endif; ?>
        <?php endfor; endif; ?>
        <tr>
            <td width="200" class="row1"><span class="headmed"><strong><?php echo $this->_tpl_vars['locations_new']['locked_text']; ?>
</strong></span></td>
            <td class="row2">
           		<input name="lock_template" type="checkbox" value="<?php echo $this->_tpl_vars['locations_new']['chbox_locked_loc_value']; ?>
" ="post" <?php echo $this->_tpl_vars['locations_new']['chbox_locked_loc_status']; ?>
>
            </td>
        </tr>
      </table>
    </td>
  </tr>
</table>
</div>
<br>
<div class="contentBody">
	<div align="center" class="button">
		<input type="submit" value="<?php echo $this->_tpl_vars['locations_new']['button_01']; ?>
" name="submit" class="mainoption">
		<input type="reset" value="<?php echo $this->_tpl_vars['locations_new']['button_reset']; ?>
" name="reset" class="liteoption">
	</div>
</div>
</form>

