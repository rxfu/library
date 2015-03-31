<div<?php print $attributes; ?>>
    <header class="l-header" role="banner">
        <div class="l-constrained">
            <?php print render($page['bar']); ?>
        </div>
        <div class="l-constrained">
            <div class="l-branding site-branding">
                <?php if ($logo): ?>
                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="site-branding__logo">
                    <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>">
                </a>
                <?php endif; ?>
                <?php if ($site_name): ?>
                <a href="<?php print $site_name; ?>" title="<?php print t('Home') ?>" rel="home" class="site-branding__name">
                    <span><?php print $site_name; ?></span>
                </a>
                <?php endif; ?>
                <?php if ($site_slogan): ?>
                <h2 class="site-branding__slogan"><?php print $site_slogan; ?></h2>
                <?php endif; ?>
            </div>
            <?php print render($page['navigation']); ?>
        </div>
        <div class="l-constrained">
            <?php print render($page['branding']); ?>
        </div>
        <div class="l-constrained">
            <?php print render($page['header']); ?>
        </div>
    </header>
    
    <footer class="l-footer-wrapper" role="contentinfo">
        <?php print render($page['footer']); ?>
    </footer>
</div>
