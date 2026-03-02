<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Glue\SalesOrderThresholdsRestApi;

use Spryker\Glue\Kernel\AbstractFactory;
use Spryker\Glue\SalesOrderThresholdsRestApi\Processor\Mapper\SalesOrderThresholdMapper;
use Spryker\Glue\SalesOrderThresholdsRestApi\Processor\Mapper\SalesOrderThresholdMapperInterface;

class SalesOrderThresholdsRestApiFactory extends AbstractFactory
{
    public function createSalesOrderThresholdMapper(): SalesOrderThresholdMapperInterface
    {
        return new SalesOrderThresholdMapper();
    }
}
