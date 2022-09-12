<?php
/**
 * Template part for displaying Spacer section (ACF Flexible content)
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Finalytics
 */

?>

<div class="spacer <?php if (get_field('spacer_height') == '30'): ?>height-tiny<?php
elseif (get_field('spacer_height') == '60'): ?>height-small<?php
elseif (get_field('spacer_height') == '90'): ?>height-medium<?php
elseif (get_field('spacer_height') == '120'): ?>height-big<?php
elseif (get_field('spacer_height') == '150'): ?>height-large<?php endif; ?>" style="background-color: <?php
if (get_field("spacer_background_color")) echo get_field("spacer_background_color"); ?>">
</div>
