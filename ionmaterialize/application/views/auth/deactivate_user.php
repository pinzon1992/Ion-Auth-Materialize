<div class="container">
  <div class="row">
    <div class="col s12 m12 l4 offset-l4">
      <h1><?php echo lang('deactivate_heading');?></h1>
      <p><?php echo sprintf(lang('deactivate_subheading'), $user->username);?></p>

      <?php echo form_open("auth/deactivate/".$user->id);?>

        <p>
          <input type="radio" name="confirm" value="yes" checked="checked" id="confirm1" />
        	<?php echo lang('deactivate_confirm_y_label', 'confirm1');?>
          <input type="radio" name="confirm" value="no" id="confirm2"/>
          <?php echo lang('deactivate_confirm_n_label', 'confirm2');?>
        </p>

        <?php echo form_hidden($csrf); ?>
        <?php echo form_hidden(array('id'=>$user->id)); ?>

        <p><?php echo form_submit('submit', lang('deactivate_submit_btn'));?></p>

      <?php echo form_close();?>
    </div>
  </div>
</div>
