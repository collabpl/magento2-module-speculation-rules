# Magento 2 Speculation Rules Extension

The Collab_SpeculationRules module allows You to lavergae the [Speculation Rules API](https://developer.mozilla.org/en-US/docs/Web/API/Speculation_Rules_API).

## Configuration
You can configure the module in the admin panel under `Stores > Configuration > Collab Extensions > Speculation Rules`.

| Tab     | Config Field                  | Description                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               |
|---------|-------------------------------|---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| General | Enabled (bool: Select)        | Determines if the module is enabled or not.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               |
| General | Spec Rules (string: Textarea) | JSON object defining speculation rules. If module is enabled we are prerendering following links by default:<br/>- main menu links - top and 1st level<br/>- links found in breadcrumbs<br/>- product links found on category pages<br/>- links embeded in Page Builder elements<br/><br/> By default following link paths are excluded from prerender:<br/>- */checkout*<br/>- */customer*<br/>- */catalogsearch*<br/>- */wishlist*<br/><br/>By default You can prevent given link to be prerendered by assigning them `skip-prerender` class name. This field can be customized according to this [MDN Documentation](https://developer.mozilla.org/en-US/docs/Web/HTML/Element/script/type/speculationrules#syntax) |

## Why choose this extension over other solutions?
We don't believe in efficient modules which have tons of options - simple as that - modules which have multiple
options, are prepared for many integrations always have some performance footprint for application. Having this
in mind we are trying to provide simple, portable and independent modules which sometimes require some basic Magento 2 development
skills.

## Browser Support
Module automatically detects if the browser supports Speculation Rules API. If not, the module will not be loaded.

| Browser | Version       |
|---------|---------------|
| Chrome  | 109+          |
| Edge    | 109+          |
| Firefox | Not Supported |
| Safari  | Not Supported |

## PageSpeed
In order to check the PageSpeed impact of the module please refer to [Official Google Chrome Docs](https://developer.chrome.com/docs/web-platform/prerender-pages#impact).

## Installation details
```bash
composer collab/module-speculation-rules
bin/magento setup:upgrade
```
