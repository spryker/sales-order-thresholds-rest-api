<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Glue\SalesOrderThresholdsRestApi\Processor\Mapper;

use ArrayObject;
use Generated\Shared\Transfer\QuoteTransfer;
use Generated\Shared\Transfer\RestCartsAttributesTransfer;
use Generated\Shared\Transfer\RestCartsThresholdsTransfer;

class SalesOrderThresholdMapper implements SalesOrderThresholdMapperInterface
{
    public function mapQuoteTransferToRestCartsAttributesTransfer(
        QuoteTransfer $quoteTransfer,
        RestCartsAttributesTransfer $restCartsAttributesTransfer
    ): RestCartsAttributesTransfer {
        $restCartsAttributesTransfer->setThresholds(new ArrayObject());

        foreach ($quoteTransfer->getSalesOrderThresholdValues() as $salesOrderThresholdValueTransfer) {
            $restCartsThresholdsTransfer = (new RestCartsThresholdsTransfer())
                ->fromArray($salesOrderThresholdValueTransfer->toArray(), true)
                ->setType($salesOrderThresholdValueTransfer->getSalesOrderThresholdTypeOrFail()->getKey());

            $restCartsAttributesTransfer->addThreshold($restCartsThresholdsTransfer);
        }

        return $restCartsAttributesTransfer;
    }
}
