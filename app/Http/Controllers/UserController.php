<?php

namespace App\Http\Controllers;

use App\Interfaces\MessageSender;
use App\Services\EmailService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // public $emailService;
    // public function __construct(MessageSender $emailService)
    // {
    //     $this->emailService = $emailService;
    // }
    public function index()
    {
        // $this->emailService->send("test@gmail.com", "Email message");
        // return 'hello user';


        // $emailService = app(MessageSender::class)->get('email');
    }
}
