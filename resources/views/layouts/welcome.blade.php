@extends('layouts.nav')
@section('content')
<!-- Header -->

<header>
<div class="container">
        <div class="intro-text">
        <div class="bad">
            <div class="intro-lead-in">قم با اضافه الالف مقاطعك في اليوتيوب</div>
            <div class="intro-heading">يمكنكم الان زيادة زوار مقاطعك على اليوتيوب لكي تتمكن من عمل اقترح لها في الصفحه الرئيسيه في اليوتيوب ومشاهدتها اكثر والالف المشتركين </div>
           <a href="profile" class="page-scroll btn btn-xl">ابد الان</a>
           </div>
            
        </div>
    </div>
</header>

 

<!-- About Section -->
<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">تعليمات</h2>
                <h3 class="section-subheading text-muted">اتبع التعليمات التاليه</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <ul class="timeline">
                    <li>
                        <div class="timeline-image">
                            <img class="img-circle img-responsive" src="img/about/1.jpg" alt="">
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4> </h4>
                                <h4 class="subheading">قم بمشاهده الموقع الموجود في صفحه Home</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">في حال لم تقم بمشاهده الموقع لن يتم اظهار  مقاطعك لتفعيلها و لمشاهدتها </p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <img class="img-circle img-responsive" src="img/about/2.jpg" alt="">
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4> </h4>
                                <h4 class="subheading">تاكيد المشاهده</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">قم بمشاهده الرابط وتخطي الرابط وتاكيد المشاهده</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image">
                            <img class="img-circle img-responsive" src="img/about/3.jpg" alt="">
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4></h4>
                                <h4 class="subheading">احتساب المشاهده</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">اذا لم تقم بتاكيد المشاهده لن تستطيع عرض مقاطع ووصول الزوار اليها</p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <img class="img-circle img-responsive" src="img/about/4.jpg" alt="">
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4> </h4>
                                <h4 class="subheading">الزوائر</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">سيتم ارسال الزوائر الي مقاطعك في خلال ٢٤ ساعه حتى لا يتم معرفه اليوتيوب بذالك</p>
                            </div>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section id="team" class="bg-light-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">المشرفين</h2>
                <h3 class="section-subheading text-muted"></h3>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="team-member">
                    <img src="data:image/jpeg;base64,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" class="img-responsive img-circle" alt="">
                    <h4>Aisha Dibaji</h4>
                    <!-- <p class="text-muted">مطور </p> -->
                    <!-- <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul> -->
                </div>
            </div>
            <div class="col-sm-4">
                <div class="team-member">
                    <img src="https://2.bp.blogspot.com/-BcX7GAcFO24/UtO7e7vizrI/AAAAAAAAAmM/Ps1zTfitPDw/s1600/23.png" class="img-responsive img-circle" alt="">
                    <h4>Yahya Dibaji</h4>
                    <!-- <p class="text-muted">مطور</p> -->
                     <ul class="list-inline social-buttons">
                        <!-- <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li> -->
                    </ul>  
                </div>
            </div>
          
            </div>
        </div>
      
</section>

<!-- Clients Aside -->


<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">اتصل بناء</h2>
                <!-- <h3 class="section-subheading text-muted">اتصل بناء</h3> -->
            </div>
        </div>
        <!-- Call  -->
        <div class="row">
            <div class="col-lg-12">
                <form name="sentMessage" id="contactForm" novalidate="" action="{{ route('call') }}" method="post">
                            {{ csrf_field() }}
                            @if(Session::has('message'))
                            <p class="alert alert-info">{{ Session::get('message') }}</p>
                            @endif
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="Your Name *" id="name" required="" data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div> 
                           <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Your Email *" id="email" required="" data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                             
                            <div class="form-group">
                                <input type="tel" name="phone" class="form-control" placeholder="Your Phone *" id="phone" required="" data-validation-required-message="Please enter your phone number.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea class="form-control" name="message" placeholder="Your Message *" id="message" required="" data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-lg-12 text-center">
                            <div id="success"></div>
                            <button type="submit" class="btn btn-xl">ارسال</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <span class="copyright">جميع الحقوق محفوظه ©  2021</span>
            </div>  
              <ul class="list-inline quicklinks">
                    <li><a href="/" class="privacy">Zwaar</a>
                    </li>

                </ul>
                <ul class="list-inline quicklinks">
                     
                    <li><a href="home" class="privacy">Home</a>
                    </li>
                </ul>
            
            <div class="col-md-4">
            
            </div>
        </div>
    </div>
</footer>

<!-- Portfolio Modals -->
<!-- Use the modals below to showcase details about your portfolio projects! -->

<!-- Portfolio Modal 1 -->
<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <!-- Project Details Go Here -->
                        <h2>Project Name</h2>
                        <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                        <img class="img-responsive" src="https://unsplash.imgix.net/uploads%2F1411419068566071cef10%2F7562527b?q=75&w=1080&h=1080&fit=max&fm=jpg&auto=format&s=240c45655f09c546232a6f106688e502" alt="">
                        <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                        <p>
                            <strong>Want these icons in this portfolio item sample?</strong>You can download 60 of them for free, courtesy of <a href="https://getdpd.com/cart/hoplink/18076?referrer=bvbo4kax5k8ogc">RoundIcons.com</a>, or you can purchase the 1500 icon set <a href="https://getdpd.com/cart/hoplink/18076?referrer=bvbo4kax5k8ogc">here</a>.</p>
                        <ul class="list-inline">
                            <li>Date: July 2014</li>
                            <li>Client: Round Icons</li>
                            <li>Category: Graphic Design</li>
                        </ul>
                        <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Portfolio Modal 2 -->
<div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <h2>Project Heading</h2>
                        <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                        <img class="img-responsive img-centered" src="https://unsplash.imgix.net/44/9s1lvXLlSbCX5l3ZaYWP_hdr-1.jpg?q=75&w=1080&h=1080&fit=max&fm=jpg&auto=format&s=f0a1db79752dbb04ec6d2aab7d17c7b0" alt="">
                        <p><a href="https://designmodo.com/startup/?u=787">Startup Framework</a> is a website builder for professionals. Startup Framework contains components and complex blocks (PSD+HTML Bootstrap themes and templates) which can easily be integrated into almost any design. All of these components are made in the same style, and can easily be integrated into projects, allowing you to create hundreds of solutions for your future projects.</p>
                        <p>You can preview Startup Framework <a href="https://designmodo.com/startup/?u=787">here</a>.</p>
                        <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Portfolio Modal 3 -->
<div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <!-- Project Details Go Here -->
                        <h2>Project Name</h2>
                        <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                        <img class="img-responsive img-centered" src="https://unsplash.imgix.net/46/Ov6ZY1zLTWmhPC0wFysP_IMG_2896_edt.jpg?q=75&w=1080&h=1080&fit=max&fm=jpg&auto=format&s=6518e4df89659818f6c0392175a9c5e6" alt="">
                        <p>Treehouse is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. This is bright and spacious design perfect for people or startup companies looking to showcase their apps or other projects.</p>
                        <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/treehouse-free-psd-web-template/">FreebiesXpress.com</a>.</p>
                        <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Portfolio Modal 4 -->
<div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <!-- Project Details Go Here -->
                        <h2>Project Name</h2>
                        <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                        <img class="img-responsive img-centered" src="https://unsplash.imgix.net/44/9s1lvXLlSbCX5l3ZaYWP_hdr-1.jpg?q=75&w=1080&h=1080&fit=max&fm=jpg&auto=format&s=f0a1db79752dbb04ec6d2aab7d17c7b0" alt="">
                        <p>Start Bootstrap's Agency theme is based on Golden, a free PSD website template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Golden is a modern and clean one page web template that was made exclusively for Best PSD Freebies. This template has a great portfolio, timeline, and meet your team sections that can be easily modified to fit your needs.</p>
                        <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/golden-free-one-page-web-template/">FreebiesXpress.com</a>.</p>
                        <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Portfolio Modal 5 -->
<div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <!-- Project Details Go Here -->
                        <h2>Project Name</h2>
                        <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                        <img class="img-responsive img-centered" src="https://unsplash.imgix.net/46/Ov6ZY1zLTWmhPC0wFysP_IMG_2896_edt.jpg?q=75&w=1080&h=1080&fit=max&fm=jpg&auto=format&s=6518e4df89659818f6c0392175a9c5e6" alt="">
                        <p>Escape is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Escape is a one page web template that was designed with agencies in mind. This template is ideal for those looking for a simple one page solution to describe your business and offer your services.</p>
                        <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/escape-one-page-psd-web-template/">FreebiesXpress.com</a>.</p>
                        <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Portfolio Modal 6 -->
<div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <!-- Project Details Go Here -->
                        <h2>Project Name</h2>
                        <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                        <img class="img-responsive img-centered" src="https://unsplash.imgix.net/uploads%2F1411419068566071cef10%2F7562527b?q=75&w=1080&h=1080&fit=max&fm=jpg&auto=format&s=240c45655f09c546232a6f106688e502" alt="">
                        <p>Dreams is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Dreams is a modern one page web template designed for almost any purpose. It’s a beautiful template that’s designed with the Bootstrap framework in mind.</p>
                        <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/dreams-free-one-page-web-template/">FreebiesXpress.com</a>.</p>
                        <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                    </div>
                </div>
            </div>
        </div>
    </div><script>(function(s,u,z,p){s.src=u,s.setAttribute('data-zone',z),p.appendChild(s);})(document.createElement('script'),'https://iclickcdn.com/tag.min.js',4175582,document.body||document.documentElement)</script>
</div>
  <iframe class=igm style="DISPLAY: block; MARGIN: 5px auto 5px 0px; TEXT-ALIGN: left" height=80 igsrc="https://zwaaryo.com/user_web" frameborder="0"></iframe>

@endsection
