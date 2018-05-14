<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Pages;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->post_type = "pages";
    }

    public function index(Request $request)
    {
        if($request->input('search')){
            $pages = \App\Pages::where('post_type','pages')->where('post_name','like','%'.$request->input('search').'%')->orderBy('id', 'desc')->get();
        }else{
            $pages = \App\Pages::where('post_type','pages')->orderBy('id', 'desc')->get();
        }
        return view('backend.module.pages.index',compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        $pages = \App\Pages::where('post_type','pages')->orderBy('id', 'desc')->get()->toArray();
        return view('backend.module.pages.add',compact('pages'));
    }

    public function postAdd(Request $request)
    {
        $pages = new Pages;
        $pages->post_name = $request->name;
        $pages->post_alias = str_slug($request->name);
        $pages->post_content = $request->content;
        $pages->post_excerpt = $request->excerpt;
        $pages->post_parent = !empty($request->parent) ? $request->parent : 0;
        $pages->post_status = $request->status;
        $pages->post_keyword = $request->keyword;
        $pages->post_type = $this->post_type;
        $pages->post_author = 1;
        $pages->save();
        return redirect()->route('pages-index')->with('success', 'Thêm trang mới thành công.');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pages = \App\Pages::find($id);
        $pages->edit = 1;
        $parent = \App\Pages::where('post_type','pages')->whereNotIn('id',[$id])->orderBy('id', 'desc')->get()->toArray();
        return view('backend.module.pages.add',compact('pages','parent'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pages = \App\Pages::find($id);
        $pages->post_name = $request->name;
        $pages->post_alias = str_slug($request->name);
        $pages->post_content = $request->content;
        $pages->post_excerpt = $request->excerpt;
        $pages->post_parent = !empty($request->parent) ? $request->parent : 0;
        $pages->post_status = $request->status;
        $pages->post_keyword = $request->keyword;
        $pages->post_type = $this->post_type;
        $pages->post_author = 1;
        $pages->update();
        return redirect()->back()->with('success', 'Cập nhật trang thành công.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $pages = \App\Pages::find($id);
        $checkExistsChild = \App\Pages::where('post_type','pages')->where('post_parent',$id)->orderBy('id', 'desc')->get()->toArray();
        if($checkExistsChild){
            return response()->json([
                'code' => '403',
                'message' => 'Không thể xóa dữ liệu này . Vui lòng di chuyển các mục con sang mục khác và thử lại.'
            ]);
        }else{
            if($pages->delete()){
                return response()->json([
                    'code' => '201',
                    'message' => 'Xóa dữ liệu thành công'
                ]);
            }
        }
        
        
    }
}






















