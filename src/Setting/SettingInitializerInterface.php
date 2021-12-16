<?php

/**
 * Copyright © 2019-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerSdk\SdkContracts\Setting;

use SprykerSdk\SdkContracts\Entity\SettingInterface;

interface SettingInitializerInterface
{
    /**
     * @param \SprykerSdk\SdkContracts\Entity\SettingInterface $setting
     *
     * @return void
     */
    public function initialize(SettingInterface $setting): void;
}
