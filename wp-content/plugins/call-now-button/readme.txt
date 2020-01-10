=== Plugin Name ===
Contributors: jgrietveld
Donate link: http://callnowbutton.com/donate/
Tags: call, contact, customers, sell, sales, leads, convert, conversions, call now button
Requires at least: 2.7
Tested up to: 5.2
Stable tag: 0.3.6
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

A very simple yet very effective plugin that adds a Call Now button to your website for mobile visitors (only for responsive websites).

== Description ==

###What does the plugin do?

This plugin places a Call Now button (click-to-call) to the bottom of the screen which is only visible for your mobile visitors. Because your mobile visitors are already holding their phone it will allow them to call you with one simple touch of the button. 
No more complicated copy-and-pasting or memorizing the phone number! 

###Could not be easier!
The settings are very easy: enable and enter your phone number. That's it!

If you want to add some text to your button, that's possible. Entering text is fully optional - leaving it empty will show a nice phone icon to your visitors.

You want even more control? Open up the Advanced Settings and change the default behavior.

###Only for mobile optimized themes
Usage at this point is only for responsive websites (websites optimized for display on mobile devices).


== Installation ==

1. From your WordPress Dashboard go to 'Plugins' > 'Add new' and search for 'Call Now Button'.
2. Click 'Install Now' under the title of the Call Now Button plugin
3. Click activate
4. Go to 'Settings' > 'Call Now Button' and check the box to activate the button and enter your phone number.
5. Click 'Save' and you're done!

Or:

1. Upload `call-now-button`-folder to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Go to 'Settings' > 'Call Now Button' and check the box to activate the button and enter your phone number.
4. Click 'Save' and you're done!


== Frequently Asked Questions ==

= Where can I enter my phone number? =

In the Settings section on your WordPress Dashboard you'll find a new addition: Call Now Button. Click on it to go to the plugin settings.

= I don't see the button on my website but I'm looking at it with my mobile phone. Why? =

The button will only work on websites that use a responsive theme. Responsive means that the website adapts to the size of the screen it's being viewed on. Simply put, if you need to zoom in to be able to read the text of your website on your mobile phone, the plugin will not work.

= My website is responsive but I don't see the button

Check if you have any caching plugins active on your website. Your website is likely cached and you're looking at an older copy of your website. Delete/empty the cache and reload your website.

= I updated the button but I'm not seeing the changes on my website

You have a caching plugin active on your website and you are looking at a cached version of your website. Delete/empty the cache and reload your website.

= I only see the button on some pages of my website

You have a caching plugin active on your website and the cached pages are showing an older version of your website. Delete/empty the cache and reload the pages. 

= Do I have to add a country code to my phone number? =

You don't have to but I recommend that you do to increase your options internationally.

= Do I start the number with + or 00? =

Up to you. Your phone will understand both!

= Can I change the appearance of the Call Now Button? =

Yes! You can easily change the color of the button and make it sit in the left or right corner. Or spread it out over the full bottom of the phone screen.

= I only want to show the button on a few pages. Is that possible?

Yes, you can now enter the IDs of posts and pages you wish to include or exclude.

= I need way more flexibility! Isn't there a PRO version that I can use? =

Yes, this is coming soon. We're currently looking for testers so if you want to give it a try already, please sign up at callnowbutton.com


== Screenshots ==

1. The default look of the Call Now Button
2. The Call Now Button with Text
3. All the required settings
4. Advanced Settings: Set your button's color
5. Advanced Settings: More options


== Changelog ==

= 0.3.6  =
* Validation fixes
* Zoom controls icon size in Full Width buttons

= 0.3.5  =
* Small JS fix

= 0.3.4  =
* Bug fix for function causing 500 error on some versions of PHP
* Added feature to increase or decrease the button size
* Added feature to change the z-index of the button with a slider

= 0.3.3  =
* Check for active caching plugin 
* Added links from plugins page to settings page

= 0.3.2  =
* Option to hide icon in text button
* Fix for gtag tracking code
* JS fix
* Fix for iOS border bug

= 0.3.1  =
* Small bug fix

= 0.3  =
* Added the option to add text to your button
* Added option to either include or exclude certain posts and pages to show the button on (this used to be just exclude)
* Some small design changes to the button

= 0.2.1  =
* Fix for conflict with certain 3rd party plugins

= 0.2.0  =
* New circular button design
* Option to revert to the old button design
* Classic button design still available through advanced settings
* Added middle button position
* Added admin notices for clarity
* Added link to Google Analytics integration manual
* More contact links to support and feature requests 
* Some small design tweaks to admin screen

= 0.1.3  =
* Click tracking added for Universal Analytics
* Phone icon now SVG so super crisp on high pixel density screens (e.g. Retina screens)
* SVG icon embedded in code so no more http requests

= 0.1.2  =
* Transparent button fix
* Small debug fixes

= 0.1.1  =
* JavaScript fix (needed for Advanced Settings) 

= 0.1.0 =
* Change the color of the button
* Change the appearance of the button
* Track button clicks via Google Analytics
* Limit the appearance to specific pages

= 0.0.1 =
* First time launch
