<?php
/**
 * Kirby3 plugin to gain easy access to `simple-icons` inside Kirbytext.
 *
 * @version   0.1.2
 * @author    Lucas Becker <runxel>
 * @copyright Lucas Becker <runxel>
 * @link      https://github.com/runxel/kirby3-simpleicons
 * @license   MIT
 */

Kirby::plugin('runxel/kirby-simpleicons', [
  'tags' => [
    'icon' => require_once __DIR__ . '/tags/icon.php'
  ]
]);
