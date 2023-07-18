<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
// importo Model
use App\Models\Comic;
class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();

        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $comics=$request->all();
        Comic::create([

            "title" => $comics['title'],
            "description" => $comics['description'],
            "thumb" => $comics['thumb'],
            "price" => $comics['price'],
            "series" => $comics['series'],
        ]);


        return redirect()->route('comics.index');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::findOrFail($id);

        return view('comics.show', compact('comic'));
    }

    public function edit($id)
    {
        $comic = Comic::findOrFail($id);

        return view('comics.edit', compact('comic'));
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
        $data = $request->all();

        $comic = Comic::findOrFail($id);

        $comic->title = $data['title'];
        $comic->description = $data['description'];
        $comic->price = $data['price'];
        $comic->series = $data['series'];

        $comic->save();

        return redirect()->route('comics.index');
    }

    public function destroy($id)
    {
        $comic = Comic::findOrFail($id);
        $comic->delete();

        return redirect()->route('comics.index');
    }

}
