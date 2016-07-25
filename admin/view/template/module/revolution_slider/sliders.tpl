<?php echo $header; ?><?php echo $column_left; ?>
<div id="content"><div class="container-fluid">
	<div class="page-header">
	    <h1>Revolution Slideshow Pro</h1>
	    <ul class="breadcrumb">
		     <?php foreach ($breadcrumbs as $breadcrumb) { ?>
		      <li><a href="<?php echo $breadcrumb['href']; ?>"><?php echo $breadcrumb['text']; ?></a></li>
		      <?php } ?>
	    </ul>
        <!-- Modal -->
        <div style="border: 1px solid #E5E5E5; padding:10px; width:270px; float:right; position:relative; margin-right:7px;">
       <span style="font-size:16px;"><i style="color:#E62117;" class="fa fa-youtube-play"></i> How it works</span>  &nbsp;&nbsp;&nbsp;
       <!-- Button trigger modal -->
       <button type="button" class="btn btn-default btn-xs" data-toggle="modal" data-target="#myModal">
       Play Video Tutorial
       </button>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
           <div class="modal-content">
             <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                 <h4 class="modal-title" id="myModalLabel">How it works</h4>
                   </div>
                     <div class="modal-body">
                <iframe width="100%" height="321" src="https://www.youtube.com/embed/_zxLM03QCtc?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
              </div>

          </div>
     </div>
    </div>
    <!-- Modal -->
	  </div>
    
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:600,500,400' rel='stylesheet' type='text/css'>
	
	<?php if ($error_warning) { ?>
		<div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> <?php echo $error_warning; ?>
		  <button type="button" class="close" data-dismiss="alert">&times;</button>
		</div>
	<?php } elseif ($success) {  ?>
		<div class="alert alert-success"><i class="fa fa-exclamation-circle"></i> <?php echo $success; ?>
			<button type="button" class="close" data-dismiss="alert">&times;</button>
		</div>
	<?php } ?>
	
	<!-- Revolution slider -->
	<div class="set-size" id="revolution-slider">
		
			<!-- Content -->
			<div class="content">
				<div>
					<div class="bg-tabs clearfix">
						<div id="tabs">
							<a href="<?php echo $placement; ?>" id="placement"><span>Module placement</span></a>
							<a href="<?php echo $existing; ?>" id="existing" class="active"><span>Existing modules</span></a>
						</div>

						<div class="tab-content2">
							<table id="module-placement">
								<thead>
									<tr>
										<td class="first" style="width:700px">Name</td>
										<td>Edit</td>
										<td>Delete</td>
									</tr>
								</thead>
								<tbody>
									<?php foreach($sliders as $slider) { ?>
									<tr>
										<td class="first"><?php echo $slider['name']; ?></td>
										<td><a href="<?php echo $link_slider.'&slider_id='.$slider['id']; ?>">Edit</a></td>
										<td><a href="<?php echo $link_slider.'&slider_id='.$slider['id'].'&delete=true'; ?>" onclick="return confirm('Are you sure you want to delete?')">Remove</a></td>
									</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
					</div>
					
					<div>
						<!-- Buttons -->
						<div class="buttons"><a href="<?php echo $link_slider; ?>" class="button-add-slider"></a></div>
					</div>
				</div>
			</div>		
	</div>
</div>

<?php echo $footer; ?>