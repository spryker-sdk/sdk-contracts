<?php

/**
 * Copyright © 2019-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerSdk\SdkContracts\Report\Violation;

use SprykerSdk\SdkContracts\Report\ReportableInterface;

/**
 * Provides violation package structure.
 */
interface ViolationReportableInterface extends ReportableInterface
{
    /**
     * Specification:
     * - Returns the report.
     *
     * @api
     *
     * @return \SprykerSdk\SdkContracts\Report\Violation\ViolationReportInterface|null
     */
    public function getReport(): ?ViolationReportInterface;
}
