<?php
/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/garland.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 */
?>
<!-- include jQuery library -->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<!-- include Cycle plugin -->
    <script type="text/javascript" src="js/jquery.arctext.js"></script>
	<script type="text/javascript" src="http://cloud.github.com/downloads/malsup/cycle/jquery.cycle.all.latest.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#slidesh').cycle({
				fx: 'fade' // choose your transition type, ex: fade, scrollUp, shuffle, etc...
			});
		});
	</script>
    
<div id="wrapper" class="clearfix">
<div id="space"></div>
<div id="slide"></div>
<div id="header-top" class="clearfix">
<div id="logo"><!--start logo-->
<div id="menufoto">
<a id="menuemp" href="http://www.anwarcg.com/?q=empresa"></a>
<a id="menuser" href="http://www.anwarcg.com/?q=servicios"></a>
<a id="menupro" href="http://www.anwarcg.com/?q=proyectos"></a>
<a id="menumet" href="http://www.anwarcg.com/?q=metodologia"></a>
<a id="menubol" href="http://www.anwarcg.com/?q=bolsa"></a>
<a id="menuint" href="http://189.198.228.143:3333"></a>
</div>
<?php if ($logo): ?>
<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
<img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
</a>
<?php endif; ?>


</div><!-- end main-menu -->

</div> <!-- /#header -->

        
<div id="content-body">
<div class="breadcrumb"></div>
  <section id="main" role="main" class="clear">
    <?php print $messages; ?>
    <a id="main-content"></a>
    <?php if ($page['highlighted']): ?><div id="highlighted"><?php print render($page['highlighted']); ?></div><?php endif; ?>
    <?php print render($title_prefix); ?>
    <?php if ($title): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
    <?php print render($title_suffix); ?>
    <?php if (!empty($tabs['#primary'])): ?><div class="tabs-wrapper clearfix"><?php print render($tabs); ?></div><?php endif; ?>
    <?php print render($page['help']); ?>
    <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
    <?php print render($page['content']); ?>
  </section> <!-- /#main -->
  
  <?php if ($page['sidebar_first']): ?>
    <aside id="sidebar-first" role="complementary" class="sidebar clearfix">
      <?php print render($page['sidebar_first']); ?>
    </aside>  <!-- /#sidebar-first -->
  <?php endif; ?>

  <?php if ($page['sidebar_second']): ?>
    <aside id="sidebar-second" role="complementary" class="sidebar clearfix">
      <?php print render($page['sidebar_second']); ?>
    	
    </aside>  <!-- /#sidebar-second -->

  <?php endif; ?>
</div> <!-- end content-body -->
<div class="clear"></div>
<div id="footer" class="clearfix">
<div id="botones_footer">
 <a id="trabajo" href="http://www.anwarcg.com/?q=bolsa"></a>
 <a id="visita" href="http://www.anwarcg.com/?q=oficinas"></a>
 <a id="correo" href="http://www.anwarcg.com/?q=contact"></a>
</div>
 <?php if ($page['footer_first']): ?><!-- / start first footer block -->
    <div class="first-footer">
      <?php print render($page['footer_first']); ?>
    </div> <!-- / end first footer -->
  <?php endif; ?>
 <?php if ($page['footer_second']): ?><!-- / start second footer block -->
    <div class="second-footer">
      <?php print render($page['footer_second']); ?>
    </div> <!-- / end second footer -->
  <?php endif; ?>
 <?php if ($page['footer_third']): ?><!-- / start third footer block -->
    <div class="first-footer">
      <?php print render($page['footer_third']); ?>
    </div> <!-- / end third footer -->
  <?php endif; ?>
  
<div class="clear"></div>

<?php print render($page['footer']) ?>

<div class="clear"></div>

<?php if (theme_get_setting('footer_copyright')): ?>
<div id="copyright">Copyright &copy; <?php echo date("Y"); ?>, <?php print $site_name; ?></div>
<?php endif; ?>
</div> <!-- /#footer -->

</div> <!-- /#wrapper -->
<div id="slidesh">
	<img src="/images/acg_fbanner1.png" width='93%' height='220'>
    <img src="/images/acg_fbanner2.png" width='93%' height='220'>
    <img src="/images/acg_fbanner3.png" width='93%' height='220'>
    <img src="/images/acg_fbanner4.png" width='93%' height='220'>
    <img src="/images/acg_fbanner5.png" width='93%' height='220'>
    <img src="/images/acg_fbanner6.png" width='93%' height='220'>
</div>