<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerSdk\Sniffs\Commenting;

use PHP_CodeSniffer\Files\File;
use Spryker\Sniffs\AbstractSniffs\AbstractApiClassDetectionSprykerSniff;

class ContractDocBlockSniff extends AbstractApiClassDetectionSprykerSniff
{
    /**
     * @return mixed[]|void
     */
    public function register()
    {
        return [
            T_INTERFACE,
        ];
    }

    /**
     * @param \PHP_CodeSniffer\Files\File $phpcsFile
     * @param $stackPtr
     *
     * @return int|void
     */
    public function process(File $phpcsFile, $stackPtr)
    {
        $contractPtr = $phpcsFile->findPrevious([T_INTERFACE], $stackPtr);
        if (!$contractPtr) {
            return;
        }

        $docBlockEndPtr = $this->getDocBlockEndPosition($phpcsFile, $stackPtr);
        $this->assertContractHasDocBlock($phpcsFile, $contractPtr, $docBlockEndPtr);
    }

    /**
     * @param \PHP_CodeSniffer\Files\File $phpcsFile
     * @param int $contractPtr
     * @param int $dockBlockEndPtr
     *
     * @return void
     */
    protected function assertContractHasDocBlock(File $phpcsFile, int $contractPtr, int $dockBlockEndPtr): void
    {
        if ($dockBlockEndPtr === ($contractPtr - 2)) {
            return;
        }

        $phpcsFile->addErrorOnLine(
            'Missed Contract specification.',
            $dockBlockEndPtr,
            'NotFixableMissedContractSpecification'
        );
    }

    /**
     * @param \PHP_CodeSniffer\Files\File $phpcsFile
     * @param int $stackPointer
     *
     * @return int|null
     */
    protected function getDocBlockEndPosition(File $phpcsFile, int $stackPointer): ?int
    {
        $docCommentOpenerPosition = $phpcsFile->findPrevious(T_DOC_COMMENT_OPEN_TAG, $stackPointer) ?: null;
        if (!$docCommentOpenerPosition) {
            return null;
        }

        $tokens = $phpcsFile->getTokens();

        return $tokens[$docCommentOpenerPosition]['comment_closer'] ?? null;
    }
}
