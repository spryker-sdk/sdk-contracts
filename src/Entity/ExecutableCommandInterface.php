<?php

/**
 * Copyright © 2019-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerSdk\SdkContracts\Entity;

use SprykerSdk\SdkContracts\CommandRunner\CommandResponseInterface;

interface ExecutableCommandInterface extends CommandInterface
{
    /**
     * @param array<string, mixed> $resolvedValues
     *
     * @return \SprykerSdk\SdkContracts\CommandRunner\CommandResponseInterface
     */
    public function execute(array $resolvedValues): CommandResponseInterface;
}
