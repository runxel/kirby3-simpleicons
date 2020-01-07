<?php
/**
 * Kirby3 plugin to gain easyaccess to `simple-icons` in Kirbytext.
 *
 * @version   0.1.1
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
