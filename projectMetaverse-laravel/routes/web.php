<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// SEBELUM LOGIN
Route::get('/', function () {
    return view('Utama', [
        "title" => "Utama"
    ]);
});

// SETELAH LOGIN
Route::get('/Home', function () {
    return view('Home', [
        "title" => "Home"
    ]);
})->middleware('auth');   //permission login

/* COBA ROUTE BUAT LOGIN */

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


Route::get('login', [LoginController::class, 'login'])->name('login');  //menampilkan form login
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin'); //mengirim data login berupa username dan password ketika di klik tombol login

Route::get('home', [HomeController::class, 'index'])->name('home')->middleware('auth'); //menampilkan halaman home  jika berhasil login, kemudian dilengkapi dengan middleware auth agar halaman home hanya bisa diakses ketika sudah melakukan login.
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');  //untuk mengirim aksi ketika tombol logout diklik, kemudian dilengkapi dengan middleware auth agar perintah logout hanya bisa diakses ketika sudah melakukan login.
*/
/*
Route::get('/Registrasi', function () {
    return view('Registrasi', [
        "title" => "Registrasi"
    ]);
});

Route::get('/Login', function () {
    return view('Login', [
        "title" => "Login"
    ]);
});

*/



Route::get('/About', function () {
    $About_Deskripsi = [
        [
            "title" => "Sejarah Metaverse",
            "slug" => "sejarah-metaverse",
            "author" => "Universitas Dian Nuswantoro",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit.
             Explicabo delectus alias mollitia dolor nobis doloremque fugiat expedita.
             Fugit consectetur aspernatur, culpa unde veritatis repudiandae ipsum. Totam odio illum itaque? Dolorem dicta architecto earum. 
             Ducimus quaerat nostrum architecto rerum non asperiores voluptate odit saepe, nihil ea est consequuntur suscipit eos error mollitia similique dignissimos dicta modi repellat quas. 
             Impedit aperiam earum eveniet quia maiores nam veritatis, hic a. Illum, minima. Eveniet nihil culpa, veritatis unde doloremque, consectetur similique, cum mollitia aut ut adipisci non praesentium earum. 
             Tempore perferendis id accusantium, aliquid totam eos velit vel magnam,
             distinctio consequatur voluptate error vitae."
        ],
        [
            "title" => "Robot Modern VR",
            "slug" => "robot-modern-vr",
            "author" => "Universitas Dian Nuswantoro",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit.
             Explicabo delectus alias mollitia dolor nobis doloremque fugiat expedita.
             Fugit consectetur aspernatur, culpa unde veritatis repudiandae ipsum. Totam odio illum itaque? Dolorem dicta architecto earum. 
             Ducimus quaerat nostrum architecto rerum non asperiores voluptate odit saepe, nihil ea est consequuntur suscipit eos error mollitia similique dignissimos dicta modi repellat quas. 
             Impedit aperiam earum eveniet quia maiores nam veritatis, hic a. Illum, minima. Eveniet nihil culpa, veritatis unde doloremque, consectetur similique, cum mollitia aut ut adipisci non praesentium earum. 
             Tempore perferendis id accusantium, aliquid totam eos velit vel magnam,
             distinctio consequatu r voluptate error vitae.  Ducimus quaerat nostrum architecto rerum non asperiores voluptate odit saepe, nihil ea est consequuntur suscipit eos error mollitia similique dignissimos dicta modi repellat quas. 
             Impedit aperiam earum eveniet quia maiores nam veritatis, hic a. Illum, minima. Eveniet nihil culpa, veritatis unde doloremque, consectetur similique, cum mollitia aut ut adipisci non praesentium earum. 
             Tempore perferendis id accusantium, aliquid totam eos velit vel magnam,
             distinctio consequatur voluptate error vitae."
        ],
    ];
    return view('About', [
        "title" => "About",
        "About" => $About_Deskripsi
    ]);
})->middleware('auth');


//COBA PAKAI PARAM DATA
Route::get('/Collection', function () {
    return view('Collection', [
        "title" => "Collection",
        "nama_instansi" => "Universitas Dian Nuswantoro",
        "email" => "dinus.ac.id",
        "contact" => "0858xxxxxxxx",
        "project" => "Metaverse",
        "image" => "Metaverse.jpg"
    ]);
})->middleware('auth');

Route::get('/Contact', function () {
    return view('Contact', [
        "title" => "Contact"
    ]);
})->middleware('auth');

//halaman single post about
Route::get('About/{slug}', function ($slug) {
    $About_Deskripsi = [
        [
            "title" => "Sejarah Metaverse",
            "slug" => "sejarah-metaverse",
            "author" => "Universitas Dian Nuswantoro",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit.
             Explicabo delectus alias mollitia dolor nobis doloremque fugiat expedita.
             Fugit consectetur aspernatur, culpa unde veritatis repudiandae ipsum. Totam odio illum itaque? Dolorem dicta architecto earum. 
             Ducimus quaerat nostrum architecto rerum non asperiores voluptate odit saepe, nihil ea est consequuntur suscipit eos error mollitia similique dignissimos dicta modi repellat quas. 
             Impedit aperiam earum eveniet quia maiores nam veritatis, hic a. Illum, minima. Eveniet nihil culpa, veritatis unde doloremque, consectetur similique, cum mollitia aut ut adipisci non praesentium earum. 
             Tempore perferendis id accusantium, aliquid totam eos velit vel magnam,
             distinctio consequatur voluptate error vitae."
        ],
        [
            "title" => "Robot Modern VR",
            "slug" => "robot-modern-vr",
            "author" => "Universitas Dian Nuswantoro",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit.
             Explicabo delectus alias mollitia dolor nobis doloremque fugiat expedita.
             Fugit consectetur aspernatur, culpa unde veritatis repudiandae ipsum. Totam odio illum itaque? Dolorem dicta architecto earum. 
             Ducimus quaerat nostrum architecto rerum non asperiores voluptate odit saepe, nihil ea est consequuntur suscipit eos error mollitia similique dignissimos dicta modi repellat quas. 
             Impedit aperiam earum eveniet quia maiores nam veritatis, hic a. Illum, minima. Eveniet nihil culpa, veritatis unde doloremque, consectetur similique, cum mollitia aut ut adipisci non praesentium earum. 
             Tempore perferendis id accusantium, aliquid totam eos velit vel magnam,
             distinctio consequatu r voluptate error vitae.  Ducimus quaerat nostrum architecto rerum non asperiores voluptate odit saepe, nihil ea est consequuntur suscipit eos error mollitia similique dignissimos dicta modi repellat quas. 
             Impedit aperiam earum eveniet quia maiores nam veritatis, hic a. Illum, minima. Eveniet nihil culpa, veritatis unde doloremque, consectetur similique, cum mollitia aut ut adipisci non praesentium earum. 
             Tempore perferendis id accusantium, aliquid totam eos velit vel magnam,
             distinctio consequatur voluptate error vitae."
        ],
    ];

    $new_About_Deskripsi = [];
    foreach ($About_Deskripsi as $About_Deskripsi) {
        if ($About_Deskripsi["slug"] === $slug) {
            $new_About_Deskripsi = $About_Deskripsi;
        }
    }
    return view('About_Deskripsi', [
        "title" => "Single Post",
        "About_Deskripsi" => $new_About_Deskripsi
    ]);
})->middleware('auth');

//LOGIN                                                 //cobainfitur dibawah
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');  //hanya bisa diakses user belum auth
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth');

//REGISTER
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

// DASHBOARD
// Route::get('/dashboard', [DashboardController::class, 'index']);