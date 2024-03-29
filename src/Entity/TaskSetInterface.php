<?php

/**
 * Copyright © 2019-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerSdk\SdkContracts\Entity;

/**
 * Provides interface for task set definition.
 */
interface TaskSetInterface extends TaskInterface
{
    /**
     * Specification:
     * - Returns task collection.
     * - The collection can have reference to the task.
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
     * - Returns tags map to override sub-tasks tags.
     *
     * @api
     *
     * @return array<string, array<string>> Key is sub-task id.
     */
    public function getTagsMap(): array;

    /**
     * Specification:
     * - Returns stopOnError map to override sub-tasks stopOnError property.
     *
     * @api
     *
     * @return array<string, bool> Key is sub-task id.
     */
    public function getStopOnErrorMap(): array;

    /**
     * Specification:
     * - Returns placeholders map to override sub-tasks placeholders.
     *
     * @api
     *
     * @return array<string, array<string, array>> Key is sub-task id.
     */
    public function getOverridePlaceholdersMap(): array;

    /**
     * Specification:
     * - Returns shared placeholders map to make sub-tasks placeholders shared.
     *
     * @api
     *
     * @return array<string, array<string, string>> Key is sub-task id.
     */
    public function getSharedPlaceholdersMap(): array;
}
