<?php

/**
 * Copyright © 2019-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerSdk\SdkContracts\Event;

/**
 * Provides collectable event.
 */
interface CollectableEventInterface
{
    /**
     * Specification:
     * - Defines the event payload.
     *
     * @api
     *
     * @return array<mixed>
     */
    public function getPayLoad(): array;
}
