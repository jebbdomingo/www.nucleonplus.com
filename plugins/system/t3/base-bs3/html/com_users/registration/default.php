<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_users
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

JHtml::_('behavior.keepalive');
if(version_compare(JVERSION, '3.0', 'lt')){
	JHtml::_('behavior.tooltip');
}
JHtml::_('behavior.formvalidator');

$input     = JFactory::getApplication()->input;
$sponsorId = $input->get('sponsor_id', null);
?>

<script type="text/javascript">
jQuery(document).ready(function(){
	jQuery('#member-registration').submit(function(){
		var validator = new JFormValidator;

		if (validator.isValid('#member-registration')) {
			jQuery('button[type=submit]').prop('disabled', true);
		}
	});

});
</script>

<div class="registration<?php echo $this->pageclass_sfx?>">
<?php if ($this->params->get('show_page_heading')) : ?>
	<div class="page-header">
		<h1 class="page-title"><?php echo $this->escape($this->params->get('page_heading')); ?></h1>
	</div>
<?php endif; ?>

	<form id="member-registration" action="<?php echo JRoute::_('index.php?option=com_users&task=registration.register'); ?>" method="post" class="form-validate form-horizontal">
	<?php foreach ($this->form->getFieldsets() as $fieldset): // Iterate through the form fieldsets and display each one.?>
		<?php $fields = $this->form->getFieldset($fieldset->name);?>
		<?php if (count($fields)):?>
			<fieldset>
			<?php if (isset($fieldset->label)):// If the fieldset has a label set, display it as the legend.
			?>
				<legend><?php echo JText::_($fieldset->label);?></legend>
			<?php endif;?>
			<?php foreach ($fields as $field) :// Iterate through the fields in the set and display them.?>

				<?php
				if ($field->fieldname == 'sponsor_id' && $sponsorId)
				{
					$field->setValue($sponsorId);
					$field->class = 'hidden';
				}
				?>

				<?php if ($field->hidden):// If the field is hidden, just display the input.?>
					<?php echo $field->input;?>
				<?php else:?>
					<div class="form-group">

						<div class="col-sm-3 control-label">
							<?php if ($field->class <> 'hidden'): ?>
								<?php echo $field->label; ?>
								<?php if (!$field->required && $field->type != 'Spacer') : ?>
									<span class="optional"><?php echo JText::_('COM_USERS_OPTIONAL');?></span>
								<?php endif; ?>
							<?php endif; ?>
						</div>
						<div class="col-sm-9">
							<?php echo $field->input;?>
						</div>

					</div>
				<?php endif;?>
			<?php endforeach;?>
			</fieldset>
		<?php endif;?>
	<?php endforeach;?>
		<div class="form-group form-actions">
			<div class="col-sm-offset-3 col-sm-9">
				<button type="submit" class="btn btn-primary validate"><?php echo JText::_('JREGISTER');?></button>
				<a class="btn cancel" href="<?php echo JRoute::_('');?>" title="<?php echo JText::_('JCANCEL');?>"><?php echo JText::_('JCANCEL');?></a>
				<input type="hidden" name="option" value="com_users" />
				<input type="hidden" name="task" value="registration.register" />
				<?php echo JHtml::_('form.token');?>
			</div>
		</div>
	</form>
</div>
