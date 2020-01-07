<?php
# site/plugins/kirby-simpleicons/tags/icon.php

return array(
  // passed options
  'attr' => [
    'class'
  ],
  'html' => function($tag) {

    // get options
    $brand = $tag->icon;
    $cls = $tag->class;

    $icon_string = 'vendor/simple-icons/simple-icons/icons/' . $brand . '.svg';
    $icon_svg = file_get_contents($icon_string);

    /* https://getkirby.com/docs/reference/tools/html/tag
       if HTML code is passed into Html::tag is must be wrappend in an array:
    */
    $html = Html::tag('span', [$icon_svg], [
      'class' => $cls
    ]);

    return $html;
    // <span class="cls"><svg … /></span>
  }
);
