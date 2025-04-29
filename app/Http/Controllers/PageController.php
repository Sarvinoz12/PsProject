<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCallingRequest;
use App\Models\Booking;
use App\Models\Calling;
use App\Models\Psixolog;
use App\Models\Service;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
    $psixologs=Psixolog::all();
    return view('blog',compact('psixologs'));
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

    public function bookingForm()
    {
        $services = Service::all();
        $psixologs = User::where('role_id', 2)->get();

        return view('booking', compact('services', 'psixologs'));
    }

    public function storeBooking(Request $request)
    {
        $request->validate([
            'service_id' => 'required|exists:services,id',
            'psixolog_id' => 'required|exists:users,id',
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'message' => 'nullable|string',
        ]);

        Booking::create([
            'user_id' => auth()->id(),
            'service_id' => $request->service_id,
            'psixolog_id' => $request->psixolog_id,
            'name' => $request->name,
            'phone' => $request->phone,
            'message' => $request->message,
            'status' => 'kutilmoqda',
        ]);

        return redirect()->back()->with('success', 'Yozilish muvaffaqiyatli amalga oshirildi!');
    }



    public function edit()
    {
        return view('profile');
    }


        public function update(Request $request)
    {
        $user = auth()->user();

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'password' => 'nullable|string|min:6',
        ]);

        $user->name = $validated['name'];
        $user->email = $validated['email'];

        if (!empty($validated['password'])) {
            $user->password = Hash::make($validated['password']);
        }

        $user->save();

        return redirect()->route('profile')->with('success', 'Profil muvaffaqiyatli yangilandi!');
    }
    public function myBookings()
    {
        $bookings = Booking::with(['service', 'psixolog'])
            ->where('user_id', auth()->id())
            ->latest()
            ->get();

        return view('bookingPsixolog', compact('bookings'));
    }


}
