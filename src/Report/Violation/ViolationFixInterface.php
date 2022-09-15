<?php

/**
 * Copyright © 2019-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerSdk\SdkContracts\Report\Violation;

/**
 * Provides violation fix proposition structure.
 */
interface ViolationFixInterface
{
    /**
     * Specification:
     * - Key for the manual fix.
     *
     * @api
     *
     * @var string
     */
    public const TYPE_MANUAL = 'manual';

    /**
     * Specification:
     * - Key for the path fix.
     *
     * @api
     *
     * @var string
     */
    public const TYPE_PATCH = 'patch';

    /**
     * Specification:
     * - Key for the task fix.
     *
     * @api
     *
     * @var string
     */
    public const TYPE_TASK = 'task';

    /**
     * Specification:
     * - Key for the fix by reference.
     *
     * @api
     *
     * @var string
     */
    public const TYPE_REFERENCE = 'reference';

    /**
     * Specification:
     * - Returns type of the fix.
     *
     * @api
     *
     * @return string
     */
    public function getType(): string;

    /**
     * Specification:
     * - Returns action for the fix.
     *
     * @api
     *
     * @return string
     */
    public function getAction(): string;
}
