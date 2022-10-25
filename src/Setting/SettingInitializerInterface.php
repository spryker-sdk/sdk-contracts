<?php

/**
 * Copyright © 2019-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerSdk\SdkContracts\Setting;

use SprykerSdk\SdkContracts\Entity\SettingInterface;

/**
 * Provides additional initializer for setting.
 */
interface SettingInitializerInterface
{
    /**
     * Specification:
     * - Gives possibility to do additional action during init setting.
     *
     * @api
     *
     * @param \SprykerSdk\SdkContracts\Entity\SettingInterface $setting
     *
     * @return void
     */
    public function initialize(SettingInterface $setting): void;

    /**
     * Specification:
     * - Defines the initializer name to use in configuration files.
     *
     * @api
     *
     * @return string
     */
    public static function getName(): string;
}
