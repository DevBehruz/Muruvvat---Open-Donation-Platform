@extends('templates.usertemp')
@section('content')
<section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Xayriya</h2>
          <ol>
            <li><a href="/">Asosiy sahifa</a></li>
            <li>Xayriya</li>
          </ol>
        </div>

      </div>
      <style>
        .card-header {
            background-color: #ff705b; color: white;
        }
        .card{
            border:none;
        }
        .btn-primary{
            background-color: #ff705b; color: white;
            border-color: #ff705b;
        }
        .btn-primary:hover{
            background-color: #ff4023;
            border-color: #ff705b;
        }
        hr{
            color: #ff4023;
        }
      </style>
    </section>

    <section class="inner-page">
      <div class="container">
        <section id="contact" class="contact" >
            <div class="container" data-aos="fade-up">
              <div class="section-title">
                <p>Xayriya ro'yxati</p>
              </div>
              <div class="row" data-aos="fade-up" data-aos-delay="200">
                <div class="col-lg-10 mt-2 mt-lg-0 d-flex align-items-stretch" style="margin: 0 auto;" >
                  <div  class="php-email-form">
                    @foreach($data as $info)
                    <div class="card" >
                        <div class="card-body">
                          <h5 class="card-title">{{$info->name}}</h5>
                          <p class="card-text">{{$info->less_info}}</p>
                          <p class="card-text">Kerak bo'lgan mablag': ${{$info->payment}}</p>
                          <p class="card-text" style="float:right;">{{$info->date}}</p>
                          <a href="/charity-details"class="btn btn-primary">Batafsil ma'lumot</a>
                        </div>
                        <hr>
                    </div>
                    @endforeach
                    </div>
                </div>
                <style>
                    .pagination li a{
                        color: #ff705b;
                    }
                    .pagination li a:hover{
                        color: #ff4023;
                    }
                </style>
                <nav style="margin: 0 auto; display: flex; justify-content: center; margin-top: 20px;">
                    <ul style="margin: 0 auto; " class="pagination">
                      <li class="page-item">
                        <a class="page-link" href="#" >
                          <span>&laquo;</span>
                        </a>
                      </li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                          <span>&raquo;</span>
                        </a>
                      </li>
                    </ul>
                  </nav>
                <p class="text-center mt-3">Bu bo'limdan o'zingizga kerakli bo'lim tanlay o'lmadizmi unda bizni jamg'armaga hissangizni qo'shing <a href="/"> Jamg'armaga o'tish</a></p>
              </div>
        
            </div>
          </section>
      </div>
    </section>
@endsection