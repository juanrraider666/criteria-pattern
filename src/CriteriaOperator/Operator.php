<?php

namespace Juandiaz\CriteriaPattern\CriteriaOperator;

/**
 *
 * @author bits.JuanDiaz <juan.diaz@bitsamericas.com>
 * @copyright Copyright (c) 2024, Bits Americas S.A.S
 * @date 5/17/2024
 * @version 1.0.0
 */
enum Operator: string {
   case EQUALS = 'equals';
   case CONTAINS = 'contains';
   case NOT_EQUAL = 'NOT_EQUAL';
   case GREATER_THAN = 'GREATER_THAN';
   case LEST_THAN = 'LEST_THAN';
   case ONE_OF = 'ONE_OF';
   case NO_ONE_OF = 'NO_ONE_OF';
   case BETWEEN = 'BETWEEN';
   case NOT_BETWEEN = 'NOT_BETWEEN';



}