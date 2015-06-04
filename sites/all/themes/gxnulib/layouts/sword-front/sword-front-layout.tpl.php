<div class="l-page front-page"<?php print $attributes?>>
    <section class="l-bar">
      <?php print render($page['bar']); ?>
    </section>
    <header class="l-header" role="banner">
        <div class="wrapper wrapper--branding">
            <section class="l-branding">
                <div class="site-branding">
                    <?php if ($logo): ?>
                    <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="Home" class="site-logo">
                        <img src="<?php print $logo; ?>" alt="<?php print t('Home') ?>">
                    </a>
                    <?php elseif ($site_name || $site_slogan): ?>
                        <?php if ($site_name): ?>
                        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="Home" class="site-name">
                            <span><?php print $site_name; ?></span>
                        </a>
                        <?php endif; ?>
                        <?php if ($site_slogan): ?>
                        <div class="site-slogan"><?php print $site_slogan; ?></div>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
                <?php print render($page['navigation']); ?> 
            </section>
        </div>
        <div class="wrapper wrapper--heading">
            <section class="l-heading">
                <?php print render($page['header']); ?>
                <?php print render($page['search_tab']); ?>
                <?php print render($page['showcase']); ?>
            </section>
        </div>
        <div class="wrapper wrapper--highlighted">
            <section class="l-highlighted">
              <?php print render($page['highlighted']); ?>
              <?php print render($page['help']); ?>
            </section>
        </div>
    </header>
    <main class="l-main" id="main-content">
        <section class="l-content" role="main">
            <?php print render($page['stacked_left']); ?>
            <?php print render($page['stacked_middle']); ?>
            <?php print render($page['stacked_right']); ?>
        </section>
    </main>
    <footer class="l-footer" role="contentinfo">
        <section class="l-copyright">
            <?php print render($page['footer']); ?>
        </section>
    </footer>
</div>
