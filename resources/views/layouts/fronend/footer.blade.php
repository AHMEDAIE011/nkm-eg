   <!-- Footer Start -->
   <div class="footer">
       <div class="container">
           <div class="row">
               <div class="col-lg-3 col-md-6">
                   <div class="footer-widget">
                       <h3 class="title">Get in Touch</h3>
                       <div class="contact-info">
                           <p><i class="fa fa-map-marker"></i>{{ $getSetting->street }} , {{ $getSetting->city }} ,
                               {{ $getSetting->country }}</p>
                           <p><i class="fa fa-envelope"></i>{{ $getSetting->email }}</p>
                           <p><i class="fa fa-phone"></i>+{{ $getSetting->phone }}</p>
                           <div class="social">
                               <a href="{{ $getSetting->twitter }}" title="twitter" rel="nofollow"><i
                                       class="fab fa-twitter"></i></a>
                               <a href="{{ $getSetting->facebook }}" title="facebook" rel="nofollow"><i
                                       class="fab fa-facebook-f"></i></a>
                               <a href="{{ $getSetting->instagram }}" title="instagram" rel="nofollow"><i
                                       class="fab fa-instagram"></i></a>
                               <a href="{{ $getSetting->youtupe }}" title="youtupe"><i class="fab fa-youtube"
                                       rel="nofollow"></i></a>
                           </div>
                       </div>
                   </div>
               </div>

               <div class="col-lg-3 col-md-6">
                   <div class="footer-widget">
                       <h3 class="title">Useful Links</h3>
                       <ul>
                           @foreach ($relatedSites as $site)
                               <li class="d-none"><a href="{{ $site->url }}"
                                       title="{{ $site->name }}">{{ $site->name }}</a></li>
                           @endforeach
                       </ul>
                   </div>
               </div>

               <div class="col-lg-3 col-md-6">
                   <div class="footer-widget">
                       <h3 class="title">Quick Links</h3>
                       <ul>
                           {{-- <li><a href="#"> Lorem ipsum</a></li>
                           <li><a href="#"> Pellentesque</a></li>
                           <li><a href="#"> Aenean vulputate</a></li>
                           <li><a href="#"> Vestibulum sit amet</a></li>
                           <li><a href="#"> Nam dignissim</a></li> --}}
                       </ul>
                   </div>
               </div>

               <div class="col-lg-3 col-md-6">
                   <div class="footer-widget">
                       <h3 class="title">NKM </h3>
                       <div class="newsletter">
                           <p>
                               Subscribe now to get updates on our latest products and exclusive offers directly to your
                               inbox.

                           </p>
                           <form action="{{ route('frontend.news.subscrice') }}" method="post">
                               @csrf
                               <input class="form-control" type="email" name="email"
                                   placeholder="Your email here" />
                               @error('email')
                                   <div class="text-danger">{{ $message }}</div>
                               @enderror
                               <button class="btn">Submit</button>
                           </form>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
   <!-- Footer End -->


   <!-- Footer Bottom Start -->
   <div class="footer-bottom">
       <div class="container">
           <div class="row">
               <div class="col-md-6 copyright">
                   <p>
                       Copyright &copy; <a style="    color: #93bf34;" href="">{{ config('app.name') }}</a>. All Rights
                       Reserved
                   </p>
               </div>

               <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
               <div class="col-md-6 template-by">
                   <p>Designed By <a style="    color: #93bf34;" href="">HHAD</a></p>
               </div>
           </div>
       </div>
   </div>
   <!-- Footer Bottom End -->
