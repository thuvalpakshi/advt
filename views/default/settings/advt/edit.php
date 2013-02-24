<?php
/**
 * Elgg spotlight
 * The spotlight area that displays across the site
 *
 * @package Elgg
 * @subpackage Core
 * @author Thuvalpakshi
 * @copyright Thuvalpakshi
 * @link  http://satheesh.anushaktinagar.net
 */
?>

<p>
<font color="red"><b>Warning :</b> Before adding your java script in the textarea below please disable <b>htmlawed plugin</b>. Enable htmlawed plugin after saving your codes.</font>
</p>
<br />
<p>
       	<?php echo elgg_echo('option:top:advt'); ?>
        <select name="params[display_topadvt]">
                <option value="yes" <?php if ($vars['entity']->display_topadvt == 'yes') echo " selected=\"yes\" "; ?>><?php echo elgg_echo('option:yes'); ?></option>
                <option value="no" <?php if ($vars['entity']->display_topadvt != 'yes') echo " selected=\"yes\" "; ?>><?php echo elgg_echo('option:no'); ?></option>
                </select>
         <br/>
                <?php echo elgg_echo('option:top:advt:postcode') . elgg_view("advt/input/longtext", array("internalname"=>"params[top_content]", "value"=>$vars['entity']->top_content));?>
              
</p>
<br />

<p>
       	<?php echo elgg_echo('option:bottom:advt'); ?>
        <select name="params[display_bottomadvt]">
                <option value="yes" <?php if ($vars['entity']->display_bottomadvt == 'yes') echo " selected=\"yes\" "; ?>><?php echo elgg_echo('option:yes'); ?></option>
                <option value="no" <?php if ($vars['entity']->display_bottomadvt != 'yes') echo " selected=\"yes\" "; ?>><?php echo elgg_echo('option:no'); ?></option>
                </select>
         <br/>
                <?php echo elgg_echo('option:bottom:advt:postcode') . elgg_view("advt/input/longtext", array("internalname"=>"params[bottom_content]", "value"=>$vars['entity']->bottom_content));?>
</p>
<br />

<p>
       	<?php echo elgg_echo('option:side:advt'); ?>
        <select name="params[display_sideadvt]">
                <option value="yes" <?php if ($vars['entity']->display_sideadvt == 'yes') echo " selected=\"yes\" "; ?>><?php echo elgg_echo('option:yes'); ?></option>
                <option value="no" <?php if ($vars['entity']->display_sideadvt != 'yes') echo " selected=\"yes\" "; ?>><?php echo elgg_echo('option:no'); ?></option>
                </select>
         <br/>
                <?php echo elgg_echo('option:side:advt:postcode') . elgg_view("advt/input/longtext", array("internalname"=>"params[side_content]", "value"=>$vars['entity']->side_content));?>
</p>
<br />
