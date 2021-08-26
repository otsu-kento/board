<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function profile($id=null)
    {
        echo $id;
    }

    public function detail()
    {
        $data = [
            'name' => '山田太郎',
            'pref' => '東京都'
        ];
        $this->load->view('tutorial/user_detail', $data);
    } 

    public function url()
    {
        $this->load->helper('url');
        echo auto_link('googleのurlは、http://google.comです');
        echo '<br>';
        echo site_url();
    }
    public function agent()
    {
        $this->load->library('user_agent');
        echo $this->agent->agent_string();
        echo '<br>';
        echo $this->agent->browser();
        echo '<br>';
        echo $this->agent->platform();
    }
}
?>