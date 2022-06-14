<?php

/**
 * Copyright © 2019-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerSdk\SdkContracts\Report;

use SprykerSdk\SdkContracts\Entity\ContextInterface;

interface ReportGeneratorFactoryInterface
{
    /**
     * @param \SprykerSdk\SdkContracts\Entity\ContextInterface $context
     *
     * @return \SprykerSdk\SdkContracts\Report\ReportGeneratorInterface
     */
    public function getReportGeneratorByContext(ContextInterface $context): ReportGeneratorInterface;
}
