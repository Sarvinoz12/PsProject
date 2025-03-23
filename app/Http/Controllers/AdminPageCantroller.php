<?php

namespace App\Http\Controllers;

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
        return view('admin.main');
    }
    public function index()
    {
//        $psixologs = Psixolog::where('user_id', auth()->id())->get();
        $psixologs = Psixolog::all();
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
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:psixologs,email',
            'password' => 'required|string|min:6',
            'tajriba' => 'required|integer|min:1',
            'spes' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->all();
        $data['user_id'] = auth()->id(); // Hozirgi foydalanuvchini bog‘lash
        $data['password'] = Hash::make($request->password); // Parolni hash qilish
        $data['email'] = $request->email;

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('psixolog_images', 'public');
        }

        Psixolog::create($data);
//        User::create($data);
        return redirect()->route('admin.index')->with('success', 'Psixolog qo‘shildi!');
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
}
