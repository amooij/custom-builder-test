<?php

use Mooij\CustomBuilderTest\Models\Product;

Product::count();
Product::whereIn('id', [3]);
Product::whereIn('id', [3])->count();
Product::where('id', 3)->get();
Product::where('id', 3)->count();
Product::where('id', 3)->whereIn('id', [3])->count();
