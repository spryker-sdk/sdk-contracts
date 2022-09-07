<?php

/**
 * Copyright © 2019-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerSdk\SdkContracts\Entity;

/**
 * Defines the task set that can be used as a single task.
 */
interface TaskSetInterface extends TaskInterface
{
    /**
     * Specification:
     * - Gets the list of task set tasks.
     *
     * @api
     *
     * @param array<string> $tags
     *
     * @return array<\SprykerSdk\SdkContracts\Entity\TaskInterface|string>
     */
    public function getSubTasks(array $tags = []): array;

    /**
     * Specification:
     * - Overrides tags of sub-tasks command property.
     *
     * @api
     *
     * @return array<string, array<string>> Key is sub-task id.
     */
    public function getTagsMap(): array;

    /**
     * Specification:
     * - Overrides stopOnError of sub-tasks command property.
     *
     * @api
     *
     * @return array<string, bool> Key is sub-task id.
     */
    public function getStopOnErrorMap(): array;

    /**
     * Specification:
     * - Overrides sub-tasks placeholders.
     *
     * @api
     *
     * @return array<string, array<string, array>> Key is sub-task id.
     */
    public function getOverridePlaceholdersMap(): array;

    /**
     * Specification:
     * - Makes sub-tasks placeholders shared.
     *
     * @api
     *
     * @return array<string, array<string, string>> Key is sub-task id.
     */
    public function getSharedPlaceholdersMap(): array;
}
