<div class="l-page front-page"<?php print $attributes?>>
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
            </section>
        </div>
        <div class="wrapper wrapper--highlighted">
            <section class="l-highlighted">
              <?php print render($page['highlighted']); ?>
            </section>
        </div>
    </header>
    <section class="l-main" id="main-content">
        <div class="l-content" role="main">
            <?php print render($page['sidebar_first']); ?>
            <?php print render($page['sidebar_second']); ?>
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
