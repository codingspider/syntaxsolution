        <!--Footer-Area Start-->
        <div class="footer-area pt_40 pb_60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-item">
                            <h3>Contact</h3>
                            <div class="footer-address-item">
                                <div class="icon"><i class="fa fa-map-marker"></i></div>
                                <div class="text">
                                    <span>{{ $address->content }} </span>
                                </div>
                            </div>
                            <div class="footer-address-item">
                                <div class="icon"><i class="fa fa-phone"></i></div>
                                <div class="text">
                                    <span>{{ $phone->content }}</span>
                                </div>
                            </div>
                            <div class="footer-address-item">
                                <div class="icon"><i class="fa fa-envelope-o"></i></div>
                                <div class="text">
                                    <span>{{ $email->content }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-item">
                            <h3>Userful Links</h3>
                            <ul>
                                @foreach($page_types as $pagetype)
                                <li><a href="{{ url('page', [$pagetype->name, $pagetype->id]) }}">{{ $pagetype->name }}</a></li>
                               @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="mt-30">
                            <h3 class="keep-touch">Keep in touch</h3>
                            <div class="keep-touch-social">
                            @foreach($social_setting as $social)
                                <button type="submit" style="margin-bottom: 8px" class="btn btn-primary"><a target="_blank" href="{{$social->url }}"><i class="{{ $social->icon }}"></i></a></button>
                            @endforeach
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-item" id="newsletter">
                            <h3>Newsletter</h3>
                            <p>Subscribe to our newsletter list to receive our latest offers & news.</p>
                            <span id="msg" class="text-danger"></span>
                            <div class="input-group subscribe-input">
                                    <input name="email" type="email" id="email" class="form-control" placeholder="Email Address" required>
                                    <span class="input-group-btn">
                                        <button class="btn" type="submit" id="butsave">
                                        <i class="fa fa-location-arrow"></i></button>
                                    </span>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom pt_20 pb_20">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="copy-text">
                            <p>Copyright © {{ date('Y') }}, {{ $appname->content }}. All Rights Reserved. </a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Footer End-->
<script src="{{ asset('assets/Frontend/js/jquery-2.2.4.min.js') }}"></script>
<script>
$(document).ready(function() {
   
    $('#butsave').on('click', function() {
      var email = $('#email').val();

      if(email!=""){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
          $.ajax({
              url: "{{ url('subscribe') }}",
              type: "POST",
              data: {
                  email: email
              },
              success: function(dataResult){
                  console.log(dataResult);
                  var dataResult = JSON.parse(dataResult);
                  if(dataResult.statusCode==200){
                      var data = "Thanks for subscribing.";
                    $('#msg').html(data).fadeIn('slow');
                    $('#msg').delay(5000).fadeOut('slow');	
                  }
                  else if(dataResult.statusCode==201){
                     alert("Error occured !");
                  }
                  
              }
          });
      }
      else{
          alert('Please fill all the field !');
      }
  });
});
</script>