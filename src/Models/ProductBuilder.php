<?php

namespace Mooij\CustomBuilderTest\Models;

use Illuminate\Database\Eloquent\Builder;

/**
 * @template TModelClass of Product
 * @extends Builder<TModelClass>
 */
class ProductBuilder extends Builder
{
}
