@extends('Admin.aside')
@section('submenu')
 {{ $menuname }}
@stop
@section('content')
    <!--#navbar-->
    <div class="container-fluid animatedParent animateOnce">
        <div class="animated fadeInUpShort">
            <div class="row my-3">
                <div class="col-md-8 offset-md-2">
                    <form action="/admin/music" method="post">
                        {{ csrf_field() }}
                        <div class="card no-b">
                            <div class="card-body">
                                <h5 class="card-title"><strong>{{ $title }}</strong></h5>
                                <div class="form-row">
                                    <div class="col-md-8">
                                        <!-- <div class="form-group m-0">
                                            <label for="name" class="col-form-label s-12" ><h5 style="color: #616161">音乐</h5></label>
                                            <input id="name" placeholder="输入音乐名" class="form-control r-0 light s-12 " type="text">
                                        </div> -->
                                        <div class="form-group m-0">
                                            <label for="aname" class="col-form-label s-12" style="color:#9e9e9e;"><i class="icon-ondemand_video s-12 mr-2"></i><span style="color: #616161;font-size: 14px;">MV名称</span></label>
                                            <input id="name" placeholder="输入专辑名" class="form-control r-0 light s-12 col-md-8 " type="text" name="aname">

                                            <label for="sname" class="col-form-label s-12" style="color:#9e9e9e;"><i class="icon-assignment_ind s-12 mr-2"></i><span style="color: #616161;font-size: 14px;">MV时长</span></label>
                                            <input id="name" placeholder="时长格式如:(3:45)" class="form-control r-0 light s-12 col-md-8 " type="text" name="singer_id">
                                        </div>
                                        <div class="form-group col-md-8 m-0" style="padding: 0px 0px;">
                                            <label class="col-form-label s-12" for="inlineFormCustomSelectPref"><i class="icon-video_library mr-2"></i><span style="color: #616161;font-size: 14px;">所属专辑</span></label>
                                            <select class="custom-select my-1 form-control r-0 light s-12" id="inlineFormCustomSelectPref" name="mtype" >
                                                <option selected>请选择专辑</option>
                                                <option value="1">流行</option>
                                                <option value="2">摇滚</option>
                                                <option value="3">民谣</option>
                                                <option value="4">R&B</option>
                                                <option value="5">电子</option>
                                                <option value="6">轻音乐</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-8 m-0" style="padding: 0px 0px;">
                                            <label class="col-form-label s-12" for="mlanguage"><i class="icon-music_note mr-2"></i><span style="color: #616161;font-size: 14px;">所属音乐</span></label>
                                            <select class="custom-select my-1 form-control r-0 light s-12" id="inlineFormCustomSelectPref" name="languages" >
                                                <option selected>请先选择专辑</option>
                                                <option value="1">国语</option>
                                                <option value="2">粤语</option>
                                                <option value="3">英语</option>
                                                <option value="4">韩语</option>
                                                <option value="5">日语</option>
                                                <option value="6">小语种</option>
                                            </select>
                                        </div>
                                        <div class="form-group m-0">
                                            <label class="col-form-label s-12" for="exampleFormControlTextarea2"><i class="icon-edit mr-2"></i><span style="color: #616161;font-size: 14px;">视频介绍</span></label>
                                            <textarea style="width:450px;" class="form-control r-0" id="exampleFormControlTextarea2"
                                                      rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-3 offset-md-1" style="margin-left:30px; ">
                                        <input hidden id="file" name="file"/>
                                        <div class="dropzone dropzone-file-area pt-8 pb-4" id="fileUpload" style="height:200px" >
                                            <div class="dz-default dz-message">
                                                <!--<span>Drop A passport size image of user</span>-->
                                                <div style="margin-top:65px;font-size:15px" ><strong>点击上传视频封面</strong></div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <!-- <div class="form-row mt-1">
                                    <div class="form-group col-md-4 m-0">
                                        <label for="email" class="col-form-label s-12"><i class="icon-envelope-o mr-2"></i>Email</label>
                                        <input id="email" placeholder="user@email.com" class="form-control r-0 light s-12 " type="text">
                                    </div>

                                    <div class="form-group col-md-4 m-0">
                                        <label for="phone" class="col-form-label s-12"><i class="icon-phone mr-2"></i>Phone</label>
                                        <input id="phone" placeholder="05112345678" class="form-control r-0 light s-12 " type="text">
                                    </div>
                                    <div class="form-group col-md-4 m-0">
                                        <label for="mobile" class="col-form-label s-12"><i class="icon-mobile-phone mr-2"></i>Mobile</label>
                                        <input id="mobile" placeholder="eg: 3334709643" class="form-control r-0 light s-12 " type="text">
                                    </div>

                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-9 m-0">
                                        <label for="address"  class="col-form-label s-12">Address</label>
                                        <input type="text" class="form-control r-0 light s-12" id="address"
                                               placeholder="Enter Address">
                                    </div>

                                    <div class="form-group col-md-3 m-0">
                                        <label for="inputCity" class="col-form-label s-12">City</label>
                                        <input type="text" class="form-control r-0 light s-12" id="inputCity">
                                    </div>
                                </div>
                            </div>
                            <hr> -->
                           <!--  <div class="card-body">
                               <h5 class="card-title">PARENT / GUARDIAN</h5>
                               <div class="form-row">
                                   <div class="form-group col-5 m-0">
                                       <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Select A parent</label>
                                       <select class="custom-select my-1 mr-sm-2 form-control r-0 light s-12" id="inlineFormCustomSelectPref">
                                           <option selected>Choose...</option>
                                           <option value="1">One</option>
                                           <option value="2">Two</option>
                                           <option value="3">Three</option>
                                       </select>
                                   </div>
                               </div>
                               <a href="#" class="btn btn-primary bg-primary btn-sm mt-2">Add New Guardian</a>
                           </div> -->
                            <hr>
                            <div class="card-body">
                                <button type="submit" class="btn btn-primary btn-lg"><i class="icon-save mr-2"></i>上传</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
    </div>
    </div>
</div>
<!-- Right Sidebar -->
@endsection