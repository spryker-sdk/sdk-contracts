<?php

/**
 * Copyright © 2019-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerSdk\Sdk\Contracts\Entity;

use SprykerSdk\Sdk\Contracts\CommandRunner\CommandResponseInterface;

interface ExecutableCommandInterface extends CommandInterface
{
    /**
     * @param array<string, mixed> $resolvedValues
     *
     * @return \SprykerSdk\Sdk\Contracts\CommandRunner\CommandResponseInterface
     */
    public function execute(array $resolvedValues): CommandResponseInterface;
}
