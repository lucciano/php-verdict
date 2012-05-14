<?php

/**
 * Compile our configuration to a reg ex clause.
 * @author  Ryan Fink <rfink@redventures.net>
 * @since   April 16, 2012
 */

namespace Verdict\Filter\Comparison;

use Verdict\Filter\FilterInterface;

class RegEx extends ComparisonAbstract implements FilterInterface
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
	public function evaulate()
	{
		return (boolean) preg_match('/' . preg_quote($this->params['configValue'], '/') . '/', $this->context->getValue($this->contextKey));
	}
}
