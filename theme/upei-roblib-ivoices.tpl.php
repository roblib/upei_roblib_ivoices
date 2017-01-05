<?php

/**
 * @file
 * This is the template file for the object page for ivoices audio file
 *
 * @TODO: add documentation about file and available variables
 */
?>
<div class="islandora-audio-object islandora ivoices" vocab="http://schema.org/"
     prefix="dcterms: http://purl.org/dc/terms/" typeof="AudioObject">
  <div class="islandora-audio-content-wrapper clearfix">
    <?php if (isset($islandora_content)): ?>
      <div class="islandora-audio-content">
        <?php print $islandora_content; ?>
      </div>
    <?php endif; ?>
  </div>


  <div class="upei-roblib-ivoices pbcore " >
    <?php print $pbcore_content; ?>
  </div>
</div>
