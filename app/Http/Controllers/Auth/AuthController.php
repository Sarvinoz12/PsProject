<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Psixolog;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.loginpage');
    }

    /**
     * Login jarayoni
     */
    public function login(Request $request)
    {
        // Validatsiya
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // 1️⃣ Avval User jadvalida tekshiramiz
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Foydalanuvchini olish
            $user = Auth::user();

            // Role ID ga qarab yo‘naltirish
            return $this->redirectUser($user);
        }

        // 2️⃣ Agar User topilmasa, Psixolog jadvalida qidiramiz
        $psixolog = Psixolog::where('email', $request->email)->first();

        if ($psixolog && Hash::check($request->password, $psixolog->password)) {
            // Agar Psixolog topilsa, session orqali login qilamiz
            Auth::loginUsingId($psixolog->id);

            return redirect()->route('ps.main'); // Psixolog sahifasiga yo'naltiramiz
        }

        // 3️⃣ Agar hech qaysi jadvaldan topilmasa, xatolik qaytaramiz
        return back()->withErrors(['email' => 'Email yoki parol noto‘g‘ri!']);
    }

    /**
     * Foydalanuvchini role_id bo‘yicha yo‘naltirish
     */
    private function redirectUser($user)
    {
        if ($user->role_id == 1) {
            return redirect()->route('admin.dashbord');
        } elseif ($user->role_id == 2) {
            return redirect()->route('ps.main');
        } elseif ($user->role_id == 3) {
            return redirect()->route('index.page');
        } else {
            return redirect()->route('home')->withErrors(['error' => 'Bunday foydalanuvchi huquq yo‘q!']);
        }
    }

    /**
     * Logout (chiqish)
     */
    public function logout()
    {
        Auth::logout();
        return redirect()->route('index.page')->with('success', 'Tizimdan chiqdingiz!');
    }


    public function showRegisterForm()
    {
        return view('auth.register');
    }


    public function register(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => 3, // Default rol
        ]);

        auth()->login($user);

        return redirect()->route('index.page')->with('success', 'Siz muvaffaqiyatli ro‘yxatdan o‘tdingiz!');
    }
}
