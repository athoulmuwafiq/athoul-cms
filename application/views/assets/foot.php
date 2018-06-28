<aside class="col-sm-3 ml-sm-auto blog-sidebar">
          <div class="sidebar-module sidebar-module-inset">
            <h4>About</h4>
            <p>www.athoul.site adalah sebuah website pemrograman yang memberikan tutorial seputar php dan source code gratis.</p>
          </div>
          <div class="sidebar-module">
            <h4>Archives</h4>
            <ol class="list-unstyled">
              <?php foreach($date as $date): ?>
              <li><?= anchor(base_url('blog/archive/'.$date->published), $date->published, 'attributes'); ?></li>
            <?php endforeach; ?>
            </ol>
          </div>
        </aside>

</div></div>

<footer class="footer">
      <div class="container">
        <span class="text-muted">Copyright 2018 Athoul Muwafiq.</span>
      </div>
    </footer>
<script>window.jQuery || document.write('<script src="<?= base_url('assets/js/jquery-slim.min.js') ?>"><\/script>')</script>
<script type="text/javascript" src="<?= base_url('assets/js/popper.min.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
</body>
</html>