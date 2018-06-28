
  
  <div class="col-sm-8 blog-main">
    <div class="alert alert-info">Showing Post Under <b>"<?= str_replace('%20', ' ', $this->uri->segment(3)) ?>"</b></div>
<?php foreach($post as $post): ?>
          <div class="blog-post">
            <h2 class="blog-post-title"><?= $post->title; ?></h2>
            <p class="blog-post-meta"><?= $post->published; ?> on <a href="#"><?= $post->kategories ?></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo jumlah_komentar($post->id_post) ?> <?php echo anchor('blog/read/'.$post->id_post.'/'.$post->uri.'#comments-section', 'Comments'); ?></p>
            <p class="article"><?= substr(strip_tags($post->article),1,200) ?>....</p>
            <?= anchor('blog/read/'.$post->id_post.'/'.$post->uri, 'Selengkapnya', array('class'=>'btn btn-outline-primary radius')); ?>
            
          </div><!-- /.blog-post -->
<?php endforeach; ?>
<?php
              echo $this->pagination->create_links();
            ?>


        </div>
