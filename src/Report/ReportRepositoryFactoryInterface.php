<?php

/**
 * Copyright © 2019-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerSdk\SdkContracts\Report;

use SprykerSdk\SdkContracts\Entity\ContextInterface;

interface ReportRepositoryFactoryInterface
{
    /**
     * @param \SprykerSdk\SdkContracts\Entity\ContextInterface $context
     *
     * @return \SprykerSdk\SdkContracts\Report\ReportRepositoryInterface
     */
    public function createByContext(ContextInterface $context): ReportRepositoryInterface;
}
