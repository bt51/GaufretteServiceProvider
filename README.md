GaufretteServiceProvider
================

The GaufretteServiceProvider provides the "Gaufrette" library for silex.

Installation
------------

Create a composer.json your project

    {
        "require": {
            "bt51/gaufrette-serviceprovider": "dev-master"
        }
    }

Read more on composer here: http://getcomposer.org

Parameters
----------

* **gaufrette.adapter.class**: The filesystem adapter to use
* **gaufrette.adapter.cache.class**: The cache adapter to use
* **gaufrette.cache.options**: An array of options to pass to the cache adapter class
* **gaufrette.options**: An array of options to pass to the adapter class

Services
--------

* **gaufrette.filesystem**: Instance of dflydev\markdown\MarkdownParser
* **gaufrette.cache**: Instance of Gaufrette\Adapter\Cache if cache parameter is provider
* **gaufrette.adapter**: Instance of Gaufrette\Adapter\{gaufrette.adapter.class}
* **gaufrette.adapter.cache**: Instance of Gaufrette\Adapter\{gaufrette.adapter.cache.class} if provided

Registering
----------

See the *example/* directory to see how to register the service

License
-------

MIT
