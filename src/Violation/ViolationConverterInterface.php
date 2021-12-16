<?php

/**
 * Copyright © 2019-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerSdk\SdkContracts\Violation;

interface ViolationConverterInterface
{
    /**
     * @param array $configuration
     *
     * @return void
     */
    public function configure(array $configuration): void;

    /**
     * @return \SprykerSdk\SdkContracts\Violation\ViolationReportInterface|null
     */
    public function convert(): ?ViolationReportInterface;
}
