<?php

namespace Juandiaz\CriteriaPattern;

/**
 *
 * @author bits.JuanDiaz <juan.diaz@bitsamericas.com>
 * @copyright Copyright (c) 2024, Bits Americas S.A.S
 * @date 5/15/2024
 * @version 1.0.0
 */
abstract class AbtractOperators {


    abstract public function in(string $field, ...$values): static;
    abstract public function equals(string $field, string $values): static;

}