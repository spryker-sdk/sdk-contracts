<?php

/**
 * Copyright © 2019-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerSdk\SdkContracts\Violation;

interface ViolationFixInterface
{
    public const TYPE_MANUAL = 'manual';
    public const TYPE_PATCH = 'patch';
    public const TYPE_TASK = 'task';
    public const TYPE_REFERENCE = 'reference';

    /**
     * @return string
     */
    public function getType(): string;

    /**
     * @return string
     */
    public function getAction(): string;
}
