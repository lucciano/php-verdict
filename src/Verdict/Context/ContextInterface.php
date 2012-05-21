<?php

/**
 * Interface definition for contexts to implement, who wish to plugin to verdict.
 * @author Ryan Fink <ryanjfink@gmail.com>
 * @since  May 14, 2012
 */

namespace Verdict\Context;

use Verdict\Context\Property\PropertyInterface;

interface ContextInterface
{
    /**
     * Get our value with the given key
     * @param string $key
     * @return string
     */
    public function getValue($key);

    /**
     * Get array of properties
     * @return array
     */
    public function getProperties();
}
