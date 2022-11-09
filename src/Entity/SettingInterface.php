<?php

/**
 * Copyright © 2019-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerSdk\SdkContracts\Entity;

/**
 * Provides setting structure.
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
     * - Returns a setting path name.
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
     * - Returns strategy name.
     * - Supported name:
     *      - `\SprykerSdk\SdkContracts\Entity\SettingInterface::STRATEGY_MERGE`: Adds new values to existing ones.
     *      - `\SprykerSdk\SdkContracts\Entity\SettingInterface::STRATEGY_REPLACE`: Replaces existing value.
     * - See https://github.com/spryker-sdk/sdk/blob/master/docs/settings.md
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
     * - Setting value has an initializer.
     *
     * @api
     *
     * @return bool
     */
    public function hasInitialization(): bool;

    /**
     * Specification:
     * - Returns `true` if a value should be set by a user in any case.
     * - Returns `false` for default behavior.
     *
     * @api
     *
     * @return bool
     */
    public function isForceAskValue(): bool;

    /**
     * Specification:
     * - Returns an initializer description.
     *
     * @api
     *
     * @return string|null
     */
    public function getInitializationDescription(): ?string;

    /**
     * Specification:
     * - Returns an initializer name.
     *
     * @api
     *
     * @return string|null
     */
    public function getInitializer(): ?string;

    /**
     * Specification:
     * - Returns `true` if it's project settings.
     * - Returns `false` if it's SDK setting.
     *
     * @api
     *
     * @return bool
     */
    public function isProject(): bool;

    /**
     * Specification:
     * - Returns `true` if it's project settings and it's shared.
     * - Returns `false` if it's local setting.
     *
     * @api
     *
     * @return bool
     */
    public function isShared(): bool;

    /**
     * Specification:
     * - Returns `true` if it just created.
     * - Returns `false` if it already has existed.
     *
     * @api
     *
     * @return bool
     */
    public function isFirstInitialization(): bool;
}
