<?php

/**
 * Copyright © 2019-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerSdk\SdkContracts\Enum;

final class Task
{
    /**
     * Local cli task type with tty mode.
     *
     * @var string
     */
    public const TYPE_LOCAL_CLI_INTERACTIVE = 'local_cli_interactive';

    /**
     * Local cli task type.
     *
     * @var string
     */
    public const TYPE_LOCAL_CLI = 'local_cli';

    /**
     * Local cli task type.
     *
     * @var string
     */
    public const TYPE_TASK_SET = 'task_set';
}
