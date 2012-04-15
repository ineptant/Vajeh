<?php
/*
 * Regions:
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.s
 */
?>

<div id="page">
    <?php if ($page['sidebar_first']): ?>
        <div id="sidebar-first">
            <?php print render($page['sidebar_first']); ?>
        </div>
    <?php endif; ?>
    
    <div id="content">
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
      <?php print $feed_icons; ?>
    </div>
</div>