<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class CategoryController extends BaseController
{
    public function index()
    {
        $Kategori['Kategori'] = [
            'Alat Tulis' => 'alat_tulis',
            'Pakaian' => 'pakaian',
            'Pertukangan' => 'pertukangan',
            'Elektronik' => 'elektronik',
            'Snack' => 'snack'
        ];
        return view('kategori', $Kategori);
    }

    public function alat_tulis()
    {
        $AlatTulis['AlatTulis'] = [
            'Pensil',
            'Buku Tulis',
            'Penghapus',
            'Penggaris',
            'Spidol'
        ];
        return view('content/alat_tulis', $AlatTulis);
    }

    public function elektronik()
    {
        $Elektronik['Elektronik'] = [
            'HP',
            'Laptop',
            'Kamera',
            'TV',
            'Kulkas'
        ];
        return view('content/elektronik', $Elektronik);
    }

    public function pakaian()
    {
        $Pakaian['Pakaian'] = [
            'Kaos',
            'Celana',
            'Jaket',
            'Sepatu',
            'Kemejas'
        ];
        return view('content/pakaian', $Pakaian);
    }

    public function pertukangan()
    {
        $Pertukangan['Pertukangan'] = [
            'Palu',
            'Gergaji',
            'Bor',
            'Obeng',
            'Tang'
        ];
        return view('content/pertukangan', $Pertukangan);
    }

    public function snack()
    {
        $Snack['Snack'] = [
            'Cheetos',
            'Doritos',
            'Mentos',
            'Chocolatos',
            'Roma Kelapa'
        ];
        return view('content/snack', $Snack);
    }
}
