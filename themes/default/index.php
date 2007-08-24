<?php head(); ?>
	
	<div id="primary">

		<div id="site-info">
			<h2>Site Info</h2>
			<p><em>Web Design History</em> contains <?php total_items(); ?> items, in <?php total_collections(); ?> collections, with <?php total_types(); ?> types tagged with <?php total_tags(); ?> keywords. There are <?php total_users(); ?> users.</p>
		</div>
		<?php if ( $user = current_user() ): ?>
		    <div id="welcome">
                <p>Howdy, <?php echo $user->first_name; ?>! You are logged in to Omeka.  
                <?php if ( has_permission('Items', 'showNotPublic') ): ?>
                    Because you are logged in, you can see items that are not public.
                <?php endif; ?></p>
            </div>
        <?php endif; ?>
	</div>
	
	<div id="secondary">
		
		<div id="recent-items">
			<h2>Recently Added</h2>
			<?php $recent = recent_items(5); ?>
			<ul>
				<?php foreach( $recent as $item ): ?>
				<?php echo $item->title;?><br />
				<?php endforeach; ?>
			</ul>
		</div>
		
		<div id="tagcloud">
			<h2>Tag Cloud</h2>
			<?php tag_cloud(recent_tags(), uri('items')); ?>
		</div>
	</div>
<?php foot(); ?>