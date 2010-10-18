<?php defined('_JEXEC') or die();
// Include the Alchemy Framework core class
require_once JPATH_ADMINISTRATOR.'/components/com_alchemy/framework/initialize.php';
// Start Alchemy based on the parameters passed.
Alchemy::start($this);
?>
<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" class="no-js">
<head>
	<?php 
	// Initialize the js/metas/css/less that will be included in the document head
	echo Alchemy::call('html')->render('head');
	?>
</head>
<body class="color_<?php echo $this->params->get('colorVariation'); ?> bg_<?php echo $this->params->get('backgroundVariation'); ?>">
	<div id="mt-template">
		<header id="mt-template-header">
			<div id="mt-template-header-wrapper">
				<a href="<?php echo $this->baseurl; ?>" id="mt-logo">Logo Title</a>
				<div id="mt-template-header-content">
					<jdoc:include type="modules" name="top" style="nav" />					
				</div>
			</div>
		</header>
		<nav id="mt-template-nav">
			<jdoc:include type="modules" name="user3" style="nav" />
		</nav>

		<div id="mt-template-pathway">
			<div id="mt-template-breadcrumb">
				<jdoc:include type="modules" name="breadcrumb" />
			</div>
			<div id="mt-template-search">
				<jdoc:include type="modules" name="user4" style="section" />				
			</div>
		</div>

		<div id="mt-template-wrapper">
			<div id="mt-template-sidebar-left">
				<div class="in">
					<jdoc:include type="modules" name="left" style="section" />
					&nbsp;
				</div>
			</div>

			<div id="mt-template-main">

				<?php if ($this->countModules('user1') OR $this->countModules('user2')): ?>
				<div id="mt-template-box1">
					<jdoc:include type="modules" name="user1" style="section" />
				</div>
				<div id="mt-template-box2">
					<jdoc:include type="modules" name="user2" style="section" />
				</div>
				<div class="maindivider"></div>
				<?php endif; ?>
				<div id="mt-template-content" class="<?php echo ! $this->countModules('right') ? 'wide' : ''; ?>">
					<div class="in">
						<jdoc:include type="message" />
						<jdoc:include type="component" />
					</div>

					<div id="mt-template-content-footer">
						<jdoc:include type="modules" name="footer" style="section" />
					</div>
				</div>

				<div id="mt-template-sidebar-right">
					<div class="in">	
						<jdoc:include type="modules" name="right" style="section" />
					</div>
				</div>
			
			</div>
			<div class="clr"></div>
		</div>
		
		<footer id="mt-template-footer">
			<p id="syndicate">
				<jdoc:include type="modules" name="syndicate" />
			</p>
			<p id="power_by">
			 	<?php echo JText::_('Powered by') ?> <a href="http://www.joomla.org">Joomla!</a>.
				<?php echo JText::_('Valid') ?> <a href="http://validator.w3.org/check/referer">XHTML</a> <?php echo JText::_('and') ?> <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a>.
			</p>
		</footer>
	</div>
	<?php 
	// Render the scripts that should render in the bottom of the document for optimized loading
	echo Alchemy::call('html')->render('scripts', 'bottom');
	?>
</body>
</html>
