<?php

/**
 * Copyright © 2019-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerSdk\SdkContracts\Entity;

/**
 * Provides placeholder stucture for resolving values.
 */
interface PlaceholderInterface
{
    /**
     * Specification:
     * - Placeholder name.
     * - Shortcode for replacing values in string command
     *
     * @api
     *
     * @return string
     */
    public function getName(): string;

    /**
     * Specification:
     * - Returns value resolver name.
     *
     * @api
     *
     * @return string
     */
    public function getValueResolver(): string;

    /**
     * Specification:
     * - Returns configuration for Placeholder.
     *
     * @api
     *
     * @return array
     */
    public function getConfiguration(): array;

    /**
     * Specification:
     * - Returns `true` if placeholde optional, `false` if it's required.
     *
     * @api
     *
     * @return bool
     */
    public function isOptional(): bool;
}
