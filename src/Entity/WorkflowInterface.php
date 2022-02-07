<?php

/**
 * Copyright © 2019-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerSdk\SdkContracts\Entity;

use SprykerSdk\SdkContracts\Entity\Lifecycle\LifecycleInterface;

interface WorkflowInterface
{
    /**
     * @return string
     */
    public function getProject(): string;

    /**
     * @return array
     */
    public function getStatus(): array;

    /**
     * @return string
     */
    public function getWorkflow(): string;
}
