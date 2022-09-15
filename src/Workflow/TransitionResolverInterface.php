<?php

/**
 * Copyright © 2019-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerSdk\SdkContracts\Workflow;

use SprykerSdk\SdkContracts\Entity\ContextInterface;

/**
 * Provides transition resolver for a workflow transition.
 */
interface TransitionResolverInterface
{
    /**
     * Specification:
     * - Returns the resolver name to resolve it in workflow.
     *
     * @api
     *
     * @return string
     */
    public function getName(): string;

    /**
     * Specification:
     * - Resolves the next transition name.
     *
     * @api
     *
     * @param \SprykerSdk\SdkContracts\Entity\ContextInterface $context
     * @param array $settings
     *
     * @return string|null
     */
    public function resolveTransition(ContextInterface $context, array $settings): ?string;
}
