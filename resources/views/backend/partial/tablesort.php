<?php if ($orderBy == request()->get('o')): ?>
  <?php if ('asc' == request()->get('d')): ?>
    <th class="c-sorting c-sorting-asc">
      <a href="<?php echo buildSortUrl($orderBy, 'desc'); ?>">
        <?php echo $label; ?>
      </a>
    </th>
  <?php elseif ('desc' == request()->get('d')): ?>
    <th class="c-sorting c-sorting-desc">
      <a href="<?php echo buildSortUrl($orderBy, 'asc'); ?>">
        <?php echo $label; ?>
      </a>
    </th>
  <?php endif; ?>
<?php else: ?>
  <th class="c-sorting">
    <a href="<?php echo buildSortUrl($orderBy, 'asc'); ?>">
      <?php echo $label; ?>
    </a>
  </th>
<?php endif; ?>