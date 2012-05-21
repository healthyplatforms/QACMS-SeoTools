<?php if (!isset($results)) : ?>
	<?php echo $this->Form->create(false); ?>
		<table width="100%" border="0" cellspacing="0" cellpadding="5">
			<tr>
				<td align="left" valign="top"><b><?php echo __d('seo_tools', 'Enter Your IP'); ?>:</b></td>
			</tr>

			<tr>
			  <td align="left" valign="top"><input type="text" name="data[Tool][ip]" value="" class="text" style="width:100%;" /></td>
			</tr>

			<tr>
				<td align="left" valign="top">
					<input type="submit" value="<?php echo __d('seo_tools', 'Continue'); ?>" class="primary_lg" />
				</td>
			</tr>
		</table>
	<?php echo $this->Form->end(); ?>
<?php else: ?>
	<h1><?php echo __d('seo_tools', 'Ping Domain/IP'); ?></h1>
	<pre><?php echo $results; ?></pre>
<?php endif; ?>