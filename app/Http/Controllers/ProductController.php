<?php

namespace App\Http\Controllers;

use App\Mail\ProductCreated;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ProductController extends Controller
{
    public function index()
    {
        return view('products.index', [
            'products' => Product::latest()->filter(request(['tag', 'search']))->get(),
        ]);
    }

    public function show(Product $product)
    {
        return view('products.show', [
            "product" => $product,
        ]);
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {

        // dd(auth()->user()->id);
        //get information of the current session's user

        $user = auth()->user();
        //sends error mesasge to the view automatically
        $formFields = $request->validate([
            "name" => "required",
            'company' => "required",
            "tags" => "required",
            "price" => "required",
            "description" => "required",

        ]);

        if ($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('pictures', 'public');
        }
        $formFields['user_id'] = auth()->user()->id;

        $product = Product::create($formFields);
        Mail::to($user)->send(new ProductCreated($product));

        //flash message is stored in memory
        return redirect("/")->with("message", "Successfully created");
    }

    public function manage()
    {
        return view("products.manage", [
            "products" => auth()->user()->products()->get(),
        ]);
    }

    public function edit(Product $product)
    {
        return view('products.edit', [
            "product" => $product,
        ]);
    }

    public function update(Product $product, Request $request)
    {

        //making sure logged in user is the owener  extra security
        if ($product->user_id !== auth()->user()->id) {
            abort(403, 'Unzuthorized action');
        }

        $formFields = $request->validate([
            "name" => "required",
            'company' => "required",
            "tags" => "required",
            "price" => "required",
            "description" => "required",
        ]);

        if ($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('pictures', 'public');
        }

        $product->update($formFields); //user regular update method instead of static create for put

        return back()->with('message', 'Successfully Updated');
    }

    public function destroy(Product $product)
    {

        //making sure logged in user is the owener  extra security
        if ($product->user_id !== auth()->user()->id) {
            abort(403, 'Unzuthorized action');
        }

        $product->delete();
        return back()->with('message', "Successfully Deleted");
    }
}
