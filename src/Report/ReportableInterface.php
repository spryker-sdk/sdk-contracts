<?php

/**
 * Copyright © 2019-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerSdk\SdkContracts\Report;

/**
 * Interface for receiving reports from the command.
 */
interface ReportableInterface
{
    /**
     * Specification:
     * - Returns a report.
     *
     * @api
     *
     * @return \SprykerSdk\SdkContracts\Report\ReportInterface|null
     */
    public function getReport(): ?ReportInterface;
}
