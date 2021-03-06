<?php

/**
 * Copyright © 2019-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerSdk\SdkContracts\Logger;

use SprykerSdk\SdkContracts\Events\EventInterface;

interface EventLoggerInterface
{
    /**
     * @param \SprykerSdk\SdkContracts\Events\EventInterface $event
     *
     * @return void
     */
    public function logEvent(EventInterface $event): void;
}
