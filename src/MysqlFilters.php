<?php

namespace Juandiaz\CriteriaPattern;

/**
 *
 * @author bits.JuanDiaz <juan.diaz@bitsamericas.com>
 * @copyright Copyright (c) 2024, Bits Americas S.A.S
 * @date 5/15/2024
 * @version 1.0.0
 */
class MysqlFilters /* extends \ArrayObject implements \Iterator, \Countable {*/ extends AbtractOperators {

    private Query $in;
    private Query $equals;

    public function in(string|MysqlFilters $field, ...$values): static {
       $this->in = new Query("$field IN (". implode(', ', $values) . ")");

       return $this;
    }

    public function equals(string|MysqlFilters $field, string $value): static {
        $this->equals = new Query("$field = $value");

        return $this;
    }

}