  <footer>
      <section id="about" class="container">
          <div class="pure-g">
              <div class="pure-g cli">
                  <p><code>~$ whoami</code>&nbsp;<?= $site->description() ?></p>
              </div>
          </div>
      </section>
      <div class="container">
          <hr>
          <div class="pure-g">
              <div class="pure-u-1">
                  <ul class="linklist">
                      <li><span>Housekeeping</span><a href="<?= url('impressum') ?>">Impressum</a> / <a href="<?= url('datenschutz') ?>">Datenschutzerklärung</a> / <a href="<?= url('kolophon') ?>">Kolophon</a></li>
                      <?php if($socials = $site->socials()->toStructure()) : ?>
                      <li><span>Socials</span><?php foreach($socials as $social) : ?><a rel="me" href="<?= $social->link()->toHtml() ?>"><?= $social->platform() ?></a><?php endforeach ?></li>
                      <?php endif ?>
                      <li><span>Feed</span><a href="<?= site()->url() ?>/feed">RSS</a> / <a href="<?= site()->url() ?>/notes.json">JSON</a></li>
                  </ul>
              </div>
          </div>
      </div>
  </footer>
  </body>

  </html>