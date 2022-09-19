<?php

/**
 * Copyright © 2019-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerSdk\SdkContracts\Report\Violation;

/**
 * Provides violation structure.
 */
interface ViolationInterface
{
    /**
     * Specification:
     * - Severety info key.
     *
     * @api
     *
     * @var string
     */
    public const SEVERITY_INFO = 'INFO';

    /**
     * Specification:
     * - Severety waring key.
     *
     * @api
     *
     * @var string
     */
    public const SEVERITY_WARNING = 'WARNING';

    /**
     * Specification:
     * - Severety error key.
     *
     * @api
     *
     * @var string
     */
    public const SEVERITY_ERROR = 'ERROR';

    /**
     * Specification:
     * - Returns violation id.
     *
     * @api
     *
     * @return string
     */
    public function getId(): string;

    /**
     * Specification:
     * - Returns violation message.
     *
     * @api
     *
     * @return string
     */
    public function getMessage(): string;

    /**
     * Specification:
     * - Returns `true` if error is fixible.
     * - Returns `false` otherwise.
     *
     * @api
     *
     * @return bool
     */
    public function isFixable(): bool;

    /**
     * Specification:
     * - Returns severity level.
     * - Supports severity keys:
     *      - `\SprykerSdk\SdkContracts\Report\Violation\ViolationInterface::SEVERITY_INFO`.
     *      - `\SprykerSdk\SdkContracts\Report\Violation\ViolationInterface::SEVERITY_WARNING`.
     *      - `\SprykerSdk\SdkContracts\Report\Violation\ViolationInterface::SEVERITY_ERROR`.
     *
     * @api
     *
     * @return string
     */
    public function getSeverity(): string;

    /**
     * Specification:
     * - Returns produced by name.
     *
     * @api
     *
     * @return string
     */
    public function producedBy(): string;

    /**
     * Specification:
     * - Returns the fix priority.
     *
     * @api
     *
     * @return string|null
     */
    public function priority(): ?string;

    /**
     * Specification:
     * - Returns class namespace with issue.
     *
     * @api
     *
     * @return string|null
     */
    public function getClass(): ?string;

    /**
     * Specification:
     * - Returns the start line of the issue.
     *
     * @api
     *
     * @return int|null
     */
    public function getStartLine(): ?int;

    /**
     * Specification:
     * - Returns the end line of the issue.
     *
     * @api
     *
     * @return int|null
     */
    public function getEndLine(): ?int;

    /**
     * Specification:
     * - Returns the start column of the issue.
     *
     * @api
     *
     * @return int|null
     */
    public function getStartColumn(): ?int;

    /**
     * Specification:
     * - Returns the end line of the issue.
     *
     * @api
     *
     * @return int|null
     */
    public function getEndColumn(): ?int;

    /**
     * Specification:
     * - Returns a method with an issue.
     *
     * @api
     *
     * @return string|null
     */
    public function getMethod(): ?string;

    /**
     * Specification:
     * - Returns additional attributes for the violation.
     *
     * @api
     *
     * @return array
     */
    public function getAdditionalAttributes(): array;

    /**
     * Specification:
     * - Returns proposiotion for the fix.
     *
     * @api
     *
     * @return \SprykerSdk\SdkContracts\Report\Violation\ViolationFixInterface|null
     */
    public function getFix(): ?ViolationFixInterface;
}
