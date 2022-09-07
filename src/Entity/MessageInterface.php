<?php

/**
 * Copyright © 2019-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerSdk\SdkContracts\Entity;

/**
 * Provides message structure for output.
 */
interface MessageInterface
{
    /**
     * Specification:
     * - Debug code.
     *
     * @api
     *
     * @var int
     */
    public const DEBUG = 1;

    /**
     * Specification:
     * - Information code.
     *
     * @api
     *
     * @var int
     */
    public const INFO = 2;

    /**
     * Specification:
     * - Success code.
     *
     * @api
     *
     * @var int
     */
    public const SUCCESS = 3;

    /**
     * Specification:
     * - Error code.
     *
     * @api
     *
     * @var int
     */
    public const ERROR = 4;

    /**
     * Specification:
     * - Returns message.
     *
     * @api
     *
     * @return string
     */
    public function getMessage(): string;

    /**
     * Specification:
     * - Returns verbosity for showing needed level.
     *
     * @api
     *
     * @return int
     */
    public function getVerbosity(): int;
}
