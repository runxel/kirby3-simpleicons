# [Simple-Icons for Kirby](https://github.com/runxel/kirby3-simpleicons)

 ![Kirby Version](https://img.shields.io/badge/Kirby-3%2B-black?&logo=kirby)
[![Packagist](https://img.shields.io/packagist/v/runxel/kirby-simpleicons?logo=composer)](https://packagist.org/packages/runxel/kirby-simpleicons)
 ![License](https://img.shields.io/github/license/runxel/kirby3-simpleicons)


A plugin for Kirby 3 to have an easy access to [simple-icons](https://github.com/simple-icons/simple-icons) in Kirbytext.  
This plugin allows you to use almost any major brand icon you'd want, without having to source, optimize, and upload these logos yourself.

### Similar plugin

"But I don't need _brands_!"  
→ Yeah, maybe [this](https://github.com/julien-gargot/kirby-plugin-fontawesome-icon) is what you're looking for then :)

---

## Installation

Choose one of the following:

- Using composer: `composer require runxel/kirby-simpleicons`; the plugin will automagically appear in `site/plugins`.
- Download a zip of the [latest release](https://github.com/runxel/kirby3-simpleicons/releases/latest) and put the contents into `site/plugins/simpleicons`.  
  Please be aware you have to solve the [dependencies](#dependencies) on your own.

Git Submodules is currently not supported, but you can try that anyway, of course :)


### Dependencies

Please be aware that this plugin uses the [simple-icons Composer package](https://packagist.org/packages/simple-icons/simple-icons).  
If you're not using composer to install the plugin you have to download the icons by yourself.

Even tho there are CDNs available I don't recommend to use them. SVG can have executable code and also the CDN can track users on your site.


## Usage

As simple as using `(icon:brandname)` in a text.  
Works wherever your text will be rendered as [Kirbytext](https://getkirby.com/docs/reference/text/kirbytags).  
The svg will be served _inline_ <sup id="a1">[[1]](#f1)</sup> and inside a span with a fixed class of `.simpleicon`.  
You can however specify your own, additional class like this `(icon:github class:myclass)`

To see all available icons please go to [simpleicons.org](https://simpleicons.org/).  
If you think there is an icon missing **DO NOT** request it here, but at the [simple-icons repo](https://github.com/simple-icons/simple-icons/issues/new/choose).

<span id="f1" style="color: #888">[1]</span> This is done so you can style it with a `fill` thru CSS. [↩](#a1) 


## Configuration

To assure the svgs won't look off, you need some proper styling via **CSS**, like the following:

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