
<?php if(!empty($data)): ?>
  <ul class="sub-categories">
    <?php foreach($data as $category): ?>
      <li>
        <a class="twocolor" href="<?php echo SITE.'/'.$category['parent_url'].$category['url']; ?>" class="sub-cat-name"><?php echo $category['title']; ?></a>
      </li>
    <?php endforeach; ?>
  </ul>
<?php endif; ?>