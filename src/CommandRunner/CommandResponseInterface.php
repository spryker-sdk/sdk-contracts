<?php

/**
 * Copyright © 2019-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerSdk\Sdk\Contracts\CommandRunner;

interface CommandResponseInterface
{
    /**
     * @return bool
     */
    public function getIsSuccessful(): bool;

    /**
     * @param bool $isSuccessful
     *
     * @return $this
     */
    public function setIsSuccessful(bool $isSuccessful): static;

    /**
     * @return int
     */
    public function getCode(): int;

    /**
     * @param int $code
     *
     * @return void
     */
    public function setCode(int $code): void;

    /**
     * @return string|null
     */
    public function getErrorMessage(): ?string;

    /**
     * @param string $errorMessage
     *
     * @return $this
     */
    public function setErrorMessage(string $errorMessage): static;
}
