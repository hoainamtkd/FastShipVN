<?php

namespace App\Http\Controllers\Backend;

use Request;
use App\Term;
use App\Term_Taxonomy;
use App\Position_Nav;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->prefix = 'fs_';
    }
    public function index(Request $request)
    {
        $navs_menu = Term::leftJoin($this->prefix.'term_taxonomy', $this->prefix.'term.term_id', '=', $this->prefix.'term_taxonomy.term_id')->where($this->prefix.'term_taxonomy.taxonomy','=','navs-menu')->where($this->prefix.'term_taxonomy.parent','=','0')->get()->toArray();
        $position = Position_Nav::get()->toArray();
        $data['navs_menu'] = $navs_menu;
        if(!isset($_GET['action'])){
            return redirect(Request::fullUrl().'?action=edit&menu='.$navs_menu[0]['term_id']);
        }
        $data['position'] = $position;
        return view('backend.module.menu.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $term = new Term();
        $term->name = $request->name;
        $term->slug = str_slug($request->name);
        $term->term_group = 0;
        $term->save();

        $term_taxonomy = new Term_Taxonomy();
        $term_taxonomy->term_id = $term->id;
        $term_taxonomy->taxonomy = 'navs-menu';
        $term_taxonomy->description = '';
        $term_taxonomy->parent = 0;
        $term_taxonomy->count = 0;
        $term_taxonomy->save();
        return redirect()->route('menu-index')->with('success', 'Tạo menu thành công');
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
        //
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
        echo "<prE>";
        print_r($request::all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
