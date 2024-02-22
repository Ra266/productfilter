<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserImage;

class UploadImage extends BaseController
{
    public function index()
    {
        $user = new UserImage();
        $data['user'] = $user->findAll();
        // print_r($data);
        // die();

        echo view('dashboard', $data);
    }
    public function create()
    {
        return view('product');
    }


    // public function uploaddata()
    // {
    //     helper(['form', 'url']);
    //     if ($img = $this->request->getFile('image')) {
    //         $imgname = $img->getRandomName();
    //         // echo base_url() . 'public/upload/', $imgname;
    //         // die();

    //         // // C:\xampp\htdocs\productfilter\writable\public/upload/1704433452_99d419f2ee975ec23c39.jpg
    //         // http://localhost/productfilter/public/upload/1704433532_34c98d0df1a67f1a9749.jpg

    //         // $img->move(base_url() . 'public/upload/image', $imgname);
    //         $path = base_url() . 'public/upload/' . $img->store('image', $imgname);
    //         // print_r($imgname);
    //         // echo '<br>';
    //         // print_r($path);
    //         // die();
    //         $data = [
    //             'product_name' => $this->request->getPost('name'),
    //             'product_price' => $this->request->getPost('price'),

    //             'product_image' => $imgname,
    //         ];


    //         $user = new UserImage();

    //         if ($user->save($data)) {
    //             return redirect()->to(base_url() . 'view');
    //         } else {
    //             echo 'user not uploaded image';
    //         }
    //     }
    // }






    public function fileUpload()
    {
        if ($file = $this->request->getFile('image')) {
            // $name = $file->getName();
            // $ext = $file->getClientExtension();
            $newName = $file->getRandomName();
            $file->move('./public/uploads', $newName);
            // $filepath = base_url() . "uploads/" . $newName;

            $data = [
                'product_name' => $this->request->getPost('name'),
                'product_price' => $this->request->getPost('price'),

                'product_image' => $newName,
            ];
            // echo "<pre>";
            // print_r($data);
            // exit;
            $user = new UserImage();
            if ($user->save($data)) {
                return redirect()->to(base_url() . 'view');
            } else {
                echo 'user not uploaded image';
            }
        }
    }
}
