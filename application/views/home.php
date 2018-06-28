
  
  <div class="col-sm-8 blog-main">
<?php foreach($post as $post): ?>
          <div class="blog-post">
            <h2 class="blog-post-title"><?= $post->title; ?></h2>
            <p class="blog-post-meta"><?= $post->published; ?> on <a href="blog/label/<?= $post->kategories ?>"><?= $post->kategories ?></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo jumlah_komentar($post->id_post) ?> <?php echo anchor('blog/read/'.$post->id_post.'/'.$post->uri.'#comments-section', 'Comments'); ?></p>
            <p class="article"><?= character_limiter(strip_tags($post->article),200) ?>....</p>
            <?= anchor('blog/read/'.$post->id_post.'/'.$post->uri, 'Selengkapnya', array('class'=>'btn btn-outline-primary radius')); ?>
            
          </div><!-- /.blog-post -->
<?php endforeach; ?>

            <?php
              echo $this->pagination->create_links();
            ?>


        </div>
