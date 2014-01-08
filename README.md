yourls-semanticscuttle
======================

About
------------

yourls-semanticscuttle is a plugin for YOURLS. The plugin adds a new share link into the Quick Share box (available for each URL shown in the Yourls admin area).
The added link allows the sharing of the URL to a Semantic Scuttle installation.

Obviously, you need a valid Yourls installation and a valid Semantic Scuttle installation.

This plugin has been tested on Yourls 1.6

Installation
------------

1. Unzip the plugin. You get a "yourls-semanticscuttle" folder
2. Upload this folder into the user/plugins folder of your Yourls installation
3. Edit your config.php file (located at user/config.php in your Yourls installation)
4. Define the URL of your Semantic Scuttle installation by inserting the following line at the end of your config.php file. Adapt the URL "https://my-semantic-scuttle.com" to your Semantic Scuttle installation's URL (No trailing slash !!!), and save changes to config.php

```
define('SEMANTICSCUTTLE_URL', 'https://my-semantic-scuttle.com');
```

Finally, activate the plugin in the admin area



License
------------

This theme is licensed under [MIT License](https://github.com/jonrandoem/yourls-semanticscuttle/blob/master/LICENSE).