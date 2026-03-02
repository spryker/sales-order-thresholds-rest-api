<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\SalesOrderThresholdsRestApi;

use Spryker\Zed\Kernel\AbstractBundleDependencyProvider;
use Spryker\Zed\Kernel\Container;
use Spryker\Zed\SalesOrderThresholdsRestApi\Dependency\Facade\SalesOrderThresholdsRestApiToSalesOrderThresholdFacadeBridge;

/**
 * @method \Spryker\Zed\SalesOrderThresholdsRestApi\SalesOrderThresholdsRestApiConfig getConfig()
 */
class SalesOrderThresholdsRestApiDependencyProvider extends AbstractBundleDependencyProvider
{
    /**
     * @var string
     */
    public const FACADE_SALES_ORDER_THRESHOLD = 'FACADE_SALES_ORDER_THRESHOLD';

    public function provideBusinessLayerDependencies(Container $container): Container
    {
        $container = parent::provideBusinessLayerDependencies($container);
        $container = $this->addSalesOrderThresholdFacade($container);

        return $container;
    }

    protected function addSalesOrderThresholdFacade(Container $container): Container
    {
        $container->set(static::FACADE_SALES_ORDER_THRESHOLD, function (Container $container) {
            return new SalesOrderThresholdsRestApiToSalesOrderThresholdFacadeBridge($container->getLocator()->salesOrderThreshold()->facade());
        });

        return $container;
    }
}
