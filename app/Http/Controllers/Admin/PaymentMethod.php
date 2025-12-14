<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PaymentMethod;
class PaymentMethod extends Controller
{
    /**
     * Display a listing of the resource.
     */
       public function index($PaymentMethod_id)
{
    return PaymentMethod::all();
}
    /**
     * Store a newly created resource in storage.
     */
      public function store(Request $request)
{
    $data = $request->validate([
        'name' => 'required|string',
    ]);

    return PaymentMethod::create($data);
}

    /**
     * Display the specified resource.
     */
   public function update(Request $request, $id)
{
    $paymentMethod = PaymentMethod::findOrFail($id);

    $data = $request->validate([
        'name' => 'sometimes|string',
    ]);

    $paymentMethod->update($data);

    return response()->json($paymentMethod);
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
{
    PaymentMethod::where('id', $id)
        ->firstOrFail()
        ->delete();

    return response()->json(['message' => 'Book deleted']);
}
}
