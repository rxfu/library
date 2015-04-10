<div class="l-page"<?php print $attributes; ?>>
  <div class="bar"><?php print render($page['bar']); ?></div>
  <header class="l-header" role="banner">
    <div class="l-branding site-branding">
      <?php if ($logo): ?>
        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="site-branding__logo">
            <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
        </a>
      <?php elseif ($site_name || $site_slogan): ?>
        <?php if ($site_name): ?>
          <a href="<?php print $site_name; ?>" title="<?php print t('Home') ?>" rel="home" class="site-branding__name">
            <span><?php print $site_name; ?></span>
          </a>
        <?php endif; ?>

        <?php if ($site_slogan): ?>
          <h2 class="site-branding__slogan"><?php print $site_slogan; ?></h2>
        <?php endif; ?>
      <?php endif; ?>

      <?php print render($page['branding']); ?>
    </div>

    <?php print render($page['header']); ?>
    <?php print render($page['navigation']); ?>
  </header>

  <div class="l-main">
    <div class="l-content" role="main">
      <?php print render($page['highlighted']); ?>
      <?php print $messages; ?>
      <?php print render($page['help']); ?>
        
      <?php print render($page['search_tab']); ?>
      <?php print render($page['showcase']); ?>
        
      <?php print $feed_icons; ?>
    </div>

    <?php print render($page['postscript_first']); ?>
    <?php print render($page['postscript_second']); ?>
    <?php print render($page['postscript_third']); ?>
    <?php print render($page['postscript_fourth']); ?>
      
    <?php print render($page['express']); ?>
  </div>

  <footer class="l-footer footer" role="contentinfo">
    <?php print render($page['link']); ?>
    <?php print render($page['footer']); ?>
  </footer>
</div>
