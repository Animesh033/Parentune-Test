<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\AskExpertResource;

class AskExpertController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $askExperts = collect([
            ['question' => 'My first question', 'answer' => 'This is my first blog answer', 'image_path' => asset('parentune/images/swiper-1.jpg') ],
            ['question' => 'My second question', 'answer' => 'This is my second blog answer', 'image_path' => asset('parentune/images/swiper-2.jpg') ],
            ['question' => 'My third question', 'answer' => 'This is my third blog answer', 'image_path' => asset('parentune/images/swiper-3.jpg')],
        ]);

        return AskExpertResource::collection($askExperts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
