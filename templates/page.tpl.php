<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page.
 */

?>
<div id="page-wrapper">
  <div id="page">
    <div id="header">
      <div class="section clearfix">

        <?php if ($site_name || $site_slogan): ?>
          <div id="name-and-slogan">
            <?php if ($site_name): ?>
              <?php print render($page['site_name']); ?>
            <?php endif; ?>

            <?php if ($site_slogan): ?>
              <div id="site-slogan"><?php print $site_slogan; ?></div>
            <?php endif; ?>
          </div>
        <?php endif; ?>

        <?php print render($page['header']); ?>
      </div>
    </div>

    <?php if ($breadcrumb): ?>
      <div id="breadcrumb">
        <?php print $breadcrumb; ?>
      </div>
    <?php endif; ?>

    <?php print $messages; ?>

    <div id="main-wrapper">
      <div id="main" class="clearfix">

        <div id="content" class="column">
          <div class="section">
            <?php if ($page['highlighted']): ?>
              <div id="highlighted">
                <?php print render($page['highlighted']); ?>
              </div>
            <?php endif; ?>

            <?php print render($title_prefix); ?>
            <?php if ($title): ?>
              <h1 class="title" id="page-title"><?php print $title; ?></h1>
            <?php endif; ?>
            <?php print render($title_suffix); ?>

            <?php if ($tabs): ?>
              <div class="tabs">
                <?php print render($tabs); ?>
              </div>
            <?php endif; ?>

            <?php print render($page['help']); ?>

            <?php if ($action_links): ?>
              <ul class="action-links">
                <?php print render($action_links); ?>
              </ul>
            <?php endif; ?>

            <?php print render($page['content']); ?>
            <?php print $feed_icons; ?>
          </div>
        </div>

      </div>
    </div>

    <div id="footer">
      <div class="section">
        <?php print render($page['footer']); ?>
      </div>
    </div>
  </div>
</div>
