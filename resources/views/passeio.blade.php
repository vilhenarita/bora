@extends('main')
@section('conteudo')
        <div class="row">
          <div class="col">
            <div id="msg_slideshow" class="msg_slideshow">
              <div id="msg_wrapper" class="msg_wrapper">
              </div>
            <div id="msg_controls" class="msg_controls"><!-- right has to animate to 15px, default -110px -->
              <a href="#" id="msg_grid" class="msg_grid"></a>
              <a href="#" id="msg_prev" class="msg_prev"></a>
              <a href="#" id="msg_pause_play" class="msg_pause"></a><!-- has to change to msg_play if paused-->
              <a href="#" id="msg_next" class="msg_next"></a>
            </div>
            <div id="msg_thumbs" class="msg_thumbs"><!-- top has to animate to 0px, default -230px -->
              <div class="msg_thumb_wrapper">
                <a href="#"><img src="{{ asset('images/thumbs/1.jpg') }}" alt="images/1.jpg"/></a>
                <a href="#"><img src="{{ asset('images/thumbs/2.jpg') }}" alt="images/2.jpg"/></a>
                <a href="#"><img src="{{ asset('images/thumbs/3.jpg') }}" alt="images/3.jpg"/></a>
                <a href="#"><img src="{{ asset('images/thumbs/4.jpg') }}" alt="images/4.jpg"/></a>
                <a href="#"><img src="{{ asset('images/thumbs/5.jpg') }}" alt="images/5.jpg"/></a>
                <a href="#"><img src="{{ asset('images/thumbs/6.jpg') }}" alt="images/6.jpg"/></a>
              </div>
            <div class="msg_thumb_wrapper" style="display:none;">
              <a href="#"><img src="images/thumbs/7.jpg" alt="images/7.jpg"/></a>
              <a href="#"><img src="images/thumbs/8.jpg" alt="images/8.jpg"/></a>
              <a href="#"><img src="images/thumbs/9.jpg" alt="images/9.jpg"/></a>
              <a href="#"><img src="images/thumbs/10.jpg" alt="images/10.jpg"/></a>
              <a href="#"><img src="images/thumbs/11.jpg" alt="images/11.jpg"/></a>
              <a href="#"><img src="images/thumbs/12.jpg" alt="images/12.jpg"/></a>

              <a href="#"><img src="{{ asset('images/thumbs/7.jpg') }}" alt="images/7.jpg"/></a>
              <a href="#"><img src="{{ asset('images/thumbs/8.jpg') }}" alt="images/8.jpg"/></a>
              <a href="#"><img src="{{ asset('images/thumbs/9.jpg') }}" alt="images/9.jpg"/></a>
              <a href="#"><img src="{{ asset('images/thumbs/10.jpg') }}" alt="images/10.jpg"/></a>
              <a href="#"><img src="{{ asset('images/thumbs/11.jpg') }}" alt="images/11.jpg"/></a>
              <a href="#"><img src="{{ asset('images/thumbs/12.jpg') }}" alt="images/12.jpg"/></a>
            </div>
            <a href="#" id="msg_thumb_next" class="msg_thumb_next"></a>
            <a href="#" id="msg_thumb_prev" class="msg_thumb_prev"></a>
            <a href="#" id="msg_thumb_close" class="msg_thumb_close"></a>
            <span class="msg_loading"></span><!-- show when next thumb wrapper loading -->
          </div>
          </div>
        </div>
      </div>
        <div class="row cartao-content">
          <div class="col cartao">
            <div class="card" style="width: 18rem;">
              <img src="{{ asset('img/passeios/alter-do-chao-ilha-do-amor1.jpg') }}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">asdadadasdasdasdasdasdasdasd</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
            <div class="col cartao">
              <div class="card" style="width: 18rem;">
                <img src="{{ asset('img/passeios/alter-do-chao-ilha-do-amor1.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">asdadadasdasdasdasdasdasdasd</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
            <div class="col cartao">
              <div class="card" style="width: 18rem;">
                <img src="{{ asset('img/passeios/alter-do-chao-ilha-do-amor1.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">asdadadasdasdasdasdasdasdasd</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
          </div>
@stop