@extends('templates.maintemp')
@section('content')

<section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1>Savob yo'lida <span style="color:#FF462A !important">Muruvvat</span> siz bilan </h1>
          <h2>Nimaniki ehson qilsangiz, albatta, Alloh uni bilguvchidir</h2>
          <div>
            <a href="#about" class="btn-get-started scrollto">Ro'yxatdan o'tish</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img">
          <img src="assets/img/bg_home.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

</section>

<section id="about" class="about mt-5" >
      <div class="container">

        <div class="row justify-content-between">
          <div class="col-lg-5 d-flex align-items-center justify-content-center about-img">
            <img src="assets/img/about_bg.jpg" class="img-fluid animated" alt="" data-aos="zoom-in">
          </div>   
          <div class="col-lg-6 pt-5 pt-lg-0 ">
            <h3 data-aos="fade-up"><span style="color:#FF462A !important">Muruvvat</span> loyihasi haqida</h3>
            <p data-aos="fade-up" data-aos-delay="100">
              Maqsadimiz ehson beruvchilar va oluvchilar uchun <span style="color:#FF462A !important">ishonchli</span> va <span style="color:#FF462A !important">qulay</span> platforma ishlab chiqish. Biz faqat ehson qilishingiz va olishingizga yordam beramiz.
            </p>
            <div class="row justify-content-center">
              <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                <img src="assets/img/give_donation.png" alt="give_donation"> 
                <h4>Ehson berish</h4>
                <p>Ma'lum bir miqdordagi mablag'ni ehtiyojmand insonlarga yetkazishda yordamchingiz bo'lamiz.</p>
              </div>
              <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                <img src="assets/img/get_donation.png" alt="get_donation"> 
                <h4>Ehson olish</h4>
                <p>Muammolaringiz sabab ehtiyojingiz yetmayotgan ishlarni ko'ngillilarimizga qo'yib bering.</p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2 style="color:#4e4039 !important;">Sayt xaritasi</h2>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href="">Profilingiz yarating</a></h4>
              <p class="description">Ehson beruvchi yoki oluvchimisiz,shaxsiy profilingiz yarating </p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">Ariza qoldirish</a></h4>
              <p class="description">Ehtiyojingizdan kelib chiqqan holatda arizani to'ldirishdan boshlang</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href="">Yuklash jarayoni</a></h4>
              <p class="description">Arizangiz xodimlar tomonidan tekshirilib chiqilishini  kuting</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title"><a href="">Hayriyani olish</a></h4>
              <p class="description">Muruvvatpeshalar tomonidan hayriyalaringizni qabul  qiling</p>
            </div>
          </div>

        </div>

      </div>
    </section>
    
    <section id="faq" class="faq section-bg" style="background-color:#fff; !important">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>F.A.Q</h2>
          <p>Ko'p so'raladigan savollar</p>
        </div>

        <ul class="faq-list" data-aos="fade-up" data-aos-delay="100">

          <li>
            <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">Mablag'ni qanday to'lov qilaman? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq1" class="collapse" data-bs-parent=".faq-list">
              <p>
                Platforma orqali siz istalgan arizaga to'lov qilishingiz mumkin. Biz Payme, Click va shunga o'xshash to'lov tizimlari bilan hamkorlikda ish olib boramiz. 
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">Firibgarlar platformadan foydalanishi qanday himoya qilingan? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq2" class="collapse" data-bs-parent=".faq-list">
              <p>
                Maxsus tizim ya'ni elektron hukumat portali orqali aynan ariza qoldiruvchi ehtiyojmant yoki sog'ligida muammosi borligi tekshiriladi.
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">Platformaning qulayligi nimada? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq3" class="collapse" data-bs-parent=".faq-list">
              <p>
                Siz o'z hayriya-ehsonlaringizni tur xil telegram kanallar orqali kelgan e'lonlarga emas, balki ichonchli va qulay bo'lgan platforma orqali qilishingiz mumkin  
              </p>  
            </div>
          </li>

         

          <li>
            <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">Puldan tashqari ehsonlar qilsak ham buladimi? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq5" class="collapse" data-bs-parent=".faq-list">
              <p>
                Afsuski yuq, bizning asosiy maqsad turli xil og'ir kasalliklarga chalingan insonlarni muruvvatpeshalar ko'magi bilan ta'minlash  
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq6" class="collapsed question">Platformada qo'shimcha xususiyatlar bormi?<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq6" class="collapse" data-bs-parent=".faq-list">
              <p>
                Biz tur xil, bolalar uyi, qariyalar uyi, kam ta'minlanganlar uchun turli xil aksiyalar e'lon qilamiz. Shuningdek, siz platformadagi faoliyatingizni anonym saqlashingiz mumkin.
              </p>
            </div>
          </li>

        </ul>

      </div>
    </section>
    <section id="clients" class="clients section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2 style="color: #4e4039 !important">Asosiy Hamkorlar</h2>
        </div>

        <div class="clients-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="assets/img/partners/IT_park.png" class="img-fluid" alt=""></div>
            <!-- <div class="swiper-slide"><img src="assets/img/partners/OSCE.png" class="img-fluid" alt=""></div> -->
            <!-- <div class="swiper-slide"><img src="assets/img/partners/Corrupt.png" class="img-fluid" alt=""></div> -->
            <div class="swiper-slide"><img src="assets/img/partners/Youth.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/partners/ict.png" class="img-fluid" alt=""></div>
            <!-- <div class="swiper-slide"><img src="assets/img/partners/akfa.png" class="img-fluid" alt=""></div> -->
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
</section>


@endsection








