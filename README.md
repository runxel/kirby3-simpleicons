# [Simple-Icons for Kirby](https://github.com/runxel/kirby3-simpleicons)

 ![Kirby Version](https://img.shields.io/badge/Kirby-3%2B-black?&logo=kirby)
[![Packagist](https://img.shields.io/packagist/v/runxel/kirby-simpleicons?logo=composer)](https://packagist.org/packages/runxel/kirby-simpleicons)
 ![License](https://img.shields.io/github/license/runxel/kirby3-simpleicons)


A plugin for Kirby 3 to get [simple-icons](https://github.com/simple-icons/simple-icons) in Kirbytext.

### Similar plugin

"But I don't need _brands_!"  
→ Yeah, maybe [this](https://github.com/julien-gargot/kirby-plugin-fontawesome-icon) is what you're looking for then :)

---

## Installation

Choose one of the following:

- Using composer: `composer require runxel/kirby-simpleicons`; the plugin will automagically appear in `site/plugins`.
- Download a zip of the [latest release](https://github.com/runxel/kirby3-simpleicons/releases/latest) and put the contents into `site/plugins/simpleicons`.


## Usage

As simple as using `(icon:github)` in a text.  
Works wherever your text will be rendered as [Kirbytext](https://getkirby.com/docs/reference/text/kirbytags).  
The svg will be served inline and inside a span with a fixed class of `.simpleicon`.  
You can however specify your own, additional class like this `(icon:github class:myclass)`


## Configuration

To assure the svgs won't look off, you need some proper styling via CSS, like the following:

```css
.simpleicon { /* span */
    display: inline-block; /* important! */
    /* size can be adjusted to your taste */
    height: 1em;
    width: 1em;
    fill: var(--text-color); /* color the svg */
}

.simpleicon svg { /* not a must, just for your taste */
    vertical-align: middle;
}
```


## Disclaimer

This plugin is provided "as is" with no guarantee. If you find any issues, please [create a new issue](https://github.com/runxel/kirby3-simpleicons/issues/new).