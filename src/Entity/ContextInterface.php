<?php

/**
 * Copyright © 2019-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerSdk\SdkContracts\Entity;

use SprykerSdk\SdkContracts\Violation\ViolationReportInterface;

interface ContextInterface
{
    /**
     * @var string
     */
    public const DEFAULT_STAGE = 'default';

    /**
     * @var array<string>
     */
    public const DEFAULT_STAGES = [self::DEFAULT_STAGE];

    /**
     * @var int
     */
    public const SUCCESS_EXIT_CODE = 0;

    /**
     * @var int
     */
    public const FAILURE_EXIT_CODE = 1;

    /**
     * @return array<\SprykerSdk\SdkContracts\Entity\PlaceholderInterface>
     */
    public function getRequiredPlaceholders(): array;

    /**
     * @param \SprykerSdk\SdkContracts\Entity\PlaceholderInterface $placeholder
     *
     * @return void
     */
    public function addRequiredPlaceholder(PlaceholderInterface $placeholder): void;

    /**
     * @param array<\SprykerSdk\SdkContracts\Entity\PlaceholderInterface> $requiredPlaceholders
     *
     * @return void
     */
    public function setRequiredPlaceholders(array $requiredPlaceholders): void;

    /**
     * @return array<string, mixed>
     */
    public function getResolvedValues(): array;

    /**
     * @param array<string, mixed> $resolvedValues
     *
     * @return void
     */
    public function setResolvedValues(array $resolvedValues): void;

    /**
     * @param string $key
     * @param mixed $value
     *
     * @return void
     */
    public function addResolvedValues(string $key, mixed $value): void;

    /**
     * @return array<string, \SprykerSdk\SdkContracts\Entity\MessageInterface>
     */
    public function getMessages(): array;

    /**
     * @param string $commandId
     * @param \SprykerSdk\SdkContracts\Entity\MessageInterface $message
     *
     * @return void
     */
    public function addMessage(string $commandId, MessageInterface $message): void;

    /**
     * @param array<string, \SprykerSdk\SdkContracts\Entity\MessageInterface> $messages
     *
     * @return void
     */
    public function setMessages(array $messages): void;

    /**
     * @return array<\SprykerSdk\SdkContracts\Violation\ViolationReportInterface>
     */
    public function getViolationReports(): array;

    /**
     * @param \SprykerSdk\SdkContracts\Violation\ViolationReportInterface $violationReport
     *
     * @return void
     */
    public function addViolationReport(ViolationReportInterface $violationReport): void;

    /**
     * @return int
     */
    public function getExitCode(): int;

    /**
     * @param int $exitCode
     *
     * @return void
     */
    public function setExitCode(int $exitCode): void;

    /**
     * @return array<string>
     */
    public function getRequiredStages(): array;

    /**
     * @param array<string> $requiredStages
     *
     * @return void
     */
    public function setRequiredStages(array $requiredStages): void;

    /**
     * @param array<string> $tags
     *
     * @return void
     */
    public function setTags(array $tags): void;

    /**
     * @return array<string>
     */
    public function getTags(): array;

    /**
     * @return bool
     */
    public function isDryRun(): bool;

    /**
     * @param bool $isDryRun
     *
     * @return void
     */
    public function setIsDryRun(bool $isDryRun = true): void;

    /**
     * @param \SprykerSdk\SdkContracts\Entity\TaskInterface $task
     *
     * @return void
     */
    public function setTask(TaskInterface $task): void;

    /**
     * @return \SprykerSdk\SdkContracts\Entity\TaskInterface
     */
    public function getTask(): TaskInterface;

    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @param string $name
     *
     * @return void
     */
    public function setName(string $name): void;

    /**
     * @return array<string>
     */
    public function getOverwrites(): array;

    /**
     * @param array<string> $overwrites
     *
     * @return void
     */
    public function setOverwrites(array $overwrites): void;

    /**
     * @return array<string>
     */
    public function getInputStages(): array;

    /**
     * @param array<string> $inputStages
     *
     * @return void
     */
    public function setInputStages(array $inputStages): void;

    /**
     * @return array<string, int>
     */
    public function getExitCodeMap(): array;

    /**
     * @param array<string, int> $exitCodeMap
     *
     * @return void
     */
    public function setExitCodeMap(array $exitCodeMap): void;

    /**
     * @param string $id
     * @param int $code
     *
     * @return void
     */
    public function addExitCode(string $id, int $code): void;
}
