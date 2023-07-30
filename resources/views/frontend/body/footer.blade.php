@php 

  $homeFooter = App\Models\Footer::latest()->first();

@endphp

<footer class="footer">
   <div class="container">
       <div class="row justify-content-between">
           <div class="col-lg-4">
               <div class="footer__widget">
                   <div class="fw-title">
                       <h5 class="sub-title">Contact us</h5>
                       <h4 class="title">{{ $homeFooter->footer_number }}</h4>
                   </div>
                   <div class="footer__widget__text">
                       <p>{{ $homeFooter->footer_short_description }}</p>
                   </div>
               </div>
           </div>
           <div class="col-xl-3 col-lg-4 col-sm-6">
               <div class="footer__widget">
                   <div class="fw-title">
                       <h5 class="sub-title">my address</h5>
                       <h4 class="title">Leeds</h4>
                   </div>
                   <div class="footer__widget__address">
                       <p>{{ $homeFooter->footer_address }}</p>
                       <a href="mailto:{{ $homeFooter->footer_email }}" class="mail">{{ $homeFooter->footer_email }}</a>
                   </div>
               </div>
           </div>
           <div class="col-xl-3 col-lg-4 col-sm-6">
               <div class="footer__widget">
                   <div class="fw-title">
                       <h5 class="sub-title">Follow me</h5>
                       <h4 class="title">socially connect</h4>
                   </div>
                   <div class="footer__widget__social">
                       <p>Reach me out in soscial media if you have any question</p>
                       <ul class="footer__social__list">
                           <li><a href="{{ $homeFooter->footer_linkedin }}"><i class="fab fa-linkedin-in"></i></a></li>
                       </ul>
                   </div>
               </div>
           </div>
       </div>
       <div class="copyright__wrap">
        <div class="row">
            <div class="col-12">
                <div class="copyright__text text-center">
                    <p>
                        <a target="_blank">
                            {{ $homeFooter->footer_copyright }}
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    
   </div>
</footer>
