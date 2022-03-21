<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\TestFramework\Catalog\Model\Product\Option\DataProvider\Type;

use Magento\Catalog\Api\Data\ProductCustomOptionInterface;
use Magento\TestFramework\Catalog\Model\Product\Option\DataProvider\Type\AbstractBase;

/**
 * Data provider for custom options from date group with type "date & time".
 */
class DateTime extends AbstractBase
{
    /**
     * @inheritdoc
     */
    protected function getType(): string
    {
        return ProductCustomOptionInterface::OPTION_TYPE_DATE_TIME;
    }
}
