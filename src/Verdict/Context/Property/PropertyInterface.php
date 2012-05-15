<?php

/**
 * Interface for defining context properties for verdict.
 * @author Ryan Fink <ryanjfink@gmail.com>
 * @since  May 14, 2012
 */

namespace Verdict\Context\Property;

interface PropertyInterface
{    
    /**
     * Get source, must return in the format:
     *   [
     *      {
     *          value: 1,
     *          label: 'My Label'
     *      },
     *      {
     *          value: 2
     *          label: 'My Label 2'
     *      }
     *   ]
     *   - to work with jQuery UI autocomplete
     * @param array $params
     * @return array
     */
    public function getSource($params);
    
    /**
     * Get the type of our property
     * @return string
     */
    public function getType();
    
    /**
     * Get property with given name
     * @return mixed
     */
    public function getProperty($name);
}
