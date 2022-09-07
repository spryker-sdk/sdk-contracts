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
     * - Returns task collcection.
     * - The list can have reference to the task.
     *
     * @api
     *
     * @param array<string> $tags
     *
     * @return array<\SprykerSdk\SdkContracts\Entity\TaskInterface|string>
     */
    public function getSubTasks(array $tags = []): array;
}
