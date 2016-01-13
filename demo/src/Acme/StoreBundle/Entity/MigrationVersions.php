<?php

namespace Acme\StoreBundle\Entity;

/**
 * MigrationVersions
 */
class MigrationVersions
{
    /**
     * @var string
     */
    private $version;


    /**
     * Get version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }
}
