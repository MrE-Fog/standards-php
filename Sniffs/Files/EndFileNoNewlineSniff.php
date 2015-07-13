<?php

class Caddis_Sniffs_Files_EndFileNoNewlineSniff implements PHP_CodeSniffer_Sniff
{
	public function register()
	{
		return array(
			T_OPEN_TAG
		);
	}

	public function process(PHP_CodeSniffer_File $phpcsFile, $stackPtr)
	{
		if ($phpcsFile->findNext(T_INLINE_HTML, ($stackPtr + 1)) !== false) {
			return ($phpcsFile->numTokens + 1);
		}

		// Skip to the end of the file.
		$tokens = $phpcsFile->getTokens();
		$lastToken = ($phpcsFile->numTokens - 1);

		if (substr($tokens[$lastToken]['content'], -1) === "\n") {
			$error = 'Expected 0 newlines at end of file';
			$phpcsFile->addError($error, $lastToken, 'NoneFound');
		
			return ($phpcsFile->numTokens + 1);
		}

		// Skip the rest of the file.
		return ($phpcsFile->numTokens + 1);
	}
}