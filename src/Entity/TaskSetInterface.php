<?php

/**
 * Copyright © 2019-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerSdk\SdkContracts\Entity;

interface TaskSetInterface extends TaskInterface
{
    /**
     * @param array<string> $tags
     *
     * @return array<\SprykerSdk\SdkContracts\Entity\TaskInterface>
     */
    public function getSubTasks(array $tags = []): array;

    /**
     * Overrides stopOnError sub-tasks command property. Key is sub-task id.
     *
     * @return array<string, bool>
     */
    public function getSubTasksStopOnErrorMap(): array;

    /**
     * Overrides tags sub-tasks command property. Key is sub-task id.
     *
     * @return array<string, array<string>>
     */
    public function getSubTasksTagsMap(): array;
}
