<?php

/**
 * Copyright © 2019-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerSdk\SdkContracts\Entity;

/**
 * Provides command for execution in task.
 */
interface CommandInterface
{
    /**
     * Specification:
     * - Return string command for cli.
     *
     * @api
     *
     * @return string
     */
    public function getCommand(): string;

    /**
     * Specification:
     * - Returns type of command.
     * - Supporting types: php, local_cli, local_cli_interactive.
     *
     * @api
     *
     * @return string
     */
    public function getType(): string;

    /**
     * Specification:
     * - Returns tags for filtering executable commands.
     *
     * @api
     *
     * @return array<string>
     */
    public function getTags(): array;

    /**
     * Specification:
     * - Returns flag for a stop or continue execution if command failed.
     *
     * @api
     *
     * @return bool
     */
    public function hasStopOnError(): bool;

    /**
     * Specification:
     * - Returns a convertor for reports generation.
     *
     * @api
     *
     * @return \SprykerSdk\SdkContracts\Entity\ConverterInterface|null
     */
    public function getConverter(): ?ConverterInterface;

    /**
     * Specification:
     * - Returns a stage for command group execution.
     *
     * @api
     *
     * @return string
     */
    public function getStage(): string;
}
