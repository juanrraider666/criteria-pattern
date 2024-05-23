<?php

namespace Juandiaz\CriteriaPattern;

/**
 *
 * @author bits.JuanDiaz <juan.diaz@bitsamericas.com>
 * @copyright Copyright (c) 2024, Bits Americas S.A.S
 * @date 5/15/2024
 * @version 1.0.0
 */
class AbstractCriteria implements CriteriaInterface {

    public function __construct(
        private SimpleFilters $filters,
    ) {
    }

    public function hasFilters(): bool {
        return $this->filters->hadFilters();
    }
    public function orderBy(string $sort) {
        // TODO: Implement orderBy() method.
    }
}