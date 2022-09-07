<?php

/**
 * Copyright © 2019-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerSdk\SdkContracts\Report\Violation;

use SprykerSdk\SdkContracts\Report\ReportableInterface;

interface ViolationReportableInterface extends ReportableInterface
{
    /**
     * @return \SprykerSdk\SdkContracts\Report\Violation\ViolationReportInterface|null
     */
    public function getReport(): ?ViolationReportInterface;
}
