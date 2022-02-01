<?php

/**
 * Copyright © 2019-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerSdk\SdkContracts\Entity;

use SprykerSdk\SdkContracts\Entity\Lifecycle\LifecycleInterface;

interface TaskInterface
{
    /**
     * @return string
     */
    public function getId(): string;

    /**
     * @return string
     */
    public function getShortDescription(): string;

    /**
     * @return array<\SprykerSdk\SdkContracts\Entity\CommandInterface>
     */
    public function getCommands(): array;

    /**
     * @return array<\SprykerSdk\SdkContracts\Entity\PlaceholderInterface>
     */
    public function getPlaceholders(): array;

    /**
     * @return string|null
     */
    public function getHelp(): ?string;

    /**
     * @return string
     */
    public function getVersion(): string;

    /**
     * @return bool
     */
    public function isDeprecated(): bool;

    /**
     * @return bool
     */
    public function isOptional(): bool;

    /**
     * @return string|null
     */
    public function getSuccessor(): ?string;

    /**
     * @return \SprykerSdk\SdkContracts\Entity\Lifecycle\LifecycleInterface
     */
    public function getLifecycle(): LifecycleInterface;
}
