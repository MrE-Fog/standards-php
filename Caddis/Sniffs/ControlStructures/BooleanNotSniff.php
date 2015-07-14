<?php
/**
 * Created by Caddis Interactive
 */

class Caddis_Sniffs_ControlStructures_BooleanNotSniff implements PHP_CodeSniffer_Sniff
{
	public function register()
	{
		return array(
			T_BOOLEAN_NOT
		);
	}

	public function process(PHP_CodeSniffer_File $phpcsFile, $stackPtr)
	{
		$tokens = $phpcsFile->getTokens();

		// Must be a space after boolean not
		if ($tokens[($stackPtr + 1)]['code'] === T_WHITESPACE) {
			$spaces = strlen($tokens[($stackPtr + 1)]['content']);
		} else {
			$spaces = 0;
		}

		if ($spaces !== 1) {
			$error = 'Must be exactly 1 space after boolean not; %s found';
			$data = array($spaces);
			$phpcsFile->addError($error, $stackPtr, 'SpaceAfterFunction', $data);
		}
	}
}