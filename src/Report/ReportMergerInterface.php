<?php

/**
 * Copyright © 2019-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerSdk\SdkContracts\Report;

interface ReportMergerInterface
{
    /**
     * @param array<\SprykerSdk\SdkContracts\Report\ReportInterface> $violationReports
     *
     * @return \SprykerSdk\SdkContracts\Report\ReportInterface
     */
    public function merge(array $violationReports): ReportInterface;
}
