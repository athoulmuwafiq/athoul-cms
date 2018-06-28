
  <script type="text/javascript">document.title="<?= $post1['title'] ?>";</script>
  <div class="col-sm-8 blog-main">
          <div class="blog-post">
            <ol class="breadcrumb">
              <li class="active"><a href="<?= base_url() ?>">Home</a></li>&nbsp;/&nbsp;
              <li><a href=""><?php echo anchor('blog/label/'.$post1['kategories'], $post1['kategories']); ?></a></li>&nbsp;/&nbsp;
              <li><?= $post1['title'] ?></li>
            </ol>
            <h2 class="blog-post-title"><?= $post1['title']; ?></h2>
            <p class="blog-post-meta"><?= $post1['published']; ?> on <a href="#"><?= $post1['kategories'] ?></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo jumlah_komentar($post1['id_post']) ?> Comments</p>
            <p class="article"><?= $post1['article'] ?></p>
            
            
          </div><!-- /.blog-post -->
          <?php foreach($comments as $cm): ?>
          <div class="card mb-3">
            <div class="card-body">
              <h4 class="card-title"><?php echo anchor($cm->website, $cm->name); ?></h4>
              <h6 class="card-subtitle mb-2 text-muted"><?= $cm->timestamp ?></h6>
              <p class="card-text"><?= $cm->isi_komentar ?></p>
            </div>
          </div>
          <?php endforeach; ?>

          <div class="comments-section" id="comments-section">
            <?php echo form_open('blog/comment_action'); ?>
            <?php echo form_hidden('id_artikel', $post1['id_post']); ?>
            <?php echo form_hidden('uri_redirect', $post1['id_post'].'/'.$this->uri->segment(4)); ?>
            <?php echo form_textarea('isi_komen', '',array('class' => 'form-control mb-3','placeholder'=>'Tulis Komentar Disini')); ?>
            <?php
            if ($this->session->userdata('username')) {
            echo form_hidden('name', 'Admin');
            echo form_hidden('website', base_url());
            echo form_input('', 'Admin', array('class' =>'form-control mb-3' ,'placeholder'=>'Nama','disabled'=>'true'));
              
            } else {
            echo form_input('name', '', array('class' =>'form-control mb-3' ,'placeholder'=>'Nama'));
            echo form_input('website', '', array('class' =>'form-control mb-3' ,'placeholder'=>'Website'));
              
            }
            
            ?>
            <?php echo form_submit('', 'Kirim Komentar',array('class'=>'btn btn-primary')); ?>
            <?php echo form_close(); ?>
          </div>

        </div>

