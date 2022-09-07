<?php

/**
 * Copyright © 2019-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerSdk\SdkContracts\Entity;

/**
 * Provides error message if command failed.
 */
interface ErrorCommandInterface
{
    /**
     * Specification:
     * - Returns message.
     *
     * @api
     *
     * @return string
     */
    public function getErrorMessage(): string;
}
