<?php

class User extends Controller {
    public function index() {
        $data["judul"] = "Data user";
        $data['users'] = $this->model('User_model')->getAllUsers();

        // Cek jika ada parameter ubah di GET (untuk mengisi form ubah)
        if (isset($_GET['ubah'])) {
            $data['ubah'] = $this->model('User_model')->getUserById($_GET['ubah']);
        }

        // Cek jika ada parameter tambah di GET (untuk menampilkan form tambah)
        if (isset($_GET['tambah'])) {
            $data['tambah'] = true;  // Flag untuk tampilkan form tambah
        }

        // Tangani POST untuk tambah atau ubah (tidak berubah)
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['id']) && !empty($_POST['id'])) {
                // Ubah data
                if ($this->model('User_model')->ubahData($_POST) > 0) {
                    header('Location: ' . BASEURL . '/user');
                    exit;
                } else {
                    header('Location: ' . BASEURL . '/user');
                    exit;
                }
            } else {
                // Tambah data
                if ($this->model('User_model')->tambahData($_POST) > 0) {
                    header('Location: ' . BASEURL . '/user');
                    exit;
                } else {
                    header('Location: ' . BASEURL . '/user');
                    exit;
                }
            }
        }

        $this->view('list', $data);
    }

    // Method hapus dan detail tetap sama
    public function hapus($id) {
        if ($this->model('User_model')->hapusData($id) > 0) {
            header('Location: ' . BASEURL . '/user');
            exit;
        } else {
            header('Location: ' . BASEURL . '/user');
            exit;
        }
    }

    public function detail($id) {
        $data["judul"] = "Detail user";
        $data['user'] = $this->model('User_model')->getUserById($id);
        $this->view('detail', $data);
    }
}
?>