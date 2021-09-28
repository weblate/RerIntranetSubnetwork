# Matomo RerIntranetSubnetwork Plugin (ipv4)

[![Catalogo del riuso software](https://img.shields.io/badge/Riuso%20AGID-Software-%230076e3)](https://developers.italia.it/it/pa/r_emiro)
[![Matomo version](https://img.shields.io/badge/matomo-4.x--dev-success)](https://github.com/matomo-org/matomo)
[![Matomo version](https://img.shields.io/badge/matomo-3.x--dev-success)](https://github.com/matomo-org/matomo)
[![GitHub license](https://img.shields.io/github/license/RegioneER/RerIntranetSubnetwork)](https://github.com/RegioneER/RerIntranetSubnetwork/blob/master/LICENSE)
[![GitHub issues](https://img.shields.io/github/issues/RegioneER/RerIntranetSubnetwork)](https://github.com/RegioneER/RerIntranetSubnetwork/issues)
[![GitHub forks](https://img.shields.io/github/forks/RegioneER/RerIntranetSubnetwork)](https://github.com/RegioneER/RerIntranetSubnetwork/network)

## Description

This [Matomo plugin](https://plugins.matomo.org/RerIntranetSubnetwork) adds to your installation a new _dimension_ called **visit_subnetwork** then reports visitor counts coming from private networks.

Settings are easily configurable by Matomo's General Settings administration page. You have two choices.

- [Private Address Space from RCF 1918](https://datatracker.ietf.org/doc/html/rfc1918#section-3), such as 127.0.0.1, 192.168.x.x, 172.16.x.x and 10.x.x.x.

- Configure your custom subnet rule by writing a regular expression matching the included IPs.

This plugin is a complete refactoring working on Matomo of the first [IntranetSubnetwork](https://github.com/kwasib/IntranetSubNetwork) that was published for Piwik 2.x.

## Installation

Just install by Matomo's Marketplace, or grab latest code from the Github repository.

## License

This plugin is licensed under GNU General Public License v3+

## Support

You can ask for support and your feedback is appreciated at plugin's [issue center on Github](https://github.com/RegioneER/RerIntranetSubnetwork/issues).

## Changelog

### 4.1.0

Added [Weblate](https://hosted.weblate.org/projects/matomo/communityplugin-rerintranetsubnetwork/) support for translations.

Updated regex rule matching RCF 1918 spaces.

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
