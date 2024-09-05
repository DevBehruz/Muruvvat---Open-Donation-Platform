@extends('templates.usertemp')
@section('content')
<section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Xayriya ma'lumotlari</h2>
          <ol>
            <li><a href="/">Asosiy sahifa</a></li>
            <li>Xayriya ma'lumotlari</li>
          </ol>
        </div>

      </div>
</section>

<section class="inner-page">
      <div class="container">
        <section id="portfolio-details" class="portfolio-details">
          <div class="container">
        
            <div class="row gy-4">
        
              <div class="col-lg-8">
                <div class="portfolio-details-slider swiper">
                  <div class="swiper-wrapper align-items-center">
                    <div class="swiper-slide">
                      <img src="assets/img/about_bg.jpg" alt="">
                    </div>
                  </div>
                  <div class="swiper-pagination"></div>
                </div>
              </div>
        
              <div class="col-lg-4">
                <div class="portfolio-info">
                  <h3>Ma'lumotlar: </h3>
                  <ul>
                    <li><strong>F.I.SH: </strong>Hamidov Eshmurod</li>
                    <li><strong>Kerak mablag': </strong>1,000,000 so'm</li>
                    <li><strong>Qolgan mablag': </strong>500,000 so'm</li>
                    <li><strong>Muddat: </strong>18/02/2023</li>
                  </ul>
                </div>
                <div class="portfolio-description">
                  <h2>Ma'lumot:</h2>
                  <p>
                  Bilasizmi, Hindistonda har yili 2,00,000 bemor ko'proq buyrak transplantatsiyasini oladi? Hindiston kontsert dasturi bo'yicha AQShdan keyin ikkinchi o'rinda turadi buyrak transplantatsiyasi. 
                  </p>
                </div>
              </div>
        
            </div>
           
                <section id="contact" class="contact" >
                    <div class="container" data-aos="fade-up">
                      <div class="section-title">
                        <p>To'lov qilish</p>
                      </div>
                      <div class="row" data-aos="fade-up" data-aos-delay="200">
                        <div class="col-lg-12 mt-2 mt-lg-0 d-flex align-items-stretch" style="margin: 0 auto;" >
                          <form method="post" role="form" class="php-email-form">
                            <div class="row">
                              <div class="form-group col-md-6">
                                <label for="type">To'lov turi: *</label>
                                <select name="type" id="type" class="form-control" required>
                                  <option value="0">Click</option>
                                  <option value="1">Payme</option>
                                  <option value="1">Apelsin</option>
                                  <option value="1">Payme</option>
                                </select>
                              </div>
                              <div class="form-group  col-md-6 mt-3 mt-md-0">
                                <label for="miqdor">Miqdori: *</label>
                                <input type="number"  class="form-control" name="miqdor" id="miqdor"  required>
                              </div>
                            </div>
                            <div class="form-group mt-3">
                              <label for="name">To'lov tavsifi: *</label>
                              <textarea class="form-control" name="message" rows="5" required></textarea>
                            </div>
                            
                            <div class="text-center mt-2"><button type="submit">To'lov qilish</button></div>
                          </form>
                        </div>
                      </div>
                
                    </div>
                  </section>
              
            <!-- <div class="container">
              <h2>Arizaga qilngan to'lovlar ro'yxati</h2>
              <ul style="padding:0" class="responsive-table">
                <li class="table-header">
                  <div class="col col-1">ID</div>
                  <div class="col col-2">F.I.SH</div>
                  <div class="col col-3">Pul miqdori</div>
                  <div class="col col-4">To'lov holati</div>
                </li>
                <li class="table-row">
                  <div class="col col-1" >42235</div>
                  <div class="col col-2" >John Doe</div>
                  <div class="col col-3" >3,000,000 so'm</div>
                  <div class="col col-4" >Pending</div>
                </li>
                <li class="table-row">
                  <div class="col col-1" >42442</div>
                  <div class="col col-2" >Jennifer Smith</div>
                  <div class="col col-3" >1,500,000 so'm</div>
                  <div class="col col-4" >Pending</div>
                </li>
               
              </ul>
            </div> -->
        
          </div>
        </section>
      </div>
</section>
@endsection