<?php

/**
 * Copyright © 2019-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerSdk\SdkContracts\Entity;

/**
 * Provides workflow structure for keeping data.
 */
interface WorkflowInterface
{
    /**
     * Specification:
     * - Return project name.
     *
     * @api
     *
     * @return string
     */
    public function getProject(): string;

    /**
     * Specification:
     * - Returns workflow transaction statues.
     *
     * @api
     *
     * @return array
     */
    public function getStatus(): array;

    /**
     * Specification:
     * - Returns workflow name.
     *
     * @api
     *
     * @return string
     */
    public function getWorkflow(): string;

    /**
     * Specification:
     * - Returns workflow state code.
     *
     * @api
     *
     * @return string
     */
    public function getCode(): string;

    /**
     * Specification:
     * - Returns parent workflow.
     *
     * @api
     *
     * @return \SprykerSdk\SdkContracts\Entity\WorkflowInterface|null
     */
    public function getParent(): ?WorkflowInterface;
}
