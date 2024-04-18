<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Task;
use App\Models\Contact;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
class ProductController extends Controller
{
public function crud(){ 
    return view('product.product', ['products' => Product :: get()]);
}
public function listing(){
    return view ('product.listing');
}
public function productstore(Request $request)
{
    // Validate the incoming request data
    $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'required|string',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Add validation rules for the image upload
    ]);

    // Create a new Product instance
    $product = new Product();

    // Set product attributes from the request data
    $product->name = $request->name;
    $product->description = $request->description;

    if ($request->hasFile('image') && $request->file('image')->isValid()) {

        $request->validate([
            'image' => 'image|max:2048'
        ]);
    
        $image = $request->file('image');
        $imageName = time() . '_' . Str::random(10) . '.' . $image->getClientOriginalExtension();
    
        $imagePath = $image->storeAs('public/Product', $imageName);
    
        $product->image = basename($imagePath); 
    }

    $product->save();

    return back()->with('success', 'Product created successfully');
}
public function taskstore (Request $request){
    $task = new Task();
    $task->name = $request-> name;
    $task->description = $request->description;
$task -> save();
return back();
}
public function task(){
    return view ('task.newtask');
}
public function contact(){
    return view ('contact.newcontact');
}
public function contactstore (Request $request){
     dd($request -> all());
    $contact = new Contact();
    $contact->name = $request-> name;
    $contact->email = $request-> email;
$contact -> save();
return back();
}
public function edit ($id){
    $product = Product ::where ('id',$id)->first();
    return view ('product.edit', ['product' => $product]);
}
public function update(Request $request, $id)
{
    // Find the product by ID
    $product = Product::findOrFail($id);

    // Update product attributes
    $product->name = $request->name;
    $product->description = $request->description;

    // Handle image upload if a new image is provided
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('images'), $imageName);
        $product->image = $imageName;
    }

    // Save the updated product
    $product->save();

    // Redirect back
    return back()->with('success', 'Product updated successfully');
}
public function destroy($id){
    $product = Product::where('id',$id)->first();
    $product ->delete();
    return back()->with('success','Product deleted');
}
}
