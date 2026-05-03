<?php
require_once __DIR__ . "/../models/Buku.php";

class BukuController {

    public function index() {
        $model = new Buku();
        $data = $model->getAll();
        require __DIR__ . "/../views/list.php";
    }

    public function tambah() {
        require __DIR__ . "/../views/tambah.php";
    }

    public function store($data) {
        $model = new Buku();
        $model->insert($data);
        header("Location: ../index.php");
    }

    public function edit($id) {
        $model = new Buku();
        $data = $model->getById($id);
        require __DIR__ . "/../views/edit.php";
    }

    public function update($data) {
        $model = new Buku();
        $model->update($data);
        header("Location: ../index.php");
    }

    public function delete($id) {
        $model = new Buku();
        $model->delete($id);
        header("Location: ../index.php");
    }
}

// routing
if (isset($_GET['action'])) {
    $controller = new BukuController();

    switch ($_GET['action']) {
        case 'tambah':
            $controller->tambah();
            break;
        case 'store':
            $controller->store($_POST);
            break;
        case 'edit':
            $controller->edit($_GET['id']);
            break;
        case 'update':
            $controller->update($_POST);
            break;
        case 'delete':
            $controller->delete($_GET['id']);
            break;
    }
}