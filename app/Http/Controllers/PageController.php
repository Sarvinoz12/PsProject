<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCallingRequest;
use App\Models\Calling;
use App\Models\Psixolog;
use App\Models\Service;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
public function index(){

        $psixologs = Psixolog::all();
        $services= Service::take(6)->get();
        return view('index',compact('psixologs','services'));
}
public function about(){
        return view('about');
}
public function blog(){
        return view('blog');
}
public function cantact(){

    return view('cantact');
}
public function sendcantact(StoreCallingRequest $request)
{
    Calling::create($request->validated());
    return redirect()->back()->with('succses','Xabar adminga jo\'natildi');
}
public function furn()
{
    $services = Service::all();

    return view('furn',compact('services'));
}

public function services_price()
{
    $services = Service::all();
    return view('price',compact('services'));
}

    public function search(Request $request)
    {
        $query = Service::with('category'); // optional

        if ($request->filled('name')) {
            $query->where('name', 'like', '%' . $request->name . '%');
        }

        if ($request->filled('category')) {
            $query->whereHas('category', function ($q) use ($request) {
                $q->where('name', 'like', '%' . $request->category . '%');
            });
        }

        $services = $query->paginate(10);

        return view('price', compact('services'));
    }

    public function bookingForm($id)
    {
        $service = Service::findOrFail($id);
        return view('booking', compact('service'));
    }

    public function storeBooking(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'message' => 'nullable|string',
        ]);

        // save booking (simple logika)
        DB::table('bookings')->insert([
            'service_id' => $id,
            'name' => $request->name,
            'phone' => $request->phone,
            'message' => $request->message,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('services.booking.form', $id)->with('success', 'Yozilish muvaffaqiyatli amalga oshirildi!');
    }
}
