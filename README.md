AllegroComparator
===

Run the server: `bin/console server:run`

Fix code style violations: `vendor/bin/php-cs-fixer fix`

---

Other notes
===

use env vars + .env file in dev mode
https://symfony.com/doc/current/best_practices/configuration.html#infrastructure-related-configuration

.env.dist for every var that should be defined
https://symfony.com/doc/current/best_practices/configuration.html#canonical-parameters

To do
---

* configure packages
    * docs for options: https://symfony.com/doc/current/reference/index.html
    * dumping options in console: php bin/console config:dump-reference
* configure http://cs.sensiolabs.org/
    continue from `general_phpdoc_annotation_remove`

Assets
---

* https://github.com/symfony/webpack-encore
* https://webpack.js.org/
* https://symfony.com/doc/current/frontend.html
* https://symfony.com/doc/current/bundles/FOSJsRoutingBundle/index.html
* https://symfony.com/doc/current/components/asset.html

To probably use
---

* https://symfony.com/doc/current/components/dom_crawler.html

To check out
---

* https://symfony.com/doc/current/bundles/NelmioApiDocBundle/index.html
* https://symfony.com/doc/current/components/browser_kit.html
* https://symfony.com/doc/current/components/cache.html
