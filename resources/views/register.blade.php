@extends('templates.maintemp')
@section('content')

<section class="breadcrumbs">
        <div class="container">
          <div class="d-flex justify-content-between align-items-center">
            <h2>Ro'yxatdan o'tish</h2>
            <ol>
              <li><a href="/">Asosiy sahifa</a></li>
              <li>Ro'yxatdan o'tish</li>
            </ol>
          </div>
        </div>
</section><!-- End Breadcrumbs Section -->
  
<section class="inner-page">
        <div class="container">
          <section id="contact" class="contact" >
              <div class="container" data-aos="fade-up">
                <div class="section-title">
                  <p>Ro'yxatdan o'tish</p>
                </div>
                <div class="row" data-aos="fade-up" data-aos-delay="200">
                  <div class="col-lg-8 mt-2 mt-lg-0 d-flex align-items-stretch" style="margin: 0 auto;" >
                    <form method="post" role="form" class="php-email-form" autocomplete="">
                      <div class="form-group col-md-12">
                        <label for="name">F.I.SH: *</label>
                        <input type="text" name="name" class="form-control" id="name"  required>
                      </div>
                      <div class="row">
                        <div class="form-group col-md-6">
                          <label for="phone">Telefon: *</label>
                          <input type="number"  class="form-control" name="phone" id="phone"  required>
                        </div>
                        <div class="form-group col-md-6 mt-3 mt-md-0">
                          <label for="name">Email: *</label>
                          <input type="email" class="form-control" name="email" id="email"  required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="form-group col-md-6">
                          <label for="location">Manzil: *</label>
                          <input type="text" name="location" class="form-control" id="location"  required>
                        </div>
                        <div class="form-group col-md-6 mt-3 mt-md-0">
                          <label for="type">Toifa: *</label>
                          <select name="type" id="type" class="form-control" required>
                            <option value="0">Murvvat ko'rsatuvchi</option>
                            <option value="1">Muruvvat oluvchi</option>
                          </select>
                        </div>
                      </div>
                      
                      <div class="row">
                        <div class="form-group col-md-6">
                          <label for="password1">Parol: *</label>
                          <input type="password" name="password1" class="form-control" id="password1"  required>
                        </div>
                        <div class="form-group col-md-6 mt-3 mt-md-0">
                          <label for="password2">Parolni takrorlash: *</label>
                          <input type="password"  class="form-control" name="password2" id="password2"  required>
                        </div>
                      </div>
                      <div class="text-center mt-2"><button type="submit"><a href="/charity" style="color: #fff"> Ro'yxatdan o'tish</a></button></div>
                    </form>
                  </div>
                  <p class="text-center mt-3">Ro'yxatdan o'tganmisiz? <a href="/login">Kirish </a></p>
                </div>
          
              </div>
            </section>
          
        </div>
</section>


@endsection








