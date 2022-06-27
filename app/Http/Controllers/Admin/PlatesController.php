<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Plate;

class PlatesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plates = Plate::where('id',Auth::user()->id)->first();
        return view('admin.plates.index', compact('plates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.plates.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'title'=>'required|max:250',
        //     'content'=>'required|min:5|max:100',
        //     'category_id'=>'required|exists:categories,id',
        //     'tags[]'=>'exists:tags,id',
        //     'image'=>'nullable|image'
        // ],[
        //     'title.required' => 'Titolo deve essere valorizzato',
        //     'title.max' => 'Hai superato i 250 caratter',
        //     'content.required' => ':attribute deve avere minimo essere compilato ',
        //     'content.min' => 'Il contenuto deve avere almeno :min caratteri',
        //     'content.max' => 'Il contenuto deve avere almeno :max caratteri',
        //     'category.exists'=>'La categoria selezionata non esiste',
        //     'tags[]' =>'Tag non esiste',
        //     'image'=>'Il file deve essere un immagine'
        // ]);
        $data = $request->all();

        // we insert this check cause we have set that the image can be NULL
        // if(array_key_exists('image',$DatasPost)){
        //         $img_path = Storage::put('uploads',$DatasPost['image']);
        //         $DatasPost['cover'] = $img_path;
        // }

        $newPlate = new Plate();

        $newPlate->fill($data);

        $newPlate->save();

        return redirect()->route('admin.plates.index');
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
        //
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
