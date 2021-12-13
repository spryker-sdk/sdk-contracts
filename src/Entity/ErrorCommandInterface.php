<?php

/**
 * Copyright © 2019-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerSdk\SdkContracts\Entity;

use SprykerSdk\SdkContracts\CommandRunner\CommandResponseInterface;

interface ErrorCommandInterface
{
    /**
     * @param \SprykerSdk\SdkContracts\CommandRunner\CommandResponseInterface $commandResponse
     *
     * @return string
     */
    public function getErrorMessage(CommandResponseInterface $commandResponse): string;
}
