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
     * - Returns a placeholder name.
     * - See https://github.com/spryker-sdk/sdk/tree/master/docs/value_resolver.md.
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
     * - Returns configuration for a placeholder.
     *
     * @api
     *
     * @return array
     */
    public function getConfiguration(): array;

    /**
     * Specification:
     * - Returns `true` if placeholde optional.
     * - Returns `false` otherwise.
     *
     * @api
     *
     * @return bool
     */
    public function isOptional(): bool;
}
