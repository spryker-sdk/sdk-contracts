<?php

/**
 * Copyright © 2019-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerSdk\SdkContracts\Report;

interface ReportArrayConverterInterface
{
    /**
     * @return string
     */
    public function getSupportedReportType(): string;

    /**
     * @return class-string
     */
    public function getSupportedReportClass(): string;

    /**
     * @param \SprykerSdk\SdkContracts\Report\ReportInterface $report
     *
     * @return array<string, mixed>
     */
    public function toArray(ReportInterface $report): array;

    /**
     * @param array $arrayData
     *
     * @return \SprykerSdk\SdkContracts\Report\ReportInterface
     */
    public function fromArray(array $arrayData): ReportInterface;
}
