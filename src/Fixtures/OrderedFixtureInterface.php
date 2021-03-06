<?php declare(strict_types = 1);

namespace Facile\MongoDbBundle\Fixtures;


/**
 * Ordered Fixture interface needs to be implemented by fixtures,
 * which needs to have a specific order
 *
 * The fixtures without this interfance will be loaded after those with it
 *
 * @author Marcin Moskal <moskalmarcin@yahoo.com>
 */
interface OrderedFixtureInterface
{
    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    public function getOrder();

}
