<?php

namespace App\Http\Controllers;

use App\Models\Calling;
use App\Models\Psixolog;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class AdminPageCantroller extends Controller
{
    /**
     * Barcha psixologlarni ko‘rsatish
     */
    public function dashboard()
    {
        $callings=Calling::all();
        return view('admin.main',compact('callings'));
    }
    public function index()
    {
        $psixologs = Psixolog::where('user_id', auth()->id())->get();

        return view('admin.allps', compact('psixologs'));
    }

    /**
     * Yangi psixolog qo‘shish formasi
     */
    public function create()
    {
        return view('admin.addps');
    }

    /**
     * Yangi psixologni saqlash
     */
    public function store(Request $request)
    {
        // 1. Validatsiya
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:psixologs,email|unique:users,email',
            'password' => 'required|string|min:6',
            'tajriba' => 'required|integer|min:1',
            'spes' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // 2. Rasmni yuklash (agar mavjud bo‘lsa)
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('psixolog_images', 'public');
        }

        // 3. Psixolog modeli uchun ma'lumotlar
        $psixolog = Psixolog::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'tajriba' => $request->tajriba,
            'spes' => $request->spes,
            'image' => $imagePath,
            'user_id' => auth()->id(),
            'role_id' => 2,
        ]);

        // 4. User modeli uchun (auth ishlashi uchun)
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => 2,
        ]);

        // 5. Admin panelga qaytarish
        return redirect()->route('admin.index')->with('success', 'Psixolog muvaffaqiyatli qo‘shildi!');
    }

    /**
     * Bitta psixologni ko‘rsatish
     */
//    public function show(Psixolog $psixolog)
//    {
//        return view('admin.show', compact('psixolog'));
//    }

    /**
     * Tahrirlash formasi
     */
    public function edit($id)
    {
        $psixolog = Psixolog::findOrFail($id);
        return view('admin.edit', compact('psixolog'));
    }

    /**
     * Psixologni yangilash
     */
    public function update(Request $request, Psixolog $psixolog)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:psixologs,email,' . $psixolog->id, // Email unikalligi tekshirildi
            'password' => 'nullable|string|min:6', // Parol ixtiyoriy
            'tajriba' => 'required|integer|min:1',
            'spes' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = $request->only(['name', 'email', 'tajriba', 'spes']);

        // Parolni yangilash faqat foydalanuvchi yangi parol kiritsa amalga oshadi
        if ($request->filled('password')) {
            $data['password'] = Hash::make($request->password);
        }

        if ($request->hasFile('image')) {
            // Eski rasmni o‘chirish (agar mavjud bo‘lsa)
            if ($psixolog->image) {
                Storage::disk('public')->delete($psixolog->image);
            }

            // Yangi rasmni saqlash
            $data['image'] = $request->file('image')->store('psixolog_images', 'public');
        }

        $psixolog->update($data);

        return redirect()->route('admin.index')->with('success', 'Psixolog yangilandi!');
    }



    /**
     * Psixologni o‘chirish
     */
    public function destroy($id)
    {
        $psixolog = Psixolog::findOrFail($id);
        $psixolog->delete();

        return redirect()->route('admin.index')->with('success', 'Psixolog o‘chirildi!');
    }
    public function deletecalling($id)
    {
        // Xabarni topish
        $calling = Calling::find($id);

        // Agar xabar topilmasa, xato xabari yuborish
        if (!$calling) {
            return redirect()->route('admin.calling.index')->with('error', 'Xabar topilmadi.');
        }

        // Xabarni o'chirish
        $calling->delete();

        // O'chirilgandan so'ng, muvaffaqiyatli xabarni ko'rsatish
        return redirect()->back()->with('success', 'Xabar muvaffaqiyatli o‘chirildi.');

    }
}
