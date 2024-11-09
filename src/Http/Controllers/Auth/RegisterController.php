<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Auth\RegisterRequest;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Log;
use App\Enums\RoleEnum;
use App\Models\User;

class RegisterController extends Controller
{
    private $view;
    public function __construct()
    {
        $this->view = "pages.auth.";
    }
    public function index(){
        return view($this->view."register");
    }

    public function post(RegisterRequest $request){
        try {
            $name = $request->name;
            $email = $request->email;
            $password = $request->password;

            $user = User::create([
                'name' => $name,
                'email' => $email,
                'password' => bcrypt($password),
                'email_verified_at' => date('Y-m-d H:i:s'),
            ]);

            $user->assignRole(RoleEnum::USER);
            event(new Registered($user));

            alert()->html('Berhasil','Register berhasil','success');
            return redirect()->route('auth.login.index');

        } catch (\Throwable $e) {
            Log::emergency($e->getMessage());
            alert()->html('Gagal',$e->getMessage(),'error');
            return redirect()->route('auth.register.index')->withInput();
        }
    }
}
