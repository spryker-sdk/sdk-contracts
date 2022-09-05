<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerSdk\Sniffs\Commenting;

use PHP_CodeSniffer\Files\File;
use Spryker\Sniffs\Commenting\DocBlockApiAnnotationSniff;

class ContractMethodDocBlockSniff extends DocBlockApiAnnotationSniff
{
    /**
     * @var string
     */
    protected const API_SDK_CONTRACT = 'SDK_CONTRACT';

    /**
     * {@inheritDoc}
     */
    public function process(File $phpCsFile, $stackPointer): void
    {
        $this->assertApiAnnotation($phpCsFile, $stackPointer, static::API_SDK_CONTRACT);
        $this->assertSpecification($phpCsFile, $stackPointer);
    }

    /**
     * @param \PHP_CodeSniffer\Files\File $phpCsFile
     * @param int $stackPointer
     *
     * @return string|null
     */
    protected function sprykerApiClass(File $phpCsFile, int $stackPointer): ?string
    {
        return static::API_SDK_CONTRACT;
    }
}
