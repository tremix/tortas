<?php
class ProductsController extends \BaseController {

    public function __construct(Product $product)
    {
        parent::__construct();
        $this->product = $product;
    }
    /**
     * Display a listing of products
     *
     * @return Response
     */
    public function getIndex()
    {
        //$products = Product::all();
        $products = Product::All();
        //return View::make('admin.list_prod', compact('products'));

        return View::make('admin.products.index');
    }
    /**
     * Show the form for creating a new product
     *
     * @return Response
     */
    public function getCreate()
    {
        $category = Product::lists('category_id');
        $combobox = array('' => "Seleccione ... ") + $category;
        $selected = array();
        return View::make('admin.products.create',  compact('combobox'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function postCreate()
    {
        // Declare the rules for the form validation
        /*$rules = array(
            'title'   => 'required|min:3',
            'content' => 'required|min:3'
        );*/

        // Validate the inputs
        //$validator = Validator::make(Input::all(), $rules);

        // Check if the form validates with success
        /*if ($validator->passes())
        {*/
            // Create a new blog post
            $user = Auth::user();

            // Update the blog post data
            $this->product->code           = Input::get('code');
            $this->product->name           = Input::get('name');
            $this->product->cost           = Input::get('cost');
            $this->product->price          = Input::get('price');
            $this->product->image          = Input::get('image');
            $this->product->category_id    = Input::get('category');
            $this->product->quantity       = Input::get('quantity');

            // Was the blog post created?
            if($this->product->save())
            {
                // Redirect to the new blog post page
                //return Redirect::to('admin/blogs/' . $this->post->id . '/edit')->with('success', Lang::get('admin/blogs/messages.create.success'));
                return Redirect::to('products/');
            }

            // Redirect to the blog post create page
            //return Redirect::to('admin/blogs/create')->with('error', Lang::get('admin/blogs/messages.create.error'));
//       }

        // Form validation failed
        //return Redirect::to('admin/blogs/create')->withInput()->withErrors($validator);
    }

    public function getData()
    {
        $product = Product::select(array('products.code', 'products.name', 'products.price', 'products.quantity', 'products.image'));

        return Datatables::of($product)
            ->make();
    }

}