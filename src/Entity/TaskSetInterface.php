<?php

/**
 * Copyright © 2019-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerSdk\SdkContracts\Entity;

interface TaskSetInterface extends TaskInterface
{
    /**
     * Gets the list of task set tasks.
     *
     * @param array<string> $tags
     *
     * @return array<\SprykerSdk\SdkContracts\Entity\TaskInterface|string>
     */
    public function getSubTasks(array $tags = []): array;

    /**
     * Overrides tags of sub-tasks command property. Key is sub-task id.
     *
     * @return array<string, array<string>>
     */
    public function getTagsMap(): array;

    /**
     * Overrides stopOnError of sub-tasks command property. Key is sub-task id.
     *
     * @return array<string, bool>
     */
    public function getStopOnErrorMap(): array;

    /**
     * Overrides sub-tasks placeholders. Key is sub-task id.
     *
     * @return array<string, array<string, array>>
     */
    public function getOverridePlaceholdersMap(): array;

    /**
     * Makes sub-tasks placeholders shared to avoid command input duplication. Key is sub-task id.
     *
     * @return array<string, array<string, string>>
     */
    public function getSharedPlaceholdersMap(): array;
}
