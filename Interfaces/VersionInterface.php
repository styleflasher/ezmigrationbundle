<?php

namespace Kaliop\eZMigrationBundle\Interfaces;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\DBAL\Connection;

/**
 * Interface VersionInterface
 *
 * All version definitions need to implement this interface
 */
interface VersionInterface
{
    /**
     * Execute a version definition.
     */
    public function execute();
}
