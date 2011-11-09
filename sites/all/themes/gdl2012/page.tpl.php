<?php
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language->language; ?>" xml:lang="<?php print $language->language; ?>">

<head>
  <title><?php print $head_title; ?></title>
  <?php print $head; ?>
  <?php print $styles; ?>
  <?php print $setting_styles; ?>
  <!--[if IE 8]>
  <?php print $ie8_styles; ?>
  <![endif]-->
  <!--[if IE 7]>
  <?php print $ie7_styles; ?>
  <![endif]-->
  <!--[if lte IE 6]>
  <?php print $ie6_styles; ?>
  <![endif]-->
  <?php print $local_styles; ?>
  <?php print $scripts; ?>
</head>

<body id="<?php print $body_id; ?>" class="<?php print $body_classes; ?>">
  <div id="page" class="page grid12-12">
    <div id="skip">
      <a href="#main-content-area"><?php print t('Skip to Main Content Area'); ?></a>
    </div>

    <div id="header-group" class="header-group row clearfix <?php print $grid_width; ?>">
      <div class="grid12-7 header-menu">
        <?php print theme('grid_block', theme('links', $secondary_links), 'secondary-menu'); ?>
      </div> 
      <div class="grid12-3 social">
        <script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
        <a href="https://twitter.com/share" class="twitter-share-button" data-count="horizontal" data-via="Drupal latino" data-lang="es">Tweet</a><script type="text/javascript" src="//platform.twitter.com/widgets.js"></script>
        <a><g:plusone></g:plusone></a>
        <a class="fb-send" data-href="gdl2012.drupal-latino.org" style="width:60px; height:21px; position: relative; left: -20px; top: -4px;"></a>
        <iframe src="//www.facebook.com/plugins/like.php?href&amp;send=false&amp;layout=button_count&amp;width=450&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font&amp;height=21" scrolling="no" frameborder="0" style="border:none;  width:100px; position: abosolute; left: autopx; height:20px;" allowTransparency="true"></iframe>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) {return;}
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1";
          fjs.parentNode.insertBefore(js, fjs);
          }(document, 'script', 'facebook-jssdk'));
        </script>
      </div>  

      <?php //print theme('grid_block', $search_box, 'search-box'); ?>

      <?php if ($logo || $site_name || $site_slogan): ?>
      <div class="header-site-info block grid12-12">
        <div id="header-site-info-inner" class="header-site-info-inner">
          <?php if ($logo): ?>
          <div id="logo">
            <a href="<?php print check_url($front_page); ?>" title="<?php print t('Home'); ?>"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></a>
          </div>
          <?php endif; ?>
          <?php if ($site_name || $site_slogan): ?>
          <div id="site-name-wrapper" class="clearfix">
            <?php if ($site_name): ?>
            <span id="site-name"><a href="<?php print check_url($front_page); ?>" title="<?php print t('Home'); ?>"><?php print $site_name; ?></a></span>
            <?php endif; ?>
            <?php if ($site_slogan): ?>
            <span id="slogan"><?php print $site_slogan; ?></span>
            <?php endif; ?>
          </div><!-- /site-name-wrapper -->
          <?php endif; ?>
        </div><!-- /header-site-info-inner -->
      </div><!-- /header-site-info -->
      <?php endif; ?>

      <?php print $header; ?>
      <?php //print theme('grid_block', $primary_links_tree, 'primary-menu'); ?>
    </div><!-- /header-group -->

    <div id="main" class="main row clearfix <?php print $grid_width; ?>">
      <div id="main-group" class="main-group row nested <?php print $main_group_width; ?>">
        <div id="content-group" class="content-group row nested <?php print $content_group_width; ?>">
          <?php print theme('grid_block', $breadcrumb, 'breadcrumbs'); ?>
          <?php print theme('grid_block', $help, 'content-help'); ?>
          <?php print theme('grid_block', $messages, 'content-messages'); ?>
          <a name="main-content-area" id="main-content-area"></a>
          <?php print theme('grid_block', $tabs, 'content-tabs'); ?>

          <div id="content-main">
            <div id="content-inner-inner" class="content-inner-inner inner">
              <?php if ($title): ?>
              <h1 class="title"><?php print $title; ?></h1>
              <?php endif; ?>
    
              <?php if ($content): ?>
              <div id="content-content" class="content-content">
                <?php print $content; ?>
                <?php // print $feed_icons; ?>
              </div><!-- /content-content -->
              <?php endif; ?>
            </div><!-- /content-inner-inner -->
          </div><!-- /content-inner -->
        </div><!-- /content-group -->

        <?php if ($sidebar_last): ?>
        <div id="sidebar-last" class="sidebar-last row nested <?php print $sidebar_last_width; ?>">
          <?php print $sidebar_last; ?>
        </div><!-- /sidebar-last -->
        <?php endif; ?>
      </div><!-- /main-group -->
    </div><!-- /main -->

    <?php if ($footer): ?>
    <div id="footer" class="footer row <?php print $grid_width; ?>">
      <?php print $footer; ?>
    </div><!-- /footer -->
    <?php endif; ?>

    <?php if ($footer_message): ?>
    <div id="footer-message" class="footer-message row <?php print $grid_width; ?>">
      <p>
        DrupalSummit Latino is copyright 2011.
        Powered by Drupal.

        Drupal is registered trademark of Dries Buytaert 
      </p>
      <?php print theme('grid_block', $footer_message, 'footer-message-text'); ?>
    </div><!-- /footer-message -->
    <?php endif; ?>
  </div><!-- /page -->
  <?php print $closure; ?>
</body>
</html>
