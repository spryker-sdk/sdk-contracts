<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerSdk\Sniffs\Commenting;

use PHP_CodeSniffer\Files\File;

use const T_DOC_COMMENT_OPEN_TAG;

trait DocBlockTrait
{
    /**
     * @param \PHP_CodeSniffer\Files\File $phpcsFile
     * @param int $stackPointer
     *
     * @return int|null
     */
    protected function getDocBlockStartPosition(File $phpcsFile, int $stackPointer): ?int
    {
        return $phpcsFile->findPrevious(T_DOC_COMMENT_OPEN_TAG, $stackPointer) ?: null;
    }

    /**
     * @param \PHP_CodeSniffer\Files\File $phpcsFile
     * @param int $stackPointer
     *
     * @return int|null
     */
    protected function getDocBlockEndPosition(File $phpcsFile, int $stackPointer): ?int
    {
        $docCommentOpenerPosition = $this->getDocBlockStartPosition($phpcsFile, $stackPointer);
        if (!$docCommentOpenerPosition) {
            return null;
        }
        $tokens = $phpcsFile->getTokens();

        return $tokens[$docCommentOpenerPosition]['comment_closer'] ?? null;
    }
}
