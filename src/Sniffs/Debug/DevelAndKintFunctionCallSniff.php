<?php declare(strict_types=1);

namespace Wunderio\CodingStandards\Sniffs\Debug;

use PHP_CodeSniffer\Standards\Generic\Sniffs\PHP\ForbiddenFunctionsSniff;

/**
 * Class DevelAndKintFunctionCallSniff.
 *
 * @package Wunderio\CodingStandards\Sniffs
 */
final class DevelAndKintFunctionCallSniff extends ForbiddenFunctionsSniff
{
  /**
   * A list of forbidden functions with their alternatives.
   *
   * Debug functions should not be left in the code.
   * The value is NULL if no alternative exists => the function should just not be used.
   *
   * @var mixed[]
   */
  public $forbiddenFunctions = [
    'kint' => null,
    'kint_trace' => null,
    'kint_lite' => null,
    'ksm' => null,
    'dsm' => null,
    'dpm' => null,
    'dvm' => null,
    'dpr' => null,
    'dvr' => null,
    'kpr' => null,
    'dargs' => null,
    'ddm' => null,
    'ddebug_backtrace' => null,
  ];
}
