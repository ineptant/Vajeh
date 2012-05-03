<?php
/*
 * Regions:
 * - $page['header']: The header of the page.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 */
?>

<section id="main">
    <?php if ($page['header']): ?>
        <header id="header">
            <div id="site_name">
                <h1><?php print $site_name; ?></h1>
            </div>
            <div id="site_slogan">
                <h3><?php print $site_slogan; ?></h3>
            </div>
        </header>
    <?php endif; ?>
    
    <?php if ($page['sidebar_first']): ?>
        <aside id="sidebar-first">
            <?php print render($page['sidebar_first']); ?>
        </aside>
    <?php endif; ?>
    <section id="content">
      <?php print render($title_prefix); ?>
      <?php if ($title): ?>
        <h1>
          <?php print $title; ?>
        </h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php if ($tabs): ?>
        <div>
          <?php print render($tabs); ?>
        </div>
      <?php endif; ?>

      <?php if ($action_links): ?>
        <ul>
          <?php print render($action_links); ?>
        </ul>
      <?php endif; ?>
      <?php print render($page['content']); ?>
    </section>
</section>
