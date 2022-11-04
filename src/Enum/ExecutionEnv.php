<?php

/**
 * Copyright © 2019-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerSdk\SdkContracts\Enum;

final class ExecutionEnv
{
    /**
     * Developer execution environment name.
     *
     * @var string
     */
    public const DEVELOPER = 'developer';

    /**
     * CI execution environment name.
     *
     * @var string
     */
    public const CI = 'ci';
}
