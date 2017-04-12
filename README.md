Local/ExternalDisclaimer
========================

A Moodle plugin to add a disclaimer popup when users click on an external link on your site.


Version History
----------------

* 1.0.0     Initial release.


Installation
----------------

This is a standard Moodle 'local' plugin. Installation is via Moodle's plugin manager. Go to the Install Plugin page, and follow the instructions.


Requirements
------------

This plugin has been tested with Moodle v3.0 and higher, and with PHP v5.5 and higher.


Configuration
-------------

In the plugin configuration, set the options as follows:

* Enabled:

  This checkbox turns the plugin on. Make sure you have populated the other configuration fields before enabling the plugin.

* Internal Domains:

  As a minimum, this field should be populated with your site's domain name. So if your site's URL is `http://www.example.com`, you would enter `www.example.com` into this field.

  Additionally, you may specify multiple domains here, one per line. So you could have `www.example.com` on one line and `example.com` on another line, if your site is accessible via both addresses.
  
  You can also specify any other domains here that you want the plugin to consider as 'internal'. This would be useful for sites that are made up of a number of sub-domains.
  
  Once the plugin is activated, any links on your site to any sites not listed in this field will generate a popup alert message. Make sure you include all the sites that you link to that you don't this to happen.

* Redirect patterns

  It is possible that you may have some links internally in your site that actually redirect to external sites.
  
  This field allows you to specify that these links should generate the disclaimer alert. You can use regular expression patterns, one per line, to specify which links it should apply to.

* Disclaimer Text

  This is the message that you want to appear in the popup alert.


Motivation
----------------

This plugin was written to satisfy a need for a specific website. I appreciate that most sites will not need this kind of functionality, and most users will find it annoying, but the site owner in this case specifically requested it as they were getting a number of users asking for help with content on third party sites, without realising that they had clicked an external link.


Todo List and Known Issues
--------------------------

None known.


License
----------------
As with Moodle itself, this plugin is licensed under the GPLv3 license. The license document should be included.
