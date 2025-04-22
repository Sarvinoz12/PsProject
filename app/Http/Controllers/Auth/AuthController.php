<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Psixolog;
use App\Models\Role;
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
//    public function login(Request $request)
//    {
//        // Validatsiya
//        $request->validate([
//            'email' => 'required|email',
//            'password' => 'required|min:6',
//        ]);
//
//        // 1️⃣ Avval User guard orqali tekshiramiz
//        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
//            $user = Auth::user();
//            return $this->redirectUser($user);
//        }
//
//        // 2️⃣ Psixologni qidiramiz
//        $psixolog = Psixolog::where('email', $request->email)->first();
//
//        if ($psixolog && Hash::check($request->password, $psixolog->password)) {
//            // ✅ Psixologni `psixolog` guard orqali login qilamiz
//            Auth::guard('psixolog')->login($psixolog);
//
//            return redirect()->route('ps.main');
//        }
//
//        // 3️⃣ Xato holat
//        return back()->withErrors(['email' => 'Email yoki parol noto‘g‘ri!']);
//    }

    /**
     * Foydalanuvchini role_id bo‘yicha yo‘naltirish
     */
//    private function redirectUser($user)
//    {
//        if ($user->role_id == 1) {
//            return redirect()->route('admin.dashbord');
//        } elseif ($user->role_id == 2) {
//            return redirect()->route('ps.main');
//        } elseif ($user->role_id == 3) {
//            return redirect()->route('index.page');
//        } else {
//            return redirect()->route('home')->withErrors(['error' => 'Bunday foydalanuvchi huquq yo‘q!']);
//        }
//    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        $user = User::where('email', $request->email)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            Auth::login($user);

            return match ($user->role_id) {
                1 => redirect()->route('admin.dashbord'),
                2 => redirect()->route('ps.main'),
                3 => redirect()->route('index.page'),
                default => redirect()->route('index.page')->withErrors(['error' => 'Noma’lum rol.']),
            };
        }

        return back()->withErrors(['email' => 'Email yoki parol noto‘g‘ri!']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('index.page')->with('success', 'Tizimdan chiqdingiz!');
    }


    public function showRegisterForm()
    {
        $roles = Role::all(); // Agar siz Role modeldan foydalanayotgan bo‘lsangiz
        return view('auth.register', compact('roles'));
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
