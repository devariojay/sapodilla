<div class="products index">
	
	<?php
	$i = 0;
	foreach ($products as $product):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<table>
	<tr<?php echo $class;?>>
		
		<div>
			<p class="productHeader">
				<?php echo $product['Product']['title']; ?>
			</p>
		</div>	
		
		<div class="photocontainer">
			<?php foreach($product['Photo'] as $photo): ?>
			<?php echo $this->Html->image('/uploads/' . $photo['location'], array('alt' => $photo['location'], 'width' => '150px')); ?>
			<?php endforeach; ?>
		</div>
		
		<div>
			<p class="leftAlign">
				<?php echo "Price: " . $product['Product']['price']; ?>
			</p>
			<p class="rightAlign">
				<?php echo "Buy now: " . $product['Product']['paypal']; ?>
			</p>
		</div>
		
		<div class="sectionseparator clear">&nbsp;</div>
		
		<td class="actions"  style="display:none;">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $product['Product']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $product['Product']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $product['Product']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $product['Product']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	#echo $this->Paginator->counter(array(
	#'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	#));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>


<div class="actions" style="display:none;">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Product', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Photos', true), array('controller' => 'photos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Photo', true), array('controller' => 'photos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sizes', true), array('controller' => 'sizes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Size', true), array('controller' => 'sizes', 'action' => 'add')); ?> </li>
	</ul>
</div>