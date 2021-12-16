<?php

/**
 * Copyright © 2019-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerSdk\SdkContracts\Violation;

interface ViolationReportInterface
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
     * @return array<\SprykerSdk\SdkContracts\Violation\ViolationReportConverterInterface>>
     */
    public function getViolations(): array;
}
