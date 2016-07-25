<div class="box">
	<div class="box-heading"><a href="<?php echo $linkcat_text; ?>" title="<?php echo $namecat_text; ?>"><?php echo $namecat_text; ?></a></div>
	<div class="strip-line"></div>
	<div class="box-content">
		<?php  $class = 3; 
        if($category_number == 4) $class = 3;
        if($category_number == 5) $class = 2;
        if($category_number == 6) $class = 2;
        if($category_number == 7) $class = 1;
		if($category_number == 8) $class = 1;
		if($category_number == 9) $class = 1;
		if($category_number == 10) $class = 1;
		if($category_number == 11) $class = 1; 
		if($category_number == 12) $class = 1; 
		$i = 0;
		echo '<div class="category-wall"><div class="row">';
			foreach($categories as $category) {
				if($i%$category_number == 0 && $i != 0) echo '</div><div class="row">';
				echo '<div class="col-sm-' . $class . ' col-xs-6">';
					if($category['image']) echo '<a href="' . $category['href'] . '"><img src="' . $category['image'] .'" alt="' . $category['name'] . '"></a>';
					echo '<div class="name"><a href="' . $category['href'] . '">' . $category['name'] . '</a></div>';
					
					if(count($category['children']) > 0) {
						echo '<ul>';
						foreach($category['children'] as $child) {
							echo '<li><a href="' . $child['href'] . '">' . $child['name'] . '</a></li>';
						}
						echo '</ul>';
						echo '<a href="' . $category['href'] . '" class="more-link">' . $more_text . '</a>';
					}
				echo '</div>';
				$i++;
			}
		echo '</div></div>'; ?>
	</div>
</div>