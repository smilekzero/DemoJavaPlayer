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
                    <form action="/admin/music" method="post" enctype="multipart/form-data">
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
                                            <label for="aname" class="col-form-label s-12" style="color:#9e9e9e;"><i class="icon-album s-12 mr-2"></i><span style="color: #616161;font-size: 14px;">专辑</span></label>
                                            <input id="name" placeholder="输入专辑名" class="form-control r-0 light s-12 col-md-8 " type="text" name="aname">

                                        	<label for="sname" class="col-form-label s-12" style="color:#9e9e9e;"><i class="icon-assignment_ind s-12 mr-2"></i><span style="color: #616161;font-size: 14px;">歌手</span></label>
                                            <input id="name" placeholder="" class="form-control r-0 light s-12 col-md-8 "  type="text" name="singer_id">

                                            <label for="sname" class="col-form-label s-12" style="color:#9e9e9e;"><i class="icon-assignment_ind s-12 mr-2"></i><span style="color: #616161;font-size: 14px;">出售金额</span></label>
                                            <input id="name" placeholder="请输入价格" class="form-control r-0 light s-12 col-md-8 "  type="text" name="aprice">
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-8 m-0">
                                                <label for="cnic" class="col-form-label s-12"><i class="icon-calendar mr-2"></i><span style="color: #616161;font-size: 14px;">发布日期</span></label>
                                                <input id="cnic" placeholder="Enter Form B or CNIC Number" class="form-control r-0 light s-12 date-picker" type="text" name="uptime">
                                            </div>
                                        </div>
                                        <div class="form-group col-md-8 m-0" style="padding: 0px 0px;">
	                                        <label class="col-form-label s-12" for="inlineFormCustomSelectPref"><i class="icon-audiotrack mr-2"></i><span style="color: #616161;font-size: 14px;">音乐类别</span></label>
	                                        <select class="custom-select my-1 form-control r-0 light s-12" id="inlineFormCustomSelectPref" name="mtype" >
	                                            <option selected>请选择类别</option>
	                                            <option value="1">流行</option>
	                                            <option value="2">摇滚</option>
	                                            <option value="3">民谣</option>
	                                            <option value="4">R&B</option>
	                                            <option value="5">电子</option>
	                                            <option value="6">轻音乐</option>
	                                        </select>
                                		</div>
                                		<div class="form-group col-md-8 m-0" style="padding: 0px 0px;">
	                                        <label class="col-form-label s-12" for="mlanguage"><i class="icon-language mr-2"></i><span style="color: #616161;font-size: 14px;">语种</span></label>
	                                        <select class="custom-select my-1 form-control r-0 light s-12" id="inlineFormCustomSelectPref" name="languages" >
	                                            <option selected>请选择语种</option>
	                                            <option value="1">国语</option>
	                                            <option value="2">粤语</option>
	                                            <option value="3">英语</option>
	                                            <option value="4">韩语</option>
	                                            <option value="5">日语</option>
	                                            <option value="6">小语种</option>
	                                        </select>
                                		</div>
                                		<div class="form-row">
	                                        <div class="form-group col-md-8 m-0">
	                                            <label for="cnic" class="col-form-label s-12"><i class="icon-calendar mr-2"></i><span style="color: #616161;font-size: 14px;">选择音乐文件</span></label><br>
	                                            <input id="cnic" class=" r-0 light s-12 " type="file" name="music">
	                                        </div>
	                                    </div>
                                    </div>
										
                                    <div class="col-md-3 offset-md-1" style="margin-left:30px; ">
                                        <input type="file" hidden id="file" name="file"/>
                                        <div class="dropzone dropzone-file-area pt-4 pb-4" id="fileUpload" style="height:200px" >
                                            <div class="dz-default dz-message">
                                                <!--<span>Drop A passport size image of user</span>-->
                                                <div style="margin-top:50px;font-size:15px" ><strong>点击上传专辑图片</strong></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <hr>
                            <div class="card-body">
                                <button type="submit" class="btn btn-primary btn-lg"><i class="icon-save mr-2"></i>Save Data</button>
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