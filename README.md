UW Wordpress Theme -- Blogs Network Modifications
=================================================

[Theme Source](https://github.com/allynfolksjr/UW-Wordpress-Blogs-Network)

Introduction
------------

This is a child theme of the [UW WordPress Theme](https://github.com/uweb/UW-Wordpress-Theme) with modifications made specifically in mind for the UW Blogs Network.

Modifications
-------------

* Changed `the_excerpt` to `the_content` for `home.php`, which shows the full post content on a home page instead of the unformatted excerpts.
* Show previous/next links at bottom of home page and category/tag/archive pages, as relevant.
* Show previous/next links at bottom of individual posts, as relevant.
* Removed menu inherentance. As originally set up, any blog using the UW WordPress Theme would inherit its menus from the default blog if it *did not have a primary menu already defined* (it assumes it's also running in a multisite install). This is not desired as the default blog often has specialized menus that would confuse users.  Instead, if no primary menu is defined, it will show a blank bar.
* Updated the weather and banner URLs to use the theme folder as "UW-Wordpress-Theme" rather than 'uw,' and changed their link structure slightly.

To-Do/Notes
-----------

* As with the parent theme, this theme does not show the blog title when viewed from a desktop. It is assumed that users would want to change their header image or upload a new text to replace "University of Washington" if they wanted to brand their page. I would like to allow users to choose a text-based option.
* Properly fallback to wp_page_nav when there is no primary menu set. However, additional CSS tweaks would need to be made to properly support this as wp_page_nav is rather cripped.


Contact
-------

### Child Theme

Nikky Southerland  
University of Washington Information Technology  
http://staff.washington.edu/nikky  
nikky@uw.edu  

### UW WordPress Theme

UW Marketing  
https://github.com/uweb

