# Matomo RerIntranetSubnetwork Plugin

## Description

This plugin adds to your Matomo installation a new _dimension_ called **visit_subnetwork** then reports visitor counts coming from private networks.

Configure settings by Matomo's administration page. You can choose to include common private subnetwork, such as 127.x.x.x, 192.x.x.x and 10.x.x.x.

You can also configure your custom subnet rule by writing a regular expression.

This plugin is a complete refactoring working on Matomo 3.x of original [IntranetSubnetwork](https://github.com/kwasib/IntranetSubNetwork) was published for Piwik 2.x.

## Installation

Just install by Matomo's Marketplace, or grab latest code from the Github repository.

## License

This plugin is licensed under GNU General Public License v3+

## Changelog

### 4.0.1

Added support for Matomo 4.x-dev

### 2.3.0

Added Default Subnetworks configuration field. It's a checkbox you can use to include sandard networks measurement.

### 2.2.0

Added Web Administration configuration field. You can use it writing your custom Regular Expression for catching Subnetworks IPs.

### 2.1.0

- Features imported from IntranetSubNetwork old plugin.
- Mayor bug fixing

### 2.0.0

Rewrite from scratch using Piwik's console generators
