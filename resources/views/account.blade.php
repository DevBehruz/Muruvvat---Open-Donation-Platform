@extends('templates.usertemp')
@section('content')


    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Shaxsiy kabinet</h2>
          <ol>
            <li><a href="/">Asosiy sahifa</a></li>
            <li>Shaxsiy kabinet</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

    <section class="inner-page"  style="background-color: #fff;">
      <div class="container">
        <section style="background-color: #fff;">


          <div class="row">
            <div class="col-lg-4">
              <div class="card mb-4" style="border-color: #ff715b;">
                <div class="card-body text-center">
                  <!--Avatar-->
                  <div>
                    <div class="d-flex justify-content-center mb-4">
                      <img src="assets/img/profile.png" class="rounded-circle"
                        alt="example placeholder" style="width: 200px; border-radius: 50%;" />
                    </div>
                    <div class="d-flex justify-content-center">
                      <div class="btn btn-rounded" style="background-color: #FF462A;">
                        <label class="form-label text-white m-1" for="customFile2">Rasmni yuklash</label>
                        <input type="file" class="form-control d-none" id="customFile2" />
                      </div>
                    </div>
                  </div>

                  <p class="text-muted mb-4 mt-2 pb-4"></p>

                </div>
              </div>
             
            </div>
            <div class="col-lg-8">
              <div style="border-color: #ff715b;" class="card mb-4">
              @foreach($account as $account)
              
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">F.I.SH</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0">{{$account->name}}</p>
                    </div>
                  </div>
                  <hr style="background-color: #FF462A;">
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Email</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0">{{$account->email}}</p>
                    </div>
                  </div>
                  <hr style="background-color: #FF462A;">
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Telefon</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0">+{{$account->phone}}</p>
                    </div>
                  </div>
                  <hr style="background-color: #FF462A;">

                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Manzil</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0">{{$account->address}}</p>
                    </div>
                  </div>
                  <hr style="background-color: #FF462A;">

                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Toifa</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0">{{$account->typeof}}</p>
                    </div>
                  </div>
                  <hr style="background-color: #FF462A;">

                  <div class="row">
                    <div class="col-sm-12">
                      <div class="text-center"><a href="/application"><button type="submit" class="p-2" style="background-color: #FF462A; color:#fff; border:none; border-radius: 5px;">Xayriya olish</button></a></div>
                    </div>
                  </div>
                </div>
               
              @endforeach
              </div>

            </div>
            <!-- <div class="col-lg-12" >
              <div style="border-color: #ff715b;" class="card">
                <section class="ftco-section" style="padding: 0;">
                  <div class="container">
                    <div class="row justify-content-center">
                      <div class="col-md-6 text-center mb-4">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <h3 class="h5 mb-4 text-center">To'lovlar ro'yxati</h3>
                        <div class="table-wrap">
                          <table class="table myaccordion table-hover" id="accordion">
                            <thead>
                              <tr>
                                <th>#</th>
                                <th>F.I.Sh</th>
                                <th>Miqdori</th>
                                <th>Sana</th>
                                <th>&nbsp;</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <th scope="row">1</th>
                                <td>Laptop Technology AS2020</td>
                                <td>$200.00</td>
                                <td>18/02/2023</td>
                                <td>
                                  <i class="fa" aria-hidden="true"></i>
                                </td>
                              </tr>
                              <tr>
                                <td colspan="6" id="collapseOne" class="collapse show acc" data-parent="#accordion">
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro iste, facere sunt sequi nostrum ipsa, amet doloremque magnam reiciendis tempore sapiente. Necessitatibus recusandae harum nam sit perferendis quia inventore natus.</p>
                                </td>
                              </tr>
              
                              <tr data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" class="collapsed">
                                <th scope="row">2</th>
                                <td>Laptop Technology AS2020</td>
                                <td>$200.00</td>
                                <td>18/02/2023</td>
                                <td>
                                  <i class="fa" aria-hidden="false"></i>
                                </td>
                              </tr>
                              <tr>
                                <td colspan="6" id="collapseTwo" class="collapse acc" data-parent="#accordion">
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro iste, facere sunt sequi nostrum ipsa, amet doloremque magnam reiciendis tempore sapiente. Necessitatibus recusandae harum nam sit perferendis quia inventore natus.</p>
                                </td>
                              </tr>
              
                              <tr data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" class="collapsed">
                                <th scope="row">3</th>
                                <td>Laptop Technology AS2020</td>
                                <td>$200.00</td>
                                <td>18/02/2023</td>
                                <td>
                                  <i class="fa" aria-hidden="false"></i>
                                </td>
                              </tr>
                              <tr>
                                <td colspan="6" id="collapseThree" class="collapse acc" data-parent="#accordion">
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro iste, facere sunt sequi nostrum ipsa, amet doloremque magnam reiciendis tempore sapiente. Necessitatibus recusandae harum nam sit perferendis quia inventore natus.</p>
                                </td>
                              </tr>
              
                              <tr data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour" class="collapsed">
                                <th scope="row">4</th>
                                <td>Laptop Technology AS2020</td>
                                <td>$200.00</td>
                                <td>18/02/2023</td>
                                <td>
                                  <i class="fa" aria-hidden="false"></i>
                                </td>
                              </tr>
                              <tr>
                                <td colspan="6" id="collapseFour" class="collapse acc" data-parent="#accordion">
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro iste, facere sunt sequi nostrum ipsa, amet doloremque magnam reiciendis tempore sapiente. Necessitatibus recusandae harum nam sit perferendis quia inventore natus.</p>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
              </div>
            </div> -->
          </div>
      </div>
    </section>
    </div>
    </section>

@endsection