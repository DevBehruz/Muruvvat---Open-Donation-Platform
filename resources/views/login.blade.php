@extends('templates.maintemp')
@section('content')
<section class="breadcrumbs">
        <div class="container">
          <div class="d-flex justify-content-between align-items-center">
            <h2>Kirish</h2>
            <ol>
              <li><a href="/">Asosiy sahifa</a></li>
              <li>Kirish</li>
            </ol>
          </div>
        </div>
      </section><!-- End Breadcrumbs Section -->
  
      <section class="inner-page">
        <div class="container">
          <section id="contact" class="contact" >
              <div class="container" data-aos="fade-up">
                <div class="section-title">
                  <p>Kirish</p>
                </div>
                <div class="row" data-aos="fade-up" data-aos-delay="200">
                  <div class="col-lg-8 mt-2 mt-lg-0 d-flex align-items-stretch" style="margin: 0 auto;" >
                    <form method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="form-group col-md-6">
                              <label for="name">Email: *</label>
                              <input type="email" class="form-control" name="email" id="email"  required>
                            </div>
                            <div class="form-group col-md-6 mt-3 mt-md-0">
                              <label for="password">Parol: *</label>
                              <input type="password" class="form-control" name="password" id="password"  required>
                            </div>
                          </div>
                      <div class="text-center mt-3"><button type="submit"><a href="/account" style="color: #fff">Kirish</a></button></div>
                    </form>
                  </div>
          
                  <p class="text-center mt-3">Ro'yxatdan o'tmaganmisiz? <a href="/register">Ro'yxatdan o'tish </a></p>
                </div>
          
              </div>
            </section>
          
        </div>
      </section>
@endsection