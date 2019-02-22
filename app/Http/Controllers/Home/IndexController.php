<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Music;
use DB;
class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //生成不重复的随机值
        function NoRand($begin=1,$end=0,$limit=6){
            //统计数据表中有多少数据
            $sql_num = DB::table('music')->count();
            //将音乐库中的音乐数量塞入随机取 $limit 首
            $end = $sql_num;
            $rand_array=range($begin,$end);
            shuffle($rand_array);//调用现成的数组随机排列函数
            return array_slice($rand_array,0,$limit);//截取前$limit个
        }
        //NoRand即为随机推荐播放音乐的ID
        $NoRand = NoRand();
        foreach($NoRand as $v){
            //获取随机出的Norand序列的歌曲信息
            $data[] = Music::find($v)->getAttributes();
        }
        //dump($data);
        return view('Home/index',['data'=>$data]);
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
