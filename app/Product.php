<?php

namespace App;

use Elasticquent\ElasticquentTrait;
use Illuminate\Database\Eloquent\Model;

use App\ProductCategoryMap;
use App\ProductConfiguration;
class Product extends Model
{

    protected $table = 'products';

    protected $fillable = ['title'];

    public function mapproducts() 
    {
    return $this->hasMany(ProductCategoryMap::class, 'product_id');
    }


    public function item()
    {
    return $this->hasMany(ProductConfiguration::class, 'product_id')->with('attribute','AttributeSize');
    }
}
