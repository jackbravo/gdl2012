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
<div class="panel-display clear-block grid12-12" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  <div class="grid12-8 column-left">
    <div class="inside"><?php print $content['main']; ?></div>

    <div class="inside-columns">
      
      <div class="sessions grid12-4">
        <?php print $content['sessions'];?>
      </div>

      <div class="attenders grid12-4">
        <?php print $content['attenders'];?>
      </div>

    </div>
  </div>

  <div class="grid12-4 column-right">
    <div class="inside"><?php print $content['right']; ?></div>
  </div>
  
  <div class="panel-panel sponsors grid12-12">
    <div class="inside"><?php print $content['sponsors'];?></div>
  </div>
  
  <div class="panel-panel infobar grid12-12">
    <div class="inside"><?php print $content['infobar'];?></div>
  </div>
</div>
