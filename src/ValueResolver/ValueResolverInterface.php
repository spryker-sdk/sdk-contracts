<?php

/**
 * Copyright © 2019-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerSdk\SdkContracts\ValueResolver;

use SprykerSdk\SdkContracts\Entity\ContextInterface;

/**
 * Provides value resolver data structure.
 */
interface ValueResolverInterface
{
    /**
     * Specification:
     * - Returns identifier.
     *
     * @api
     *
     * @return string
     */
    public function getId(): string;

    /**
     * Specification:
     * - Returns description.
     *
     * @api
     *
     * @return string
     */
    public function getDescription(): string;

    /**
     * Specification:
     * - Returns setting paths for extraction of values from settings.
     *
     * @api
     *
     * @return array<string>
     */
    public function getSettingPaths(): array;

    /**
     * Specification:
     * - Returns value type.
     *
     * @api
     *
     * @return string
     */
    public function getType(): string;

    /**
     * Specification:
     * - Returns alias for sdk option if it's needed.
     *
     * @api
     *
     * @return string|null
     */
    public function getAlias(): ?string;

    /**
     * Specification:
     * - Returns value that can be resolved by additional parameters.
     *
     * @api
     *
     * @param \SprykerSdk\SdkContracts\Entity\ContextInterface $context
     * @param array $settingValues
     * @param bool $optional
     *
     * @return mixed
     */
    public function getValue(ContextInterface $context, array $settingValues, bool $optional = false);

    /**
     * Specification:
     * - Provides default value.
     *
     * @api
     *
     * @return mixed
     */
    public function getDefaultValue();

    /**
     * Specification:
     * - Returns values for choosing.
     *
     * @api
     *
     * @param array $settingValues
     * @param array $resolvedValues
     *
     * @return array
     */
    public function getChoiceValues(array $settingValues, array $resolvedValues = []): array;
}
