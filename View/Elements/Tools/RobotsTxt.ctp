<?php if (!isset($results)): ?>
	<?php echo $this->Form->create(false); ?>
		<table width="100%" border="0" cellspacing="0" cellpadding="5">
			<tr>
				<td align="left" valign="top"><b><?php echo __d('seo_tools', 'Enter Your URL'); ?>:</b></td>
			</tr>

			<tr>
				<td align="left" valign="top"><input type="text" name="data[Tool][url]" value="<?php echo Configure::read('ModSeo.Config.seo_site_url'); ?>" class="text" style="width:100%;" /></td>
			</tr>

			<tr>
				<td align="left" valign="top">
					<input type="submit" value="<?php echo __d('seo_tools', 'Continue'); ?>" class="primary_lg" />
				</td>
			</tr>
		</table>
	<?php echo $this->Form->end(); ?>
<?php else: ?>
	<h1><?php printf(__d('seo_tools', 'robots.txt file for %s'), $this->data['Tool']['url']); ?></h1>
	<textarea style="width:100%; height:360px;"><?php echo $results; ?></textarea>
<?php endif; ?>