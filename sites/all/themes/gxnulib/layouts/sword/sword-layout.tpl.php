<div class="l-page"<?php print $attributes?>>
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
            </section>
        </div>
        <div class="wrapper wrapper--highlighted">
            <section class="l-highlighted">
              <?php print render($page['highlighted']); ?>
            </section>
        </div>
    </header>
    <section class="l-main" id="main-content">
        <div class="wrapper wrapper--main">
            <?php print $messages; ?>
            <div class="l-content" role="main">
                <?php print $breadcrumb; ?>
                <?php print render($title_prefix); ?>
                <?php if ($title): ?>
                  <h3 class="article-title"><?php print $title; ?></h3>
                <?php endif; ?>
                <?php print render($title_suffix); ?>
                <?php if ($action_links): ?>
                  <ul class="action-links"><?php print render($action_links); ?></ul>
                <?php endif; ?>
                <?php print render($page['content']); ?>
                <?php print $feed_icons; ?>
            </div>

            <?php print render($page['sidebar_first']); ?>
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
