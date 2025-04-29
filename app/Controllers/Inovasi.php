<?php

namespace App\Controllers;

use App\Models\InovasiModel;

class Inovasi extends BaseController
{

    protected $inovasiModel;

    public function __construct()
    {
        $this->inovasiModel = new InovasiModel();
    }

    public function index()
    {
        if (!session()->get('logged_in')) {
            return redirect()->to('/login'); // Cek apakah sudah login
        }

        $model = new InovasiModel();

        // Pagination: ambil 5 per halaman
        $currentPage = $this->request->getVar('page_inovasi') ? (int) $this->request->getVar('page_inovasi') : 1;

        $inovasi = $model->orderBy('created_at', 'DESC')->paginate(5, 'inovasi');

        $data = [
            'inovasi' => $inovasi,
            'pager'           => $model->pager,
            'currentPage'     => $currentPage
        ];

        return view('admin/dashboard', $data);
    }

    public function detail($slug)
    {
        // Mencari data inovasi berdasarkan slug
        $inovasi = $this->inovasiModel->where('slug', $slug)->first();

        // Jika data inovasi tidak ditemukan
        if (!$inovasi) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Inovasi tidak ditemukan.');
        }

        // Menyusun data untuk dikirim ke view
        $data = [
            'title' => $inovasi['judul'],
            'inovasi' => $inovasi
        ];

        // Menampilkan view dengan data inovasi
        return view('admin/detail', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah Inovasi Baru',
            'validation' => session('validation') ?? \Config\Services::validation() // Pastikan validasi tersedia
        ];

        return view('admin/create', $data); // Menampilkan form untuk menambah inovasi
    }

    public function save()
    {
        // Validasi input
        if (!$this->validate([
            'judul' => [
                'rules' => 'required|is_unique[inovasi.judul]',
                'errors' => [
                    'required' => 'Judul harus diisi.',
                    'is_unique' => 'Judul sudah terdaftar.'
                ]
            ],
            'tagline' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tagline harus diisi.'
                ]
            ],
            'subjudul' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Subjudul harus diisi.'
                ]
            ],
            'subkonten' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Subkonten harus diisi.'
                ]
            ],
            'judul_info' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Judul Info harus diisi.'
                ]
            ],
            'deskripsi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Deskripsi harus diisi.'
                ]
            ],
            'video_url' => [
                'rules' => 'required|valid_url',
                'errors' => [
                    'required' => 'Link video harus diisi.',
                    'valid_url' => 'Link video harus berupa URL yang valid.'
                ]
            ],
            'gambar' => [
                'rules' => 'permit_empty|is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'is_image' => 'File harus berupa gambar.',
                    'mime_in' => 'Format gambar harus JPG, JPEG, atau PNG.'
                ]
            ]
        ])) {
            // return redirect()->back()->withInput()->with('errors', $this->validator);
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
            // Menyimpan pesan validasi ke session
        }

        // Menyimpan gambar jika ada
        $gambar = $this->request->getFile('gambar');
        $namaGambar = ($gambar && $gambar->isValid()) ? $gambar->getRandomName() : 'default.jpg';

        if ($gambar && $gambar->isValid()) {
            $gambar->move(FCPATH . 'images/', $namaGambar); // Menyimpan gambar ke folder yang sesuai
        }

        // Mendapatkan data form
        $judul = $this->request->getVar('judul');
        $slug = $this->inovasiModel->generateSlug($judul); // Menghasilkan slug dari judul

        // Menyimpan data ke database
        if (!$this->inovasiModel->save([
            'judul'      => $judul,
            'slug'       => $slug,
            'tagline'    => $this->request->getVar('tagline'),
            'subjudul'   => $this->request->getVar('subjudul'),
            'subkonten'  => $this->request->getVar('subkonten'),
            'judul_info' => $this->request->getVar('judul_info'),
            'deskripsi'  => $this->request->getVar('deskripsi'),
            'video_url'  => $this->request->getVar('video_url'),
            'gambar'     => $namaGambar,
        ])) {
            return redirect()->back()->withInput()->with('errors', $this->inovasiModel->errors());
        }

        // Menampilkan pesan sukses
        session()->setFlashdata('pesan', 'Inovasi baru berhasil ditambahkan.');
        return redirect()->to('/admin'); // Mengarahkan kembali ke halaman admin
    }

    public function delete($id)
    {
        $inovasi = $this->inovasiModel->find($id);

        if ($inovasi && $inovasi['gambar'] != 'default.jpg') {
            $path = FCPATH . '/images/' . $inovasi['gambar'];
            if (file_exists($path)) {
                unlink($path);
            }
        }

        $this->inovasiModel->delete($id);

        session()->setFlashdata('pesan', 'Inovasi berhasil dihapus.');
        return redirect()->to('/admin');
    }

    public function edit($slug)
    {
        $inovasi = $this->inovasiModel->asArray()->where('slug', $slug)->first();

        if (!$inovasi) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Inovasi tidak ditemukan.');
        }

        $data = [
            'title' => 'Edit Inovasi',
            'validation' => session('validation') ?? \Config\Services::validation(),
            'inovasi' => $inovasi
        ];

        return view('admin/edit', $data);
    }

    public function update($id)
    {
        $inovasiLama = $this->inovasiModel->find($id);

        if (!$inovasiLama) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Inovasi tidak ditemukan.');
        }

        $rule_judul = ($inovasiLama['judul'] == $this->request->getVar('judul'))
            ? 'required'
            : 'required|is_unique[inovasi.judul]';

        // Validasi input
        if (!$this->validate([
            'judul' => [
                'rules' => $rule_judul,
                'errors' => [
                    'required' => 'Judul harus diisi.',
                    'is_unique' => 'Judul sudah terdaftar.'
                ]
            ],
            'tagline' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tagline harus diisi.'
                ]
            ],
            'subjudul' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Subjudul harus diisi.'
                ]
            ],
            'subkonten' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Subkonten harus diisi.'
                ]
            ],
            'judul_info' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Judul Info harus diisi.'
                ]
            ],
            'deskripsi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Deskripsi harus diisi.'
                ]
            ],
            'video_url' => [
                'rules' => 'required|valid_url',
                'errors' => [
                    'required' => 'Link video harus diisi.',
                    'valid_url' => 'Link video harus berupa URL yang valid.'
                ]
            ],
            'gambar' => [
                'rules' => 'permit_empty|is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'is_image' => 'File harus berupa gambar.',
                    'mime_in' => 'Format gambar harus JPG, JPEG, atau PNG.'
                ]
            ]
        ])) {
            // return redirect()->back()->withInput()->with('errors', $this->validator);
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
            // Menyimpan pesan validasi ke session
        }

        $fileGambar = $this->request->getFile('gambar');
        $namaGambar = $inovasiLama['gambar'];

        if ($fileGambar && $fileGambar->isValid() && !$fileGambar->hasMoved()) {
            $namaGambar = $fileGambar->getRandomName();
            $fileGambar->move(FCPATH . 'assets/img/', $namaGambar);

            if ($inovasiLama['gambar'] != 'default.jpg' && file_exists(FCPATH . 'assets/img/' . $inovasiLama['gambar'])) {
                unlink(FCPATH . '/images/' . $inovasiLama['gambar']);
            }
        }

        // Mendapatkan data form
        $judul = $this->request->getVar('judul');
        $slug = $this->inovasiModel->generateSlug($judul); // Menghasilkan slug dari judul

        // Menyimpan data ke database
        $data = [
            'judul'      => $judul,
            'slug'       => $slug,
            'tagline'    => $this->request->getVar('tagline'),
            'subjudul'   => $this->request->getVar('subjudul'),
            'subkonten'  => $this->request->getVar('subkonten'),
            'judul_info' => $this->request->getVar('judul_info'),
            'deskripsi'  => $this->request->getVar('deskripsi'),
            'video_url'  => $this->request->getVar('video_url'),
            'gambar'     => $namaGambar,
        ];

        // Cek perubahan
        $adaPerubahan = false;
        foreach ($data as $key => $value) {
            if ($inovasiLama[$key] != $value) {
                $adaPerubahan = true;
                break;
            }
        }

        if ($adaPerubahan) {
            $this->inovasiModel->update($id, $data);
            session()->setFlashdata('pesan', 'Inovasi berhasil diperbarui');
        } else {
            session()->setFlashdata('pesan', 'Tidak ada perubahan Inovasi');
        }
        return redirect()->to('/admin');
    }
}
