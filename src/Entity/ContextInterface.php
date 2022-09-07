<?php

/**
 * Copyright © 2019-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerSdk\SdkContracts\Entity;

use SprykerSdk\SdkContracts\Report\ReportInterface;

/**
 * Provides context information structure that shared between tasks.
 */
interface ContextInterface
{
    /**
     * Specification:
     * - Default stage name.
     *
     * @api
     *
     * @var string
     */
    public const DEFAULT_STAGE = 'default';

    /**
     * Specification:
     * - Code for successful command result.
     *
     * @api
     *
     * @var int
     */
    public const SUCCESS_EXIT_CODE = 0;

    /**
     * Specification:
     * - Code for failed command result.
     *
     * @api
     *
     * @var int
     */
    public const FAILURE_EXIT_CODE = 1;

    /**
     * Specification:
     * - Returns required placeholders that must be present in resolved values.
     *
     * @api
     *
     * @return array<\SprykerSdk\SdkContracts\Entity\PlaceholderInterface>
     */
    public function getRequiredPlaceholders(): array;

    /**
     * Specification:
     * - Returns resolved values.
     *
     * @api
     *
     * @return array<string, mixed>
     */
    public function getResolvedValues(): array;

    /**
     * Specification:
     * - Returns collected messages during command execution.
     *
     * @api
     *
     * @return array<string, \SprykerSdk\SdkContracts\Entity\MessageInterface>
     */
    public function getMessages(): array;

    /**
     * Specification:
     * - Adds message for showing in the result.
     *
     * @api
     *
     * @param string $commandId
     * @param \SprykerSdk\SdkContracts\Entity\MessageInterface $message
     *
     * @return void
     */
    public function addMessage(string $commandId, MessageInterface $message): void;

    /**
     * Specification:
     * - Returns exist code.
     * - Possible values: ContextInterface::SUCCESS_EXIT_CODE, ContextInterface::FAILURE_EXIT_CODE
     *
     * @api
     *
     * @return int
     */
    public function getExitCode(): int;

    /**
     * Specification:
     * - Sets command execution result.
     * - Possible values: ContextInterface::SUCCESS_EXIT_CODE, ContextInterface::FAILURE_EXIT_CODE
     *
     * @api
     *
     * @param int $exitCode
     *
     * @return void
     */
    public function setExitCode(int $exitCode): void;

    /**
     * Specification:
     * - Returns current task name.
     *
     * @api
     *
     * @return \SprykerSdk\SdkContracts\Entity\TaskInterface
     */
    public function getTask(): TaskInterface;

    /**
     * Specification:
     * - Returns exist codes for each command.
     * - Structure: commandName:code
     *
     * @return array<string, int>
     */
    public function getExitCodeMap(): array;

    /**
     * Specification:
     * - Adds exist codes for command.
     * - Structure: commandName:code
     *
     * @param string $id
     * @param int $code
     *
     * @return void
     */
    public function addExitCode(string $id, int $code): void;
}
