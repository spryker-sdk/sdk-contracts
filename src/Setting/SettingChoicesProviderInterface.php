<?php

/**
 * Copyright © 2019-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerSdk\SdkContracts\Setting;

use SprykerSdk\SdkContracts\Entity\SettingInterface;

/**
 * Provides choice for setting.
 */
interface SettingChoicesProviderInterface
{
    /**
     * Specification:
     * - Gives possibility to show custom select choice during init setting.
     *
     * @api
     *
     * @param \SprykerSdk\SdkContracts\Entity\SettingInterface $setting
     *
     * @return array<string>
     */
    public function getChoices(SettingInterface $setting): array;
}
