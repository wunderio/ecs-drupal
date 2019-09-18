<?php declare(strict_types=1);

namespace Wunderio\CodingStandards\Sniffs\Debug;

use PHP_CodeSniffer\Standards\Generic\Sniffs\PHP\ForbiddenFunctionsSniff;

/**
 * Class KintFunctionCallSniff.
 *
 * @package Wunderio\CodingStandards\Sniffs
 */
final class KintFunctionCallSniff extends ForbiddenFunctionsSniff
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
  ];
}
