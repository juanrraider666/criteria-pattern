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
class Index {

    public function __invoke() {

        $filters = new SimpleFilters();
        $filters
            ->addConditional(new SimpleConditional(
                field: 'name',
                operator:Operator::CONTAINS,
                value: ['juan', 'pablo'])
            )
            ->combination('AND')
            ->addConditional(new SimpleConditional('lastName', Operator::EQUALS, 'diaz'))
        ;


        foreach ($filters->conditionals() as $conditional) {
            dump($conditional);
        }
        dd($filters->conditionals());

        $criterias = new AbstractCriteria($filters);
    }

}

