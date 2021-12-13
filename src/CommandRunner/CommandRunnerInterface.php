<?php

/**
 * Copyright © 2019-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerSdk\SdkContracts\CommandRunner;

use SprykerSdk\SdkContracts\Entity\CommandInterface;

interface CommandRunnerInterface
{
    /**
     * @param \SprykerSdk\SdkContracts\Entity\CommandInterface $command
     *
     * @return bool
     */
    public function canHandle(CommandInterface $command): bool;

    /**
     * @param \SprykerSdk\SdkContracts\Entity\CommandInterface $command
     * @param array<string, mixed> $resolvedValues
     *
     * @return \SprykerSdk\SdkContracts\CommandRunner\CommandResponseInterface
     */
    public function execute(CommandInterface $command, array $resolvedValues): CommandResponseInterface;
}
