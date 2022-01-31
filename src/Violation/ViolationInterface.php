<?php

/**
 * Copyright © 2019-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerSdk\SdkContracts\Violation;

interface ViolationInterface
{
    public const SEVERITY_INFO = 'INFO';
    public const SEVERITY_WARNING = 'WARNING';
    public const SEVERITY_ERROR = 'ERROR';

    /**
     * @return string
     */
    public function getId(): string;

    /**
     * @return string
     */
    public function getMessage(): string;

    /**
     * @return bool
     */
    public function isFixable(): bool;

    /**
     * INFO, WARNING, ERROR
     *
     * @return string
     */
    public function getSeverity(): string;

    /**
     * @return string
     */
    public function producedBy(): string;

    /**
     * @return string|null
     */
    public function priority(): ?string;

    /**
     * @return string|null
     */
    public function getClass(): ?string;

    /**
     * @return int|null
     */
    public function getStartLine(): ?int;

    /**
     * @return int|null
     */
    public function getEndLine(): ?int;

    /**
     * @return int|null
     */
    public function getStartColumn(): ?int;

    /**
     * @return int|null
     */
    public function getEndColumn(): ?int;

    /**
     * @return string|null
     */
    public function getMethod(): ?string;

    /**
     * @return array
     */
    public function getAdditionalAttributes(): array;

    /**
     * @return \SprykerSdk\SdkContracts\Violation\ViolationFixInterface|null
     */
    public function getFix(): ?ViolationFixInterface;
}
