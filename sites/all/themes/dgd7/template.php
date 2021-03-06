<?php
/**
 * Returns HTML for a "more" link, like those used in blocks.
 *
 * @param $variables
 * An associative array containing:
 * - url: The url of the main page.
 * - title: A descriptive verb for the link, like 'Read more'.
 */
function dgd7_more_link($variables) {
 return '<div class="more">' . l(t('Show me MORE!'), $variables['url'], array('attributes' => array('title' => $variables['title']))) . '</div>';
}