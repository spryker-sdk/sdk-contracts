<?php

/**
 * Copyright © 2019-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerSdk\SdkContracts\Report;

/**
 * Provides report convertor functionality.
 */
interface ReportConverterInterface
{
    /**
     * Specification:
     * - Provides configuration for a convertor.
     *
     * @api
     *
     * @param array $configuration
     *
     * @return void
     */
    public function configure(array $configuration): void;

    /**
     * Specification:
     * - Converts report data to the report format.
     *
     * @api
     *
     * @return \SprykerSdk\SdkContracts\Report\ReportInterface|null
     */
    public function convert(): ?ReportInterface;
}
