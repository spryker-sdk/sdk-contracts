<?php

/**
 * Copyright © 2019-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerSdk\SdkContracts\Workflow;

use SprykerSdk\SdkContracts\Entity\ContextInterface;

interface TransitionResolverInterface
{
    /**
     * The resolver name that can be used in workflow configuration.
     *
     * @return string
     */
    public function getName(): string;

    /**
     * Resolves the next transition name.
     *
     * @param \SprykerSdk\SdkContracts\Entity\ContextInterface $context
     * @param array $settings
     *
     * @return string|null
     */
    public function resolveTransition(ContextInterface $context, array $settings): ?string;
}
