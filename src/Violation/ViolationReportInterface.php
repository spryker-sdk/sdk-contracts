<?php

/**
 * Copyright © 2019-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerSdk\SdkContracts\Violation;

use SprykerSdk\SdkContracts\Report\ReportInterface;

interface ViolationReportInterface extends ReportInterface
{
    /**
     * @return string
     */
    public function getProject(): string;

    /**
     * @return array<\SprykerSdk\SdkContracts\Violation\PackageViolationReportInterface>
     */
    public function getPackages(): array;

    /**
     * @return string
     */
    public function getPath(): string;

    /**
     * @return array<\SprykerSdk\SdkContracts\Violation\ViolationInterface>
     */
    public function getViolations(): array;
}
