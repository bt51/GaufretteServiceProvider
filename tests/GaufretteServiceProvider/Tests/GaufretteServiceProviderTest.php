<?php

/*
 * This file is part of GaufretteServiceProvider
 *
 * (c) Ben Tollakson <ben.tollakson@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace GaufretteServiceProvider\Tests;

use Silex\Application;
use Bt51\Silex\Provider\GaufretteServiceProvider\GaufretteServiceProvider;

class GaufretteServiceProviderTest extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        if (!class_exists('Gaufrette\\Filesystem')) {
            $this->markTestSkipped('Gaufrette is not installed');
        }
    }
    
    public function testSilexGaufrette()
    {
        
        $app = new Application();
        
        $app->register(new GaufretteServiceProvider(),
                       array('gaufrette.adapter.class' => 'InMemory'));
        
        $this->assertInstanceOf('\\Gaufrette\\Filesystem', $app['gaufrette.filesystem']);
    }
}
