    <?php

    use App\Http\Controllers\LivroController;
    use Illuminate\Support\Facades\Route;

    /*
    |--------------------------------------------------------------------------
    | Web Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register web routes for your application. These
    | routes are loaded by the RouteServiceProvider within a group which
    | contains the "web" middleware group. Now create something great!
    |
    */

//    Route::get('/a', function () {
//         return view('homepage');
//     });
    // se usa o post para mandar info o get recebe info
    //se usa o get pq quer ir buscar as info
    Route::get('/', [LivroController::class, 'index'])->name('livros.index');
    Route::get('/create', [LivroController::class, 'create'])->name('livros.create');
    Route::post('/store', [LivroController::class, 'store'])->name('livros.store');
    Route::get('/show/{id}', [LivroController::class, 'show'])->name('livros.show');
    Route::get('/edit/{id}', [LivroController::class, 'edit'])->name('livros.edit');
    Route::put('/update/{id}', [LivroController::class, 'update'])->name('livros.update');
    Route::delete('/destroy/{id}', [LivroController::class, 'destroy'])->name('livros.destroy');

    // Route::get('/', function () {
    //     return view('homepage');
    // });
