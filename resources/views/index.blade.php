<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Survei Kepuasan Mahasiswa UIN Sunan Gunung Djati Bandung" />
    <meta name="author" content="Ryan" />
    <title>Survei | Teknik Informatika UIN Sunan Gunung Djati Bandung</title>
    <!-- Favicons-->
    <link rel="shortcut icon" href="img/uinlogo.png" type="../image/x-icon" />
    <link rel="apple-touch-icon" type="image/x-icon" href="img/uinlogo.png" />
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/uinlogo.png" />
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/uinlogo.png" />
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/uinlogo.png" />

    <!-- GOOGLE WEB FONT -->
    <link
      href="https://fonts.googleapis.com/css?family=Caveat|Poppins:300,400,500,600,700&display=swap"
      rel="stylesheet"
    />

    <!-- BASE CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet" />
    <link href="../css/style.css" rel="stylesheet" />
    <link href="../css/vendors.css" rel="stylesheet" />

    <!-- YOUR CUSTOM CSS -->
    <link href="../css/custom.css" rel="stylesheet" />
  </head>

  <body class="style_3">
    <div id="preloader">
      <div data-loader="circle-side"></div>
    </div>
    <!-- /Preload -->

    <div id="loader_form">
      <div data-loader="circle-side-2"></div>
    </div>
    <!-- /loader_form -->

    <header>
      <div class="container-fluid">
        <div class="row">
          <div class="col-5">
            <div class="card" style="width: 50px; align-items: center; padding: 10px">
              <a href="index.html"><img src="{{ asset('img/uintext.png') }}" alt="" width="30" /></a>
            </div>
          </div>
          <div class="col-7">
            <div id="social">
              <ul>
                <li>
                  <a href="#0"><i class="social_facebook"></i></a>
                </li>
                <li>
                  <a href="#0"><i class="social_twitter"></i></a>
                </li>
                <li>
                  <a href="#0"><i class="social_instagram"></i></a>
                </li>
                <li>
                  <a href="#0"><i class="social_linkedin"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!-- /row -->
      </div>
      <!-- /container -->
    </header>
    <!-- /header -->

    <div class="wrapper_centering">
      <div class="container_centering">
        <div class="container">
          <div class="row justify-content-between">
            <div class="col-xl-6 col-lg-6 d-flex align-items-center">
              <div class="main_title_1">
                <h3><img src="img/main_icon_1.svg" width="80" height="80" alt="" /> Survey</h3>
                <p>Kepuasan Mahasiswa Teknik Informatika Universitas Islam Negeri Sunan Gunung Djati Bandung.</p>
                <p><em></em></p>
              </div>
            </div>
            <!-- /col -->
            <div class="col-xl-5 col-lg-5">
              <div id="wizard_container">
                <div id="top-wizard">
                  <div id="progressbar"></div>
                </div>
                <!-- /top-wizard -->
                <form id="wrapped" method="POST" autocomplete="off">
                  <input id="website" name="website" type="text" value="" />
                  <!-- Leave for security protection, read docs for details -->
                  <div id="middle-wizard">
                    <!-- /step 15-->
                    <div class="submit step">
                        <h3 class="main_question"><strong>Data Mahasiswa</strong>Silahkan isi identitas Anda</h3>
                        <div class="form-group">
                          <label for="fullname">Nama Lengkap</label>
                          <input type="text" name="fullname" id="fullname" class="form-control required" />
                        </div>
                        <div class="form-group">
                          <label for="nim">NIM</label>
                          <input type="text" name="nim" id="nim" class="form-control required" />
                        </div>
                        <div class="form-group">
                          <label for="email">Email</label>
                          <input type="email" name="email" id="email" class="form-control required" />
                        </div>
                        <div class="row">
                          <div class="col-9">
                            <div class="form-group radio_input">
                              <label class="container_radio"
                                >Laki-laki
                                <input type="radio" name="gender" value="Male" class="required" />
                                <span class="checkmark"></span>
                              </label>
                              <label class="container_radio"
                                >Perempuan
                                <input type="radio" name="gender" value="Female" class="required" />
                                <span class="checkmark"></span>
                              </label>
                            </div>
                          </div>
                        </div>
                        <!-- /row -->
                        <div class="form-group terms">
                          <label class="container_check"
                            >Please accept our
                            <a
                              href="#"
                              data-bs-toggle="modal"
                              data-bs-target="#terms-txt"
                              style="color: #fff; text-decoration: underline"
                              >Syarat dan ketentuan</a
                            >
                            <input type="checkbox" name="terms" value="Yes" class="required" />
                            <span class="checkmark"></span>
                          </label>
                        </div>
                    </div>
                    <div class="step">
                      <div class="scrolling-box">
                        <p align="justify">
                          Kuesioner kepuasan mahasiswa terhadap pelayanan akademik merupakan suatu kiat jurusan Teknik
                          Informatika untuk menjaring masukan, kritik, dan saran dari mahasiswa yang tentunya hasil
                          penjaringan digunakan untuk perbaikan jurusan kedepannya. Kuesioner ini dilakukan setiap akhir
                          semester ganjil dan genap.
                        </p>
                        <h3 class="main_question"><strong></strong>Petunjuk Umum:</h3>
                        <p align="justify">
                          a. Survey ini dilakukan dengan tujuan untuk mengukur tingkat kepuasan mahasiswa jurusan Teknik
                          Informatika terhadap pelayanan dosen, staf administrasi dan juga Jurusan.
                        </p>
                        <p align="justify">
                          b. Mahasiswa dimohon untuk mengisi seluruh instrumen ini sesuai dengan pengalaman,
                          pengetahuan, presepsi, dan keadaan yang sebenarnya.
                        </p>
                        <p align="justify">
                          c. Partisipan saudara untuk mengisi instrumen ini secara objektif sangat besar artinya bagi
                          Jurusan Teknik Informatika guna mendapatkan masukan yang akurat dalam rangka perbaikan dan
                          peningkatan pelayanan akademik, serta administrasi untuk kedepannya.
                        </p>
                        <p align="justify">
                          d. Jawaban saudara DIJAMIN kerahasiaan dan TIDAK memiliki dampak negatif dalam bentuk apapun.
                        </p>
                        <p align="justify">
                          e. Instrumen ini terdiri dari seperangkat pertanyaan atau pernyataan untuk mengukur:
                        </p>
                        <p align="justify">(1) Keandalan/Reliability</p>
                        <p align="justify">(2) Daya tanggap/Responsiveness</p>
                        <p align="justify">(3) Kepastian/Assurance</p>
                        <p align="justify">(4) Empati/Empathy</p>
                        <p align="justify">(5) Tangible</p>
                        <p align="justify">
                          e. Instrumen ini terdiri dari seperangkat pertanyaan atau pernyataan untuk mengukur:
                        </p>
                        <p align="justify">
                          f. Pilihlah salah satu dari alternatif yang disediakan dengan cara mengklik skala jawaban.
                        </p>
                        <p align="justify">Angka 1 : Sangat Rendah (SR)</p>
                        <p align="justify">Angka 2 : Rendah (R)</p>
                        <p align="justify">Angka 3 : Cenderung Rendah (CR)</p>
                        <p align="justify">Angka 4 : Cenderung Tinggi (CT)</p>
                        <p align="justify">Angka 5 : Tinggi (T)</p>
                        <p align="justify">Angka 6 : Sangat Tinggi (ST)</p>
                      </div>
                    </div>
                    <div class="step">
                      <h3 class="main_question">
                        <strong>1 of 15</strong>{{ $pertanyaan[0]->pertanyaan }}?
                      </h3>
                      <div class="review_block_numbers">
                        <ul class="clearfix">
                          <li>
                            <div class="container_numbers">
                              <input
                                type="radio"
                                id="very_bad_1"
                                name="answer"
                                class="required"
                                value="1"
                                onchange="getVals(this, 'question_1');"
                              />
                              <label class="radio very_bad" for="very_bad_1">1</label>
                            </div>
                          </li>
                          <li>
                            <div class="container_numbers">
                              <input
                                type="radio"
                                id="bad_1"
                                name="answer"
                                class="required"
                                value="2"
                                onchange="getVals(this, 'question_1');"
                              />
                              <label class="radio bad" for="bad_1">2</label>
                            </div>
                          </li>
                          <li>
                            <div class="container_numbers">
                              <input
                                type="radio"
                                id="average_1"
                                name="answer"
                                class="required"
                                value="3"
                                onchange="getVals(this, 'question_1');"
                              />
                              <label class="radio average" for="average_1">3</label>
                            </div>
                          </li>
                          <li>
                            <div class="container_numbers">
                              <input
                                type="radio"
                                id="good_1"
                                name="answer"
                                class="required"
                                value="4"
                                onchange="getVals(this, 'question_1');"
                              />
                              <label class="radio good" for="good_1">4</label>
                            </div>
                          </li>
                          <li>
                            <div class="container_numbers">
                              <input
                                type="radio"
                                id="very_good_1"
                                name="answer"
                                class="required"
                                value="5"
                                onchange="getVals(this, 'question_1');"
                              />
                              <label class="radio very_good" for="very_good_1">5</label>
                            </div>
                          </li>
                          <li>
                            <div class="container_numbers">
                              <input
                                type="radio"
                                id="perfect_1"
                                name="answer"
                                class="required" 
                                value="6"
                                onchange="getVals(this, 'question_1');"
                              />
                              <label class="radio perfect" for="perfect_1">6</label>
                            </div>
                          </li>
                        </ul>
                        <div class="row justify-content-between add_bottom_25">
                          <div class="col-4">
                            <em>Sangat Rendah</em>
                          </div>
                          <div class="col-4 text-end">
                            <em>Sangat Tinggi</em>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="additional_message_label">Alasan</label>
                        <textarea
                          name="additional_message"
                          id="additional_message_label"
                          class="form-control"
                          style="height: 180px"
                          onkeyup="getVals(this, 'additional_message');"
                        ></textarea>
                      </div>
                    </div>
                    <!-- /step 1-->

                    <div class="step">
                      <h3 class="main_question">
                        <strong>2 of 15</strong>{{ $pertanyaan[1]->pertanyaan }}?
                      </h3>
                      <div class="review_block_numbers">
                        <ul class="clearfix">
                          <li>
                            <div class="container_numbers">
                              <input
                                type="radio"
                                id="very_bad_2"
                                name="answer"
                                class="required"
                                value="1"
                                onchange="getVals(this, 'question_2');"
                              />
                              <label class="radio very_bad" for="very_bad_2">1</label>
                            </div>
                          </li>
                          <li>
                            <div class="container_numbers">
                              <input
                                type="radio"
                                id="bad_2"
                                name="answer"
                                class="required"
                                value="2"
                                onchange="getVals(this, 'question_2');"
                              />
                              <label class="radio bad" for="bad_2">2</label>
                            </div>
                          </li>
                          <li>
                            <div class="container_numbers">
                              <input
                                type="radio"
                                id="average_2"
                                name="answer"
                                class="required"
                                value="3"
                                onchange="getVals(this, 'question_2');"
                              />
                              <label class="radio average" for="average_2">3</label>
                            </div>
                          </li>
                          <li>
                            <div class="container_numbers">
                              <input
                                type="radio"
                                id="good_2"
                                name="answer"
                                class="required"
                                value="4"
                                onchange="getVals(this, 'question_2');"
                              />
                              <label class="radio good" for="good_2">4</label>
                            </div>
                          </li>
                          <li>
                            <div class="container_numbers">
                              <input
                                type="radio"
                                id="very_good_2"
                                name="answer"
                                class="required"
                                value="5"
                                onchange="getVals(this, 'question_2');"
                              />
                              <label class="radio very_good" for="very_good_2">5</label>
                            </div>
                          </li>
                          <li>
                            <div class="container_numbers">
                              <input
                                type="radio"
                                id="perfect_2"
                                name="answer"
                                class="required"
                                value="6"
                                onchange="getVals(this, 'question_2');"
                              />
                              <label class="radio perfect" for="perfect_2">6</label>
                            </div>
                          </li>
                        </ul>
                        <div class="row justify-content-between add_bottom_25">
                          <div class="col-4">
                            <em>Sangat Rendah</em>
                          </div>
                          <div class="col-4 text-end">
                            <em>Sangat Tinggi</em>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="additional_message_label">Alasan</label>
                        <textarea
                          name="additional_message"
                          id="additional_message_label"
                          class="form-control"
                          style="height: 180px"
                          onkeyup="getVals(this, 'additional_message');"
                        ></textarea>
                      </div>
                    </div>
                    <!-- /step 2-->

                    <div class="step">
                      <h3 class="main_question">
                        <strong>3 of 15</strong>{{ $pertanyaan[2]->pertanyaan }}?
                      </h3>
                      <div class="review_block_numbers">
                        <ul class="clearfix">
                          <li>
                            <div class="container_numbers">
                              <input
                                type="radio"
                                id="very_bad_3"
                                name="answer"
                                class="required"
                                value="Very bad<"
                                onchange="getVals(this, 'question_3');"
                              />
                              <label class="radio very_bad" for="very_bad_3">1</label>
                            </div>
                          </li>
                          <li>
                            <div class="container_numbers">
                              <input
                                type="radio"
                                id="bad_3"
                                name="answer"
                                class="required"
                                value="Bad"
                                onchange="getVals(this, 'question_3');"
                              />
                              <label class="radio bad" for="bad_3">2</label>
                            </div>
                          </li>
                          <li>
                            <div class="container_numbers">
                              <input
                                type="radio"
                                id="average_3"
                                name="answer"
                                class="required"
                                value="Average"
                                onchange="getVals(this, 'question_3');"
                              />
                              <label class="radio average" for="average_3">3</label>
                            </div>
                          </li>
                          <li>
                            <div class="container_numbers">
                              <input
                                type="radio"
                                id="good_3"
                                name="answer"
                                class="required"
                                value="Good"
                                onchange="getVals(this, 'question_3');"
                              />
                              <label class="radio good" for="good_3">4</label>
                            </div>
                          </li>
                          <li>
                            <div class="container_numbers">
                              <input
                                type="radio"
                                id="very_good_3"
                                name="answer"
                                class="required"
                                value="Very Good"
                                onchange="getVals(this, 'question_3');"
                              />
                              <label class="radio very_good" for="very_good_3">5</label>
                            </div>
                          </li>
                          <li>
                            <div class="container_numbers">
                              <input
                                type="radio"
                                id="perfect_3"
                                name="answer"
                                class="required"
                                value="Perfect"
                                onchange="getVals(this, 'question_3');"
                              />
                              <label class="radio perfect" for="perfect_3">6</label>
                            </div>
                          </li>
                        </ul>
                        <div class="row justify-content-between add_bottom_25">
                          <div class="col-4">
                            <em>Sangat Rendah</em>
                          </div>
                          <div class="col-4 text-end">
                            <em>Sangat Tinggi</em>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="additional_message_label">Alasan</label>
                        <textarea
                          name="additional_message"
                          id="additional_message_label"
                          class="form-control"
                          style="height: 180px"
                          onkeyup="getVals(this, 'additional_message');"
                        ></textarea>
                      </div>
                    </div>
                    <!-- /step 3-->

                    <div class="step">
                      <h3 class="main_question">
                        <strong>4 of 15</strong>{{ $pertanyaan[3]->pertanyaan }}
                        ?
                      </h3>
                      <div class="review_block_numbers">
                        <ul class="clearfix">
                          <li>
                            <div class="container_numbers">
                              <input
                                type="radio"
                                id="very_bad_4"
                                name="answer"
                                class="required"
                                value="Very bad<"
                                onchange="getVals(this, 'question_4');"
                              />
                              <label class="radio very_bad" for="very_bad_4">1</label>
                            </div>
                          </li>
                          <li>
                            <div class="container_numbers">
                              <input
                                type="radio"
                                id="bad_4"
                                name="answer"
                                class="required"
                                value="Bad"
                                onchange="getVals(this, 'question_4');"
                              />
                              <label class="radio bad" for="bad_4">2</label>
                            </div>
                          </li>
                          <li>
                            <div class="container_numbers">
                              <input
                                type="radio"
                                id="average_4"
                                name="answer"
                                class="required"
                                value="Average"
                                onchange="getVals(this, 'question_4');"
                              />
                              <label class="radio average" for="average_4">3</label>
                            </div>
                          </li>
                          <li>
                            <div class="container_numbers">
                              <input
                                type="radio"
                                id="good_4"
                                name="answer"
                                class="required"
                                value="Good"
                                onchange="getVals(this, 'question_4');"
                              />
                              <label class="radio good" for="good_4">4</label>
                            </div>
                          </li>
                          <li>
                            <div class="container_numbers">
                              <input
                                type="radio"
                                id="very_good_4"
                                name="answer"
                                class="required"
                                value="Very Good"
                                onchange="getVals(this, 'question_4');"
                              />
                              <label class="radio very_good" for="very_good_4">5</label>
                            </div>
                          </li>
                          <li>
                            <div class="container_numbers">
                              <input
                                type="radio"
                                id="perfect_4"
                                name="answer"
                                class="required"
                                value="Perfect"
                                onchange="getVals(this, 'question_4');"
                              />
                              <label class="radio perfect" for="perfect_4">6</label>
                            </div>
                          </li>
                        </ul>
                        <div class="row justify-content-between add_bottom_25">
                          <div class="col-4">
                            <em>Sangat Rendah</em>
                          </div>
                          <div class="col-4 text-end">
                            <em>Sangat Tinggi</em>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="additional_message_label">Alasan</label>
                        <textarea
                          name="additional_message"
                          id="additional_message_label"
                          class="form-control"
                          style="height: 180px"
                          onkeyup="getVals(this, 'additional_message');"
                        ></textarea>
                      </div>
                    </div>
                    <!-- /step 4-->

                    <div class="step">
                      <h3 class="main_question">
                        <strong>5 of 15</strong>{{ $pertanyaan[4]->pertanyaan }}
                      </h3>
                      <div class="review_block_numbers">
                        <ul class="clearfix">
                          <li>
                            <div class="container_numbers">
                              <input
                                type="radio"
                                id="very_bad_5"
                                name="answer"
                                class="required"
                                value="Very bad<"
                                onchange="getVals(this, 'question_5');"
                              />
                              <label class="radio very_bad" for="very_bad_5">1</label>
                            </div>
                          </li>
                          <li>
                            <div class="container_numbers">
                              <input
                                type="radio"
                                id="bad_5"
                                name="answer"
                                class="required"
                                value="Bad"
                                onchange="getVals(this, 'question_5');"
                              />
                              <label class="radio bad" for="bad_5">2</label>
                            </div>
                          </li>
                          <li>
                            <div class="container_numbers">
                              <input
                                type="radio"
                                id="average_5"
                                name="answer"
                                class="required"
                                value="Average"
                                onchange="getVals(this, 'question_5');"
                              />
                              <label class="radio average" for="average_5">3</label>
                            </div>
                          </li>
                          <li>
                            <div class="container_numbers">
                              <input
                                type="radio"
                                id="good_5"
                                name="answer"
                                class="required"
                                value="Good"
                                onchange="getVals(this, 'question_5');"
                              />
                              <label class="radio good" for="good_5">4</label>
                            </div>
                          </li>
                          <li>
                            <div class="container_numbers">
                              <input
                                type="radio"
                                id="very_good_5"
                                name="answer"
                                class="required"
                                value="Very Good"
                                onchange="getVals(this, 'question_5');"
                              />
                              <label class="radio very_good" for="very_good_5">5</label>
                            </div>
                          </li>
                          <li>
                            <div class="container_numbers">
                              <input
                                type="radio"
                                id="perfect_5"
                                name="answer"
                                class="required"
                                value="Perfect"
                                onchange="getVals(this, 'question_5');"
                              />
                              <label class="radio perfect" for="perfect_5">6</label>
                            </div>
                          </li>
                        </ul>
                        <div class="row justify-content-between add_bottom_25">
                          <div class="col-4">
                            <em>Sangat Rendah</em>
                          </div>
                          <div class="col-4 text-end">
                            <em>Sangat Tinggi</em>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="additional_message_label">Alasan</label>
                        <textarea
                          name="additional_message"
                          id="additional_message_label"
                          class="form-control"
                          style="height: 180px"
                          onkeyup="getVals(this, 'additional_message');"
                        ></textarea>
                      </div>
                    </div>
                    <!-- /step 5-->

                    <div class="step">
                      <h3 class="main_question">
                        <strong>6 of 15</strong>{{ $pertanyaan[5]->pertanyaan }}
                      </h3>
                      <div class="review_block_numbers">
                        <ul class="clearfix">
                          <li>
                            <div class="container_numbers">
                              <input
                                type="radio"
                                id="very_bad_6"
                                name="answer"
                                class="required"
                                value="Very bad<"
                                onchange="getVals(this, 'question_6');"
                              />
                              <label class="radio very_bad" for="very_bad_6">1</label>
                            </div>
                          </li>
                          <li>
                            <div class="container_numbers">
                              <input
                                type="radio"
                                id="bad_6"
                                name="answer"
                                class="required"
                                value="Bad"
                                onchange="getVals(this, 'question_6');"
                              />
                              <label class="radio bad" for="bad_6">2</label>
                            </div>
                          </li>
                          <li>
                            <div class="container_numbers">
                              <input
                                type="radio"
                                id="average_6"
                                name="answer"
                                class="required"
                                value="Average"
                                onchange="getVals(this, 'question_6');"
                              />
                              <label class="radio average" for="average_6">3</label>
                            </div>
                          </li>
                          <li>
                            <div class="container_numbers">
                              <input
                                type="radio"
                                id="good_6"
                                name="answer"
                                class="required"
                                value="Good"
                                onchange="getVals(this, 'question_6');"
                              />
                              <label class="radio good" for="good_6">4</label>
                            </div>
                          </li>
                          <li>
                            <div class="container_numbers">
                              <input
                                type="radio"
                                id="very_good_6"
                                name="answer"
                                class="required"
                                value="Very Good"
                                onchange="getVals(this, 'question_6');"
                              />
                              <label class="radio very_good" for="very_good_6">5</label>
                            </div>
                          </li>
                          <li>
                            <div class="container_numbers">
                              <input
                                type="radio"
                                id="perfect_6"
                                name="answer"
                                class="required"
                                value="Perfect"
                                onchange="getVals(this, 'question_6');"
                              />
                              <label class="radio perfect" for="perfect_6">6</label>
                            </div>
                          </li>
                        </ul>
                        <div class="row justify-content-between add_bottom_25">
                          <div class="col-4">
                            <em>Sangat Rendah</em>
                          </div>
                          <div class="col-4 text-end">
                            <em>Sangat Tinggi</em>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="additional_message_label">Alasan</label>
                        <textarea
                          name="additional_message"
                          id="additional_message_label"
                          class="form-control"
                          style="height: 180px"
                          onkeyup="getVals(this, 'additional_message');"
                        ></textarea>
                      </div>
                    </div>
                    <!-- /step 6-->

                    <div class="step">
                      <h3 class="main_question">
                        <strong>7 of 15</strong>{{ $pertanyaan[6]->pertanyaan }}
                      </h3>
                      <div class="review_block_numbers">
                        <ul class="clearfix">
                          <li>
                            <div class="container_numbers">
                              <input
                                type="radio"
                                id="very_bad_7"
                                name="answer"
                                class="required"
                                value="Very bad<"
                                onchange="getVals(this, 'question_7');"
                              />
                              <label class="radio very_bad" for="very_bad_7">1</label>
                            </div>
                          </li>
                          <li>
                            <div class="container_numbers">
                              <input
                                type="radio"
                                id="bad_7"
                                name="answer"
                                class="required"
                                value="Bad"
                                onchange="getVals(this, 'question_7');"
                              />
                              <label class="radio bad" for="bad_7">2</label>
                            </div>
                          </li>
                          <li>
                            <div class="container_numbers">
                              <input
                                type="radio"
                                id="average_7"
                                name="answer"
                                class="required"
                                value="Average"
                                onchange="getVals(this, 'question_7');"
                              />
                              <label class="radio average" for="average_7">3</label>
                            </div>
                          </li>
                          <li>
                            <div class="container_numbers">
                              <input
                                type="radio"
                                id="good_7"
                                name="answer"
                                class="required"
                                value="Good"
                                onchange="getVals(this, 'question_7');"
                              />
                              <label class="radio good" for="good_7">4</label>
                            </div>
                          </li>
                          <li>
                            <div class="container_numbers">
                              <input
                                type="radio"
                                id="very_good_7"
                                name="answer"
                                class="required"
                                value="Very Good"
                                onchange="getVals(this, 'question_7');"
                              />
                              <label class="radio very_good" for="very_good_7">5</label>
                            </div>
                          </li>
                          <li>
                            <div class="container_numbers">
                              <input
                                type="radio"
                                id="perfect_7"
                                name="answer"
                                class="required"
                                value="Perfect"
                                onchange="getVals(this, 'question_7');"
                              />
                              <label class="radio perfect" for="perfect_7">6</label>
                            </div>
                          </li>
                        </ul>
                        <div class="row justify-content-between add_bottom_25">
                          <div class="col-4">
                            <em>Sangat Rendah</em>
                          </div>
                          <div class="col-4 text-end">
                            <em>Sangat Tinggi</em>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="additional_message_label">Alasan</label>
                        <textarea
                          name="additional_message"
                          id="additional_message_label"
                          class="form-control"
                          style="height: 180px"
                          onkeyup="getVals(this, 'additional_message');"
                        ></textarea>
                      </div>
                    </div>
                    <!-- /step 7-->

                    <div class="step">
                      <h3 class="main_question">
                        <strong>8 of 15</strong>{{ $pertanyaan[8]->pertanyaan }}
                      </h3>
                      <div class="review_block_numbers">
                        <ul class="clearfix">
                          <li>
                            <div class="container_numbers">
                              <input
                                type="radio"
                                id="very_bad_8"
                                name="answer"
                                class="required"
                                value="Very bad<"
                                onchange="getVals(this, 'question_8');"
                              />
                              <label class="radio very_bad" for="very_bad_8">1</label>
                            </div>
                          </li>
                          <li>
                            <div class="container_numbers">
                              <input
                                type="radio"
                                id="bad_8"
                                name="answer"
                                class="required"
                                value="Bad"
                                onchange="getVals(this, 'question_8');"
                              />
                              <label class="radio bad" for="bad_8">2</label>
                            </div>
                          </li>
                          <li>
                            <div class="container_numbers">
                              <input
                                type="radio"
                                id="average_8"
                                name="answer"
                                class="required"
                                value="Average"
                                onchange="getVals(this, 'question_8');"
                              />
                              <label class="radio average" for="average_8">3</label>
                            </div>
                          </li>
                          <li>
                            <div class="container_numbers">
                              <input
                                type="radio"
                                id="good_8"
                                name="answer"
                                class="required"
                                value="Good"
                                onchange="getVals(this, 'question_8');"
                              />
                              <label class="radio good" for="good_8">4</label>
                            </div>
                          </li>
                          <li>
                            <div class="container_numbers">
                              <input
                                type="radio"
                                id="very_good_8"
                                name="answer"
                                class="required"
                                value="Very Good"
                                onchange="getVals(this, 'question_8');"
                              />
                              <label class="radio very_good" for="very_good_8">5</label>
                            </div>
                          </li>
                          <li>
                            <div class="container_numbers">
                              <input
                                type="radio"
                                id="perfect_8"
                                name="answer"
                                class="required"
                                value="Perfect"
                                onchange="getVals(this, 'question_8');"
                              />
                              <label class="radio perfect" for="perfect_8">6</label>
                            </div>
                          </li>
                        </ul>
                        <div class="row justify-content-between add_bottom_25">
                          <div class="col-4">
                            <em>Sangat Rendah</em>
                          </div>
                          <div class="col-4 text-end">
                            <em>Sangat Tinggi</em>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="additional_message_label">Alasan</label>
                        <textarea
                          name="additional_message"
                          id="additional_message_label"
                          class="form-control"
                          style="height: 180px"
                          onkeyup="getVals(this, 'additional_message');"
                        ></textarea>
                      </div>
                    </div>
                    <!-- /step 8-->

                    <div class="step">
                      <h3 class="main_question">
                        <strong>9 of 15</strong>{{ $pertanyaan[8]->pertanyaan }}
                      </h3>
                      <div class="review_block_numbers">
                        <ul class="clearfix">
                          <li>
                            <div class="container_numbers">
                              <input
                                type="radio"
                                id="very_bad_9"
                                name="answer"
                                class="required"
                                value="Very bad<"
                                onchange="getVals(this, 'question_9');"
                              />
                              <label class="radio very_bad" for="very_bad_9">1</label>
                            </div>
                          </li>
                          <li>
                            <div class="container_numbers">
                              <input
                                type="radio"
                                id="bad_9"
                                name="answer"
                                class="required"
                                value="Bad"
                                onchange="getVals(this, 'question_9');"
                              />
                              <label class="radio bad" for="bad_9">2</label>
                            </div>
                          </li>
                          <li>
                            <div class="container_numbers">
                              <input
                                type="radio"
                                id="average_9"
                                name="answer"
                                class="required"
                                value="Average"
                                onchange="getVals(this, 'question_9');"
                              />
                              <label class="radio average" for="average_9">3</label>
                            </div>
                          </li>
                          <li>
                            <div class="container_numbers">
                              <input
                                type="radio"
                                id="good_9"
                                name="answer"
                                class="required"
                                value="Good"
                                onchange="getVals(this, 'question_9');"
                              />
                              <label class="radio good" for="good_9">4</label>
                            </div>
                          </li>
                          <li>
                            <div class="container_numbers">
                              <input
                                type="radio"
                                id="very_good_9"
                                name="answer"
                                class="required"
                                value="Very Good"
                                onchange="getVals(this, 'question_9');"
                              />
                              <label class="radio very_good" for="very_good_9">5</label>
                            </div>
                          </li>
                          <li>
                            <div class="container_numbers">
                              <input
                                type="radio"
                                id="perfect_9"
                                name="answer"
                                class="required"
                                value="Perfect"
                                onchange="getVals(this, 'question_9');"
                              />
                              <label class="radio perfect" for="perfect_9">6</label>
                            </div>
                          </li>
                        </ul>
                        <div class="row justify-content-between add_bottom_25">
                          <div class="col-4">
                            <em>Sangat Rendah</em>
                          </div>
                          <div class="col-4 text-end">
                            <em>Sangat Tinggi</em>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="additional_message_label">Alasan</label>
                        <textarea
                          name="additional_message"
                          id="additional_message_label"
                          class="form-control"
                          style="height: 180px"
                          onkeyup="getVals(this, 'additional_message');"
                        ></textarea>
                      </div>
                    </div>
                    <!-- /step 9-->

                    <div class="step">
                      <h3 class="main_question">
                        <strong>10 of 15</strong>{{ $pertanyaan[9]->pertanyaan }}
                      </h3>
                      <div class="review_block_numbers">
                        <ul class="clearfix">
                          <li>
                            <div class="container_numbers">
                              <input
                                type="radio"
                                id="very_bad_10"
                                name="answer"
                                class="required"
                                value="Very bad<"
                                onchange="getVals(this, 'question_10');"
                              />
                              <label class="radio very_bad" for="very_bad_10">1</label>
                            </div>
                          </li>
                          <li>
                            <div class="container_numbers">
                              <input
                                type="radio"
                                id="bad_10"
                                name="answer"
                                class="required"
                                value="Bad"
                                onchange="getVals(this, 'question_10');"
                              />
                              <label class="radio bad" for="bad_10">2</label>
                            </div>
                          </li>
                          <li>
                            <div class="container_numbers">
                              <input
                                type="radio"
                                id="average_10"
                                name="answer"
                                class="required"
                                value="Average"
                                onchange="getVals(this, 'question_10');"
                              />
                              <label class="radio average" for="average_10">3</label>
                            </div>
                          </li>
                          <li>
                            <div class="container_numbers">
                              <input
                                type="radio"
                                id="good_10"
                                name="answer"
                                class="required"
                                value="Good"
                                onchange="getVals(this, 'question_10');"
                              />
                              <label class="radio good" for="good_10">4</label>
                            </div>
                          </li>
                          <li>
                            <div class="container_numbers">
                              <input
                                type="radio"
                                id="very_good_10"
                                name="answer"
                                class="required"
                                value="Very Good"
                                onchange="getVals(this, 'question_10');"
                              />
                              <label class="radio very_good" for="very_good_10">5</label>
                            </div>
                          </li>
                          <li>
                            <div class="container_numbers">
                              <input
                                type="radio"
                                id="perfect_10"
                                name="answer"
                                class="required"
                                value="Perfect"
                                onchange="getVals(this, 'question_10');"
                              />
                              <label class="radio perfect" for="perfect_10">6</label>
                            </div>
                          </li>
                        </ul>
                        <div class="row justify-content-between add_bottom_25">
                          <div class="col-4">
                            <em>Sangat Rendah</em>
                          </div>
                          <div class="col-4 text-end">
                            <em>Sangat Tinggi</em>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="additional_message_label">Alasan</label>
                        <textarea
                          name="additional_message"
                          id="additional_message_label"
                          class="form-control"
                          style="height: 180px"
                          onkeyup="getVals(this, 'additional_message');"
                        ></textarea>
                      </div>
                    </div>
                    <!-- /step 10-->

                    <div class="step">
                      <h3 class="main_question">
                        <strong>11 of 15</strong>{{ $pertanyaan[10]->pertanyaan }}
                      </h3>
                      <div class="review_block_numbers">
                        <ul class="clearfix">
                          <li>
                            <div class="container_numbers">
                              <input
                                type="radio"
                                id="very_bad_11"
                                name="answer"
                                class="required"
                                value="Very bad<"
                                onchange="getVals(this, 'question_11');"
                              />
                              <label class="radio very_bad" for="very_bad_11">1</label>
                            </div>
                          </li>
                          <li>
                            <div class="container_numbers">
                              <input
                                type="radio"
                                id="bad_11"
                                name="answer"
                                class="required"
                                value="Bad"
                                onchange="getVals(this, 'question_11');"
                              />
                              <label class="radio bad" for="bad_11">2</label>
                            </div>
                          </li>
                          <li>
                            <div class="container_numbers">
                              <input
                                type="radio"
                                id="average_11"
                                name="answer"
                                class="required"
                                value="Average"
                                onchange="getVals(this, 'question_11');"
                              />
                              <label class="radio average" for="average_11">3</label>
                            </div>
                          </li>
                          <li>
                            <div class="container_numbers">
                              <input
                                type="radio"
                                id="good_11"
                                name="answer"
                                class="required"
                                value="Good"
                                onchange="getVals(this, 'question_11');"
                              />
                              <label class="radio good" for="good_11">4</label>
                            </div>
                          </li>
                          <li>
                            <div class="container_numbers">
                              <input
                                type="radio"
                                id="very_good_11"
                                name="answer"
                                class="required"
                                value="Very Good"
                                onchange="getVals(this, 'question_11');"
                              />
                              <label class="radio very_good" for="very_good_11">5</label>
                            </div>
                          </li>
                          <li>
                            <div class="container_numbers">
                              <input
                                type="radio"
                                id="perfect_11"
                                name="answer"
                                class="required"
                                value="Perfect"
                                onchange="getVals(this, 'question_11');"
                              />
                              <label class="radio perfect" for="perfect_11">6</label>
                            </div>
                          </li>
                        </ul>
                        <div class="row justify-content-between add_bottom_25">
                          <div class="col-4">
                            <em>Sangat Rendah</em>
                          </div>
                          <div class="col-4 text-end">
                            <em>Sangat Baik</em>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="additional_message_label">Alasan</label>
                        <textarea
                          name="additional_message"
                          id="additional_message_label"
                          class="form-control"
                          style="height: 180px"
                          onkeyup="getVals(this, 'additional_message');"
                        ></textarea>
                      </div>
                    </div>
                    <!-- /step 11-->

                    <div class="step">
                      <h3 class="main_question">
                        <strong>12 of 15</strong>{{ $pertanyaan[11]->pertanyaan }}
                      </h3>
                      <div class="review_block_numbers">
                        <ul class="clearfix">
                          <li>
                            <div class="container_numbers">
                              <input
                                type="radio"
                                id="very_bad_12"
                                name="answer"
                                class="required"
                                value="Very bad<"
                                onchange="getVals(this, 'question_12');"
                              />
                              <label class="radio very_bad" for="very_bad_12">1</label>
                            </div>
                          </li>
                          <li>
                            <div class="container_numbers">
                              <input
                                type="radio"
                                id="bad_12"
                                name="answer"
                                class="required"
                                value="Bad"
                                onchange="getVals(this, 'question_12');"
                              />
                              <label class="radio bad" for="bad_12">2</label>
                            </div>
                          </li>
                          <li>
                            <div class="container_numbers">
                              <input
                                type="radio"
                                id="average_12"
                                name="answer"
                                class="required"
                                value="Average"
                                onchange="getVals(this, 'question_12');"
                              />
                              <label class="radio average" for="average_12">3</label>
                            </div>
                          </li>
                          <li>
                            <div class="container_numbers">
                              <input
                                type="radio"
                                id="good_12"
                                name="answer"
                                class="required"
                                value="Good"
                                onchange="getVals(this, 'question_12');"
                              />
                              <label class="radio good" for="good_12">4</label>
                            </div>
                          </li>
                          <li>
                            <div class="container_numbers">
                              <input
                                type="radio"
                                id="very_good_12"
                                name="answer"
                                class="required"
                                value="Very Good"
                                onchange="getVals(this, 'question_12');"
                              />
                              <label class="radio very_good" for="very_good_12">5</label>
                            </div>
                          </li>
                          <li>
                            <div class="container_numbers">
                              <input
                                type="radio"
                                id="perfect_12"
                                name="answer"
                                class="required"
                                value="Perfect"
                                onchange="getVals(this, 'question_12');"
                              />
                              <label class="radio perfect" for="perfect_12">6</label>
                            </div>
                          </li>
                        </ul>
                        <div class="row justify-content-between add_bottom_25">
                          <div class="col-4">
                            <em>Sangat Rendah</em>
                          </div>
                          <div class="col-4 text-end">
                            <em>Sangat Tinggi</em>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="additional_message_label">Alasan</label>
                        <textarea
                          name="additional_message"
                          id="additional_message_label"
                          class="form-control"
                          style="height: 180px"
                          onkeyup="getVals(this, 'additional_message');"
                        ></textarea>
                      </div>
                    </div>
                    <!-- /step 12-->

                    <div class="step">
                      <h3 class="main_question">
                        <strong>13 of 15</strong>{{ $pertanyaan[12]->pertanyaan }}
                      </h3>
                      <div class="review_block_numbers">
                        <ul class="clearfix">
                          <li>
                            <div class="container_numbers">
                              <input
                                type="radio"
                                id="very_bad_13"
                                name="answer"
                                class="required"
                                value="Very bad<"
                                onchange="getVals(this, 'question_13');"
                              />
                              <label class="radio very_bad" for="very_bad_13">1</label>
                            </div>
                          </li>
                          <li>
                            <div class="container_numbers">
                              <input
                                type="radio"
                                id="bad_13"
                                name="answer"
                                class="required"
                                value="Bad"
                                onchange="getVals(this, 'question_13');"
                              />
                              <label class="radio bad" for="bad_13">2</label>
                            </div>
                          </li>
                          <li>
                            <div class="container_numbers">
                              <input
                                type="radio"
                                id="average_13"
                                name="answer"
                                class="required"
                                value="Average"
                                onchange="getVals(this, 'question_13');"
                              />
                              <label class="radio average" for="average_13">3</label>
                            </div>
                          </li>
                          <li>
                            <div class="container_numbers">
                              <input
                                type="radio"
                                id="good_13"
                                name="answer"
                                class="required"
                                value="Good"
                                onchange="getVals(this, 'question_13');"
                              />
                              <label class="radio good" for="good_13">4</label>
                            </div>
                          </li>
                          <li>
                            <div class="container_numbers">
                              <input
                                type="radio"
                                id="very_good_13"
                                name="answer"
                                class="required"
                                value="Very Good"
                                onchange="getVals(this, 'question_13');"
                              />
                              <label class="radio very_good" for="very_good_13">5</label>
                            </div>
                          </li>
                          <li>
                            <div class="container_numbers">
                              <input
                                type="radio"
                                id="perfect_13"
                                name="answer"
                                class="required"
                                value="Perfect"
                                onchange="getVals(this, 'question_13');"
                              />
                              <label class="radio perfect" for="perfect_13">6</label>
                            </div>
                          </li>
                        </ul>
                        <div class="row justify-content-between add_bottom_25">
                          <div class="col-4">
                            <em>Sangat Rendah</em>
                          </div>
                          <div class="col-4 text-end">
                            <em>Sangat Tinggi</em>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="additional_message_label">Alasan</label>
                        <textarea
                          name="additional_message"
                          id="additional_message_label"
                          class="form-control"
                          style="height: 180px"
                          onkeyup="getVals(this, 'additional_message');"
                        ></textarea>
                      </div>
                    </div>
                    <!-- /step 13-->

                    <div class="step">
                      <h3 class="main_question">
                        <strong>14 of 15</strong>{{ $pertanyaan[13]->pertanyaan }}
                      </h3>
                      <div class="review_block_numbers">
                        <ul class="clearfix">
                          <li>
                            <div class="container_numbers">
                              <input
                                type="radio"
                                id="very_bad_14"
                                name="answer"
                                class="required"
                                value="Very bad<"
                                onchange="getVals(this, 'question_14');"
                              />
                              <label class="radio very_bad" for="very_bad_14">1</label>
                            </div>
                          </li>
                          <li>
                            <div class="container_numbers">
                              <input
                                type="radio"
                                id="bad_14"
                                name="answer"
                                class="required"
                                value="Bad"
                                onchange="getVals(this, 'question_14');"
                              />
                              <label class="radio bad" for="bad_14">2</label>
                            </div>
                          </li>
                          <li>
                            <div class="container_numbers">
                              <input
                                type="radio"
                                id="average_14"
                                name="answer"
                                class="required"
                                value="Average"
                                onchange="getVals(this, 'question_14');"
                              />
                              <label class="radio average" for="average_14">3</label>
                            </div>
                          </li>
                          <li>
                            <div class="container_numbers">
                              <input
                                type="radio"
                                id="good_14"
                                name="answer"
                                class="required"
                                value="Good"
                                onchange="getVals(this, 'question_14');"
                              />
                              <label class="radio good" for="good_14">4</label>
                            </div>
                          </li>
                          <li>
                            <div class="container_numbers">
                              <input
                                type="radio"
                                id="very_good_14"
                                name="answer"
                                class="required"
                                value="Very Good"
                                onchange="getVals(this, 'question_14');"
                              />
                              <label class="radio very_good" for="very_good_14">5</label>
                            </div>
                          </li>
                          <li>
                            <div class="container_numbers">
                              <input
                                type="radio"
                                id="perfect_14"
                                name="answer"
                                class="required"
                                value="Perfect"
                                onchange="getVals(this, 'question_14');"
                              />
                              <label class="radio perfect" for="perfect_14">6</label>
                            </div>
                          </li>
                        </ul>
                        <div class="row justify-content-between add_bottom_25">
                          <div class="col-4">
                            <em>Sangat Rendah</em>
                          </div>
                          <div class="col-4 text-end">
                            <em>Sangat Tinggi</em>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="additional_message_label">Alasan</label>
                        <textarea
                          name="additional_message"
                          id="additional_message_label"
                          class="form-control"
                          style="height: 180px"
                          onkeyup="getVals(this, 'additional_message');"
                        ></textarea>
                      </div>
                    </div>
                    <!-- /step 14-->

                    <div class="step">
                      <h3 class="main_question">
                        <strong>15 of 15</strong>{{ $pertanyaan[14]->pertanyaan }}
                      </h3>
                      <div class="review_block_numbers">
                        <ul class="clearfix">
                          <li>
                            <div class="container_numbers">
                              <input
                                type="radio"
                                id="very_bad_15"
                                name="answer"
                                class="required"
                                value="Very bad<"
                                onchange="getVals(this, 'question_15');"
                              />
                              <label class="radio very_bad" for="very_bad_15">1</label>
                            </div>
                          </li>
                          <li>
                            <div class="container_numbers">
                              <input
                                type="radio"
                                id="bad_15"
                                name="answer"
                                class="required"
                                value="Bad"
                                onchange="getVals(this, 'question_15');"
                              />
                              <label class="radio bad" for="bad_15">2</label>
                            </div>
                          </li>
                          <li>
                            <div class="container_numbers">
                              <input
                                type="radio"
                                id="average_15"
                                name="answer"
                                class="required"
                                value="Average"
                                onchange="getVals(this, 'question_15');"
                              />
                              <label class="radio average" for="average_15">3</label>
                            </div>
                          </li>
                          <li>
                            <div class="container_numbers">
                              <input
                                type="radio"
                                id="good_15"
                                name="answer"
                                class="required"
                                value="Good"
                                onchange="getVals(this, 'question_15');"
                              />
                              <label class="radio good" for="good_15">4</label>
                            </div>
                          </li>
                          <li>
                            <div class="container_numbers">
                              <input
                                type="radio"
                                id="very_good_15"
                                name="answer"
                                class="required"
                                value="Very Good"
                                onchange="getVals(this, 'question_15');"
                              />
                              <label class="radio very_good" for="very_good_15">5</label>
                            </div>
                          </li>
                          <li>
                            <div class="container_numbers">
                              <input
                                type="radio"
                                id="perfect_15"
                                name="answer"
                                class="required"
                                value="Perfect"
                                onchange="getVals(this, 'question_15');"
                              />
                              <label class="radio perfect" for="perfect_15">6</label>
                            </div>
                          </li>
                        </ul>
                        <div class="row justify-content-between add_bottom_25">
                          <div class="col-4">
                            <em>Sangat Rendah</em>
                          </div>
                          <div class="col-4 text-end">
                            <em>Sangat Tinggi</em>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="additional_message_label">Alasan</label>
                        <textarea
                          name="additional_message"
                          id="additional_message_label"
                          class="form-control"
                          style="height: 180px"
                          onkeyup="getVals(this, 'additional_message');"
                        ></textarea>
                      </div>
                    </div>
                    <!-- /step 5-->
                  </div>
                  <!-- /middle-wizard -->

                  <div id="bottom-wizard">
                    <button type="button" name="backward" class="backward" id="previousClick">Kembalinya</button>
                    <button type="submit" name="forward" class="forward" id="nextClick">Selanjutnya dih</button>
                    <button type="submit" name="process" class="submit">Masukan</button>
                  </div>
                  <!-- /bottom-wizard -->
              </div>
              <!-- /Wizard container -->
            </div>
            <!-- /col -->
          </div>
        </div>
        <!-- /row -->
      </div>
      <!-- /container_centering -->
      <footer>
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-3">©2022 Teknik Informatika UIN SDG Bandung</div>
            <div class="col-md-9">
              <!-- <ul class="clearfix">
                <li><a href="#0" class="animated_link">Purchase this template</a></li>
                <li><a href="index.html" class="animated_link">Demo 1</a></li>
                <li><a href="index-2.html" class="animated_link">Demo 2</a></li>
                <li><a href="index-3.html" class="animated_link">Demo 3</a></li>
              </ul> -->
            </div>
          </div>
          <!-- /row -->
        </div>
        <!-- /container-fluid -->
      </footer>
      <!-- /footer -->
    </div>
    <!-- /wrapper_centering -->

    <!-- Modal terms -->
    <div class="modal fade" id="terms-txt" tabindex="-1" role="dialog" aria-labelledby="termsLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="termsLabel">Terms and conditions</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>
              Lorem ipsum dolor sit amet, in porro albucius qui, in <strong>nec quod novum accumsan</strong>, mei ludus
              tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt
              sensibus.
            </p>
            <p>
              Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores
              id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus. Lorem
              ipsum dolor sit amet, <strong>in porro albucius qui</strong>, in nec quod novum accumsan, mei ludus
              tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt
              sensibus.
            </p>
            <p>
              Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores
              id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.
            </p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn_1" data-dismiss="modal">Close</button>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <!-- COMMON SCRIPTS -->
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/common_scripts.min.js"></script>
    <script src="js/functions.js"></script>

    <!-- Wizard script -->
    <script src="js/survey_func.js"></script>
  </body>
</html>