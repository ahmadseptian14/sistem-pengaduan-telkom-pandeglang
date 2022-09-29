  <!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Layanan Pengaduan Telkom Rangkasbitung</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    </head>
    <body>
       <section class="abovefold overflow-hidden">

        <style scoped>
            @import url("https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap");
            @import url('https://fonts.googleapis.com/css2?family=Red+Hat+Display:wght@400;500;600;700;800;900&display=swap');

            * {
                font-family: 'Inter', sans-serif !important;
            }

            body ::-webkit-input-placeholder {
                color: #9A9A9A !important;
            }

            body :-ms-input-placeholder {
                color: #9A9A9A !important;
            }

            body ::-ms-input-placeholder {
                color: #9A9A9A !important;
            }

            body ::placeholder {
                color: #9A9A9A !important;
            }

            body .font-red-hat-display {
                font-family: 'Red Hat Display', sans-serif !important;
            }

            body .cl-light-blue {
                color: #34b3ff;
            }



            body nav .navbar-brand {
                font-family: 'Red Hat Display', sans-serif !important;
                font-size: 26px;
                font-weight: 700 !important;
                color: #FFFFFF !important;
            }

            @media screen and (min-width: 768px) {
                body nav .navigation {
                    margin-left: 80px;
                }
            }

            body nav .navigation li {
                margin-right: 32px;
            }

            body nav .navigation a {
                font-size: 16px;
                font-weight: 400 !important;
                color: #FFFFFF !important;
            }

            body nav .authentication li {
                margin-right: 38px;
            }

            body nav .authentication a {
                font-size: 16px;
                font-weight: 700 !important;
            }

            @media screen and (min-width: 768px) {
                body nav .authentication .cl-white {
                    color: #FFFFFF !important;
                }
            }

            @media screen and (max-width: 768px) {
                body nav .authentication .login {
                    width: 100%;
                }
            }

            @media screen and (max-width: 768px) {
                body nav .authentication .login a {
                    background: #518CFF;
                    border-radius: 8px;
                    -webkit-box-align: center;
                    -ms-flex-align: center;
                    align-items: center;
                    color: #FFFFFF !important;
                    padding: 14px 14px 14px 14px !important;
                }
            }

            body nav .authentication .signup {
                background: #FFFFFF;
                border-radius: 8px;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                color: #1C3055 !important;
                padding: 14px 14px 14px 14px !important;
            }

            body .abovefold {
                background: #0F0F0F;
                padding-bottom: 115px;
            }

            body .abovefold .header {
                margin-top: 85px;
            }

            body .abovefold .img-header {
                position: absolute;
                top: 0;
                right: -230px;
            }

            body .abovefold .headline {
                font-family: 'Red Hat Display', sans-serif !important;
                font-weight: 700 !important;
                line-height: 91px;
                color: #FFFFFF;
                font-size: 72px;
            }

            @media screen and (max-width: 768px) {
                body .abovefold .headline {
                    font-size: 54px;
                    line-height: 80px !important;
                }
            }

            body .abovefold .sub-headline {
                font-family: 'Red Hat Display', sans-serif !important;
                font-weight: 400 !important;
                font-size: 26px;
                line-height: 38px;
                color: #CED2DE;
                margin-top: 30px;
                width: 75%;
            }

            @media screen and (min-width: 768px) {
                body .abovefold .sub-headline {
                    width: 373px;
                }
            }

            body .abovefold .four-point {
                margin-top: 80px;
                color: #CED2DE;
            }

            body .abovefold .card {
                background: #171717;
                -webkit-box-shadow: -32px 48px 60px rgba(22, 23, 28, 0.04);
                box-shadow: -32px 48px 60px rgba(22, 23, 28, 0.04);
                border-radius: 12px;
                padding: 52px 52px 40px;
                border: none;
            }

            @media screen and (min-width: 768px) {
                body .abovefold .card {
                    width: 464px;
                }
            }

            body .abovefold .card .form-control {
                background: #202020;
                border-radius: 8px;
                border: none;
                padding: 16px 20px;
                height: 56px;
                font-weight: 600 !important;
            }

            body .abovefold .card .input-title {
                color: #494C57;
                font-size: 16px;
                margin-bottom: 12px;
            }

            body .abovefold .card .btn-card {
                margin-top: 36px;
                background: #00B67A;
                border-radius: 8px;
                height: 56px;
                padding: 10px;
                color: #FFFFFF;
                font-size: 16px;
                font-weight: 700 !important;
            }

            body .abovefold .card .award {
                font-size: 12px;
                line-height: 18px;
                color: #8D8F98;
            }

            body .btn-contact {
                padding: 16px 32px;
                background: #00B67A;
                border-radius: 12px;
                font-weight: 700;
                font-size: 20px;
                line-height: 24px;
                color: #FFFFFF;
      }
        </style>

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light pt-lg-5">
            <div class="container px-0">
                <a class="navbar-brand me-0" href="{{route('home')}}">
                    Telkom Rangkasbitung
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto navigation">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#tatacara">Tata Cara</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">Penilaian</a>
                        </li>
                    </ul>
                    @guest
                    <ul class="navbar-nav ms-auto authentication">
                        <li class="nav-item my-auto text-center login">
                            <a class="nav-link cl-white mb-3 mb-md-0" aria-current="page" href="{{route('login')}}">Log in</a>
                        </li>
                        <li class="nav-item me-0 text-center">
                            <a class="nav-link signup" href="{{route('register')}}">
                                Register <span class="ms-2"><img
                                        src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content10/dark/arrow-right.png"
                                        alt="arrow" class="img-fluid"></span>
                            </a>
                        </li>
                    </ul>
                    @endguest
                    @auth
                    <div class="dropdown">
                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                          {{Auth::user()->name}}
                        </a>
                      
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <li>
                              <a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log Out</a>
                              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                              </form>
                            </li>
                        </ul>
                      </div>
                    @endauth
                    
                </div>
            </div>
        </nav>
    </section>
    <section class="contact-us-dark-givmoney position-relative" id="laporkan">
    <style scoped>
      * {
        font-family: 'Inter', sans-serif !important;
      }

      body .font-red-hat-display {
        font-family: 'Red Hat Display', sans-serif !important;
      }

      body .cl-light-blue {
        color: #34b3ff;
      }

      body .contact-us-dark-givmoney {
        background: #151515;
        padding-top: 125px;
        padding-bottom: 90px;
      }

      body .contact-us-dark-givmoney .headline {
        font-family: 'Red Hat Display', sans-serif;
        font-weight: 700;
        font-size: 60px;
        line-height: 140%;
        text-align: center;
        color: #FFFFFF;
      }

      @media screen and (max-width: 768px) {
        body .contact-us-dark-givmoney .headline {
          font-size: 40px;
          line-height: 60px !important;
        }
      }

      body .contact-us-dark-givmoney .button {
        margin-top: 72px;
      }

      body .contact-us-dark-givmoney .btn-contact {
        padding: 16px 32px;
        background: #00B67A;
        border-radius: 12px;
        font-weight: 700;
        font-size: 20px;
        line-height: 24px;
        color: #FFFFFF;
      }

      @media screen and (max-width: 768px) {
        body .contact-us-dark-givmoney .btn-contact {
          width: 100%;
        }
      }

      body .contact-us-dark-givmoney .btn-demo {
        padding: 16px 32px;
        border-radius: 12px;
        font-weight: 400;
        font-size: 20px;
        line-height: 24px;
        color: #CED2DE;
        border: 1px solid #8D8F98;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
      }

      @media screen and (max-width: 768px) {
        body .contact-us-dark-givmoney .btn-demo {
          width: 100%;
        }
      }
    </style>
    <div class="container">
      <div class="row d-block mx-0">
          @auth
          <div class="headline font-red-hat-display">
            Berikan Penilaian anda atas layanan kami terhadap customer
          </div>
          <div class="card" style="background-color : black">
              <div class="card-body">
                 <form action="{{route('penilaian.store')}}" method="POST" enctype="multipart/form-data">
                      @csrf
                      <div class="row">
                        <input type="text" name="pengaduans_id" class="form-control" hidden value="{{$pengaduan->id}}">
                          <div class="col-md-12 mb-3">
                              <div class="form-group">
                                  <label style="color: white">Keterangan</label>
                                  <textarea name="keterangan" cols="10" rows="5" class="form-control"></textarea>
                              </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <label style="color: white">Rating</label>
                                <select name="rating" id="" class="form-control rating">
                                  <option value="1/5">1/5</option>
                                  <option value="2/5">2/5</option>
                                  <option value="3/5">3/5</option>
                                  <option value="4/5">4/5</option>
                                  <option value="5/5">5/5</option>
                              </select>
                            </div>
                        </div>
                      </div>
                      <div class="row">
                          <div class="col text-right">
                              <button type="submit" class="btn px-5" style="background-color: #00B67A; color :white">
                                  Beri Penilaian
                              </button>
                          </div>
                      </div>
                  </form>
              </div>
          </div>  
          @endauth
        
          @guest
          <div class="headline font-red-hat-display">
            Login terlebih dahulu sebelum melaporkan pengaduan!
          </div>
          <div class="d-flex gap-4 mt-5 justify-content-center align-items-center">
            <a href="{{route('login')}}" class="btn btn-contact">
                Login
              </a>
          </div>
          @endguest
       
      </div>
     
    </div>
  </section>
  
  <section class="workly-explainaa" id="tatacara">
    <style scoped>
      @import url("https://fonts.googleapis.com/css2?family=Lora:wght@400;500;600;700&display=swap");
      @import url("https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap");
      @import url("https://fonts.googleapis.com/css2?family=Merriweather:wght@900&display=swap");
      @import url("https://fonts.googleapis.com/css2?family=Lato:wght@400;900&family=Merriweather:wght@900&display=swap");
      @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap");

      * {
        font-family: 'Poppins', 'Inter', sans-serif !important;
      }

      body .cl-light {
        color: #EEEEEE;
      }

      body .cl-light-grey-2 {
        color: #90BCB7;
      }

      body .font-lora {
        font-family: 'Lora', sans-serif !important;
      }

      body .workly-explainaa {
        background-color: #000909;
        padding-top: 50px;
        padding-bottom: 50px;
      }

      @media only screen and (min-width: 768px) {
        body .workly-explainaa {
          padding-top: 160px;
          padding-bottom: 100px;
        }
      }

      body .workly-explainaa h1 {
        font-weight: 700;
        color: #EEEEEE;
      }

      @media only screen and (min-width: 768px) {
        body .workly-explainaa h1 {
          font-size: 40 !important;
        }
      }

      body .workly-explainaa .card {
        z-index: 1;
        background: #0A0F16;
        border-radius: 12px !important;
        width: 364px !important;
        margin-top: 56px !important;
        width: 25.25rem !important;
      }

      body .workly-explainaa .card .card-body {
        padding: 32px 40px !important;
      }

      @media only screen and (min-width: 768px) {
        body .workly-explainaa .card-desc {
          padding-top: 40px;
        }
      }

      body .workly-explainaa .card-title {
        font-weight: 700;
        color: #EEEEEE;
      }

      body .workly-explainaa .card-text {
        font-weight: 400;
        font-size: 16px;
        color: #888888;
      }
    </style>
    <div class="my-3">
      <div class="row text-center d-block mx-0">
        <h1>
          Tata Cara Input Pengaduan
        </h1>
      </div>
      <div class="d-flex align-items-center justify-content-center gap-5">
        <div class="card rounded-lg">
          <div class="card-body">
            <div class="card-desc">
              <h4 class="card-title my-3">Tulis Laporan</h4>
              <p class="card-text">Tulis laporan keluhan Anda dengan jelas.
              </p>
            </div>
          </div>
        </div>
        <div class="card rounded-lg">
          <div class="card-body">
            <div class="card-desc">
              <h4 class="card-title my-3">Proses Verifikasi</h4>
              <p class="card-text">Tunggu sampai laporan anda diverifikasi
              </p>
            </div>
          </div>
        </div>
        <div class="card rounded-lg">
          <div class="card-body">
            <div class="card-desc">
              <h4 class="card-title my-3">Tindak Lanjut & Laporan Selesai</h4>
              <p class="card-text">Laporan anda sedang dalam tindak lanjut dan akan selesai setelah di tindak lanjut
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><footer class="page-footer font-small blue py-5 text-white">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
        crossorigin="anonymous"></script>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap");

        * {
            font-family: 'Inter', sans-serif !important;
        }

        body footer {
            background-color: #101419;
        }

        body footer p {
            font-size: 20px;
            color: #ADB2B8;
        }

        @media screen and (min-width: 768px) {
            body footer .container-fluid {
                padding-left: 80px;
            }
        }

        body footer li {
            margin-bottom: 12px;
        }

        body footer li a {
            color: #ADB2B8;
            font-size: 20px;
            font-weight: 400 !important;
        }
    </style>
    <div class="container-fluid text-md-left">
        <div class="row">
            <div class="col-md-5 mt-md-0 mt-3">
                <h3 class="font-weight-bold mb-4">Telkom Rangkasbitung</h3>
                <p class="mb-2">
                    Rangkasbitung,Lebak, Banten
                </p>
                <p>
                    +62 822 0932 3824
                </p>
            </div>
            <hr class="clearfix w-100 d-md-none pb-3">
            <div class="row col-md-7">
                <div class="col-md-4 col-sm-6 mb-md-0 mb-3">
                    <p class="text-white font-weight-bold mb-4">
                        Partners
                    </p>
                    <ul class="list-unstyled">
                        <li>
                            <a href="#!">Government agency</a>
                        </li>
                        <li>
                            <a href="#!">Private company</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 col-sm-6 mb-md-0 mb-3">
                    <p class="text-white font-weight-bold mb-4">
                        Recommendation
                    </p>
                    <ul class="list-unstyled">
                        <li>
                            <a href="#!">Homestays</a>
                        </li>
                        <li>
                            <a href="#!">Villas</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 col-sm-6 mb-md-0 mb-3">
                    <p class="text-white font-weight-bold mb-4">
                        About Us
                    </p>
                    <ul class="list-unstyled">
                        <li>
                            <a href="#!">Blog</a>
                        </li>
                        <li>
                            <a href="#!">Career</a>
                        </li>
                        <li>
                            <a href="#!">Our values</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer> 
      @include('sweetalert::alert')
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    </body>
  </html>