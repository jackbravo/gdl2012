<?php
// $Id: panels-threecol-25-50-25.tpl.php,v 1.1.2.1 2008/12/16 21:27:58 merlinofchaos Exp $
/**
 * @file
 * Template for the 1 column panel layout.
 *
 * This template provides a three column 25%-50%-25% panel display layout.
 *
 * Variables:
 * - $id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 *   panel of the layout. This layout supports the following sections:
 *   - $content['left']: Content in the left column.
 *   - $content['middle']: Content in the middle column.
 *   - $content['right']: Content in the right column.
 */
?>
<div class="panel-display clear-block" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  <div class="grid16-4 grid16 column-left">
    <div class="inside"><?php print $content['left']; ?></div>
  </div>

  <div id="main-title" class="grid16 grid16-12">
    <div class="inside"><?php print $content['title']; ?></div>
  </div>
  <div id="main-content">
    <div class="grid16 grid16-7 column-main">
      <div class="inside"><?php print $content['main']; ?></div>
    </div>

    <div class="grid16 grid16-5 column-right">
      <div class="inside"><?php print $content['right']; ?></div>
    </div>
  </div> 
</div>
