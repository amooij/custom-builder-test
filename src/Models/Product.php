<?php

namespace Mooij\CustomBuilderTest\Models;

use Illuminate\Database\Query\Builder as QueryBuilder;

class Product extends Model
{
	/**
	 * @param QueryBuilder $query
	 * @return ProductBuilder<Product>
	 */
	public function newEloquentBuilder($query): ProductBuilder
	{
		return new ProductBuilder($query);
	}
}
