<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Psixolog;
use App\Http\Requests\StorePsixologRequest;
use App\Http\Requests\UpdatePsixologRequest;
use App\Models\Service;
use App\Notifications\BookingCancelledNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PsixologController extends Controller
{
    public function dashbord()
    {
        return view('ps.main');
    }
    public function index()
    {
        $psixologId = auth('psixolog')->id();

        // Faqat shu psixologga tegishli servicelarni olish
        $services = Service::where('user_id', $psixologId)->get();

        return view('ps.allfurn', compact('services'));
    }

    public function create()
    {
        return view('ps.addfurn');
    }

    // Foydalanuvchi tizimga kirganini tekshirish
// App\Http\Controllers\PsixologController.php

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'continuity' => 'required|integer',
        ]);

        $user = auth()->user();

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('services', 'public');
        }

        Service::create([
            'name' => $request->name,
            'price' => $request->price,
            'image' => $imagePath,
            'continuity' => $request->continuity,
            'user_id' => $user->id, // Faqat user_id bilan bog‘lanadi
        ]);

        return redirect()->route('ps.index')->with('success', 'Xizmat muvaffaqiyatli qo‘shildi.');
    }

    /**
     * Display the specified resource.
     */
//    public function show(Psixolog $psixolog)
//    {
//        //
//    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $service = Service::findOrFail($id);
        return view('ps.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */


    public function update(Request $request, $id)
    {
        // Xizmatni topish
        $service = Service::findOrFail($id);

        // Foydalanuvchi huquqini tekshirish (agar policy ishlatayotgan bo‘lsangiz)
//        $this->authorize('update', $service);

        // Ma’lumotlarni validatsiya qilish
        $validated = $request->validate([
            'name'        => 'required|string|max:255',
            'price'       => 'required|numeric',
            'continuity'  => 'required|numeric',
            'image'       => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Faylni saqlash (agar yangi rasm yuklangan bo‘lsa)
        if ($request->hasFile('image')) {
            // Eskisini o‘chirish
            if ($service->image) {
                Storage::delete($service->image);
            }

            // Yangi faylni saqlash
            $imagePath = $request->file('image')->store('service_images', 'public');
            $validated['image'] = $imagePath;
        }

        // Ma’lumotlarni yangilash
        $service->update($validated);

        // Boshqa sahifaga qaytarish yoki natija chiqazish
        return redirect()->route('ps.index')->with('success', 'Service updated successfully!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Xizmatni topish
        $service = Service::findOrFail($id);

        // Foydalanuvchi huquqini tekshirish (agar policy ishlatayotgan bo‘lsangiz)
//        $this->authorize('delete', $service);

        // Agar rasm mavjud bo‘lsa, o‘chirish
        if ($service->image) {
            Storage::delete($service->image);
        }

        // Xizmatni o‘chirish
        $service->delete();

        // Qayta yo‘naltirish
        return redirect()->route('ps.index')->with('success', 'Service deleted successfully!');
    }

    // PsixologController yoki kerakli controller ichida

    public function bookinguser()
    {
       $booking=Booking::all();
       return view('ps.bookinguser', compact('booking'));
    }

    public function confirm($id)
    {
        $booking = Booking::findOrFail($id);
        $booking->status = 'Tasdiqlandi';
        $booking->save();

        return back()->with('success', 'Murojaat tasdiqlandi!');
    }

    public function destroy_booking($id)
    {
        $booking = Booking::findOrFail($id);

        if ($booking->user) {
            $booking->user->notify(new BookingCancelledNotification($booking));
        }

        $booking->delete();

        return back()->with('error', 'Murojaat bekor qilindi!');
    }

}
