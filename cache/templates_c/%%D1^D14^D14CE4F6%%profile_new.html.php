<?php /* Smarty version 2.6.20, created on 2016-09-06 03:40:15
         compiled from profile_new.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'profile_new.html', 14, false),)), $this); ?>
<br>
<div class="contentHeader"><?php echo $this->_tpl_vars['char_new']['char_header']; ?>
</div>
<br>
<div class="contentBody">
<form method="post" action="<?php echo $this->_tpl_vars['char_new']['form_action']; ?>
">
      <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td><table width="100%" border="0" cellspacing="1" cellpadding="3" class="dataOutline">
              <tr>
                <td class="row1"><strong><?php echo $this->_tpl_vars['char_new']['guild_text']; ?>
</strong></td>
                <td class="row2">
					<?php echo smarty_function_html_options(array('name' => 'guild','options' => $this->_tpl_vars['char_new']['array_guild'],'selected' => $this->_tpl_vars['char_new']['selected_guild'],'class' => 'form','onChange' => "MM_jumpMenu('self',this,0)",'style' => "width:100px"), $this);?>

                </td>
              </tr>
              <tr>
                <td width="200" class="row1"><strong><?php echo $this->_tpl_vars['char_new']['race_text']; ?>
</strong></td>
                <td class="row2">
					<?php echo smarty_function_html_options(array('name' => 'race','options' => $this->_tpl_vars['char_new']['array_race'],'selected' => $this->_tpl_vars['char_new']['selected_race'],'class' => 'form','onChange' => "MM_jumpMenu('self',this,0)",'style' => "width:100px"), $this);?>

                </td>
              </tr>
              <tr>
                <td width="200" class="row1"><strong><?php echo $this->_tpl_vars['char_new']['class_text']; ?>
</strong></td>
                <td class="row2">
					<?php echo smarty_function_html_options(array('name' => 'class','options' => $this->_tpl_vars['char_new']['array_class'],'selected' => $this->_tpl_vars['char_new']['selected_class'],'class' => 'form','onChange' => "MM_jumpMenu('self',this,0)",'style' => "width:100px"), $this);?>

                </td>
              </tr>
              <tr>
                <td width="200" class="row1"><strong><?php echo $this->_tpl_vars['char_new']['gender_text']; ?>
</strong></td>
                <td class="row2"><?php echo $this->_tpl_vars['char_new']['gender']; ?>
</td>
              </tr>
              <tr>
                <td width="200" class="row1"><strong><?php echo $this->_tpl_vars['char_new']['name_text']; ?>
</strong></td>
                <td class="row2"><?php echo $this->_tpl_vars['char_new']['name']; ?>
</td>
              </tr>
			  <tr>
                <td class="row1"><strong><?php echo $this->_tpl_vars['char_new']['level_text']; ?>
</strong></td>
                <td class="row2"><?php echo $this->_tpl_vars['char_new']['level']; ?>
</td>
              </tr>
              <tr>
                <td class="row1"><strong><font color="#CCFFCC"><?php echo $this->_tpl_vars['char_new']['arcane_text']; ?>
</font></strong></td>
                <td class="row2"><?php echo $this->_tpl_vars['char_new']['arcane']; ?>
</td>
              </tr>
              <tr>
                <td class="row1"><strong><font color="#FF0000"><?php echo $this->_tpl_vars['char_new']['fire_text']; ?>
</font></strong></td>
                <td class="row2"><?php echo $this->_tpl_vars['char_new']['fire']; ?>
</td>
              </tr>
              <tr>
                <td class="row1"><strong><font color="#009900"><?php echo $this->_tpl_vars['char_new']['nature_text']; ?>
</font></strong></td>
                <td class="row2"><?php echo $this->_tpl_vars['char_new']['nature']; ?>
</td>
              </tr>
              <tr>
                <td class="row1"><strong><font color="#0000FF"><?php echo $this->_tpl_vars['char_new']['frost_text']; ?>
</font></strong></td>
                <td class="row2"><?php echo $this->_tpl_vars['char_new']['frost']; ?>
</td>
              </tr>
              <tr>
                <td class="row1"><strong><font color="#663366"><?php echo $this->_tpl_vars['char_new']['shadow_text']; ?>
</font></strong></td>
                <td class="row2"><?php echo $this->_tpl_vars['char_new']['shadow']; ?>
</td>
              </tr>
              <tr>
                <td width="200" class="row1"><strong><?php echo $this->_tpl_vars['char_new']['role_text']; ?>
</strong></td>
                <td class="row2"><?php echo $this->_tpl_vars['char_new']['pri_spec']; ?>
</td>
              </tr>              
              <tr>
                <td width="200" class="row1"><strong><?php echo $this->_tpl_vars['char_new']['role_text']; ?>
</strong></td>
                <td class="row2"><?php echo $this->_tpl_vars['char_new']['sec_spec']; ?>
</td>
              </tr>              
            </table></td>
        </tr>
      </table>
      <br>
		<div align="center" class="button">
			<input type="submit" value="<?php echo $this->_tpl_vars['char_new']['buttons_01']; ?>
" name="submit" class="mainoption">
		</div>
</form>
</div>