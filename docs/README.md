# Icons Picker for FontAwesome

An AngularJS interface to [pick icons from FontAwesome 4.7.0](https://anytizer.github.io/demo/picker.fa/index.html) collection.


## How does it work?

 * Search for an icon.
 * Narrow down the list.
 * Click on an icon text.
   - HTML will be copied to clipboard.
 * Paste in your implementation.


## List processing

The list of icons is subject to change from the original list.

 * Categories removed.
 * Aliases removed.
 * Icon names sorted alphabetically.
 * Duplicate names (from different categories) removed.
 * Converted icon names list as AngularJS variable.


## Story

While FontAwesome provides its own [icon picker](https://fontawesome.com/v4.7.0/icons/), navigating to different pages per icon is tedious. The application is a single page interfcace to search, click and paste the corresponding icon's HTML. The search box provides a common location to find all available icons. AngularJS provides the navigation to narrow down the search list. And a simple javascript copies the corresponding html into your clipboard.

So,

**Search, Click, Paste**! Done.


## Platforms used

 * [AngularJS](https://code.angularjs.org/) based searching of icons.
 * [W3CSS](https://www.w3schools.com/w3css/)


## Resources

 * [FontAwesome](https://github.com/FortAwesome/Font-Awesome) - [4.7.0 icons](https://fontawesome.com/v4.7.0/icons/) - [CDN](https://www.bootstrapcdn.com/fontawesome/) - [Demo](https://anytizer.github.io/demo/picker.fa/index.html).


## Disclaimer

The purpose is to inspire usage of FontAwesome, not to reduce the page impressions in its original website. The interface provides icon picker to an older version.
