<?php

namespace Juandiaz\CriteriaPattern;

use Juandiaz\CriteriaPattern\CriteriaOperator\Operator;

/**
 *
 * @author bits.JuanDiaz <juan.diaz@bitsamericas.com>
 * @copyright Copyright (c) 2024, Bits Americas S.A.S
 * @date 5/15/2024
 * @version 1.0.0
 */
class SimpleConditional {

    # crear atributos para validar cada campo, ya que esta clase no deberia dedicarse a validar.
    public function __construct(
        public string   $field,
        public Operator $operator,
        public mixed    $value
    ) {
    }

    public function __toString(): string {
        return "{$this->field} {$this->operator} {$this->value}";
    }


}