<?php snippet('nav') ?>
  <div class="content contact">
        <h1><?= $page->title()->html() ?></h1>

        <?php if($page->message()->isNotEmpty()): ?> 
          <div class="alert success">
            <p><?= $page->message() ?></p>
          </div>  
          <a class="crumb" href="<?= url('about/contact')?>"><span class="back-arrow">←</span> Back to form </a>

        <?php else: ?>  
          <form action="https://api.web3forms.com/submit" method="POST">

          <!-- Replace with your Access Key -->
          <input type="hidden" name="access_key" value="<?= $page->secret() ?>">

          <!-- Subject Line -->
          <input type="hidden" name="subject" value="<?= $page->subject()?>">
          <input type="hidden" name="from_name" value="Zavi Website Form">

          <!-- Form Inputs -->
          <div class="field">
            <label for="name">Name <abbr title="required">*</abbr></label>
            <input type="text" name="name" required>
          </div>
          <div class="field">
            <label for="email">Email <abbr title="required">*</abbr></label>
            <input type="email" name="email" required>
          </div>
          <div class="field">
            <label for="text">
                Message <abbr title="required">*</abbr>
            </label>
            <textarea name="message" required></textarea>
          </div>

          <!-- Honeypot Spam Protection -->
          <input type="checkbox" name="botcheck" class="hidden" style="display: none;">

          <!-- Custom Confirmation / Success Page -->
          <input type="hidden" name="redirect" value="<?= url('about/thanks')?>/">

          <button type="submit" class="button">Submit Form</button>

          </form>
      <?php endif ?>
  </div>
<?php snippet('footer') ?>