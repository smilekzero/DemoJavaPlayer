@extends('home.aside')
@section('content')
	<section id="content">
        <section class="vbox">
          <section class="w-f-md">
            <section class="hbox stretch bg-black dker">
            	<aside class="aside bg-light dk" id="sidebar"style="width:100px;">
                  <section class="vbox animated fadeInUp">
                    <section class="scrollable hover" >
                      <div class="list-group no-radius no-border no-bg m-t-n-xxs m-b-none auto" >
                        <a href="" class="list-group-item">
                          All
                        </a>
                        <a href="" class="list-group-item">
                          All
                        </a>
                        <a href="" class="list-group-item">
                          All
                        </a>
                        <a href="" class="list-group-item">
                          Create
                        </a>
                      </div>
                    </section>
                  </section>
                </aside>	
				<section class="col-sm-4 no-padder bg">
	                <section class="vbox">
	                  <section class="scrollable hover">
	                    <ul class="list-group list-group-lg no-bg auto m-b-none m-t-n-xxs">
	                      <li class="list-group-item clearfix">
	                        <a href="#" class="jp-play-me pull-right m-t-sm m-l text-md">
	                          <i class="icon-control-play text"></i>
	                          <i class="icon-control-pause text-active"></i>
	                        </a>
	                        <a href="#" class="pull-left thumb-sm m-r">
	                          <img src="{{URL::asset('images/home/m0.jpg')}}" alt="...">
	                        </a>
	                        <a class="clear" href="#">
	                          <span class="block text-ellipsis">Little Town</span>
	                          <small class="text-muted">by Soph Ashe</small>
	                        </a>
	                      </li>
	                      <li class="list-group-item clearfix">
	                        <a href="#" class="jp-play-me pull-right m-t-sm m-l text-md">
	                          <i class="icon-control-play text"></i>
	                          <i class="icon-control-pause text-active"></i>
	                        </a>
	                        <a href="#" class="pull-left thumb-sm m-r">
	                          <img src="{{URL::asset('images/home/a1.png')}}" alt="...">
	                        </a>
	                        <a class="clear" href="#">
	                          <span class="block text-ellipsis">Get lacinia odio sem nec elit</span>
	                          <small class="text-muted">by Filex</small>
	                        </a>
	                      </li>
	                      <li class="list-group-item clearfix">
	                        <a href="#" class="jp-play-me pull-right m-t-sm m-l text-md">
	                          <i class="icon-control-play text"></i>
	                          <i class="icon-control-pause text-active"></i>
	                        </a>
	                        <a href="#" class="pull-left thumb-sm m-r">
	                          <img src="{{URL::asset('images/home/a2.png')}}" alt="...">
	                        </a>
	                        <a class="clear" href="#">
	                          <span class="block text-ellipsis">Donec sed odio du</span>
	                          <small class="text-muted">by Dan Doorack</small>
	                        </a>
	                      </li>
	                      <li class="list-group-item clearfix">
	                        <a href="#" class="jp-play-me pull-right m-t-sm m-l text-md">
	                          <i class="icon-control-play text"></i>
	                          <i class="icon-control-pause text-active"></i>
	                        </a>
	                        <a href="#" class="pull-left thumb-sm m-r">
	                          <img src="{{URL::asset('images/home/a3.png')}}" alt="...">
	                        </a>
	                        <a class="clear" href="#">
	                          <span class="block text-ellipsis">Curabitur blandit tempu</span>
	                          <small class="text-muted">by Foxes</small>
	                        </a>
	                      </li>
	                      <li class="list-group-item clearfix">
	                        <a href="#" class="jp-play-me pull-right m-t-sm m-l text-md">
	                          <i class="icon-control-play text"></i>
	                          <i class="icon-control-pause text-active"></i>
	                        </a>
	                        <a href="#" class="pull-left thumb-sm m-r">
	                          <img src="{{URL::asset('images/home/a4.png')}}" alt="...">
	                        </a>
	                        <a class="clear" href="#">
	                          <span class="block text-ellipsis">Urna mollis ornare vel eu leo</span>
	                          <small class="text-muted">by Chris Fox</small>
	                        </a>
	                      </li>
	                      <li class="list-group-item clearfix">
	                        <a href="#" class="jp-play-me pull-right m-t-sm m-l text-md">
	                          <i class="icon-control-play text"></i>
	                          <i class="icon-control-pause text-active"></i>
	                        </a>
	                        <a href="#" class="pull-left thumb-sm m-r">
	                          <img src="{{URL::asset('images/home/a5.png')}}" alt="...">
	                        </a>
	                        <a class="clear" href="#">
	                          <span class="block text-ellipsis">Faucibus dolor auctor</span>
	                          <small class="text-muted">by Lauren Taylor</small>
	                        </a>
	                      </li>
	                      <li class="list-group-item clearfix">
	                        <a href="#" class="jp-play-me pull-right m-t-sm m-l text-md">
	                          <i class="icon-control-play text"></i>
	                          <i class="icon-control-pause text-active"></i>
	                        </a>
	                        <a href="#" class="pull-left thumb-sm m-r">
	                          <img src="{{URL::asset('images/home/a6.png')}}" alt="...">
	                        </a>
	                        <a class="clear" href="#">
	                          <span class="block text-ellipsis">Praesent commodo cursus magn</span>
	                          <small class="text-muted">by Chris Fox</small>
	                        </a>
	                      </li>
	                      <li class="list-group-item clearfix">
	                        <a href="#" class="jp-play-me pull-right m-t-sm m-l text-md">
	                          <i class="icon-control-play text"></i>
	                          <i class="icon-control-pause text-active"></i>
	                        </a>
	                        <a href="#" class="pull-left thumb-sm m-r">
	                          <img src="{{URL::asset('images/home/a7.png')}}" alt="...">
	                        </a>
	                        <a class="clear" href="#">
	                          <span class="block text-ellipsis">Vestibulum id</span>
	                          <small class="text-muted">by Milian</small>
	                        </a>
	                      </li>
	                      <li class="list-group-item clearfix">
	                        <a href="#" class="jp-play-me pull-right m-t-sm m-l text-md">
	                          <i class="icon-control-play text"></i>
	                          <i class="icon-control-pause text-active"></i>
	                        </a>
	                        <a href="#" class="pull-left thumb-sm m-r">
	                          <img src="{{URL::asset('images/home/a8.png')}}" alt="...">
	                        </a>
	                        <a class="clear" href="#">
	                          <span class="block text-ellipsis">Blandit tempu</span>
	                          <small class="text-muted">by Amanda Conlan</small>
	                        </a>
	                      </li>
	                      <li class="list-group-item clearfix">
	                        <a href="#" class="jp-play-me pull-right m-t-sm m-l text-md">
	                          <i class="icon-control-play text"></i>
	                          <i class="icon-control-pause text-active"></i>
	                        </a>
	                        <a href="#" class="pull-left thumb-sm m-r">
	                          <img src="{{URL::asset('images/home/a9.png')}}" alt="...">
	                        </a>
	                        <a class="clear" href="#">
	                          <span class="block text-ellipsis">Vestibulum ullamcorpe quis malesuada augue mco rpe</span>
	                          <small class="text-muted">by Dan Doorack</small>
	                        </a>
	                      </li>
	                      <li class="list-group-item clearfix">
	                        <a href="#" class="jp-play-me pull-right m-t-sm m-l text-md">
	                          <i class="icon-control-play text"></i>
	                          <i class="icon-control-pause text-active"></i>
	                        </a>
	                        <a href="#" class="pull-left thumb-sm m-r">
	                          <img src="{{URL::asset('images/home/a10.png')}}" alt="...">
	                        </a>
	                        <a class="clear" href="#">
	                          <span class="block text-ellipsis">Natis ipsum ac feugiat</span>
	                          <small class="text-muted">by Hamburg</small>
	                        </a>
	                      </li>
	                      <li class="list-group-item clearfix">
	                        <a href="#" class="jp-play-me pull-right m-t-sm m-l text-md">
	                          <i class="icon-control-play text"></i>
	                          <i class="icon-control-pause text-active"></i>
	                        </a>
	                        <a href="#" class="pull-left thumb-sm m-r">
	                          <img src="{{URL::asset('images/home/a10.png')}}" alt="...">
	                        </a>
	                        <a class="clear" href="#">
	                          <span class="block text-ellipsis">Sec condimentum au</span>
	                          <small class="text-muted">by Amanda Conlan</small>
	                        </a>
	                      </li>
	                    </ul>
	                  </section>
	                </section>
	            </section>
            </section>
          </section>
 		  <footer class="footer bg-success dker">
            	<div id="jp_container_N">
                    <div class="jp-type-playlist">
                      <div id="jplayer_N" class="jp-jplayer hide"></div>
                      <div class="jp-gui">
                        <div class="jp-video-play hide">
                          <a class="jp-video-play-icon">play</a>
                        </div>
                        <div class="jp-interface">
                          <div class="jp-controls">
                            <div><a class="jp-previous"><i class="icon-control-rewind i-lg"></i></a></div>
                            <div>
                              <a class="jp-play"><i class="icon-control-play i-2x"></i></a>
                              <a class="jp-pause hid"><i class="icon-control-pause i-2x"></i></a>
                            </div>
                            <div><a class="jp-next"><i class="icon-control-forward i-lg"></i></a></div>
                            <div class="hide"><a class="jp-stop"><i class="fa fa-stop"></i></a></div>
                            <div><a class="" data-toggle="dropdown" data-target="#playlist"><i class="icon-list"></i></a></div>
                            <div class="jp-progress hidden-xs">
                              <div class="jp-seek-bar dk">
                                <div class="jp-play-bar bg">
                                </div>
                                <div class="jp-title text-lt">
                                  <ul>
                                    <li></li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                            <div class="hidden-xs hidden-sm jp-current-time text-xs text-muted"></div>
                            <div class="hidden-xs hidden-sm jp-duration text-xs text-muted"></div>
                            <div class="hidden-xs hidden-sm">
                              <a class="jp-mute" title="mute"><i class="icon-volume-2"></i></a>
                              <a class="jp-unmute hid" title="unmute"><i class="icon-volume-off"></i></a>
                            </div>
                            <div class="hidden-xs hidden-sm jp-volume">
                              <div class="jp-volume-bar dk">
                                <div class="jp-volume-bar-value lter"></div>
                              </div>
                            </div>
                            <div>
                              <a class="jp-shuffle" title="shuffle"><i class="icon-shuffle text-muted"></i></a>
                              <a class="jp-shuffle-off hid" title="shuffle off"><i class="icon-shuffle text-lt"></i></a>
                            </div>
                            <div>
                              <a class="jp-repeat" title="repeat"><i class="icon-loop text-muted"></i></a>
                              <a class="jp-repeat-off hid" title="repeat off"><i class="icon-loop text-lt"></i></a>
                            </div>
                            <div class="hide">
                              <a class="jp-full-screen" title="full screen"><i class="fa fa-expand"></i></a>
                              <a class="jp-restore-screen" title="restore screen"><i class="fa fa-compress text-lt"></i></a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="jp-playlist dropup" id="playlist">
                        <ul class="dropdown-menu aside-xl dker">
                          <!-- The method Playlist.displayPlaylist() uses this unordered list -->
                          <li class="list-group-item"></li>
                        </ul>
                      </div>
                      <div class="jp-no-solution hide">
                        <span>Update Required</span>
                        To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
                      </div>
                    </div>
                </div>
          </footer>
        </section>
        <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a>
    </section>
@endsection