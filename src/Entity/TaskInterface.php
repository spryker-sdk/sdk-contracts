<?php

/**
 * Copyright © 2019-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerSdk\SdkContracts\Entity;

use SprykerSdk\SdkContracts\Entity\Lifecycle\LifecycleInterface;

/**
 * Provides interface for task definition.
 */
interface TaskInterface
{
    /**
     * Specification:
     * - Returns task identifier.
     *
     * @api
     *
     * @return string
     */
    public function getId(): string;

    /**
     * Specification:
     * - Returns short description for the task.
     *
     * @api
     *
     * @return string
     */
    public function getShortDescription(): string;

    /**
     * Specification:
     * - Returns command list for the task.
     *
     * @api
     *
     * @return array<\SprykerSdk\SdkContracts\Entity\CommandInterface>
     */
    public function getCommands(): array;

    /**
     * Specification:
     * - Returns placeholder list for the task.
     *
     * @api
     *
     * @return array<\SprykerSdk\SdkContracts\Entity\PlaceholderInterface>
     */
    public function getPlaceholders(): array;

    /**
     * Specification:
     * - Returns help description.
     *
     * @api
     *
     * @return string|null
     */
    public function getHelp(): ?string;

    /**
     * Specification:
     * - Returns task version.
     *
     * @api
     *
     * @return string
     */
    public function getVersion(): string;

    /**
     * Specification:
     * - Returns deprecated flag.
     *
     * @api
     *
     * @return bool
     */
    public function isDeprecated(): bool;

    /**
     * Specification:
     * - Returns `true` if task is optional.
     * - Returns `false` otherwise.
     *
     * @api
     *
     * @return bool
     */
    public function isOptional(): bool;

    /**
     * Specification:
     * - Returns successor task id.
     * - Uses in lifecycle logic.
     * - See https://github.com/spryker-sdk/sdk/blob/master/docs/lifecycle_management.md.
     *
     * @api
     *
     * @return string|null
     */
    public function getSuccessor(): ?string;

    /**
     * Specification:
     * - Returns lifecycle for the task.
     * - See https://github.com/spryker-sdk/sdk/blob/master/docs/lifecycle_management.md.
     *
     * @api
     *
     * @return \SprykerSdk\SdkContracts\Entity\Lifecycle\LifecycleInterface
     */
    public function getLifecycle(): LifecycleInterface;

    /**
     * Specification:
     * - Returns executable stages.
     *
     * @api
     *
     * @return array<string>
     */
    public function getStages(): array;
}
