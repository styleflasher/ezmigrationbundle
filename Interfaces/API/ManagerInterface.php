<?php

namespace Kaliop\eZMigrationBundle\Interfaces\API;

/**
 * Interface that all migration definition handlers need to implement.
 */
interface ManagerInterface {

    /**
     * Method to handle the create operation of the migration instructions
     */
    public function create();

    /**
     * Method to handle the update operation of the migration instructions
     */
    public function update();

    /**
     * Method to handle the delete operation of the migration instructions
     */
    public function delete();

    /**
     * Specify the parsed DSL instruction array
     *
     * @param array $dsl
     */
    public function setDSL( array $dsl = array() );
}
