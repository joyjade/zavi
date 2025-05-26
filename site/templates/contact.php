<?php snippet('nav') ?>
  <div class="content contact">

        <?php if($page->title()->lower() == "thanks"): 
          $contact = $page->siblings()->listed()->first();
          ?> 
          <div class="alert success">
            <h2><?= $contact->message() ?></h2>
        </br>
          </div>  
          <a class="crumb" href="<?= url('about/contact')?>"><span class="back-arrow">←</span> Back to form </a>

        <?php else: ?>  
          <h1><?= $page->title()->html() ?></h1>

          <form action="https://api.web3forms.com/submit" method="POST" id="contact">

          <!-- Replace with your Access Key -->
          <input type="hidden" name="access_key" value="<?= $page->secret() ?>">

          <!-- Subject Line -->
          <input type="hidden" name="subject" id="subject" value="<?= $page->subject()?>">
          <input type="hidden" name="from_name" value="Zavi Website Form">

          <!-- Form Inputs -->
          <div class="field">
            <label for="name">Name <abbr title="required">*</abbr></label>
            <input type="text" name="name"  id="name" required>
          </div>
          <div class="field">
            <label for="email">Email <abbr title="required">*</abbr></label>
            <input type="email" name="email" id="email" required>
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

          <button id="send" type="submit" class="button">Submit Form</button>

          </form>
      <?php endif ?>
  </div>
<?php snippet('footer') ?>