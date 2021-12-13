<?php

/**
 * Copyright © 2019-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerSdk\SdkContracts\Entity\Lifecycle;

interface PersistentLifecycleInterface extends LifecycleInterface
{
    /**
     * @return \SprykerSdk\SdkContracts\Entity\Lifecycle\LifecycleEventDataInterface
     */
    public function getRemovedEventData(): LifecycleEventDataInterface;
}
