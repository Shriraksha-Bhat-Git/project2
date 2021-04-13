<?php

namespace App\Http\Controllers;

use App\Models\Sellbooks;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SellbooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sellbooks = Sellbooks::latest()->paginate(5);

        return view('bookreselling.sellbooks', compact('sellbooks'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bookreselling.sellbooks');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'bookname' => 'required',
            'category' => 'required',
            'Purchase_date' => 'required',
            'price' => 'required',
            'update_image' =>'required',
            'authorname' => 'required',
            'book_language' => 'required',
            'book_condition' => 'required',
            'description' => 'required'
        ]);
        
        $fileName = $request->update_image->getClientOriginalName().'.'.$request->update_image->getMimeType();
        
        $request->update_image->move(public_path('uploads'), $fileName);
        
        $data = ['bookname'=>$request->bookname,'category'=>$request->category,'purchase_date'=>$request->Purchase_date,'price'=>$request->price,'update_image'=>$fileName,'authorname'=>$request->authorname,'book_language'=>$request->book_language,'book_condition'=>$request->book_condition,'description'=>$request->description];
        Sellbooks::create($data);

        return redirect()->route('bookreselling.sellbooks')
            ->with('success', 'Book Details Entered Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sellbooks  $sellbooks
     * @return \Illuminate\Http\Response
     */
    public function show(Sellbooks $sellbooks)
    {
        return view('bookreselling.sellbooks', compact('sellbooks'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sellbooks  $sellbooks
     * @return \Illuminate\Http\Response
     */
    public function edit(Sellbooks $sellbooks)
    {
        return view('sellbooks.edit', compact('sellbooks'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sellbooks  $sellbooks
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sellbooks $sellbooks)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sellbooks  $sellbooks
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sellbooks $sellbooks)
    {
        //
    }
}
