<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePsixologRequest;
use App\Models\Psixolog;
use App\Models\Service;
use App\Models\Tests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PsPageCantroller extends Controller
{

public function addtests(){
        return view('ps.createtest');
}
public function createtest(StorePsixologRequest $request)
    {
        $data = $request->validated();
        $psixolog = Psixolog::where('user_id', auth()->id())->first();
        if (!$psixolog) {
            dd('Psixolog topilmadi!');
        }
        $test = new Tests();
        $test->question = $request->question;
        $test->answer_a = $request->answer_a;
        $test->answer_b = $request->answer_b;
        $test->answer_c = $request->answer_c;
        $test->answer_d = $request->answer_d;
        $test->description_a = $request->description_a;
        $test->description_b = $request->description_b;
        $test->description_c = $request->description_c;
        $test->description_d = $request->description_d;

        // Rasm yuklash
        if ($request->hasFile('image')) {
            $filename = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/tests'), $filename);
            $test->image = 'uploads/tests/' . $filename;
        }

        // Psixolog ID ni user_id asosida olish
        $psixolog = \App\Models\Psixolog::where('user_id', auth()->id())->first();

        if (!$psixolog) {
            return redirect()->route('ps.alltests')->withErrors('Psixolog topilmadi!');
        }

        $test->psixolog_id = $psixolog->id;

        $test->save();

        return redirect()->route('ps.alltests')->with('success', 'Test yaratildi!');
    }

public function showtest($id)
{
    //
}
public function edittest($id){
    $psixolog = Psixolog::where('user_id', auth()->id())->first();

    if (!$psixolog) {
        return redirect()->back()->withErrors('Siz tizimda psixolog sifatida ro‘yxatdan o‘tmagansiz!');
    }

    // Faqat o'ziga tegishli testni olish
    $test = Tests::where('id', $id)
        ->where('psixolog_id', $psixolog->id)
        ->first();

    if (!$test) {
        return redirect()->back()->withErrors('Test topilmadi yoki sizda unga ruxsat yo‘q.');
    }

    return view('ps.update_test', compact('test'));

}
public function updateTest(StorePsixologRequest $request, $id)
    {
        $user = Auth::user();

        // Faqat psixologlar kirishi mumkin
        if ($user->role_id != 2) {
            abort(403, 'Sizda psixolog huquqlari mavjud emas.');
        }

        // Psixolog ID sini olish (Psixolog modelida user_id orqali)
        $psixolog = Psixolog::where('user_id', $user->id)->first();

        if (!$psixolog) {
            abort(403, 'Sizga tegishli psixolog profili topilmadi.');
        }

        // Faqat o'ziga tegishli testni olish
        $test = Tests::where('id', $id)
            ->where('psixolog_id', $psixolog->id)
            ->firstOrFail();

        // Testni yangilash
        $test->question = $request->question;
        $test->answer_a = $request->answer_a;
        $test->description_a = $request->description_a;
        $test->answer_b = $request->answer_b;
        $test->description_b = $request->description_b;
        $test->answer_c = $request->answer_c;
        $test->description_c = $request->description_c;
        $test->answer_d = $request->answer_d;
        $test->description_d = $request->description_d;

        // Agar yangi rasm yuborilgan bo‘lsa
        if ($request->hasFile('image')) {
            if ($test->image && file_exists(public_path($test->image))) {
                unlink(public_path($test->image));
            }

            $filename = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/tests'), $filename);
            $test->image = 'uploads/tests/' . $filename;
        }

        $test->save();

        return redirect()->route('ps.alltests')->with('success', 'Test muvaffaqiyatli yangilandi!');
    }

    public function deleteTest($id)
    {
        $user = Auth::user();

        // Faqat psixolog bo‘lishi kerak
        if ($user->role_id != 2) {
            abort(403, 'Sizda psixolog huquqlari mavjud emas.');
        }

        // Psixolog profilini topamiz
        $psixolog = Psixolog::where('user_id', $user->id)->first();

        if (!$psixolog) {
            abort(403, 'Sizga tegishli psixolog profili topilmadi.');
        }

        // Testni topamiz va tekshiramiz
        $test = Tests::where('id', $id)
            ->where('psixolog_id', $psixolog->id)
            ->firstOrFail();

        // Agar rasm mavjud bo‘lsa, uni o‘chiramiz
        if ($test->image && file_exists(public_path($test->image))) {
            unlink(public_path($test->image));
        }

        // Testni bazadan o‘chiramiz
        $test->delete();

        return redirect()->route('ps.alltests')->with('success', 'Test muvaffaqiyatli o‘chirildi!');
    }
public function alltests()
    {
        $user = auth()->user();

        // Psixologni topish
        $psixolog = Psixolog::where('user_id', $user->id)->first();

        // Agar psixolog topilmasa xato chiqaramiz yoki bo‘sh array beramiz
        if (!$psixolog) {
            return redirect()->back()->withErrors('Foydalanuvchiga biriktirilgan psixolog topilmadi.');
        }

        // Testlarni olish
        $tests = Tests::where('psixolog_id', $psixolog->id)->get();

        return view('Ps.all_test', compact('tests'));
    }
}
