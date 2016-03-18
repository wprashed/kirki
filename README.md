# Kirki #
**Contributors:** aristath, fovoc, igmoweb  
**Tags:** customizer,options framework, theme, mods, toolkit  
**Donate link:** http://kirki.org/  
**Requires at least:** 4.4  
**Tested up to:** 4.5  
**Stable tag:** 2.2.2.1  
**License:** GPLv2 or later  
**License URI:** http://www.gnu.org/licenses/gpl-2.0.html  

The ultimate toolkit for theme developers using the WordPress Customizer


## Description ##

[![Build Status](https://travis-ci.org/aristath/kirki.svg?branch=master)](https://travis-ci.org/aristath/kirki) [![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/aristath/kirki/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/aristath/kirki/?branch=master) [![Code Climate](https://codeclimate.com/github/aristath/kirki/badges/gpa.svg)](https://codeclimate.com/github/aristath/kirki) [![codecov.io](https://codecov.io/github/aristath/kirki/coverage.svg?branch=master)](https://codecov.io/github/aristath/kirki?branch=master) [![License](https://img.shields.io/badge/license-GPL--2.0%2B-red.svg)](https://raw.githubusercontent.com/aristath/kirki/master/LICENSE) [![Join the chat at https://gitter.im/aristath/kirki](https://badges.gitter.im/Join%20Chat.svg)](https://gitter.im/aristath/kirki?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge)

Kirki is a Toolkit allowing WordPress developers to use the Customizer and take advantage of its advanced features and flexibility by abstracting the code and making it easier for everyone to create beautiful and meaningful user experiences.

Kirki does not replace the WordPress Customizer API, you can still use the default WordPress methods and we advise you to familiarize yourselves with it. An excellent handbook for the WordPress Customizer can be found on the developer.wordpress.org website.

What Kirki does is save you time… LOTS of time!

Easily add configurations for your project, create panels, sections and add fields with ease.

Automatically create CSS from your fields, and make the customizer’s preview instant with our automatic postMessage scripts creation!

Add Google Fonts with our typography field, add tooltips to help your users and build awesome products!

You can find detailed documentation on how to use Kirki on [https://kirki.org](https://kirki.org)

## Installation ##

Simply install as a normal WordPress plugin and activate.

If you want to integrate Kirki in your theme or plugin, please read the instructions on [our ducumentation site](https://kirki.org/docs/advanced/integration.html).

## Changelog ##

### 2.2.2.1 ###

March 17, 2016, dev time: 5 minutes

* FIX: Backwards-compatibility bugfix

### 2.2.2 ###

March 17, 2016, dev time: 10 minutes

* FIX: PHP notice for non-standard controls when the `element` defined in an `output` argument is of type `array`.

### 2.2.1 ###

March 17, 2016, dev time: 3 hours

* FIX: Alpha channel was always enabled for color controls
* FIX: PHP Notices in the class-kirki-output-control-typography.php file
* FIX: PHP Fatal error on PHP 5.2
* FIX: PHP Notice in the class-kirki-field.php file
* FIX: PHP Fatal error when using background-position in the output argument
* TWEAK: Removed unused languages from CodeMirror to reduce the plugin's size

### 2.2.0 ###

March 16, 2016, dev time: 120 hours

* FIX: Improved & simplified the `number` control.
* FIX: Improved & simplified the `spacing` control.
* FIX: Minor bugfix on the `select` control.
* FIX: WP Coding standards improvements.
* FIX: Bugfix for radio controls.
* FIX: Fixed repeater remove image not triggering save button to activate, and added a placeholder when the image is removed. (props @sayedwp)
* FIX: Fixed bug when using negative numbers as min value in the `number` field
* FIX: Typo in the textdomain for some strings (some strings were using "Kirki" instead of "kirki").
* FIX: Complete refactor & rewrite of the google-fonts implementation.
* FIX: IE11 bug on radio-image controls.
* FIX: Radio-image bug when used with serialized options.
* NEW: Complete refactor & rewrite of typography control.
* NEW: Refactored the CSS output methods.
* NEW: Added new mothods for detecting dependencies.
* NEW: Added font-subsets in typography controls.
* NEW: Google fonts now only show valid variants & subsets in typography controls.
* NEW: Implemented partial refreshes for WP 4.5 using a "partial_refresh" argument (formatted as an array).
* NEW: Better autoloader & improved file structure.
* NEW: Deprecated the `Kirki_Field_Sanitize` class in favor of a more simplified & robust implementation.
* NEW: Completely refactored the `Kirki_Field` class, we're migrating to a more OOP model.
* NEW: Added a new `kirki-generic` control.
* NEW: Deprecated the custom text control and used the new `kirki-generic` control instead.
* NEW: Deprecated the custom textarea control and used the new `kirki-generic` control instead.
* NEW: Renamed the `help` argument to `tooltip`. `help` will continue to work as an alias.
* NEW: Merged the `color` & color-alpha` controls. We now use the `color-alpha` control for all colors, and just modify the `data-alpha` property it has.
* NEW: Started an OOP rewrite of many classes
* NEW: Started rewriting the PHPUNIT tests & tweaked them so they can now run on localhosts (like VVV) and not just on travis-ci.
* NEW: Included the ariColor library for color calculations (https://aristath.github.io/ariColor/)
* TWEAK: Other code refactoring for improved performance
* TWEAK: Updated `grunt` packages.

### 2.1.0.1 ###

February 17, 2016, dev time: 5 minutes

* FIX: PHP Notices (undefined index)

### 2.1.0 ###

February 17, 2016, dev time: 4 hours

* FIX: Image field issues inside the Repeater field (props @sayedwp)
* NEW: Allow disabling output per-config
* NEW: Introduce 'postMessage' => 'auto' option in config (will auto-create `js_vars` using the `output` argument)
* NEW: New color control using a js-based template
* TWEAK: Branding script rewrite
* TWEAK: Color controls styling
* TWEAK: Coding improvements & cleanups

### 2.0.9 ###

February 13, 2016, dev time: 1 hour.

* FIX: Google fonts bug (use double quotes when font name contains a space character)
* FIX: Checkbox control bug (checkboxes were always displayed as checked, regardless of their actual value)
* NEW: Intruducing KIRKI_NO_OUTPUT constant that disables CSS output completely when set to true.

### 2.0.8 ###

February 10, 2016, dev time: 2 hours

* FIX: Only load Kirki styles when in the customizer
* FIX: Performance issue with Google Fonts
* NEW: Added radio-image controls to repeaters
* TWEAK: Better color handling in the Kirki_Color class

### 2.0.7 ###

January 19, 2016, dev time: 1 hour

* FIX: Narrow the scope of "multicheck" modification checker (props @chetzof)
* FIX: PHP warnings due to invalid callback method
* FIX: postMessage bug introduced in 2.0.6 (2 lines commented-out)

### 2.0.6 ###

January 18, 2016, dev time: 7 hours

* FIX: Fix active callback for multidimensional arrays. (props @andrezrv)
* FIX: Correctly check current value of checkbox control. (props @andrezrv)
* FIX: Bug in the sortable field (props @daviedR)
* FIX: Fixed some bugs that occured when using serialized options instead of theme_mods
* NEW: Added an image sub-field to repeater fields (props @sayedwp)
* NEW: Added a JS callback to js_vars (props @pingram3541)
* TWEAK: Settings sanitization
* TWEAK: Removed demo theme from the plugin. This is now provided separately on https://github.com/aristath/kirki-demo

### 2.0.5 ###

December 23, 2015, dev time: 2.5 hours

* FIX: Disabled the ajax-loading method for stylesheets. All styles are now added inline. Will be re-examined for a future release.
* FIX: Number controls were not properly triggering changes
* FIX: Styling for number controls
* FIX: In some cases the dynamic CSS was added before the main stylesheet. We now add them using a priority of 999 to ensure they are enqueued afterwards.

### 2.0.4 ###

December 19, 2015, dev time: 3 hours

* NEW: Added units support to the Typography field
* NEW: Default methods of enqueuing styles in now inline.
* NEW: Added 'inline_css' argument to config. set to false to add styles using AJAX.
* FIX: HTML mode for CodeMirror now functional
* FIX: PHP Notices when the config filter is used wrong
* FIX: Monor bugfix for text inputs
* FIX: Indentation & coding standards
* FIX: failing PHPUNIT test.
* TWEAK: Remove passing click event object

### 2.0.3 ###

December 6, 2015, dev time: 45 minutes

* Bugfix for updates

### 2.0.2 ###

December 6, 2015, dev time: 30 minutes

* FIX: Fatal error on update (not on new installations)
* FIX: Typo

### 2.0.1 ###

December 6, 2015, dev time: 10 minutes

* FIX: Some configurations were failing with the new autoloader. Reverted to a simpler file structure.

### 2.0 ###

December 6, 2015, dev time > 140 hours

* NEW: Added support for `sanitize_callback` arguments on each item in the CSS `output`.
* NEW: Added the ability to define an array as element in the `output`.
* NEW: Auto-prefixing CSS output for cross-browser compatibilities.
* NEW: Allow using arrays in settings.
* NEW: Dimension Field.
* NEW: Repeater Field.
* NEW: Code Field using the ACE editor.
* NEW: Typography Control.
* NEW: Preset Field.
* NEW: Demo theme.
* NEW: Spacing Control.
* REMOVED: Redux Framework compatibility.
* FIX: Minor bugfixes to the Kirki_Color class.
* FIX: kirki_get_option now uses Kirki::get_option().
* FIX: Various bugfixes.
* TWEAK: Converted the `checkbox` control to use the JS templating system.
* TWEAK: Converted the `custom` control to use the JS templating system.
* TWEAK: Converted the `multicheck` control to use the JS templating system.
* TWEAK: Converted the `number` control to use the JS templating system.
* TWEAK: Converted the `palette` control to use the JS templating system.
* TWEAK: Converted the `radio-buttonset` control to use the JS templating system.
* TWEAK: Converted the `radio-image` control to use the JS templating system.
* TWEAK: Converted the `radio` control to use the JS templating system.
* TWEAK: Converted the `select` control to use the JS templating system.
* TWEAK: Converted the `slider` control to use the JS templating system.
* TWEAK: Converted the `switch` control to use the JS templating system.
* TWEAK: Converted the `textarea` control to use the JS templating system.
* TWEAK: Converted the `toggle` control to use the JS templating system.
* TWEAK: `radio-buttonset` controls are now CSS-only.
* TWEAK: `radio-image` controls are now CSS-only.
* TWEAK: `select` controls nopw use [selectize](http://brianreavis.github.io/selectize.js/) instead of [Select2](https://select2.github.io/).
* TWEAK: Deprecated `select2` and `select2-multiple` controls. We now have a global `select` control. Previous implementations gracefully fallback to the current one.
* TWEAK: `switch` controls are now CSS-only.
* TWEAK: `toggle` controls are now CSS-only.
* TWEAK: Sliders now use an HTML5 "range" input instead of jQuery-UI.
* TWEAK: Better coding standards.
* TWEAK: Descriptions styling.
* TWEAK: Improved controls styling.
* TWEAK: Compiled CSS & JS for improved performance.
* TWEAK: Added prefix to the sanitized output array.
* TWEAK: Updated google-fonts.
* TWEAK: Grunt integration.
* TWEAK: Some Code refactoring.

### 1.0.2 ###

July 17, 2014, dev time: 5 minutes

* NEW: Added 'disable_output' and 'disable_google_fonts' arguments to the configuration.

### 1.0.1 ###

July 17, 2014, dev time: 1 hour

* FIX: Issues when using serialized options instead of theme_mods or individual options.
* FIX: Issues with the `output` argument on fields.
* FIX: Other minor bugfixes

### 1.0.0 ###

July 11, 2014, dev time: 177 hours

* NEW: Added PHPUnit tests
* NEW: Use wp_add_inline_style to add customizer styles
* NEW: Rebuilt the background fields calculation
* NEW: Now using Formstone for switches & toggles
* NEW: Added a new API. See https://github.com/aristath/kirki/wiki for documentation.
* NEW: Minimum PHP requirement is now PHP 5.2
* NEW: Added a Select2 field type.
* NEW: Introducing the Kirki::get_option() method to get values.
* NEW: added 'media_query' argument to output.
* NEW: Added ability to get variables for CSS preprocessors from the customizer values. See https://github.com/aristath/kirki/wiki/variables for documentation
* NEW: now supporting 'units' to all outputs to support '!important'
* NEW: Ability to create panels & sections using the new API.
* NEW: added a get_posts method to the Kirki class.
* NEW: Implement width argument in the styling options. See https://github.com/aristath/kirki/wiki/Styling-the-Customizer
* NEW: add 'kirki/control_types' filter
* FIX: Properly saving values in the db when using serialized options
* FIX: Check if classes & functions exist before adding them (allows for better compatibility when embedded in a theme)
* FIX: PHP Warnings & Notices
* FIX: Other minor bugfixes
* FIX: Now using consistently `option_type` instead of `options_type` everywhere
* FIX: `Kirki::get_option()` method now works for all fields, including background fields.
* FIX: avoid errors when Color is undefined in background fields
* FIX: Use WP_Filesystem to get the google fonts array from a json file
* FIX: Radio-Button styling
* FIX: PHP Notices
* FIX: Typos
* FIX: Properly sanitizing rgba colors
* FIX: Properly sanitize numbers
* FIX: Make sure all variables are escaped on output
* TWEAK: Simplify the Colourlovers integration.
* TWEAK: Improve sanitization
* TWEAK: Improve the Kirki_Styles_Customizer class
* TWEAK: Code cleanups
* TWEAK: Added more inline docs (lots of them)
* TWEAK: Use active_callback for required arguments instead of custom JS
* TWEAK: Updated translation files
* TWEAK: Better color manipulation in the Kirki_Color class
* TWEAK: Move secondary classes instantiation to the Kirki() function.
* TWEAK: set a $kirki global
* TWEAK: deprecate getOrThrow method in the Kirki_Config class.
* TWEAK: Move sanitisation functions to a Kirki_Sanitize class.
* TWEAK: Rename Kirki_Framework to Kirki_Toolkit.
* TWEAK: Move variables to the new API
* TWEAK: simplify Kirki_Controls class
* TWEAK: move the kirki/fields & kirki/controls filters to the new API
* REMOVED: remove the 'stylesheet_id' from the configuration.

### 0.8.4 ###

April 6, 2014, dev time: 0.5 hours

* FIX: Color sanitization was distorting 0 characters in the color hex.
* FIX: Properly sanitizing ColorAlpha controls
* FIX: Sanitizing more properties in the Fields class
* FIX: removing remnant double-sanitization calls from the controls classes

### 0.8.3 ###

April 5, 2014, dev time: 28 hours

* NEW: Introduce a Field class
* NEW: Introduce a Builder class
* TWEAK: Code Cleanups
* NEW: Added ability to use 'option' as the setting type
* Fix : Bugs in the color calculation class
* TWEAK: Everything gets sanitized in the "Field" class
* FIX: Bugs in sortable field
* FIX: Editor control had no description
* NEW: Added a color-alpha control. To use it just set an rgba color as the default value.
* TWEAK: SCSS & CSS improvements
* FIX: Various PHP notices and warnings when no fields are defined
* TWEAK: More efficient color sanitization method
* TWEAK: Improved number control presentation
* TWEAK: Improved the way background fields are handled
* TWEAK: Checkboxes styling
* NEW: Allow using rgba values for background colors
* FIX: CSS fix - :focus color for active section
* NEW: Add a static 'prepare' method to the ScriptRegistry class
* FIX: Issues with the URL when Kirki is embedded in a theme

### 0.8.2 ###

March 30, 2015, dev time: 5 minutes

* FIX: Autoloader could not properly include files due to strtolower()

### 0.8.1 ###

March 30, 2015, dev time: 30 minutes

* FIX: Translation strings now overridable using the config filter.

### 0.8.0 ###

March 30, 2015, dev time: 32 hours

* Improvement: OOP redesign (props @vpratfr)
* NEW: Added Palette control
* NEW: Added Editor control (WYSIWYG - uses TinyMCE)
* NEW: Added Custom control (free html)
* NEW: Added a Kirki_Colourlovers class to use palettes from the colourlovers API
* NEW: Added a composer file (props @vpratfr)
* FIX: Wrong settings IDs
* FIX: Color calculation on RGBA functions were off
* TWEAK: Restructuring the plugin (props @vpratfr)
* NEW: added a functional kirki_get_option() function
* TWEAK: Simplified configuration options.
* NEW: Turn Kirki into a singleton and a facade (props @vpratfr)
* TWEAK: Completely re-written the customizer styles
* NEW: Using SASS for customizer styles
* TWEAK: Deprecating the group_title control in favor of the new custom control
* TWEAK: Changed the CSS for checkboxes

### 0.7.1 ###

March 15, 2015, dev time: 2 hours

* REMOVED: Remove the `kirki_get_option` function that was introduced in 0.7 as it's not working properly yet.
* FIX: Undefined index notice when a default value for the control was not defined
* TWEAK: `logo_image` now injects an `img` element instead of a `div` with custom background
* NEW: Added `description` argument in the kirki configuration (replaces the theme description)

### 0.7 ###

March 14, 2015, dev time: 10 hours

* FIX: Array to string conversion that happened conditionally when used with googlefonts. (props @groucho75)
* FIX: Background opacity affects background-position of bg image
* FIX: font-weight not being applied on google fonts
* NEW: Added `kirki_get_option( $setting );` function that also gets default values
* TWEAK: Singleton for main plugin class
* FIX: Prevent empty help tooltips
* NEW: Added `toggle` control
* NEW: Added `switch` control
* FIX: Color controls were not being reset to default:
* TWEAK: Tooltips now loaded via jQuery
* TWEAK: Renamed `setting` to settings for consistency with WordPress core
* TWEAK: Renamed `description` to `help` and `subtitle` to `description for consistency with WordPress core
* TWEAK: Backwards-compatibility improvements
* NEW: Allow hiding background control elements by not including default values for them
* TWEAK: Performance improvements
* TWEAK: Using WordPress core controls instead of custom ones when those are available
* TWEAK: Separate logic for multiple-type controls that were using the "mode" argument. This has been deprecated in favor of completely separate control types.

### 0.6.2 ###

March 2, 2015, dev time: 3 hours

* FIX: Frontend styles were not properly enqueued (props @dmgawel)
* NEW: Allow multiple output styles per control defined as an array of arrays.
* FIX: Background control styles
* FIX: Serialise default values for the sortable control. Now you can define default values as an array.
* FIX: Required script
* FIX: \'_opacity\' was added to a lot of controls by mistake. Removed it and wrote a migration script.

### 0.6.1 ###

February 25, 2015, dev time: 1 hours

* FIX: Sortables controls had a JS conflict
* FIX: Switches & Toggles were not properly working

### 0.6.0 ###

February 25, 2015, dev time: 9 hours

* FIX: Tooltips now properly working
* NEW: Added checkbox switches
* NEW: Added checkbox toggles
* FIX: Generated CSS is not properly combined & minified
* FIX: Re-structuring files hierarchy
* FIX: Simplify the way controls are loaded
* NEW: Only load control classes when they are needed
* NEW: Introducing Kirki_Customize_Control class
* FIX: CSS tweaks
* NEW: Sortable control (creating one is identical to a select control, but with `\'type\' => \'sortable\'`)
* FIX: Double output CSS (props @agusmu)
* NEW: Google fonts now parsed from a json file.

### 0.5.1 ###

January 22, 2015

* FIX: Transport defaults to refresh instead of postMessage
* FIX: undefined index notice.

### 0.5 ###

January 21, 2015

* NEW: Automatic output of styles for generic controls.
* NEW: Automatic output of styles + scripts for fonts (including googlefonts )
* NEW: The \'output\' argument on background controls is now an array for consistency with other controls. Older syntax is still compatible though. :)
* NEW: Add the ability to auto-generate styles for colors.
* FIX: Add a blank stylesheet if we need one and no stylesheet_id has been defined in the config options.
* FIX: CSS-only tooltips. Fixes issue with tooltips now showing up on WP >= 4.1
* FIX: Code cleanups
* NEW: Added support for WordPress\'s transport arguments
* FIX: All controls now have a sanitization callback. Users can override the default sanitizations by adding their own \'sanitize_callback\' argument.
* FIX: OOP rewrite
* FIX: Strip protocol from Google API link
* FIX: Loading order for some files
* FIX: Removed deprecated less_var argument

### 0.4 ###

October 25, 2014

* FIX: bugfix for selector
* NEW: Change the Kirki theme based on which admin theme is selected.
* FIX: Tranlsation domain issue
* NEW: Added a \"group_title\" control
* FIX: Updated the required script
* FIX: Updating CSS
* Other minor improvements and bugfixes

### 0.3 ###

May 26, 2014

* NEW: added background field
* NEW: added \'output\' argument to directly output the CSS

### 0.2 ###

May 9, 2014

* Initial version
