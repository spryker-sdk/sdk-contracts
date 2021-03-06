<?php

/**
 * Copyright © 2019-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerSdk\SdkContracts\Entity;

interface CommandInterface
{
    /**
     * @return string
     */
    public function getCommand(): string;

    /**
     * @return string
     */
    public function getType(): string;

    /**
     * @return array<string>
     */
    public function getTags(): array;

    /**
     * @return bool
     */
    public function hasStopOnError(): bool;

    /**
     * @return \SprykerSdk\SdkContracts\Entity\ConverterInterface|null
     */
    public function getConverter(): ?ConverterInterface;

    /**
     * @return string
     */
    public function getStage(): string;
}
