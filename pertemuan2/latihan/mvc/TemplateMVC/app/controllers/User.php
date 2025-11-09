<?php

class User extends Controller
{
    public function index()
    {
        $data["judul"] = "Data user";
        $data["users"] = $this->model('User_model')->getAllUsers();
        $this->view('list', $data);
    }

    public function detail($id)
    {
        $data["judul"] = "Detail user";
        $data["user"] = $this->model('User_model')->getUserById($id);
        $this->view('detail', $data);
    }
}
?>