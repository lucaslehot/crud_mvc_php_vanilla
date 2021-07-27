<div class="container">
  <?php foreach ($posts as $post): ?>
    <div class="post">
      <h2><?= $post->title ?></h2>
      <p><?= $post->body ?></p>
      <h4>Comments</h4>
      <?php foreach ($post->comments as $comment): ?>
        <div class="comment">
          <h5><?= $comment->author ?></h5>
          <p><?= $comment->content ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  <?php endforeach; ?>
</div>