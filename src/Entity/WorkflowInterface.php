<?php

/**
 * Copyright © 2019-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerSdk\SdkContracts\Entity;

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

    /**
     * @return string
     */
    public function getCode(): string;

    /**
     * @return \SprykerSdk\SdkContracts\Entity\WorkflowInterface|null
     */
    public function getParent(): ?WorkflowInterface;
}
