<?php

namespace App\Http\Controllers;

use App\Http\Services\PinService;

class PinController extends Controller
{
    protected $pinService;

    public function __construct(PinService $pinService)
    {
        $this->pinService = $pinService;
    }

    public function generate()
    {
        return $this->pinService->generate();
    }
}
