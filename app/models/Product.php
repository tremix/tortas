<?php

class Product extends \Eloquent {



	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = ['code', 'name', 'size', 'cost', 'price', 'alert_quantity', 'image',
                           'category_id','quantity', 'tax_rate'];

    public function content()
    {
        return $this->content;
    }
}