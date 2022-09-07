<?php

/**
 * Copyright © 2019-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerSdk\SdkContracts\Report\Violation;

interface PackageViolationReportInterface
{
    /**
     * @return string
     */
    public function getPackage(): string;

    /**
     * @return string
     */
    public function getPath(): string;

    /**
     * @return array<\SprykerSdk\SdkContracts\Report\Violation\ViolationInterface>
     */
    public function getViolations(): array;

    /**
     * @return array<string, array<\SprykerSdk\SdkContracts\Report\Violation\ViolationInterface>>
     */
    public function getFileViolations(): array;
}
