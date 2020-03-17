<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\mobile;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;


class mobileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
   
    public function __construct()
    {
        $this->middleware('auth');
    }

     

    public function index(Request $request)
    {
      
        $count_date = mobile::where('appointment_date', '=', date('Y-m-d'))->count();
        $appointment = mobile::where('appointment', '=', "นัดฉีดวัคซีน")->count();
        $appointment1 = mobile::where('appointment', '=', "ฉีดกระตุ้นภูมิคุ้มกัน")->count();
        $appointment2 = mobile::where('appointment', '=', "นัดกำจัดเห็บถ่ายพยาธิ")->count();
        $appointment3 = mobile::where('appointment', '=', "นัดรักษาต่อเนื่อง")->count();
        $keyword = $request->get('search');
        $perPage = 10;

        if (!empty($keyword)) {

            

            $posts = mobile::where('title', 'LIKE', "%$keyword%")
            ->orWhere('appointment_date', 'LIKE', "%$keyword%")
            ->orWhere('appointment', 'LIKE', "%$keyword%")
                ->orWhere('cus_name', 'LIKE', "%$keyword%")
                ->orWhere('category', 'LIKE', "%$keyword%")
                ->orWhere('opd_phone', 'LIKE', "%$keyword%")
                ->orWhere('user_id', 'LIKE', "%$keyword%")
                ->orWhere('id', 'LIKE', "%$keyword%")
                
               


                ->latest()->paginate($perPage);

            
                
        } else {
            

            $id = Auth::user()->user_id;

            $posts = mobile::where('user_id', '=', $id )
            
            
            /*orderBy('appointment_date', 'desc')*/
           

            ->latest()->paginate($perPage);

            
        
        }

        return view('admin.mobile.index', compact('posts','count_date','appointment','appointment1','appointment2','appointment3'));
    }


    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $count_date = mobile::where('appointment_date', '=', date('Y-m-d'))->count();
        $appointment = mobile::where('appointment', '=', "นัดฉีดวัคซีน")->count();
        $appointment1 = mobile::where('appointment', '=', "ฉีดกระตุ้นภูมิคุ้มกัน")->count();
        $appointment2 = mobile::where('appointment', '=', "นัดกำจัดเห็บถ่ายพยาธิ")->count();
        $appointment3 = mobile::where('appointment', '=', "นัดรักษาต่อเนื่อง")->count();
        
        return view('admin.mobile.create', compact('count_date','appointment','appointment1','appointment2','appointment3'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {



        $requestData = $request->all();
        mobile::create($requestData);

        


        return redirect('admin/mobile')->with('flash_message', 'Post added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $post = mobile::findOrFail($id);
        $count_date = mobile::where('appointment_date', '=', date('Y-m-d'))->count();
        $appointment = mobile::where('appointment', '=', "นัดฉีดวัคซีน")->count();
        $appointment1 = mobile::where('appointment', '=', "ฉีดกระตุ้นภูมิคุ้มกัน")->count();
        $appointment2 = mobile::where('appointment', '=', "นัดกำจัดเห็บถ่ายพยาธิ")->count();
        $appointment3 = mobile::where('appointment', '=', "นัดรักษาต่อเนื่อง")->count();

        return view('admin.mobile.show', compact('post','count_date','appointment','appointment1','appointment2','appointment3'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $post = mobile::findOrFail($id);
        $count_date = mobile::where('appointment_date', '=', date('Y-m-d'))->count();
        $appointment = mobile::where('appointment', '=', "นัดฉีดวัคซีน")->count();
        $appointment1 = mobile::where('appointment', '=', "ฉีดกระตุ้นภูมิคุ้มกัน")->count();
        $appointment2 = mobile::where('appointment', '=', "นัดกำจัดเห็บถ่ายพยาธิ")->count();
        $appointment3 = mobile::where('appointment', '=', "นัดรักษาต่อเนื่อง")->count();

        return view('admin.mobile.edit', compact('post','count_date','appointment','appointment1','appointment2','appointment3'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $post = mobile::findOrFail($id);
        $post->update($requestData);

        return redirect('admin/mobile')->with('flash_message', 'Post updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        mobile::destroy($id);

        return redirect('admin/mobile')->with('flash_message', 'Post deleted!');
    }
}
