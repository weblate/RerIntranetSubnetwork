# Matomo RerIntranetSubnetwork Plugin (ipv4)

[![Catalogo del riuso software](https://img.shields.io/badge/Riuso%20AGID-Software-%230076e3)](https://developers.italia.it/it/pa/r_emiro)
[![Matomo version](https://img.shields.io/badge/matomo-4.x--dev-success)](https://github.com/matomo-org/matomo)
[![Matomo version](https://img.shields.io/badge/matomo-3.x--dev-success)](https://github.com/matomo-org/matomo)
[![Weblate translation](https://hosted.weblate.org/widgets/matomo/-/communityplugin-rerintranetsubnetwork/svg-badge.svg)](https://hosted.weblate.org/engage/matomo/)
[![GitHub license](https://img.shields.io/github/license/RegioneER/RerIntranetSubnetwork)](https://github.com/RegioneER/RerIntranetSubnetwork/blob/master/LICENSE)
[![GitHub issues](https://img.shields.io/github/issues/RegioneER/RerIntranetSubnetwork)](https://github.com/RegioneER/RerIntranetSubnetwork/issues)
[![GitHub forks](https://img.shields.io/github/forks/RegioneER/RerIntranetSubnetwork)](https://github.com/RegioneER/RerIntranetSubnetwork/network)

## Description

This [Matomo plugin](https://plugins.matomo.org/RerIntranetSubnetwork) adds to your installation a new _dimension_ called **visit_subnetwork** then reports visitor counts coming from private networks.

Settings are easily configurable by Matomo's General Settings administration page. You have two choices.

- [Private Address Space from RCF 1918](https://datatracker.ietf.org/doc/html/rfc1918#section-3), such as localhost 127.0.0.1, and IANA pre-defined networks 192.168.x.x, 172.16.x.x, 10.x.x.x.

- Configure your custom subnet rule by writing a regular expression matching the IPv4 addresses of your other intanet mapped on the web (called [extranet](https://en.wikipedia.org/wiki/Extranet)).

This plugin is a complete refactoring adapted and mantained for actual Matomo, of the first [IntranetSubnetwork](https://github.com/kwasib/IntranetSubNetwork) that was published for Piwik 2.x.

## Screenshots

Report's picture

![Report's picture](screenshots/report.png)

Settings pane in general settings administrative page

![Plugin's settings](screenshots/settings.png)

