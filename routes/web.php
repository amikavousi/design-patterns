<?php

use App\DesignPatterns\FactoryMethod\CreditCardFactory;
use App\DesignPatterns\FactoryMethod\PayPalFactory;
use App\DesignPatterns\SimpleFactory\ProductFactory;
use App\DesignPatterns\StaticFactory\FileProcessor;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';


// static factory design pattern
Route::get('/data-reader', function () {
    $dataReader = FileProcessor::dataReader('csv');
    echo $dataReader->readData('test.csv');
});

// simple factory design pattern
Route::get('/product', function () {
    $product = new ProductFactory();
    $createdProduct = $product->creatProduct('digital', 'spiderman movie', 30, 'this is spiderman movie');

    return [
        $createdProduct->getName(),
        $createdProduct->getPrice(),
        $createdProduct->getDescription(),
    ];
});

// factory method design pattern
Route::get('/payment', function () {
    $creditCard = new CreditCardFactory('6362141000000', '123', '01/09');
    $newPayment = $creditCard->createPayment();
    $processCreditCardPayment = $newPayment->processPayment('1000');

    $paypal = new PayPalFactory('test@gmail.com', '12345');
    $newPayment = $paypal->createPayment();
    $processPayPalPayment = $newPayment->processPayment(500);

    return response()->json(['status' => true, [$processCreditCardPayment, $processPayPalPayment]]);
});
