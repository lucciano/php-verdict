<?php

/**
 * Interface definition for contexts to implement, who wish to plugin to verdict.
 * @author Ryan Fink <ryanjfink@gmail.com>
 * @since  May 14, 2012
 */

namespace Verdict\Context;

interface ContextInterface
{
    /**
     * Get our value with the given key
     * @param string $key
     * @return string
     */
    public function getValue($key);
    
    /**
     * Set value with the given key/val
     * @param string $key
     * @param mixed $value
     * @return ContextInterface
     */
    public function setValue($key, $value);
}
