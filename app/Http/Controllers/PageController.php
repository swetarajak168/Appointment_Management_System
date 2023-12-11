<?php

namespace App\Http\Controllers;

use App\Http\Requests\PageRequest;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     private $page;
     public function __construct(Page $page){
        $this->page = $page;
     }
    public function index()
    {
        //
        $pages = Page::get();
        // $page = $this->page->all();
        // dd($page);
        return view('pages.index',compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PageRequest $request)
    {
       $pageValidated = $request->validated();
       $slug = Str::slug ($pageValidated['title']['en']);
       Page::create([
        'title'=> [
            'en'=>$pageValidated['title']['en'],
            'np'=>$pageValidated['title']['np'],
        ],
        'content'=>[
            'en'=>$pageValidated['content']['en'],
            'np'=>$pageValidated['content']['np'],
        ],
        'slug'=>$slug,
        'status'=>$pageValidated['status']
       ]);
       Alert::success('success','Page Created Succcessfully');
       return redirect()->route('page.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $page = Page::findOrFail($id);
        return view('pages.show',compact('page'));
    }

    //to switch between english and nepali language
    public function change_language(Request $request){
        App::setLocale($request->lang);
        session()->put('locale', $request->lang);

        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $page = Page::findOrFail($id);
        return view('pages.edit',[
            'page'=>$page,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PageRequest $request, string $id)
    {
        //
        $page = Page::findOrFail($id);
        $pageValidated = $request->validated();
        $slug = Str::slug ($pageValidated['title']['en']);

        $page->update([
            'title'=> [
                'en'=>$pageValidated['title']['en'],
                'np'=>$pageValidated['title']['np'],
            ],
            'content'=>[
                'en'=>$pageValidated['content']['en'],
                'np'=>$pageValidated['content']['np'],
            ],
            'slug'=>$slug,
            'status'=>$pageValidated['status']
        ]);
        Alert::success('success','Page Updated Successfully');
        return redirect()->route('page.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $page = Page::findOrFail($id);
        $page->delete();
        Alert::success('success','Page deleted successfully');
        return redirect()->route('page.index');
    }
}
