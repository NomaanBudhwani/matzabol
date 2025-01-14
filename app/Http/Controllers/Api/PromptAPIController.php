<?php

namespace App\Http\Controllers\Api;

use App\Helpers\RESTAPIHelper;
use App\Repositories\PromptRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PromptAPIController extends Controller
{
    protected $promptRepository;
   public function __construct(PromptRepository $promptRepo)
   {
        $this->promptRepository = $promptRepo;
   }

    public function index()
    {
        return RESTAPIHelper::response(['prompt' => $this->promptRepository->getDataTable()], 200, 'Prompt Fetch successfully.', $this->isBlocked);
   }
}
