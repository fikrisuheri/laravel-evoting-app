<?php

namespace App\Http\Controllers\Backend\Master;

use App\Http\Controllers\Controller;
use App\Models\Major;
use App\Repositories\BaseRepository;
use Illuminate\Http\Request;

class MajorController extends Controller
{
    protected $majors;
    public function __construct(Major $majors)
    {
        $this->majors = new BaseRepository($majors);
    }

    public function index()
    {
        $data['majors'] = $this->majors->get();
        return view('backend.master.major.index',compact('data'));
    }
}
