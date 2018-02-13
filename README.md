# THFO Mail Address

This mu-plugin replace the from email address that appear on emails sent from WordPress to prevent outgoing e-mail from your site being marked as spam.

## Features

By default, WordPress uses "wordpress@your-domain.com" as the address
* This mu-plugin will instead use "contact@your-domain.com"


## Installation

It's recommended to use at it as mu-plugin. As it is a folder you must use a MU Loader : https://github.com/BeAPI/wp-mu-loader.


### via Composer

1. Add a line to your repositories array: `{ "type": "vcs", "url": "https://github.com/sebastienserre/thfo-mail-address" }`
2. Add a line to your require block: `"sebastienserre/thfo-mail-address": "dev-master"`
3. Run: `composer update`

### Manual

1. Copy the plugin folder into your must-use plugins folder or directly the mail-address.php file on wp-content/mu-plugins folder.


## Changelog

### 1.1.1 - 13 Jan 2018
Removing var_dump and die is better to make the stuff work :-)

### 1.1.0 - 24 Nov 2017
You can define by constant the different part of the mail to use...

### 1.0.0 - 06 Sep 2017
* Initial