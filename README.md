AllegroComparator
===

Run the server:
`bin/console server:run`

Fix code style violations:
`vendor/bin/php-cs-fixer fix`

Compile assets:
`yarn run encore dev`

Recompile assets automatically when files change:
`yarn run encore dev --watch`

Compile assets + minifiy + optimize => for production:
`yarn run encore production`

Features
---

* [ ] Paste auctions list page link to make comparison of the auctions
* [ ] Add more auctions to the comparison by pasting another auctions list page link
* [ ] Add an auction to the comparison by adding its link
* [ ] Remove (discard) auctions from the comparison
* [ ] Parse auction features:
    * [ ] Buy now price
    * [ ] VAT invoice or not
        * [ ] From the technical details box
        * [ ] From the keywords in content
* [ ] Allow manual override of the auction features
* [ ] Notes for auctions
* [ ] Adding custom features of auctions
    * [ ] Boolean flags
    * [ ] Numerical indexes
* [ ] Sorting by features (multiple)
* [ ] Refresh from Allegro
* [ ] Comparison graph

To do
---

* configure packages
    * docs for options: https://symfony.com/doc/current/reference/index.html
    * dumping options in console: php bin/console config:dump-reference
* configure http://cs.sensiolabs.org/
    * continue from `general_phpdoc_annotation_remove`
    * https://hackernoon.com/how-to-configure-phpstorm-to-use-php-cs-fixer-1844991e521f
* http://flexrecipes.org/recipes/popular
* use env vars + .env file in dev mode
    https://symfony.com/doc/current/best_practices/configuration.html#infrastructure-related-configuration
* .env.dist for every var that should be defined
    https://symfony.com/doc/current/best_practices/configuration.html#canonical-parameters

Assets
---

* https://webpack.js.org/
* https://symfony.com/doc/current/frontend.html
* https://symfony.com/doc/current/bundles/FOSJsRoutingBundle/index.html

To probably use
---

* https://symfony.com/doc/current/components/dom_crawler.html

To check out
---

* https://symfony.com/doc/current/bundles/NelmioApiDocBundle/index.html
* https://symfony.com/doc/current/components/browser_kit.html
* https://symfony.com/doc/current/components/cache.html
