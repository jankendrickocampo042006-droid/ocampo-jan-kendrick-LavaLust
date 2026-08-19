<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class StudentController extends Controller
{
    public function index()
    {
        $_SESSION['student_access'] = true;
        $data['title'] = 'Student Home';
        $data['middleware_blocked'] = isset($_GET['middleware']) && $_GET['middleware'] === 'blocked';
        $this->call->view('student_home', $data);
    }

    public function test_middleware()
    {
        $_SESSION['student_access'] = false;
        redirect(site_url('student/profile'));
    }

    public function profile()
    {
        $data['student'] = [
            'student_id' => 'MCC2024-00178',
            'name'       => 'Jan Kendrick Ocampo',
            'course'     => 'BS Information Technology',
            'year'       => '3rd Year',
            'section'    => '3F4',
            'email'      => 'jan.ocampo@gmail.com',
            'address'    => 'Naujan',
            'skills'     => 'Singing',
            'hobbies'    => 'Mobile Gaming',
            'instagram'  => 'ur.indek'
        ];

        $data['title'] = 'Student Profile';
        $this->call->view('student_profile', $data);
    }
}
