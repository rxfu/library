<div class="l-page front-page"<?php print $attributes?>>
    <div class="l-bar"><?php print render($page['bar']); ?></div>
    <header class="l-header" role="banner">
        <div class="wrapper wrapper--branding">
            <section class="l-branding">
                <h2>
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
                </h2>
            </section>
        </div>
        <div class="wrapper wrapper--header">
            <div class="l-menu">
                <?php print render($page['navigation']); ?>
                <?php print render($page['header']); ?>
            </div>
        </div>
        <div class="wrapper wrapper--highlighted">
            <div class="l-highlighted">
              <?php print render($page['search_tab']); ?>
              <?php print render($page['showcase']); ?>
              <?php print render($page['highlighted']); ?>
            </div>
        </div>
    </header>
    <section class="l-main" id="main-content">
        <div class="l-content" role="main">
            <?php print render($page['stacked_first']); ?>
            <?php print render($page['stacked_second']); ?>
        </div>
    </section>
    <footer class="l-footer" role="contentinfo">
        <section class="l-useful-link">
            <?php print render($page['link']); ?>
        </section>
        <section class="l-copyright">
            <?php print render($page['footer']); ?>
        </section>
    </footer>
</div>
