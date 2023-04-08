=== Surbma | Divi Extras ===
Contributors: Surbma, CherryPickStudios
Donate link: https://surbma.com/donate/
Tags: divi, divi theme, elegant themes, elegantthemes, page builder, pagebuilder
Requires at least: 5.2
Tested up to: 6.2
Stable tag: 5.1
Requires PHP: 7.0
License: GPLv2
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Useful modifications for the Divi Theme.

== Description ==

This plugin fixes and adds some useful modifications to the Divi Theme by Elegant Themes. This is a very lightweight plugin with minified css to reduce the loading time as low as possible.

**Surbma - Divi Extras plugin features:**

= Text Logo =

This is far the best feature of this plugin. Use the deafult Site Title, when no logo is set. The text logo will use H1 tag.

= Featured menu =

Featured menu style, as seen here in the menu: [Monarch plugin demo](http://elegantthemes.com/preview/Monarch/)

If you want to have a menu item with a colored background, that really shines in your menu bar, just add the `featured-menu` class to your menu item. The best part of it is, that the background color will be the same, what you have set as the Accent Color in the Customizer. Wow!

Once you install and activate the plugin, go to Appearance > Menu and expand the "Screen Options" drop down menu in the upper right corner. Select "CSS Classes" and finally, add `featured-menu` in the class field and you're good to go!

= Vertical center =

A simple class for vertically center the text in a module. If you want to center your modules vertically in a column, you can use the `vertical-center` class for the column class. So you have to add it in the row settings. The class is using flex, so it will only work with modern browsers.

= Logo fix =

Logo width fix for mobile view. If you don't use the search function, the logo will be bigger, as it has more space in the header.

= Footer fix =

Removes ugly list icons in the footer. Yes, those bullet points.

= Comment fix =

Hide comment allowed tags block. It is automatically displayed by default, but this function will hide it, as this block is unnecessary for most users.

**This plugin is a Divi extension**

You have to buy the Divi Theme to use this plugin:

- [Divi by Elegant Themes](https://surbma.com/go/elegantthemes/) (affiliate link)

**My plugins for Divi theme:**

- [Surbma | Divi & Gravity Forms](https://wordpress.org/plugins/surbma-divi-gravity-forms/)
- [Surbma | Divi Extras](https://wordpress.org/plugins/surbma-divi-extras/)
- [Surbma | Divi Lightbox](https://wordpress.org/plugins/surbma-divi-lightbox/)
- [Surbma | Divi Project Shortcodes](https://wordpress.org/plugins/surbma-divi-project-shortcodes/)
- [Surbma | Divi Remove Project CPT](https://wordpress.org/plugins/surbma-divi-remove-project-cpt/)

**My childthemes for Divi theme:**

- [Divi Plus](https://github.com/Surbma/Divi-Plus)

**Do you want to contribute or help improving this plugin?**

You can find it on GitHub: [https://github.com/Surbma/surbma-divi-extras](https://github.com/Surbma/surbma-divi-extras)

**You can find my other plugins and projects on GitHub:**

[https://github.com/Surbma](https://github.com/Surbma)

Please feel free to contribute, help or recommend any new features for my plugins, themes and other projects.

**Do you want to know more about me?**

Visit my webpage: [Surbma.com](https://surbma.com/)

== Installation ==

1. Upload the `surbma-divi-extras` folder to the `/wp-content/plugins/` directory.
1. Activate the Surbma | Divi Extras plugin through the 'Plugins' menu in WordPress.
1. That's it.

== Frequently Asked Questions ==

= What does Surbma mean? =

It is the reverse version of my last name. ;)

== Changelog ==

= 5.1 =

Release date: 2020-04-19

- FIX - Featured menu css fixes to prevent submenu modifications.

= 5.0 =

Release date: 2020-01-08

- FIX - Minor fixes in the code.
- TWEAK - Tested with WordPress 5.3 version.
- TWEAK - Updated to use a new way to deploy it to wp.org repo.

= 4.0 - 2018-04-25 =

- NEW - Text logo! Use the deafult Site Title, when no logo is set.
- TWEAK - Changed description.
- TWEAK - Simpler versioning.
- TWEAK - Tested with WordPress 4.9 version.

= 3.4.1 =

- Fix for the vertical-center class.

= 3.4.0 =

- Added WooCommerce cart menu support. The cart icon is positioned correctly.
- Tested with WordPress 4.8 version.

= 3.3.0 =

- Added new class for vertically centered alignment. Now you can vertically center a text in a module with a simple class added to the column class: `vertical-center`

= 3.2.2 =

- Fixed featured menu color, to prevent fixed menu link color overwrite.

= 3.2.1 =

- Fix top menu's down arrow position for submenus.
- Minor text and typo fixes.

= 3.2.0 =

- Fix for single post page bottom padding and margin, when Page Builder is used.

= 3.1.5 =

- Fixed featured menu text color for current menu.
- Fixed textdomain path for localization.

= 3.1.4 =

- Logo height setting applied for mobile responsive view also.

= 3.1.3 =

- Rolled back 3.1.1 modification. Divi padding-left will be valid again in the navigation, as it was in conflict with other responsive views.

= 3.1.2 =

- Fixed the Fixed navigation menu height option.

= 3.1.1 =

- Fixed navigation if it has more menu items, still stays in one line.

= 3.1.0 =

- Logo width fix for mobile view. If you don't use the search function, the logo will be bigger, as it has more space in the header.

= 3.0.6 =

- Featured menu item position fix, if there are no other menu items.
- Featured menu item styling in mobile menu also.
- Compatibility check with WordPress 4.3 version.
- Compatibility check with Divi 2.5 version.

= 3.0.5 =

- Fixed featured-menu color for fixed header.

= 3.0.4 =

- Fixed featured-menu color for fixed header.

= 3.0.3 =

- Added default values for menu styles to avoid issue if custom values are not saved. (Reported by menkom)

= 3.0.2 =

- Sections CSS codes are temporary back for backward compatibility.

= 3.0.1 =

- Fixed active menu color for featured menu item.

= 3.0.0 =

- This new version is NOT compatible with Divi 2.3 or later versions!!!
- Compatible with Divi 2.4 version.
- Removed unnecessary codes, which are fixed in Divi core.
- Removed sections codes, as the new Divi has an option to set the section padding.
- Featured menu CSS rewrite...again.

= 2.5.1 =

- Featured menu CSS rewrite and optimization.

= 2.5.0 =

- Featured menu's background color inherits Divi's Accent Color setting.
- Plugin's css file is loading only, if Divi theme is the parent theme.

= 2.4.0 =

- Added featured menu style, as seen here in the menu: [Monarch plugin demo](http://elegantthemes.com/preview/Monarch/)

= 2.3.2 =

- Fixes in description.
- Added separate less file for Page Builder Section styles.

= 2.3.1 =

- Fixes in description.

= 2.3.0 =

- Divi Extras plugin development is back! :)
- Updated description to reveal secret functions. :)
- Removed UIkit styles.
- Removed Gravity Forms styles. Please use my [Surbma - Divi & Gravity Forms](https://wordpress.org/plugins/surbma-divi-gravity-forms/) plugin!
- Prevent direct access to the plugin.

= 2.2.5 =

- Added links in the plugin description to my other plugins for Divi theme. Give them a try!

= 2.2.4 =

- Fix localization.

= 2.2.3 =

- Nothing has changed.
- Notification about my new plugin: [Surbma - Divi & Gravity Forms](https://wordpress.org/plugins/surbma-divi-gravity-forms/)
- Notification about my new childtheme: [Divi Extra](https://github.com/Surbma/Divi-Extra)

= 2.2.2 =

- Gravity Forms Multi-File Upload field's button fix. ([Requested by Tevya](https://wordpress.org/support/topic/next-button-isnt-styled-on-multi-page-forms))
- Some minor fix for Gravity Forms.

= 2.2.1 =

- Fixed stable tag.

= 2.2.0 =

- Added Divi styling to Gravity Forms multi-page next/previos buttons. ([Requested by Tevya](https://wordpress.org/support/topic/next-button-isnt-styled-on-multi-page-forms))
- Gravity Forms multi-page next/previos buttons inherit the Divi Accent color option. ([Requested by Tevya](https://wordpress.org/support/topic/next-button-isnt-styled-on-multi-page-forms))
- Gravity Forms multi-page progress bar modification to match Divi styles. ([Requested by Tevya](https://wordpress.org/support/topic/next-button-isnt-styled-on-multi-page-forms))
- Comment submit button gets pointer cursor on hover. ([Requested by Tevya](https://wordpress.org/support/topic/a-few-feature-requests-4))
- Some minor improvements in the css.

= 2.1.1 =

- Added tags.

= 2.1.0 =

- Fixed typo.
- Added pot file.
- Added hungarian translation.

= 2.0.0 =

- First commit to the official WordPress repo.
- Added localization.
- Separated less files.
