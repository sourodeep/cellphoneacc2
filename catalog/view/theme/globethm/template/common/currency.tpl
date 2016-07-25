<?php if (count($currencies) > 1) { ?>
<form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data" id="currency_form">
	<!-- Currency -->
	<div class="dropdown">
    <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">
    <?php foreach ($currencies as $currency) { ?>
    <?php if ($currency['symbol_left'] && $currency['code'] == $code) { ?>
    <?php echo $currency['symbol_left']; ?> <?php echo $currency['title']; ?>
    <?php } elseif ($currency['symbol_right'] && $currency['code'] == $code) { ?>
    <?php echo $currency['symbol_right']; ?> <?php echo $currency['title']; ?>
    <?php } ?>
    <?php } ?>
    <b class="caret"></b></a>
        
		<ul class="dropdown-menu">
		  <?php foreach ($currencies as $currency) { ?>
          <?php if ($currency['symbol_left']) { ?>
		  <li><a href="javascript:;" onclick="$('input[name=\'code\']').attr('value', '<?php echo $currency['code']; ?>'); $('#currency_form').submit();"><?php echo $currency['symbol_left']; ?> <?php echo $currency['title']; ?></a></li>
          <?php } else { ?>
          <li><a href="javascript:;" onclick="$('input[name=\'code\']').attr('value', '<?php echo $currency['code']; ?>'); $('#currency_form').submit();"><?php echo $currency['symbol_right']; ?> <?php echo $currency['title']; ?></a></li>
          <?php } ?>
		  <?php } ?>
		</ul>
	</div>
	
    <input type="hidden" name="code" value="" />
    <input type="hidden" name="redirect" value="<?php echo $redirect; ?>" />
</form>
<?php } ?>