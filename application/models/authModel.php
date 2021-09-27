<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthModel extends CI_Model {

	public function login($username, $password){
        $pengguna = $this->db->get_where('pengguna', ['username' => $username])
                             ->row_array();

        if ($pengguna) {
            if (password_verify($password, $pengguna['password'])) {
                $data = [
                    'username' => $pengguna['username'],
                    'level' => $pengguna['level'],
                    'status' => $pengguna['status']
                ];
                $this->session->set_userdata($data);
                return 1;
            } else {
                return 2;
            }
        } else {
			return 0;
		}
	}

}

/* End of file Cek.php */
/* Location: ./application/models/Cek.php */