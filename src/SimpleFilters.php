<?php

namespace Juandiaz\CriteriaPattern;

/**
 *
 * @author bits.JuanDiaz <juan.diaz@bitsamericas.com>
 * @copyright Copyright (c) 2024, Bits Americas S.A.S
 * @date 5/15/2024
 * @version 1.0.0
 */
class SimpleFilters implements \Countable {


    private \WeakMap $conditionals;
    private string  $combination;

    public function __construct(
    ) {
        $this->conditionals = new \WeakMap();
    }


    public function addConditional(SimpleConditional $simpleConditional): self {
        $this->conditionals[$simpleConditional] = $simpleConditional;
        return $this;
    }

    public function combination(string $combination): self {
        $this->combination = $combination;
        return $this;
    }

    public function conditionals(): iterable {
        return $this->conditionals;
    }

    public function count(): int {
        return $this->conditionals->count();
    }

    public function hadFilters(): bool {
        return $this->count() > 0;
    }
}