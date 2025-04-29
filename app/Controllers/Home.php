<?php

namespace App\Controllers;

use App\Models\InovasiModel; // Import model

class Home extends BaseController
{
    public function index()
    {
        // Instansiasi model
        $model = new InovasiModel();

        // Ambil 3 data inovasi terbaru
        $data['inovasi_terbaru'] = $model->orderBy('created_at', 'desc')->findAll(3);

        // Kirim data ke view index
        return view('index', $data);
    }

    public function katalog_inovasi()
    {
        helper('text');

        $model = new InovasiModel();

        // Pagination
        $inovasi = $model->orderBy('created_at', 'DESC')->paginate(9, 'inovasi'); // Misal 6 per halaman

        $data = [
            'inovasi' => $inovasi,
            'pager'   => $model->pager, // <-- Tambahkan ini
        ];

        return view('katalog-inovasi', $data);
    }


    public function detail_inovasi($slug)
    {
        // Instansiasi model
        $model = new InovasiModel();

        // Ambil detail inovasi berdasarkan slug
        $data['inovasi'] = $model->getInovasi($slug); // Mengambil data berdasarkan slug

        // Jika data tidak ditemukan, redirect ke katalog inovasi
        if (empty($data['inovasi'])) {
            return redirect()->to('/katalog-inovasi');
        }

        // Kirim data ke view
        return view('detail-inovasi', $data);
    }
}
