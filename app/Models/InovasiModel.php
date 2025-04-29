<?php

namespace App\Models;

use CodeIgniter\Model;

class InovasiModel extends Model
{
    protected $table = 'inovasi'; // Nama tabel di database
    protected $primaryKey = 'id'; // Kolom primary key (id utama)

    // Kolom-kolom yang dapat diakses/diubah
    protected $allowedFields = [
        'judul',
        'slug',
        'tagline',
        'gambar',
        'subjudul',
        'subkonten',
        'judul_info',
        'deskripsi',
        'video_url',
        'created_at',
        'updated_at'
    ];

    // Validasi input jika diperlukan
    // protected $validationRules = [
    //     'judul'       => 'required|max_length[255]',
    //     'slug'        => 'required|max_length[255]',
    //     'tagline'     => 'required|max_length[255]',
    //     'gambar'      => 'required|max_length[255]',
    //     'subjudul'    => 'max_length[255]',
    //     'subkonten'   => 'max_length[255]',
    //     'judul_info'  => 'max_length[255]',
    //     'deskripsi'   => 'max_length[255]',
    //     'video_url'   => 'max_length[255]',
    //     'created_at'  => 'valid_date',
    //     'updated_at'  => 'valid_date'
    // ];

    // Format date ketika menyimpan data (jika diperlukan)
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    // Fungsi untuk mengambil semua data inovasi
    public function getInovasi($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }

    // Fungsi untuk membuat slug secara otomatis jika diperlukan
    public function generateSlug($judul)
    {
        return url_title($judul, '-', true); // Menghasilkan slug berdasarkan judul
    }
}
