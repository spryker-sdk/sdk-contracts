<?php

/**
 * Copyright © 2019-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerSdk\SdkContracts\Report\Violation;

use SprykerSdk\SdkContracts\Report\ReportInterface;

/**
 * Provides violation report structure.
 */
interface ViolationReportInterface extends ReportInterface
{
    /**
     * Specification:
     * - Returns project name.
     *
     * @api
     *
     * @return string
     */
    public function getProject(): string;

    /**
     * Specification:
     * - Returns  package list with violations.
     *
     * @api
     *
     * @return array<\SprykerSdk\SdkContracts\Report\Violation\PackageViolationReportInterface>
     */
    public function getPackages(): array;

    /**
     * Specification:
     * - Returns path to the project.
     *
     * @api
     *
     * @return string
     */
    public function getPath(): string;

    /**
     * Specification:
     * - Returns violations for the project layer.
     *
     * @api
     *
     * @return array<\SprykerSdk\SdkContracts\Report\Violation\ViolationInterface>
     */
    public function getViolations(): array;
}
