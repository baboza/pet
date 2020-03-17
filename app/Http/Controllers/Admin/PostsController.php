<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Post;
use Illuminate\Http\Request;
use Image;
use File;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
   
 
     

    public function index(Request $request)
    {
        $count_date = Post::where('appointment_date', '=', date('Y-m-d'))->count();
        $appointment = Post::where('appointment', '=', "นัดฉีดวัคซีน")->count();
        $appointment1 = Post::where('appointment', '=', "ฉีดกระตุ้นภูมิคุ้มกัน")->count();
        $appointment2 = Post::where('appointment', '=', "นัดกำจัดเห็บถ่ายพยาธิ")->count();
        $appointment3 = Post::where('appointment', '=', "นัดรักษาต่อเนื่อง")->count();

        $dog = Post::where('category', '=', "สุนัข")->count();
        $cat = Post::where('category', '=', "แมว")->count();
        $all = Post::where('category', '=', "อื่นๆ")->count();

        $allrecord = Post::count();

        $dog_av = $dog*100/$allrecord;
        $cat_av = $cat*100/$allrecord;
        $all_av = $all*100/$allrecord;

        $keyword = $request->get('search');
        $perPage = 5;

        if (!empty($keyword)) {

            

            $posts = Post::where('title', 'LIKE', "%$keyword%")
            ->orWhere('appointment_date', 'LIKE', "%$keyword%")
            ->orWhere('appointment', 'LIKE', "%$keyword%")
                ->orWhere('cus_name', 'LIKE', "%$keyword%")
                ->orWhere('category', 'LIKE', "%$keyword%")
                ->orWhere('opd_phone', 'LIKE', "%$keyword%")
                ->orWhere('user_id', 'LIKE', "%$keyword%")
                ->orWhere('breed', 'LIKE', "%$keyword%")
                ->orWhere('id', 'LIKE', "%$keyword%")
                
               


                ->latest()->paginate($perPage);

            
                
        } else {
            
            $posts = Post::
            
            /*orderBy('appointment_date', 'desc')*/
           

            latest()->paginate($perPage);

            
        
        }

        return view('admin.posts.index', compact('cat_av','all_av','dog','allrecord','dog_av','cat','all','posts','count_date','appointment','appointment1','appointment2','appointment3'));
    }


    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $count_date = Post::where('appointment_date', '=', date('Y-m-d'))->count();
        $appointment = Post::where('appointment', '=', "นัดฉีดวัคซีน")->count();
        $appointment1 = Post::where('appointment', '=', "ฉีดกระตุ้นภูมิคุ้มกัน")->count();
        $appointment2 = Post::where('appointment', '=', "นัดกำจัดเห็บถ่ายพยาธิ")->count();
        $appointment3 = Post::where('appointment', '=', "นัดรักษาต่อเนื่อง")->count();
        
        return view('admin.posts.create', compact('count_date','appointment','appointment1','appointment2','appointment3'));
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

        $post = new post;
        
        $post->id = $request->id;
        $post->created_at = $request->created_at;
        $post->updated_at = $request->updated_at;
        $post->title = $request->title;
        $post->cus_name = $request->cus_name;
        $post->category = $request->category;
        $post->opd_phone = $request->opd_phone;
        $post->Sterilization = $request->Sterilization;
        $post->opd_vaccine = $request->opd_vaccine;
        $post->opd_vaccine_day = $request->opd_vaccine_day;
        $post->sex = $request->sex;
        $post->color = $request->color;
        $post->breed = $request->breed;
        $post->user_id = $request->user_id;
        $post->year = $request->year;
        $post->opd_details = $request->opd_details;
        $post->appointment = $request->appointment;
        $post->appointment_details = $request->appointment_details;
        $post->appointment_date = $request->appointment_date;
        $post->image = $request->image;
        $post->line_id = $request->line_id;

        $post->save();

       

        if ($request->hasFile('image')) {
            $featured = $request->image;
            $extension = $featured->getClientOriginalExtension();
            $rename = "File_" . date('Y-m-d') . time() . rand(11111, 99999) . '.' . $extension;

            $featured->move('files/', $rename);
            $post->image = "files/" . $rename;
        }
      
        $post->update();

        



        return redirect('admin/posts')->with('flash_message', 'Post added!');
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
        $post = Post::findOrFail($id);
        $count_date = Post::where('appointment_date', '=', date('Y-m-d'))->count();
        $appointment = Post::where('appointment', '=', "นัดฉีดวัคซีน")->count();
        $appointment1 = Post::where('appointment', '=', "ฉีดกระตุ้นภูมิคุ้มกัน")->count();
        $appointment2 = Post::where('appointment', '=', "นัดกำจัดเห็บถ่ายพยาธิ")->count();
        $appointment3 = Post::where('appointment', '=', "นัดรักษาต่อเนื่อง")->count();

        return view('admin.posts.show', compact('post','count_date','appointment','appointment1','appointment2','appointment3'));
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
        $post = Post::findOrFail($id);
        $count_date = Post::where('appointment_date', '=', date('Y-m-d'))->count();
        $appointment = Post::where('appointment', '=', "นัดฉีดวัคซีน")->count();
        $appointment1 = Post::where('appointment', '=', "ฉีดกระตุ้นภูมิคุ้มกัน")->count();
        $appointment2 = Post::where('appointment', '=', "นัดกำจัดเห็บถ่ายพยาธิ")->count();
        $appointment3 = Post::where('appointment', '=', "นัดรักษาต่อเนื่อง")->count();
        

        return view('admin.posts.edit', compact('post','count_date','appointment','appointment1','appointment2','appointment3'));
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
        
        $post = Post::findOrFail($id);
        $post->update($requestData);

        if ($request->hasFile('image')) {
            $featured = $request->image;
            $extension = $featured->getClientOriginalExtension();
            $rename = "File_" . date('Y-m-d') . time() . rand(11111, 99999) . '.' . $extension;

            $featured->move('files/', $rename);
            $post->image = "files/" . $rename;
        }
        $post->save();
        return redirect('admin/posts')->with('flash_message', 'Post updated!');
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
        Post::destroy($id);

        return redirect('admin/posts')->with('flash_message', 'Post deleted!');
    }
}
