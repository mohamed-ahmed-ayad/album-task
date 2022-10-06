@php
if(app()->getLocale()=='en'){
  $current_lang = ""; 
  $lang_code = "en";  
  $slug = "slug_en";  
}else{
  $current_lang = "_ar";
  $slug = "slug_ar";
  $lang_code = "ar";  
}
@endphp
@extends('layouts.user')

@section('meta')
    <title>{{$page->title?$page->title.' | ':''}}{{getConfig('site_name',$current_lang)}}</title>
    <meta name="description" content="{{$page->meta_description??''}}">
    <meta name="keywords" content="{{$page->meta_keywords??''}}">
@endsection

@section('content')
  <div class="main-content">
    <section id="home">
      <div class="container-fluid p-0">
        <div class="rev_slider_wrapper">
          <div class="rev_slider rev_slider_default" data-version="5.0">
            <ul>
               @foreach ($slides as $slide)
                <li data-index="rs-{{$slide->id}}" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="{{asset($slide->photo)}}" data-rotate="0" data-saveperformance="off" data-title="{{$slide->title}}" data-description="">
                  <img src="{{asset($slide->photo)}}"  alt=""  data-bgposition="center 40%" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
                  <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme rs-parallaxlevel-0" 
                    id="slide-1-layer-1" 
                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                    data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                    data-width="full"
                    data-height="full"
                    data-whitespace="normal"
                    data-transform_idle="o:1;"
                    data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;" 
                    data-transform_out="opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                    data-start="1000" 
                    data-basealign="slide" 
                    data-responsive_offset="on" 
                    style="z-index: 5;background-color:rgba(0, 0, 0, 0.15);border-color:rgba(0, 0, 0, 1.00);"> 
                  </div>

                  <!-- LAYER NR. 2 -->
                  <div class="tp-caption tp-resizeme text-uppercase text-white font-roboto-slab bg-theme-colored-transparent pr-20 pl-20"
                    id="rs-2-layer-2"

                    data-x="['right']"
                    data-hoffset="['30']"
                    data-y="['middle']"
                    data-voffset="['-90']" 
                    data-fontsize="['32']"
                    data-lineheight="['72']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-transform_idle="o:1;s:500"
                    data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                    data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                    data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                    data-start="1000" 
                    data-splitin="none" 
                    data-splitout="none" 
                    data-responsive_offset="on"
                    style="z-index: 7; white-space: nowrap; font-weight:600;">  {{$slide->title}}
                  </div>

                  <!-- LAYER NR. 4 -->
                  <div class="tp-caption tp-resizeme text-white text-right" 
                    id="rs-2-layer-4"

                    data-x="['right']"
                    data-hoffset="['35']"
                    data-y="['middle']"
                    data-voffset="['-10']"
                    data-fontsize="['20','22',24']"
                    data-lineheight="['28']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-transform_idle="o:1;s:500"
                    data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                    data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                    data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                    data-start="1400" 
                    data-splitin="none" 
                    data-splitout="none" 
                    data-responsive_offset="on" في العالم
                    style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;">
                    {!! $slide->desc !!}
                  </div>

                  <!-- LAYER NR. 5 -->
                  <div class="tp-caption tp-resizeme" 
                    id="rs-2-layer-5"

                    data-x="['right']"
                    data-hoffset="['35']"
                    data-y="['middle']"
                    data-voffset="['60']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-transform_idle="o:1;"
                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                    data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                    data-start="1400" 
                    data-splitin="none" 
                    data-splitout="none" 
                    data-responsive_offset="on"
                    style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a class="btn btn-colored btn-lg btn-flat btn-theme-colored radius-3 pl-20 pr-20" href="{{$slide->link}}">{{$slide->link_text}}  </a> 
                  </div>
                </li>
              @endforeach 
            </ul>
          </div>
        </div>
        <script>
          $(document).ready(function(e) {
            $(".rev_slider_default").revolution({
              sliderType:"standard",
              sliderLayout: "auto",
              dottedOverlay: "none",
              delay: 5000,
              navigation: {
                keyboardNavigation: "off",
                keyboard_direction: "horizontal",
                mouseScrollNavigation: "off",
                onHoverStop: "off",
                touch: {
                  touchenabled: "on",
                  swipe_threshold: 75,
                  swipe_min_touches: 1,
                  swipe_direction: "horizontal",
                  drag_block_vertical: false
                },
                arrows: {
                  style:"zeus",
                  enable:true,
                  hide_onmobile:true,
                  hide_under:600,
                  hide_onleave:true,
                  hide_delay:200,
                  hide_delay_mobile:1200,
                  tmp:'<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div> </div>',
                  left: {
                    h_align:"left",
                    v_align:"center",
                    h_offset:30,
                    v_offset:0
                  },
                  right: {
                    h_align:"right",
                    v_align:"center",
                    h_offset:30,
                    v_offset:0
                  }
                },
                bullets: {
                  enable:true,
                  hide_onmobile:true,
                  hide_under:600,
                  style:"metis",
                  hide_onleave:true,
                  hide_delay:200,
                  hide_delay_mobile:1200,
                  direction:"horizontal",
                  h_align:"center",
                  v_align:"bottom",
                  h_offset:0,
                  v_offset:30,
                  space:5,
                  tmp:'<span class="tp-bullet-img-wrap">  <span class="tp-bullet-image"></span></span><span class="tp-bullet-title">{\{title}\}</span>'
                }
              },
              responsiveLevels: [1240, 1024, 778],
              visibilityLevels: [1240, 1024, 778],
              gridwidth: [1170, 1024, 778, 480],
              gridheight: [550, 600, 700, 720],
              lazyType: "none",
              parallax: {
                origo: "slidercenter",
                speed: 1000,
                levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 100, 55],
                type: "scroll"
              },
              shadow: 0,
              spinner: "off",
              stopLoop: "on",
              stopAfterLoops: 0,
              stopAtSlide: -1,
              shuffle: "off",
              autoHeight: "off",
              fullScreenAutoWidth: "off",
              fullScreenAlignForce: "off",
              fullScreenOffsetContainer: "",
              fullScreenOffset: "0",
              hideThumbsOnMobile: "off",
              hideSliderAtLimit: 0,
              hideCaptionAtLimit: 0,
              hideAllCaptionAtLilmit: 0,
              debugMode: false,
              fallbacks: {
                simplifyAll: "off",
                nextSlideOnWindowFocus: "off",
                disableFocusListener: false,
              }
            });
          });
        </script>
      </div>
    </section>
	
   {!! getSnippet('intro') !!}

    <section>
        <div class="container pb-sm-50">
          <div class="row mb-20">
              <div class="col-xs-12 col-md-12">
                <h3 class="line-bottom border-bottom mt-0">{{trans('home.news_and_articles')}}</h3>
              </div>
             @isset($articles[0])
              <div class="col-xs-12 col-md-6">
                  <div class="box-with-shadow">
                    <div class="news-img"><img src="{{asset($articles[0]->photo??'')}}" class="img-fullwidth" alt=""></div>
                    <p class="daten"> @isset($articles[0]->date) {{arabicDate($articles[0]->date) }} @endisset</p>
                    <h4>{{$articles[0]->title??''}}</h4>
                    
                    <p class="mt-15">{!! (implode(' ', array_slice(explode(' ', $articles[0]->content), 0, 20))??'') !!}</p>
                    
                    <a href="{{route('article.show2'.$current_lang,['link'=>$articles[0]->$slug])}}" class="btn btn-no-color btn-icon">{{trans('home.read_more')}}</a>
                  </div>
              </div>
              @endisset
              <div class="col-xs-12 col-md-6">
                <div class="news-nav">
                  <div class="bxslider bx-nav-top">

                    @foreach ($articles as $key=>$article)
                    @if($key==0 ) @continue;
                    @endif
                    <div class="event media sm-maxwidth400 bg-silver-light border-1px mt-0 mb-15 p-10 media-h-130">
                      <div class="row">
                        <div class="col-xs-7 col-sm-3 col-md-5">
                        <img src="{{asset($article->photo)}}" class="img-fullwidth" alt="">
                        </div>
                        <div class="col-xs-12 col-sm-9 col-md-7">
                        <div class="event-content">
                          <p class="daten">{{arabicDate($article->date)}}</p>
                          <h4><a href="{{route('article.show2'.$current_lang,['link'=>$article->$slug])}}">{{$article->title}}</a></h4>
                        </div>
                        </div>
                      </div>
                    </div>
                    @endforeach
                  </div>
                </div>
              </div>
          </div>
          <div class="row text-center multi-row-clearfix">
            <a href="{{route('all_articles'.$current_lang)}}" class="btn btn-lg btn-theme-colored pl-40 pr-40 mt-20">{{trans('home.all_news')}}</a>
          </div>
        </div>
    </section>

    <section class="causes-bg" data-bg-img="{{asset('users/images/donation-bg.jpg')}}">
      <div class="container pb-30">
        {!! getSnippet('support_charitable_causes') !!}
        <div class="owl-carousel-3col owl-carousel owl-theme owl-loaded owl-causes" data-nav="true">
          @foreach ($projects as $project)
          <div class="item">
            <div class="causes causes-box border-1px bg-white mb-30">
              <div class="thumb">
                <img src="{{asset($project->photo)}}" alt="" class="img-fullwidth">
              </div>
              <div class="causes-details clearfix p-20 pt-10 pb-20">
              <h4 class="text-uppercase"><a  href="{{route('project.show2'.$current_lang,['link'=>$project->$slug])}}">{{$project->title}}</a></h4>        
                <div class="progress-item mt-30">
                  <div class="progress mb-0">
                    <div data-percent="{{$project->percent}}" class="progress-bar"><span class="percent">0</span></div>
                  </div>
                </div>
                <ul class="list-inline font-14 font-weight-600 clearfix mb-30 mt-20">
                  <li class="pull-right font-weight-400 text-gray pr-0">{{trans('home.collected')}}: <span class="text-theme-colored font-weight-700">${{$project->collected_donation}} </span></li>
                  <li class="pull-left font-weight-400 text-black-333 pr-0">{{trans('home.remaining')}}: <span class="text-theme-colored font-weight-700">${{$project->remaining}} </span></li>
                </ul>
                <a href="{{route('project.show2'.$current_lang,['link'=>$project->$slug])}}" class="btn btn-default btn-block btn-theme-colored font-16 mt-10"><i class="flaticon-charity-make-a-donation font-16 ml-5"></i> {{trans('home.share_with_us')}} </a>
              </div>
            </div>
          </div>
          @endforeach
        </div>
        <div class="row text-center multi-row-clearfix">
          <a href="{{route('all_projects'.$current_lang)}}" class="btn btn-lg btn-theme-colored pl-40 pr-40 mt-20">{{ trans('home.charitable_projects') }}</a>
        </div>  </div>
    </section>
	
	
    <section>
      <div class="container pb-sm-50">
        <div class="row mb-20">
          <div class="col-xs-12 col-sm-6 col-md-8">
            <h3 class="mb-0">{{trans('home.media_library')}}</h3>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-4">
            <ul id="media" class="nav nav-pills boot-tabs media-tab">
              <li class="active"><a href="#gallery" data-toggle="tab"><i class="fa fa-picture-o" aria-hidden="true"></i> {{trans('home.pictures_library')}}</a></li>
              <li><a href="#videos" data-toggle="tab"><i class="fa fa-video-camera" aria-hidden="true"></i> {{trans('home.visuals')}}</a></li>
            </ul>
          </div>
		    </div>
        <div id="media-content" class="tab-content">
          <div class="tab-pane fade in active" id="gallery">
              <div class="row multi-row-clearfix">
                @foreach ($images as $item)
                    
                <div class="col-sm-6 col-md-4">
                  <a href="{{route('image-galleries.show2'.$current_lang,['link'=>$item->$slug])}}">
                        <div class="media-box mb-30 radius-10">
                          <div class="thumb">
                            <img src="{{asset( $item->photo)}}" alt="" class="img-fullwidth">
                          </div>
                          <div class="media-details p-10 pb-10">
                          <p class="media-date">{{ arabicDate($item->date)}}</p>
                            <h4 class="font-16">{{$item->display_order}} {{$item->title}}</h4>
                          </div>
                        </div>
                  </a>
                </div>
                @endforeach
              </div>
              <div class="row text-center multi-row-clearfix">
                <a href="{{route('image-galleries'.$current_lang)}}" class="btn btn-lg btn-theme-colored pl-40 pr-40 mt-20">{{ trans('home.all_pictures_library') }}</a>
              </div>
          </div>
          <div class="tab-pane fade in" id="videos">
              <div class="row multi-row-clearfix">
                @foreach($videos as $item)
                  <div class="col-sm-6 col-md-3">
                      <a href="{{route('videos-galleries.show2'.$current_lang,['link'=>$item->$slug])}}">
                      <div class="event-list bg-silver-light maxwidth500 mb-30 radius-10">
                        <div class="thumb">
                          {{-- <video class="img-fullwidth" width="320" height="240" controls><source src="{{$item->video}}" type="video/mp4"><source src="movie.ogg" type="video/ogg"></video> --}}
                          <img src="{{asset($item->photo_cover)}}" alt="" class="img-fullwidth">
                        </div>
                        <div class="event-list-details border-1px bg-white clearfix p-20 pb-20">
                          <h4 class="font-16 text-uppercase mt-0 mb-0"><a href="#"> {{$item->title}} </a></h4>
                        </div>
                      </div>
                      </a>
                  </div>
                @endforeach
              </div>
              <div class="row text-center multi-row-clearfix">
                <a href="{{route('videos-galleries'.$current_lang)}}" class="btn btn-lg btn-theme-colored pl-40 pr-40">{{trans('home.all_visuals')}}</a>
              </div>
          </div>
        </div>
      </div>
    </section>

	
    <section class="divider parallax layer-overlay-gradient overlay-dark" data-bg-img="/users/images/about/banner.png" data-parallax-ratio="0.7">
        <div class="display-table">
            <div class="display-table-cell">
                <div class="container pb-80">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center">
                            <a href="{!! getSnippet('video_tour_url') !!}" data-lightbox-gallery="youtube-video"><i class="fa fa-play-circle text-white font-72"></i>
                            </a>
                            {!! getSnippet('video_tour') !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

	
	<section>
    <div class="container pb-sm-50">
      <div class="row">
          <div class="col-xs-12 col-md-8">
            <h3 class="mb-0"> {{trans('home.member_organizations')}}</h3>
          </div>
          <div class="col-xs-12 col-md-4">
          </div>
        <div class="col-xs-12 col-md-12">
        <div class="line-bottom border-bottom mt-0"></div>	
        </div>
      </div>
      <div class="owl-carousel-5col owl-carousel owl-theme owl-loaded owl-organizstion" data-nav="true">

        @foreach (array_chunk($organizations,2) as $items)
        <div class="item">
          @foreach ($items as $item)
            <a href="{{route('organization.show'.$current_lang,['link'=>$item["$slug"]])}}">
              <div class="organization-box mb-30 radius-10">
                <div class="thumb">
                <img src="{{$item['logo']}}" alt="" class="img-fullwidth">
                </div>
                <p>{{app()->getLocale()=="ar"?$item['title_ar']:$item['title_en']}}   </p>
              </div>
            </a>
            @endforeach
        </div>
        
        @endforeach
      </div>
      <div class="row text-center multi-row-clearfix">
        <a href="{{route('organization'.$current_lang.'.index')}}" class="btn btn-lg btn-theme-colored pl-40 pr-40 mt-20">{{trans('home.all_organizations')}}</a>
      </div>
	  </div>
  </section>
	

  <section class="divider parallax newsletter mt-20" data-bg-img="{{asset('users/images/donation-bg.jpg')}}" data-parallax-ratio="0.7">
    <div class="container pt-40 pb-40">
      <div class="row">
        <div class="col-md-2 text-center">
          <img src="{{asset('users/images/newsletter-icon.png')}}" class="mt-10" />
        </div>
        <div class="col-md-4">
          <h2 class="text-white font-36 text-uppercase font-weight-800 mt-5">{{trans('home.newsletter')}}</h2>
          <p class="text-white">
            {{trans('home.join_our_newsletter')}}

          </p>
        </div>
        <div class="col-md-6">
          <form method="post"  action="'{{route('newsletter.store')}}'" class="newsletter-form">
            @csrf
            <div class="input-group mt-30">
              <input type="email" required name="email"  id="email" placeholder="{{trans('cruds.email')}}" class="form-control input-lg font-16" data-height="50px" id="mce-EMAIL-footer" style="height: 50px;">
              <br>
              <div id="email_error" style="color:red; display: none">  <h3 style="color:red">{{trans('home.required_email')}} </h3></div>
              <span class="input-group-btn">
                <button data-height="50px" onclick="newsletter()" class="btn btn-colored btn-theme-colored2 btn-xs m-0 font-14" type="button">{{trans('home.registration')}}</button>
              </span>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
	
	
	<section>
      <div class="container pb-sm-50">
        <div class="row">
          <div class="col-xs-12 col-md-8">
			<h3 class="mb-0">{{trans('home.member_news')}}</h3>
		  </div>
		  <div class="col-xs-12 col-md-4">
			
		  </div>
		  <div class="col-xs-12 col-md-12">
			<div class="line-bottom border-bottom mt-0"></div>	
			</div>
		</div>
		
		<div class="owl-carousel-4col owl-carousel owl-theme owl-loaded owl-organizstion" data-nav="true">
    

    @foreach($members_news as $item)
      <div class="item">
            <div class="event-member mb-30 radius-10">
              <div class="thumb">
                <img src="{{asset($item->photo)}}" alt="" class="img-fullwidth">
              </div>
              <div class="event-list-details clearfix p-20 pb-20">
			          	<p class="daten">{{arabicDate($item->date)}}</p>
                <h4 class="font-16 text-uppercase mt-0 mb-20"><a href="{{route('member-news.show'.$current_lang,['link'=>$item->$slug ])}}"> {{$item->title}}</a></h4>
        				<div   class="clearfix mb-20 someWord">{{strip_tags($item->content)}}</div>
				        <a href="{{route('member-news.show'.$current_lang,['link'=>$item->$slug ])}}" class="btn btn-no-color btn-icon">{{ trans('home.read_more') }}  </a>
              </div>
			      </div>
         
      </div>
    @endforeach
		</div>
		
		<div class="row text-center multi-row-clearfix">
			<a href="{{route('member-news'.$current_lang)}}" class="btn btn-lg btn-theme-colored pl-40 pr-40 mt-20">{{ trans('home.all_news') }}</a>
		</div>
		
	  </div>
  </section>
	
    <section>
      <div class="container pb-70">
        <div class="row">
          <div class="col-md-5">
            {!!getSnippet('aphorisms')!!}
          </div>
          <div class="col-md-7">
            <div class="row">
              <div class="col-md-12"><a href="{{route('mosque.index')}}"><h3 class="line-bottom border-bottom mt-0 mt-sm-50">{{ trans('home.encyclopedia_of_mosques') }}</h3></a></div>
              <div class="col-md-12">
                <div class="bxslider bx-nav-top">
                  @foreach ($mosques as $mosque)
                  <div class="event media sm-maxwidth400 bg-silver-light border-1px mt-0 mb-15 p-10 media-h-104">
                    <div class="row">
                      <div class="col-xs-7 col-sm-3 col-md-5">
                        <img src="{{asset($mosque->photo)}}" class="img-fullwidth" alt="">
                      </div>
                      <div class="col-xs-12 col-sm-9 col-md-7">
                        <div class="event-content">
                          <h4>{{$mosque->title}}</h4>
                          <p>
                            <div   class="clearfix mb-20 someWord">{{strip_tags($mosque->desc)}}</div>
                          </p>
                            <a href="{{route('mosque.show',['id'=>$mosque->id,'link'=>permalink($mosque->title)])}}" class="text-theme-colored">>{{trans('home.read_more')}}</a>
                        </div>
                      </div>
                    </div>
                  </div>
                @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
      <script>
        function newsletter()  {
          
          var email=document.getElementById('email').value;
          if( email==null || email==''|| email==' ')
          {
            alert( "{{trans('home.correct_email')}}"); 

            // document.getElementById('email_error').style.display='';
            return '';
          }
          data={'email':email};
          async function postData(url = '{{route('newsletter.store')}}', data) {
            const response = await fetch(url, {
              method: 'POST',    mode: 'cors',   cache: 'no-cache',   credentials: 'same-origin', 
              headers: { 'Content-Type': 'application/json'   },
              redirect: 'follow',   referrerPolicy: 'no-referrer', 
              body: JSON.stringify(data)  
            });
            console.log(data);
            return response.json();  
          }

          postData('{{route('newsletter.store')}}', { email: email })
            .then((data) => {
            alert(data); 
            });

                  }

      </script>	
      
    @include('includes.users.fun_facts')

  </div>
  @endsection
