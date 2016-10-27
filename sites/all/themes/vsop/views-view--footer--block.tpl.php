<footer class="foot2">

    <div class="<?php //echo $classes; ?>container">
      <?php echo render($title_prefix); ?>
      <?php if ($title): ?>
        <?php echo $title; ?>
      <?php endif; ?>
      <?php echo render($title_suffix); ?>
      <?php if ($header): ?>
        <div class="view-header">
          <?php echo $header; ?>
        </div>
      <?php endif; ?>

      <?php if ($exposed): ?>
        <div class="view-filters">
          <?php echo $exposed; ?>
        </div>
      <?php endif; ?>

      <?php if ($attachment_before): ?>
        <div class="attachment attachment-before">
          <?php echo $attachment_before; ?>
        </div>
      <?php endif; ?>

      <?php if ($rows): ?>
          <?php echo $rows; ?>
      <?php elseif ($empty): ?>
        <div class="view-empty">
          <?php echo $empty; ?>
        </div>
      <?php endif; ?>

      <?php if ($pager): ?>
        <?php echo $pager; ?>
      <?php endif; ?>

      <?php if ($attachment_after): ?>
        <div class="attachment attachment-after">
          <?php echo $attachment_after; ?>
        </div>
      <?php endif; ?>

      <?php if ($more): ?>
        <?php echo $more; ?>
      <?php endif; ?>

      <?php if ($footer): ?>
        <div class="view-footer">
          <?php echo $footer; ?>
        </div>
      <?php endif; ?>

      <?php if ($feed_icon): ?>
        <div class="feed-icon">
          <?php echo $feed_icon; ?>
        </div>
      <?php endif; ?>
    </div>


</footer>
