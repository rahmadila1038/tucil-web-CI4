<?php namespace App\Controllers;

class Verifikasi extends BaseController
{
public function verif()
	{
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        if ($email=="rahmadilan11@gmail.com" && $password=="12345678") {
            return redirect()->to('/pages/index'); 
        }
        else {
            return redirect()->to('/pages/login'); 
		}
    }
}    