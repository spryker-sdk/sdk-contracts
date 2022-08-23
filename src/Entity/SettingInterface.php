<?php

/**
 * Copyright © 2019-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerSdk\SdkContracts\Entity;

interface SettingInterface
{
    /**
     * @var string
     */
    public const STRATEGY_MERGE = 'merge';

    /**
     * @var string
     */
    public const STRATEGY_REPLACE = 'replace';

    /**
     * @return string
     */
    public function getPath(): string;

    /**
     * @return mixed
     */
    public function getValues();

    /**
     * @param mixed $values
     *
     * @return void
     */
    public function setValues($values): void;

    /**
     * @return string
     */
    public function getStrategy(): string;

    /**
     * @return string
     */
    public function getType(): string;

    /**
     * Possible values ['shared', 'local', 'sdk']
     *
     * @return string
     */
    public function getSettingType(): string;

    /**
     * @return bool
     */
    public function hasInitialization(): bool;

    /**
     * @return string|null
     */
    public function getInitializationDescription(): ?string;

    /**
     * @return string|null
     */
    public function getInitializer(): ?string;

    /**
     * @return bool
     */
    public function isProject(): bool;

    /**
     * @return bool
     */
    public function isShared(): bool;

    /**
     * @return bool
     */
    public function isLocal(): bool;
}
