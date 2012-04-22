<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div class ="node-content">

  <?php if (!$page): ?>
    <h2>
      <a href="<?php print $node_url; ?>"><?php print $title; ?></a>
    </h2>
  <?php endif; ?>

  <?php if ($display_submitted): ?>
    <div class="details">
        <ul class="details">
            <li class="details">
                <a class="details" href="#">
                    <?php print $variables['date']; ?>
                </a>
            </li>
            <span class="username">
               <li class="details">
                  <?php print $variables['name']; ?>
               </li>
            </span>
            <li class="details">
                <a class="details" href="/comment/reply/<?php print $variables['nid'];?>#comment-form">
                    Comments
                </a>
            </li>
            <li class="details">
                <a class="details" href="#">
                    Tags
                </a>
            </li>
        </ul>
    </div>
  <?php endif; ?>

  <div>
    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      print render($content);
    ?>
  </div>

  <?php
    // Remove the "Add new comment" link on the teaser page or if the comment
    // form is being displayed on the same page.
    if ($teaser || !empty($content['comments']['comment_form'])) {
      unset($content['links']['comment']['#links']['comment-add']);
    }
    // Only display the wrapper div if there are links.
    $links = render($content['links']);
  ?>
  <?php if ($links): ?>
    <div>
      <?php print $links; ?>
    </div>
  <?php endif; ?>

  <?php print render($content['comments']); ?>

</div>