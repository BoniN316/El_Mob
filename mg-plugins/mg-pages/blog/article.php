<?php
mgSEO($data);
?>
<div class="mg-news-details">
  <h1><?php echo $data['title']; ?></h1>
  <div class="mg-news-date">
    <span class="mg-date-icon"></span>
    <?php echo $data['date_active_from']; ?>
  </div>
  <div class="mg-news-info">
    <?php if ($data['image_url']): ?>
      <div class="main-news-img"><img src="<?php echo SITE . $data['img_path'] . '/thumbs/70_' . $data['image_url'] ?>" alt="<?php echo $data['title']; ?>" title="<?php echo $data['title']; ?>"></div>
    <?php endif; ?>
    <div class="mg-news-full-desc">
      <?php echo MG::inlineEditor('mg_blog_items' , 'description', $data['id'], $data['previewText'].$data['detailText']);?>
    </div>
    <a href="<?php echo $data['catPath']; ?>" class="mg-back">Вернуться к списку</a>
  </div>
</div>