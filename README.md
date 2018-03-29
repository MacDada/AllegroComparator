AllegroComparator
===

* Run the server:
    `bin/console server:run`
* Fix code style violations:
    `vendor/bin/php-cs-fixer fix`
* Compile assets:
    `yarn run encore dev`
* Recompile assets automatically when files change:
    `yarn run encore dev --watch`
* ~~Compile assets + minifiy + optimize => for production:~~
    todo: needs to be configured properly
    `yarn run encore production`
* Add yarn package:
    `yarn add PACKAGE_NAME --dev`

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

Tech stack
---

* [Symfony](https://symfony.com/):
    * PHP framework
* [Yarn](https://yarnpkg.com):
    * JS package/dependency manager
    * Published by Facebook
    * Alternative for [npm](https://www.npmjs.com/)
* [webpack](https://webpack.js.org/):
    * JS build tool; module management
    * Converting assets
    * Alternative for [gulp](https://gulpjs.com/) and [Grunt](https://gruntjs.com/)

To do
---

* remove greet encore module as soon as I have another one
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
* `/favicon.ico` is `404 (Not Found)`

Assets
---

* let's use jquery for now xd
* https://symfony.com/doc/current/bundles/FOSJsRoutingBundle/index.html
* babeljs
    * https://babeljs.io/
    * https://symfony.com/doc/current/frontend/encore/babel.html
    * let's compile modern JS so it is compatibile with older browsers
    * i'm pretty sure I want this
    * it could already be installed, as I tested that for example `const` gets converted into `var` 
* reactjs vs vuejs (I probably need to toss a coin xD)
* sass vs less
    * https://symfony.com/doc/current/frontend/encore/css-preprocessors.html
    * probably better to use sass (although coin tossing might be useful ;p)
* https://symfony.com/doc/current/frontend/encore/postcss.html
* https://yarnpkg.com/en/docs
* webpack
    * https://webpack.js.org/guides/installation/
    * https://webpack.js.org/concepts/
    * https://github.com/webpack/webpack

To probably use
---

* https://symfony.com/doc/current/components/dom_crawler.html

To check out
---

* https://symfony.com/doc/current/bundles/NelmioApiDocBundle/index.html
* https://symfony.com/doc/current/components/browser_kit.html
* https://symfony.com/doc/current/components/cache.html

Other notes
---

* Escaping JS in Twig: https://symfony.com/doc/current/frontend/encore/server-data.html
