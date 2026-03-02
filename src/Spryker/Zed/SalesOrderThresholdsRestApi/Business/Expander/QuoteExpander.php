<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\SalesOrderThresholdsRestApi\Business\Expander;

use Generated\Shared\Transfer\QuoteTransfer;
use Spryker\Zed\SalesOrderThresholdsRestApi\Dependency\Facade\SalesOrderThresholdsRestApiToSalesOrderThresholdFacadeInterface;

class QuoteExpander implements QuoteExpanderInterface
{
    /**
     * @var \Spryker\Zed\SalesOrderThresholdsRestApi\Dependency\Facade\SalesOrderThresholdsRestApiToSalesOrderThresholdFacadeInterface
     */
    protected $salesOrderThresholdFacade;

    public function __construct(SalesOrderThresholdsRestApiToSalesOrderThresholdFacadeInterface $salesOrderThresholdFacade)
    {
        $this->salesOrderThresholdFacade = $salesOrderThresholdFacade;
    }

    public function expandQuoteWithSalesOrderThresholdValues(QuoteTransfer $quoteTransfer): QuoteTransfer
    {
        return $this->salesOrderThresholdFacade->expandQuoteWithSalesOrderThresholdValues($quoteTransfer);
    }
}
