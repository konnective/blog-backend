<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Task;
use App\Models\Dailypoints;
use App\Models\Person;
use App\Models\Section;
use App\Models\Project;
use Carbon\Carbon;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\DB as FacadesDB;

class SectionController extends Controller
{

    public function intro(Request $request)
    {
        $data['content'] = Section::where('page', 'home')->first();
        // dd(env('APP_URL'));

        return view('admin.sections.intro', $data);
    }

    public function introUpdate(Request $req)
    {

        $inputSec['title'] = $req->title;
        $inputSec['subtitle'] = $req->subtitle;
        // $inputSec['img'] = 
        $upd = Section::where('id', 1)->update($inputSec);

        return redirect()->back()->with('success');
    }
}
