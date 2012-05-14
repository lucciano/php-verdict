<?php

/**
 * Compile our configuration to a greater than / equal to clause.
 * @author  Ryan Fink <rfink@redventures.net>
 * @since   April 16, 2012
 */

namespace Verdict\Filter\Comparison;

use Verdict\Filter\FilterInterface;

class GreaterThanEqualTo extends ComparisonAbstract implements FilterInterface
{
    /**
     * @inheritDoc
     */
	protected $requiredParams = array(
		'configValue'
	);

    /**
     * @inheritDoc
     */
	public function evaluate()
    {
		return $this->context->getValue($this->contextKey) >= $this->params['configValue'];
	}
}
