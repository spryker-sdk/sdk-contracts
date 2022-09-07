<?php

/**
 * Copyright © 2019-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerSdk\SdkContracts\Entity;

/**
 * Provides setting stucture.
 */
interface SettingInterface
{
    /**
     * Specification:
     * - Merge strategy name for values.
     *
     * @api
     *
     * @var string
     */
    public const STRATEGY_MERGE = 'merge';

    /**
     * Specification:
     * - Replace strategy name for values.
     *
     * @api
     *
     * @var string
     */
    public const STRATEGY_REPLACE = 'replace';

    /**
     * Specification:
     * - Returns setting name.
     *
     * @api
     *
     * @return string
     */
    public function getPath(): string;

    /**
     * Specification:
     * - Returns setting values.
     *
     * @api
     *
     * @return mixed
     */
    public function getValues();

    /**
     * Specification:
     * - Sets setting values.
     *
     * @api
     *
     * @param mixed $values
     *
     * @return void
     */
    public function setValues($values): void;

    /**
     * Specification:
     * - Returns strategy.
     * - Supported types SettingInterface::STRATEGY_MERGE, SettingInterface::STRATEGY_REPLACE.
     *
     * @api
     *
     * @return string
     */
    public function getStrategy(): string;

    /**
     * Specification:
     * - Returns type of value.
     *
     * @api
     *
     * @return string
     */
    public function getType(): string;

    /**
     * Specification:
     * - Return setting type.
     * - Supported types: `shared, `local`, `sdk`.
     *
     * @api
     *
     * @return string
     */
    public function getSettingType(): string;

    /**
     * Specification:
     * - Setting value has Initializer.
     *
     * @api
     *
     * @return bool
     */
    public function hasInitialization(): bool;

    /**
     * Specification:
     * - Returns Initializer description.
     *
     * @api
     *
     * @return string|null
     */
    public function getInitializationDescription(): ?string;

    /**
     * Specification:
     * - Returns Initializer name.
     *
     * @api
     *
     * @return string|null
     */
    public function getInitializer(): ?string;

    /**
     * Specification:
     * - Returns `true` if it's project settings, `false` if it's SDK setting.
     *
     * @api
     *
     * @return bool
     */
    public function isProject(): bool;

    /**
     * Specification:
     * - Returns `true` if it's project settings and it's shared. `false` if it's locall setting.
     *
     * @api
     *
     * @return bool
     */
    public function isShared(): bool;
}
