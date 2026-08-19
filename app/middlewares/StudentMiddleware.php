<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');


class StudentMiddleware
{
    public function handle(Closure $next)
    {
        if (!empty($_SESSION['student_access'])) {
            return $next();
        }

        redirect(site_url('student?middleware=blocked'), false, false);
        exit();
    }
}
