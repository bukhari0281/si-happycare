<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function index(){
         return view('admin.auth.login');
    }
     //
    public function proses_login(Request $request){
            // kita buat validasi pada saat tombol login di klik
            // validas nya username & password wajib di isi
            $request->validate([
                'username'=>'required',
                'password'=>'required'
            ],[
                'username.required'=>'Username wajib diisi',
                'password.required'=>'Password wajib diisi'
            ]);


            // ambil data request username & password saja
            $credential = $request->only('username','password');

            // cek jika data username dan password valid (sesuai) dengan data
            if(Auth::attempt($credential)){
                if(Auth::user()->role == 'admin'){
                    return redirect('admin');
                } elseif (Auth::user()->role == 'pl_kesehatan') {
                    // return redirect('/admin/kesehatan');
                    echo ("oke");
                } elseif (Auth::user()->role == 'pl_wisata') {
                    return redirect('admin');
                } elseif (Auth::user()->role == 'user') {
                    return redirect('admin');
                }
            }else{
                return redirect('login')->withErrors('Username dan password yang dimasukkan salah')->withInput();
            }
      }

    public function register(){
    // tampilkan view register
        return view('admin/register');
    }


    // aksi form register
    public function proses_register(Request $request){
        //. kita buat validasi nih buat proses register
        // validasinya yaitu semua field wajib di isi
        // validasi username itu harus unique atau tidak boleh duplicate username ya
        $validator =  Validator::make($request->all(),[
             'name'=>'required',
             'username'=>'required|unique:users',
             'email'=>'required|email',
             'password'=>'required'
        ]);

        // kalau gagal kembali ke halaman register dengan munculkan pesan error
        if($validator ->fails()){
             return redirect('auth/register')
              ->withErrors($validator)
              ->withInput();
        }
        // kalau berhasil isi level & hash passwordnya ya biar secure
        $request['level']='user';
        $request['password'] = bcrypt($request->password);

        // masukkan semua data pada request ke table user
        User::create($request->all());

          // kalo berhasil arahkan ke halaman login
        return redirect()->route('login');
       }

    public function logout(Request $request){
            $request->session()->flush();  // logout itu harus menghapus session nya
            Auth::logout();    // jalan kan juga fungsi logout pada auth
        return Redirect('login');   // kembali kan ke halaman login
    }
}
