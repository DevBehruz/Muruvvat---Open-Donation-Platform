@extends('templates.usertemp')
@section('content')

  
      <!-- ======= Breadcrumbs Section ======= -->
      <section class="breadcrumbs">
        <div class="container">
          <div class="d-flex justify-content-between align-items-center">
            <h2>Ariza yuborish</h2>
            <ol>
              <li><a href="/">Asosiy sahifa</a></li>
              <li>Ariza yuborish</li>
            </ol>
          </div>
        </div>
      </section><!-- End Breadcrumbs Section -->
  
      <section class="inner-page">
        <div class="container">
          <section id="contact" class="contact" >
              <div class="container" data-aos="fade-up">
                <div class="section-title">
                  <p>Ariza yuborish</p>
                </div>
                <div class="row" data-aos="fade-up" data-aos-delay="200">
                  <div class="col-lg-8 mt-2 mt-lg-0 d-flex align-items-stretch" style="margin: 0 auto;" >
                    <form method="post" role="form" class="php-email-form">
                      <div class="row">
                        <div class="form-group col-md-6">
                            <label for="idraqam">Pasport (ID karta) raqami *</label>
                            <input type="text" name="idraqam" class="form-control" id="idraqam"  required>
                          </div>
                          <div class="form-group col-md-6 mt-3 mt-md-0">
                            <label for="shaxsiy_raqam">Pasport (ID karta) shaxsiy raqami *</label>
                            <input type="number"  class="form-control" name="shaxsiy_raqam" id="shaxsiy_raqam"  required>
                          </div>
                        
                      </div>
                      <style>
                        
                    .file-input__input {
                        opacity: 0;
                        overflow: hidden;
                        position: absolute;
                        z-index: -1;
                    }
                    
                    .file-input__label {
                        cursor: pointer;
                        display: inline-flex;
                        align-items: center;
                        border-radius: 4px;
                        font-size: 14px;
                        font-weight: 600;
                        color: #fff;
                        font-size: 14px;
                        padding: 10px 12px;
                        background-color: #FF462A;
                        box-shadow: 0px 0px 2px rgba(0, 0, 0, 0.25);
                    }
                    
                    .file-input__label svg {
                        height: 16px;
                        margin-right: 4px;
                    }
                     
                      </style>
                      <div class="row">
                        <div class="file-input col-md-6">
                          <label for="file-input"> Tashxis varaqasi *</label><br>
                          <input
                              type="file"
                              name="file-input"
                              id="file-input"
                              class="file-input__input"
                              required
                            />
                            <label class="file-input__label col-md-12 col-12 col-lg-12" for="file-input">
                              <svg
                                aria-hidden="true"
                                focusable="false"
                                data-prefix="fas"
                                data-icon="upload"
                                class="svg-inline--fa fa-upload fa-w-16"
                                role="img"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 512 512"
                              >
                                <path
                                  fill="currentColor"
                                  d="M296 384h-80c-13.3 0-24-10.7-24-24V192h-87.7c-17.8 0-26.7-21.5-14.1-34.1L242.3 5.7c7.5-7.5 19.8-7.5 27.3 0l152.2 152.2c12.6 12.6 3.7 34.1-14.1 34.1H320v168c0 13.3-10.7 24-24 24zm216-8v112c0 13.3-10.7 24-24 24H24c-13.3 0-24-10.7-24-24V376c0-13.3 10.7-24 24-24h136v8c0 30.9 25.1 56 56 56h80c30.9 0 56-25.1 56-56v-8h136c13.3 0 24 10.7 24 24zm-124 88c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20zm64 0c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20z"
                                ></path>
                              </svg>
                              <span>Faylni yuklash</span></label>
                          </div>
                        <div class="form-group col-md-6 mt-3 mt-md-0">
                          <label for="miqdori">Pul miqdori (so'm) *</label>
                          <input type="number" class="form-control" name="miqdori" id="miqdori"  required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="form-group col-md-6">
                          <label for="date">Qachongacha: *</label>
                          <input type="date" name="date" class="form-control" id="date"  required>
                        </div>
                        <div class="form-group col-md-6 mt-3 mt-md-0">
                            <label for="karta_raqam">Karta raqami: *</label>
                            <input type="number" class="form-control" name="karta_raqam" id="karta_raqam"  required>
                          </div>
                      </div>
                      <div class="form-group mt-3">
                        <label for="name">Malumot: *</label>
                        <textarea class="form-control" name="message" rows="7" required></textarea>
                      </div>
                      
                      <div class="text-center mt-2"><button type="submit">Ariza yuborish</button></div>
                    </form>
                  </div>
                </div>
          
              </div>
            </section>
          
        </div>
      </section>
  
    
@endsection