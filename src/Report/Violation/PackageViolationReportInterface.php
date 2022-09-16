<?php

/**
 * Copyright © 2019-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerSdk\SdkContracts\Report\Violation;

/**
 * Provides violation package structure.
 */
interface PackageViolationReportInterface
{
    /**
     * Specification:
     * - Returns package name.
     *
     * @api
     *
     * @return string
     */
    public function getPackage(): string;

    /**
     * Specification:
     * - Returns path to the package.
     *
     * @api
     *
     * @return string
     */
    public function getPath(): string;

    /**
     * Specification:
     * - Returns violation list for the package layer.
     *
     * @api
     *
     * @return array<\SprykerSdk\SdkContracts\Report\Violation\ViolationInterface>
     */
    public function getViolations(): array;

    /**
     * Specification:
     * - Returns violation list for the package files.
     *
     * @api
     *
     * @return array<string, array<\SprykerSdk\SdkContracts\Report\Violation\ViolationInterface>>
     */
    public function getFileViolations(): array;
}
