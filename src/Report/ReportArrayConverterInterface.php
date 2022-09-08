<?php

/**
 * Copyright © 2019-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerSdk\SdkContracts\Report;

/**
 * Provides functionality to convert sniffer report data to the report object.
 */
interface ReportArrayConverterInterface
{
    /**
     * Specification:
     * - Returns report type name.
     *
     * @api
     *
     * @return string
     */
    public function getSupportedReportType(): string;

    /**
     * Specification:
     * - Returns report class name.
     *
     * @api
     *
     * @return class-string
     */
    public function getSupportedReportClass(): string;

    /**
     * Specification:
     * - Convert report data to array.
     *
     * @api
     *
     * @param \SprykerSdk\SdkContracts\Report\ReportInterface $report
     *
     * @return array<string, mixed>
     */
    public function toArray(ReportInterface $report): array;

    /**
     * Specification:
     * - Convert report array to an report.
     *
     * @api
     *
     * @param array $arrayData
     *
     * @return \SprykerSdk\SdkContracts\Report\ReportInterface
     */
    public function fromArray(array $arrayData): ReportInterface;
}
