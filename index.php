<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>My Template</title>

    <!-- Favicons -->
    <link href="images/fav-icon.jpg" rel="icon" />
    <link href="images/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- CSS only -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
      crossorigin="anonymous"
    />

    <!-- Google Fonts -->
    <link href="" rel="stylesheet" />
    <!-- https://fonts.googleapis.com -->

    <!-- Icons -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"
    />
    <script src="https://unpkg.com/boxicons@2.1.2/dist/boxicons.js"></script>

    <!-- Material Design Iconic Font -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css"
    />

    <!-- Glightbox -->
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/glightbox/3.2.0/css/glightbox.css"
    />
    <!-- A touchable Pure Javascript lightbox with mobile and video support. -->

    <!-- Splitting -->
    <link
      rel="stylesheet"
      href="https://unpkg.com/splitting/dist/splitting.css"
    />
    <!-- Splitting create elements and adds CSS variables to unlock amazing possibilities for animating text, grids, and more! -->

    <!-- Datatable -->
    <link
      rel="stylesheet"
      href="https://cdn.datatables.net/1.12.0/css/jquery.dataTables.min.css"
    />

    <!-- Vendor CSS Files -->
    <link href="" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="MyUtil.css" rel="stylesheet" />
    <link href="style.css" rel="stylesheet" />
   
  </head>
  <body>
   
    <div
      class="d-none flex-column bg-black justify-content-center position-fixed w-100 h-100 top-0 left-0 text-center opacity-100 z-10"
    >
      <div class="logo">
        <img src="images/logo1.png" alt="" class="width-200 unselectable" />
      </div>

      <div class="d-flex flex-column align-items-center m-t-30"></div>
    </div>

    <div id="loading-screen" class="z-q9" style="">
      <div class="container g-5 g-sm-3">
        <div class="row">
          <div class="col-12 d-flex justify-content-center">
            <div id="Title-1" class="position-absolute top-15 m-t-70 d-flex flex-column text-start align-content-start">
              <!-- さあ、<span class="typing-effect">リアルEXPを<br />タメよう。</span> -->
              <div class=" d-inline-flex justify-content-start text-start">
                <h1 class="fs-lg-72 fs-32 letter-space-lg-720 letter-space-320 fw-900 lh-15 f-jp text-start" 
                style="display: inline-table; width: 11em; margin: 0 auto;" >
                さあ、<span class="typing-effect">リアルEXPを<br />タメよう。</span></h1>
              </div>
            </div>
          </div>
        </div>
      </div>
		</div> 

		<div id="blackscreen" class="" style="display: none;">

		</div>

    <div id="float-menu" class="position-fixed z-q8">
      <div class="position-relative d-flex flex-column align-items-end">
        <button id="menu-btn-open" class="position-absolute floating">
          <img
            src="images/Polygon 1.png"
            width="30"
            height="30"
            alt="Button"
            class="img-fluid"
          />
        </button>
        <div class="position-absolute z-10" style="display: none">
          <div
            class="d-flex flex-column bg-primary cl-white rounded-4 fs-21 fw-900 text-end w-100 p-4"
          >
            <button
              id="menu-btn-close"
              class="cl-white text-end position-absolute top-0 right-0 p-lr-23 p-tb-13"
            >
              <i class="fas fa-times fs-24"></i>
            </button>

            <a
              href="#session1"
              class="m-t-54 cl-white cl-hover-white hover-italic"
              >Top</a
            >
            <a
              href="#session2"
              class="mt-3 cl-white cl-hover-white hover-italic"
              >About</a
            >
            <a
              href="#session3"
              class="mt-3 cl-white cl-hover-white hover-italic"
              >Feature</a
            >
            <a
              href="#session4"
              class="mt-3 cl-white cl-hover-white hover-italic"
              >Content</a
            >
            <div class="d-flex justify-content-between w-100 m-t-35 m-b-4">
              <div>
                <button href="" class="cl-white">
                  <i class="fab fa-twitter fs-24 hover-large"></i>
                </button>
              </div>
              <div>
                <button href="" class="cl-white">
                  <i class="fab fa-discord fs-24 hover-large"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section id="session1" class="p-b-0 p-b-lg-60" >
      <div class="container g-5 g-sm-3">
        <div class="row">
          <div class="col-12">
            <div id="Title-1" class="m-t-60 m-t-md-70 m-t-lg-70 d-flex flex-column text-start align-content-start">
              <!-- さあ、<span class="typing-effect">リアルEXPを<br />タメよう。</span> -->
              <div class=" d-inline-flex justify-content-start text-center">
                <h1 class="fs-lg-72 fs-32 letter-space-lg-720 letter-space-md-320 fw-900 lh-15 lh-sm-17 f-jp" 
                style="display: inline-table; width: 11em; margin: 0 auto;" >
                さあ、<span class="typing-effect">リアルEXPを<br />タメよう。</span></h1>
              </div>
            </div>

            <div id="Para-1" class="mt-4 text-center">
              <p class="fs-16 letter-space-160 lh-20 fw-700 f-jp">
                「メモをとる」からはじまる、オンラインP2Pラーニングアプリ。<br
                  class="show-on-desktop"
                />
                ゲームの上達からはじまり、ゲームの枠を超えたパワーを手に入れよう。
              </p>
            </div>

            <div class="row justify-content-center text-center mt-5">
              <div class="col-lg-8 col-xl-7 col-12 g-0">
                <div class="row">
                  <div
                    class="col-lg-5 order-lg-first order-last col-12 row g-0 flex-column justify-content-end mt-4 mt-sm-4 mt-md-3 mt-lg-0"
                  >
                    <div
                      class="position-relative d-flex flex-column justify-content-center text-center"
                    >
                      <div class="d-flex flex-column text-center p-b-100 m-b-0 m-b-sm-60">
                        <img
                          class="mx-auto"
                          src="images/Group 86.png"
                          style="width: 75%; max-width: 240px; height: auto"
                          alt="Logo"
                        />

                        <h2
                          class="fs-16 fs-sm-14 cl-primary p-t-22 letter-space-800 f-jp"
                        >
                          ドマログ
                        </h2>
                      </div>

                      <div
                        class="container position-absolute bottom-0 start-0 end-0 mx-auto"
                      >
                        <div class="row app-icons m-t-0 m-t-sm-100">
                          <a class="col-12 col-md-6 px-0" href="https://apps.apple.com/app/id1551353775">
                            <img 
                              class="apple"
                              src="https://tools.applemediaservices.com/api/badges/download-on-the-app-store/black/en-us?size=250x83&amp;releaseDate=1276560000&h=7e7b68fad19738b5649a1bfb78ff46e9" 
                              alt="Download on the App Store">
                          </a>
                          <a class="col-12 col-md-6 px-0" href='https://play.google.com/store/apps/details?id=com.stagescycling.stages'>
                            <img 
                              class="android" 
                              alt='Get it on Google Play' 
                              src='https://play.google.com/intl/en_us/badges/images/generic/en_badge_web_generic.png' />
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-7 col-12">
                    <img
                      class="show-on-desktop show-on-tablet ms-0 ms-sm-5 ms-lg-0"
                      src="images/iPhone 14 - Midnight - Portrait.png"
                      alt="Logo"
                    />
                    <img class="ms-5 ms-sm-0" src="images/mock-people.png" alt="Logo" />
                  </div>
                </div>
              </div>
            </div>

            <!-- <div id="Para-1" class="mt-4 show-on-tablet show-on-phone">
              <p class="fs-16 fs-sm-14 letter-space-160 letter-space-sm-140 lh-base fw-bold f-jp">
                「メモをとる」からはじまる、<br />
                オンラインP2Pラーニングアプリ。<br />
                ゲームの上達からはじまり、<br />
                ゲームの枠を超えたパワーを手に入れよう。
              </p>
            </div> -->
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="m-0 p-0">
        <div class="row m-0 p-0">
          <div class="position-relative m-0 p-0">
            <img
              class="w-100 vh100-phone"
              src="images/Grey Rectangle.png"
              alt="Mobile Home Page"
            />
            <h1 class="text-over-image fw-700 fs-70 f-jp">動&nbsp&nbsp画</h1>
          </div>
        </div>
      </div>
    </section>

    <section id="session2" class="position-relative">
      <div class="container g-5 g-sm-3">
        <div class="row">
          <div class="text-center m-t-72">
            <img
              src="images/Group 215.png"
              width="38px"
              height="38px"
              alt="spin"
            />
            <h1 class="fs-40 fs-sm-32 fw-700 m-t-13 f-en">About DoMaLoG</h1>
          </div>

          <div class="text-center m-t-100 m-t-sm-50">
            <h1 class="fs-lg-72 fs-md-24 fs-sm-24 letter-space-lg-720 letter-space-md-240 letter-space-sm-240 fw-900 f-jp">
              蓄積を叡智に変える、<br />
              生涯のパートナー。
            </h1>
          </div>

          <p class="text-center m-t-70 fs-16 letter-space-160 fw-700 lh-18 f-jp">
            ドマログは、体験を価値に変えて、殻を<br class="show-on-phone" />破り潜在能力を引き出すのに最適です。<br /><br
              class="show-on-phone"
            />
            簡単にメモをとり見直せるだけでなく、<br />
            仲間の視点とのギャップから思考の軸を<br class="show-on-phone" />整理することもできます。<br /><br class="show-on-phone" />
            君と一緒にセンスの壁を超えるため、<br class="show-on-phone" />これからも進化し続けます。
          </p>
        </div>
      </div>
      <img
        class="position-absolute top-10 top-md-0 right-0 right-md-12 zm-1"
        src="images/mv.png"
        alt=""
      />
    </section>

    <section class="p-t-70 p-b-180">
      <div class="container g-5 g-sm-3">
        <div class="row">
          <div
            class="col-lg-4 col-md-4 col-12 order-md-first order-last m-t-sm-50 m-t-md-50"
          >
            <div
              class="image-holder d-flex justify-content-md-end justify-content-center"
            >
              <img
                class="me-1"
                src="images/mock-people.png"
                alt="Mobile Home Page"
              />
            </div>
          </div>
          <div class="col-lg-5 col-md-8 col-12 p-0 d-flex flex-column">
            <div class="text-center p-t-0 p-r-lg-70 p-r-0">
              <h1 class="fs-24 fs-sm-16 letter-space-160 fw-700 f-jp">早くいきたければ一人で進め。</h1>
              <h2 class="fs-24 fs-sm-16 letter-space-160 fw-700 p-t-15 f-jp">
                遠くまで行きたければ、みんなで進め。
              </h2>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="session3" class="p-t-40">
      <div class="container g-5 g-sm-3">
        <div class="row justify-content-center">
          <div class="col-11">
            <div class="d-flex justify-content-md-start justify-content-center">
              <img
                class="my-auto me-4 show-on-desktop"
                src="images/Group 213.png"
                width="38px"
                height="38px"
                alt=""
              />
              <h1 class="fs-40 fw-700 f-en">Feature</h1>
            </div>
            <h1 class="fs-64 fs-sm-24 fs-md-40 letter-space-640 letter-space-sm-240 letter-space-md-400 text-center text-md-start fw-900 m-t-50 f-jp">
              仲間と一緒に進もう。
            </h1>
          </div>
        </div>
      </div>
    </section>

    <section id="体験はsaveできる" class="container g-0 m-t-70">
      <div class="row align-items-end g-0 position-relative">
        <div class="col-md-5 order-md-last text-lg-end text-center my-md-auto my-0">
          <div class="img-layer-border-1-parent">
            <img class="img-layer-border-1 max-w-full h-auto"
            src="images/featureItem-1_img.png" alt="Logo">
          </div>
        </div>

        <div class="col-md-7">
          <div
            class="card-1 px-lg-5 px-4 p-t-75 p-b-75 position-relative zm-2 bg-white"
          >
            <h1 class="fs-24 fs-sm-20 letter-space-240 letter-space-sm-200 fw-700 f-jp">体験はsaveできる</h1>
            <h2 class="fs-16 letter-space-160 m-t-30 lh-18 fw-700 f-jp">
              「メモをとる」というちょっとしたことからはじめよう。たかがメモと思うかもしれない。しかし、メモをとることで上達することを知っている人たちはその小さくて大きな行動をしている。君に必要なのはたった10秒。さあ、体験を価値に変えよう。
            </h2>
            <div class="d-flex align-items-center m-t-30">
              <h3 class="cl-secondary fs-16 letter-space-160 fw-700 f-jp">機能：</h3>
              <button class="tertiary-button fs-16 letter-space-160 ms-2 f-en">MEMO</button>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="体験を共有しよう " class="container g-0 m-t-100 m-t-lg-175">
      <div class="row align-items-end g-0 position-relative">
        <div class="col-md-5 order-md-start text-lg-start text-center my-md-auto my-0">
          <div class="img-layer-border-2-parent">
            <img
              class="img-layer-border-2 max-w-full h-auto"
              src="images/Group 83.png"
              alt="Logo"
            />
          </div>
        </div>
        <div class="col-md-7">
          <!--margin-left: -80px;  removed from below. Please reapply if necessary-->
          <div
            class="card-2 p-lr-25 p-l-lg-90 p-t-77 p-b-75 position-relative zm-2 bg-white"
          >
            <h1 class="fs-24 letter-space-240 fw-700 f-jp">体験を共有しよう</h1>
            <h2 class="fs-16 letter-space-160 m-t-33 lh-18 fw-700 f-jp">
              どのようにメモを取ればよいのか、その内容は相応しいのか。これを解決するために「仲間と共有する」という手がある。自分だけで考えるのではなく、多くのプレイヤーの経験を反映する。それは世界中のプレイヤーが自分のコーチになるとも言える。
            </h2>
            <div class="d-flex align-items-center mt-lg-0 mt-3">
              <h3 class="cl-secondary fs-16 letter-space-160 fw-700 f-jp">機能：</h3>
              <button class="tertiary-button fs-16 letter-space-160 ms-2 f-en">NOTE</button>
              <button class="tertiary-button fs-16 letter-space-160 ms-3 f-en">FORUM</button>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="信頼できる仲間とつながろう " class="container g-0">
      <div class="row align-items-end g-0 position-relative">
        <div class="col-md-5 order-md-last text-lg-end text-center my-md-auto my-0">
          <div class="img-layer-border-3-parent">
            <img
              class="img-layer-border-3 max-w-full h-auto"
              src="images/featureItem-2_img.png"
              alt="Logo"
            />
          </div>
        </div>
        <div class="col-md-7">
          <div
            class="card-3 p-lr-40 p-t-75 p-b-75 position-relative zm-2 bg-white"
          >
            <h1 class="fs-24 letter-space-240 fw-700 f-jp">信頼できる仲間とつながろう</h1>
            <h2 class="fs-16 letter-space-160 m-t-30 lh-18 fw-700 f-jp">
              簡単に仲間の取り組み方がみえる。今の君に必要なことを的確にアドバイスできるエキスパートがいる。悩みをシェアしてみよう。一方で君の経験を必要としている仲間がいる。知恵を伝えよう。近いレベルでプレーできる仲間が増えた方がもっとワクワクできる。
            </h2>
            <div class="d-flex align-items-center m-t-30">
              <h3 class="cl-secondary fs-16 letter-space-160 fw-700 f-jp">機能：</h3>
              <button class="tertiary-button fs-16 letter-space-160 ms-2 f-en">FORUM</button>
              <button class="tertiary-button fs-16 letter-space-160 ms-3 f-en">EVENT</button>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="m-t-60 m-t-lg-60 p-b-120 position-relative">
      <div class="container g-5 g-sm-3">
        <div class="row">
          <div class="col-12 text-center">
            <div id="Title-1" class="m-t-70">
              <h1 class="fs-48 fs-sm-20 letter-space-480 letter-space-200 lh-base fw-900 f-jp">
                人生に刺激とワクワクをあたえる<br />
                一歩をふみ出そう。
              </h1>
            </div>

            <div class="row justify-content-center text-center m-t-80">
              <div class="col-lg-7 col-12 g-0">
                <div class="row">
                  <div
                    class="col-lg-5 col-12 order-lg-first order-last row g-0 flex-column justify-content-end mt-4 mt-sm-4 mt-md-3 mt-lg-0"
                  >
                    <div
                      class="position-relative d-flex flex-column justify-content-center text-center"
                    >
                      <div class="d-flex flex-column text-center p-b-160 m-b-0 m-b-sm-60">
                        <img
                          class="mx-auto"
                          src="images/Group 86.png"
                          width="240"
                          height="36"
                          alt="Logo"
                        />

                        <h2
                          class="fs-16 fs-sm-14 cl-primary p-t-22 letter-space-800 f-jp"
                        >
                          ドマログ
                        </h2>
                      </div>

                      <div
                        class="container position-absolute bottom-0 start-0 end-0 mx-auto m-b-50"
                      >
                        <div class="row app-icons m-t-0 m-t-sm-100">
                          <a class="col-12 col-md-6 px-0" href="https://apps.apple.com/app/id1551353775">
                            <img 
                              class="apple"
                              src="https://tools.applemediaservices.com/api/badges/download-on-the-app-store/black/en-us?size=250x83&amp;releaseDate=1276560000&h=7e7b68fad19738b5649a1bfb78ff46e9" 
                              alt="Download on the App Store">
                          </a>
                          <a class="col-12 col-md-6 px-0" href='https://play.google.com/store/apps/details?id=com.stagescycling.stages'>
                            <img 
                              class="android" 
                              alt='Get it on Google Play' 
                              src='https://play.google.com/intl/en_us/badges/images/generic/en_badge_web_generic.png' />
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-7 col-12">
                    <img src="images/img-5.png" alt="Logo" />
                    <img
                      class="show-on-desktop"
                      src="images/img-5.png"
                      alt="Logo"
                    />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <img
        class="position-absolute top-0 top-md-10 left-0 left-md-10 zm-1 w-100 width-md-auto"
        src="images/mv.png"
        alt=""
      />
    </section>

    <section id="session4" class=" m-t-sm-0 bg-white p-b-90">
      <div class="container g-5 g-sm-3">
        <div class="row">
          <div class="text-center m-t-75">
            <img
              src="images/Group 215.png"
              width="38px"
              height="38px"
              alt="spin"
            />
            <h1 class="fs-40 fw-700 m-t-13">Contact</h1>
            <h2 class="fs-24 fs-sm-18 m-t-60 letter-space-240 letter-space-sm-180 fw-700 m-t-sm-30 lh-18 f-jp">
              お問い合わせは<br class="show-on-phone" />Discordチャンネルから。
            </h2>
            <button class="secondary-button mx-auto m-t-40 f-jp">
              Discordに参加
            </button>
          </div>

          <div class="text-center m-t-125 m-t-sm-70 m-t-md-70 m-t-lg-125">
            <h2 class="fs-14 letter-space-140 fw-700 f-jp">
              フォームからのお問い合わせを<br class="show-on-phone" /><br
                class="show-on-phone"
              />ご希望の方はこちら
            </h2>
            <img
              class="mt-3"
              src="images/Polygon 2.png"
              width="16"
              height="14"
              alt="triangle"
            />
          </div>

          <div class="container d-flex justify-content-center m-t-38">
          <?php
            $rand=rand();
            $_SESSION['rand']=$rand;
          ?>
            <form method="post" action="index.php" class="col-lg-7 fs-16">
              <input type="hidden" value="<?php echo $rand; ?>" name="randcheck" />
              <div class="row mb-3">
                <label for="inputName" class="col-lg-3 col-form-label fs-16 letter-space-200 fw-700"
                  >お名前 <span class="cl-primary">※</span></label
                >
                <div class="col-lg-9">
                  <input
                    type="text"
                    name="name"
                    class="form-control border-primary"
                    id="inputName"
                    placeholder=""
                  />
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputEmail" class="col-lg-3 col-form-label fs-16 letter-space-200 fw-700"
                  >法人名</label
                >
                <div class="col-lg-9">
                  <input
                    type="text"
                    name="coorporate"
                    class="form-control border-primary"
                    id="inputEmail"
                    placeholder=""
                  />
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputPassword" class="col-lg-3 col-form-label fs-16 letter-space-200 fw-700"
                  >部署名</label
                >
                <div class="col-lg-9">
                  <input
                    type="text"
                    name="bu_name"
                    class="form-control border-primary"
                    id="inputPassword"
                    placeholder=""
                  />
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputPassword" class="col-lg-3 col-form-label fs-16 letter-space-160 fw-700"
                  >メールアドレス <span class="cl-primary">※</span></label
                >
                <div class="col-lg-9">
                  <input
                    type="text"
                    class="form-control border-primary"
                    id="inputPassword"
                    name="email"
                    placeholder=""
                  />
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputPassword" class="col-lg-3 col-form-label fs-16 letter-space-200 fw-700"
                  >電話番号</label
                >
                <div class="col-lg-9">
                  <input
                    type="text"
                    class="form-control border-primary"
                    id="inputPassword"
                    name="phone"
                    placeholder=""
                  />
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputPassword" class="col-lg-3 col-form-label fs-16 letter-space-200 fw-700"
                  >お問い合わせ内容 <span class="cl-primary">※</span></label
                >
                <div class="col-lg-9">
                  <textarea
                    class="form-control border-primary"
                    id="inputPassword"
                    cols="30"
                    name="details"
                    placeholder=""
                    style="min-height: 180px;"
                  ></textarea>
                </div>
              </div>
              <div
                class="d-flex justify-content-md-start justify-content-center"
              >
                <div class="col-lg-12 d-flex justify-content-center m-t-30">
                  <button type="submit" class="secondary-button">
                    送信内容の確認
                  </button>
                </div>
              </div>
            </form>
            <?php

              if (isset($_POST["details"]) || isset($_POST["phone"]) || isset($_POST["email"]) || isset($_POST["bu_name"]) || isset($_POST["coorporate"] )|| isset($_POST["name"]) && $_POST['randcheck']==$_SESSION['rand']) {
                // Required code will be goes here
                $email_to      = $_POST['email'];
            
                $email_subject = 'DoMaLogの問い合わせ';
                
                // $message = 'hello';
                
                // $headers = 'From: info@domalog.fun' . "\r\n" .
                
                //     'Reply-To: info@pwr.co.jp' . "\r\n" .
                
                //     'X-Mailer: PHP/' . phpversion();
                
               // EDIT THE 2 LINES BELOW AS REQUIRED

    function problem($error)
    {
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br><br>";
        echo $error . "<br><br>";
        echo "Please go back and fix these errors.<br><br>";
        die();
    }

    // validation expected data exists
    if (
        !isset($_POST['details']) ||
        !isset($_POST['name']) ||
        !isset($_POST['email'])
    ) {
        problem('We are sorry, but there appears to be a problem with the form you submitted.');
    }

    $name = $_POST['name']; // required
    $email = $_POST['email']; // required
    $message = $_POST['details']; // required
    $phone=$_POST["phone"];

    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

    if (!preg_match($email_exp, $email)) {
        $error_message .= 'The Email address you entered does not appear to be valid.<br>';
    }

    $string_exp = "/^[A-Za-z .'-]+$/";


    if (strlen($message) < 2) {
        $error_message .= 'The Message you entered do not appear to be valid.<br>';
    }

    if (strlen($error_message) > 0) {
        problem($error_message);
    }

    $email_message = "DoMaLoGへのお問い合わせありがとうございます。\n\n";

    function clean_string($string)
    {
        $bad = array("content-type", "bcc:", "to:", "cc:", "href");
        return str_replace($bad, "", $string);
    }

    $email_message .= "以下の内容でご確認させていただきます。 "  . "\n";
    $email_message .= "--------------------------------------"  . "\n";
    $email_message .= "お名前: " . clean_string($name) . "\n";
    $email_message .= "法人名: " . clean_string($message) . "\n";
    $email_message .= "部署名: " . clean_string($message) . "\n";
    $email_message .= "メールアドレス: " . clean_string($email) . "\n";
    $email_message .= "電話番号: " . clean_string($phone) . "\n";
    $email_message .= "お問い合わせ内容 : " . clean_string($message) . "\n";
    $email_message .= "--------------------------------------"  . "\n";
    $email_message .= "一週間以内に弊社より返信がなければ、お手数ですが info@pwr.co.jp までお問い合わせください。"  . "\n";

    // create email headers
    $headers = 'From: ' . "info@domalog.fun" . "\r\n" .
        'Reply-To: ' . "info@pwr.co.jp" . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    mail($email_to, $email_subject, $email_message, $headers);
    mail("info@domalog.fun", $email_subject, $email_message, $headers);
    // mail("actformyanmar@gmail.com", $email_subject, $email_message, $headers);
    

              }

         
            
            ?>
          </div>
        </div>
      </div>
    </section>

    <footer>
      <div class="container">
        <div class="d-flex justify-content-center m-t-80">
          <div class="d-inline-flex flex-column align-items-center">
            <img
              class=""
              src="images/logo-company.png"
              style="display: inline-table"
              alt="Logo"
            />

            <div class="d-flex justify-content-between w-100 m-t-40">
              <div>
                <a href="" class="cl-black"
                  ><i class="fab fa-twitter fs-24"></i
                ></a>
              </div>
              <div>
                <a href="" class="cl-black"
                  ><i class="fab fa-discord fs-24"></i
                ></a>
              </div>
            </div>
          </div>
        </div>
        <div
          class="text-center fs-16 fw-700 m-t-100 p-b-16 letter-space-160"
        >
          Copyright ©2023 PwR
        </div>
      </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <!-- Glightbox -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/glightbox/3.2.0/js/glightbox.min.js"></script>
    <!-- A touchable Pure Javascript lightbox with mobile and video support. -->

    <!-- Splitting -->
    <script src="https://unpkg.com/splitting/dist/splitting.min.js"></script>
    <!-- Splitting create elements and adds CSS variables to unlock amazing possibilities for animating text, grids, and more! -->
    
    <!-- typeitjs -->
    <script src="https://unpkg.com/typeit@8.7.1/dist/index.umd.js"></script>

    <script src="main.js"></script>
  </body>
  
</html>

<script>
  (function(d) {
    var config = {
      kitId: 'vss3tmk',
      scriptTimeout: 3000,
      async: true
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);
</script>