<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
<head>
	<?php print $head; ?>
	<title><?php print $head_title; ?></title>
	<?php print $styles; ?>
	<?php print $scripts; ?>
</head>

<body class="<?php print $body_classes; ?>">
	<div id="page">
		<div id="header">
			<?php if (!empty($logo)): ?>
          		<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
            		<img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
          		</a>
			<?php endif; ?>

			<?php if (!empty($search_box)): ?>
        		<div id="search-box"><?php print $search_box; ?></div>
      		<?php endif; ?>
			<?php echo $header; ?>
	      	<?php echo theme( 'links', $primary_links, array( 'class' => 'links primary-links' ) ); ?>
		</div>

		<?php if ($left): ?>
		<div id="left-sidebar">
			<?php echo $left; ?>
		</div>
		<?php endif; ?>

		<div id="main-content">
			<?php echo $title, $tabs, $tabs2, $messages, $content; ?>
		</div>

		<?php if ($right): ?>
		<div id="right-sidebar">
			<?php echo $right; ?>
		</div>
		<?php endif; ?>

		<div id="footer">
			<?php echo $footer; ?>
		</div>

	  	<?php print $closure; ?>
	</div>

</body>
</html>