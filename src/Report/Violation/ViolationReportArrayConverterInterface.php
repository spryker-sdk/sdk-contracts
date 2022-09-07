<?php

/**
 * Copyright © 2019-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerSdk\SdkContracts\Report\Violation;

use SprykerSdk\SdkContracts\Report\ReportArrayConverterInterface;

interface ViolationReportArrayConverterInterface extends ReportArrayConverterInterface
{
    /**
     * @param array $arrayData
     *
     * @return \SprykerSdk\SdkContracts\Report\Violation\ViolationReportInterface
     */
    public function fromArray(array $arrayData): ViolationReportInterface;
}
