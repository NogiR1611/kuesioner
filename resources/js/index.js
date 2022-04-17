import React from 'react';
import ReactDOM from 'react-dom';
import axios from 'axios';
import { validateEmail } from './helpers';
import toast, { Toaster } from 'react-hot-toast';

export default function Index() {
    const [displayForm, setDisplayForm] = React.useState(true);
    const [displayButton, setDisplayButton] = React.useState(false);
    const [displaySubmitButton, setDisplaySubmitButton] = React.useState(true);
    const [stepPage, setStepPage] = React.useState(0);
    const [agreement, setAgreement] = React.useState(false);
    const [questions, setQuestions] = React.useState(null);
    const [user, setUser] = React.useState(null);
    const [isLoading, setIsLoading] = React.useState(true);
    
    //form 
    const [fullName, setFullName] = React.useState('');
    const [nim, setNim] = React.useState('');
    const [email, setEmail] = React.useState('');
    const [gender, setGender] = React.useState('');

    //question
    const [stepQuestions, setStepQuestions] = React.useState(0);
    const [answer, setAnswer] = React.useState("");
    const [reason, setReason] = React.useState("");

    React.useEffect(() => {
      axios.get('/api/v1/questions')
      .then((res) => setQuestions(res.data.data))
      .catch(() => null)
    },[]);

    React.useEffect(() => {
      if(questions){
        setIsLoading(false);
      }
    },[questions]);

    const onSubmitIdentity = () => {
      let form = new FormData();

      form.append("nama", fullName);
      form.append("nim", nim);
      form.append("gender", gender);
      form.append("email", email);

      setIsLoading(true);
      axios.post('/api/v1/profile', form)
      .then(res => setUser(res.data.data))
      .catch(() => null)
      .finally(() => {
        setDisplayForm(!displayForm)
        setDisplaySubmitButton(!displaySubmitButton)
        setDisplayButton(!displayButton)
        setStepPage(stepPage + 1);
        setIsLoading(false);
      });
    }

    const onClickValidationForm = () => {
      if(!fullName) toast("Maaf Nama Anda Tidak Ada",{ style: { background: 'red', color: 'white', fontWeight: 'bolder' } });
      else if(!nim) toast("Maaf NIM Anda Tidak Ada",{ style: { background: 'red', color: 'white', fontWeight: 'bolder' } });
      else if(!email) toast("Maaf Email Anda Tidak Ada",{ style: { background: 'red', color: 'white', fontWeight: 'bolder' } });
      else if(!validateEmail(email)) toast("Maaf Email Anda Tidak Sesuai",{ style: { background: 'red', color: 'white', fontWeight: 'bolder' } });
      else if(!gender) toast("Maaf Jenis Kelamin Anda Tidak Ada",{ style: { background: 'red', color: 'white', fontWeight: 'bolder' } });
      else if(!agreement) toast("Maaf Anda Tidak Menyetujui Syarat Dan Ketentuan",{ style: { background: 'red', color: 'white', fontWeight: 'bolder' } });
      else onSubmitIdentity(); 
    }

    const onClickPrevStep = () => {
      setStepPage(stepPage - 1);
    }

    const onSubmitAnswer = () => {
      let form = new FormData();

      form.append("id_mhs", user.id);
      form.append("id_pertanyaan", stepQuestions + 1);
      form.append("nim", nim);
      form.append("jawaban", Number(answer));

      if(reason){
        form.append("alasan", reason);
      }

      setIsLoading(true);
      axios.post(`/api/v1/questions/answers`, form)
      .then(() => toast.success(`Pertanyaan ke-${stepQuestions + 1} Sudah Dikirim`,{ style: { fontWeight: 'bolder' } }))
      .catch(() => null)
      .finally(() => {
        setAnswer("");
        setReason("");
        setStepPage(stepPage + 1);
        setStepQuestions(stepQuestions === 14 ? 14 : stepQuestions + 1);
        setIsLoading(false);
      })
    } 

    React.useEffect(() => {
      if(stepQuestions > 14){
        setStepQuestions(14);
      }
    },[stepQuestions]);

    console.log(stepQuestions);

    React.useEffect(() => {
      if(stepPage === 17){
        setDisplaySubmitButton(false)
        setDisplayButton(false);
      }
    },[stepPage]);

    const onClickValidation = () => {
      if(!answer) toast("Maaf Jawaban Belum Anda Masukan",{ style: { background: 'red', color: 'white', fontWeight: 'bolder' } });
      else onSubmitAnswer();
    }

    const onClickNextStep = () => {
      if(stepPage > 1){
        onClickValidation();
      }
      else{
        setStepPage(stepPage + 1);
      }
    }

    return (
    <>
      {isLoading ? (
        <>
          <div id="preloader">
            <div data-loader="circle-side"></div>
          </div>

          <div id="loader_form">
            <div data-loader="circle-side-2"></div>
          </div>
        </>
      ): null}
      <header>
        <div className="container-fluid">
          <div className="row">
            <div className="col-5">
              <div
                className="card"
                style={{ width: 50, alignItems: "center", padding: 10 }}
              >
                <a href="index.html">
                  <img src="img/uintext.png" alt width={30} />
                </a>
              </div>
            </div>
            <div className="col-7">
              <div id="social">
                <ul>
                  <li>
                    <a href="#0">
                      <i className="social_facebook" />
                    </a>
                  </li>
                  <li>
                    <a href="#0">
                      <i className="social_twitter" />
                    </a>
                  </li>
                  <li>
                    <a href="#0">
                      <i className="social_instagram" />
                    </a>
                  </li>
                  <li>
                    <a href="#0">
                      <i className="social_linkedin" />
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          {/* /row */}
        </div>
        {/* /container */}
      </header>
      {/* /header */}
      <div className="wrapper_centering">
        <div className="container_centering">
          <div className="container">
            <div className="row justify-content-between">
              <div className="col-xl-6 col-lg-6 d-flex align-items-center">
                <div className="main_title_1">
                  <h3>
                    <img src="img/main_icon_1.svg" width={80} height={80} alt />{" "}
                    Survey
                  </h3>
                  <p>
                    Kepuasan Mahasiswa Teknik Informatika Universitas Islam Negeri
                    Sunan Gunung Djati Bandung aw.
                  </p>
                  <p>
                    <em />
                  </p>
                </div>
              </div>
              {/* /col */}
              <div className="col-xl-5 col-lg-5">
                <div id="wizard_container">
                  <div id="top-wizard">
                    <div id="progressbar" />
                  </div>
                  {/* /top-wizard */}
                  <form id="wrapped" autoComplete="off">
                    <input id="website" name="website" type="text" defaultValue />
                    {/* Leave for security protection, read docs for details */}
                    <div id="middle-wizard">
                    {/* /part 1*/}
                    {stepPage === 0 ? (
                      <div className="submit step">
                        <h3 className="main_question">
                          <strong>Data Mahasiswa</strong>Silahkan isi identitas
                          Anda
                        </h3>
                        <div className="form-group">
                          <label htmlFor="fullname">Nama Lengkap</label>
                          <input
                            type="text"
                            name="fullname"
                            id="fullname"
                            value={fullName}
                            onChange={({ target : { value } }) => setFullName(value)}
                            className="form-control required"
                          />
                        </div>
                        <div className="form-group">
                          <label htmlFor="nim">NIM</label>
                          <input
                            type="text"
                            name="nim"
                            id="nim"
                            value={nim}
                            onChange={({ target : { value } }) => setNim(value)}
                            className="form-control required"
                          />
                        </div>
                        <div className="form-group">
                          <label htmlFor="email">Email</label>
                          <input
                            type="email"
                            name="email"
                            id="email"
                            value={email}
                            onChange={({ target : { value } }) => setEmail(value)}
                            className="form-control required"
                          />
                        </div>
                        <div className="row">
                          <div className="col-9">
                            <div className="form-group radio_input">
                              <label className="container_radio">
                                Laki-laki
                                <input
                                  type="radio"
                                  name={gender}
                                  value="Male"
                                  onChange={({ target : { value } }) => setGender(value)}
                                  className="required"
                                />
                                <span className="checkmark" />
                              </label>
                              <label className="container_radio">
                                Perempuan
                                <input
                                  type="radio"
                                  name={gender}
                                  value="Female"
                                  onChange={({ target : { value } }) => setGender(value)}
                                  className="required"
                                />
                                <span className="checkmark" />
                              </label>
                            </div>
                          </div>
                        </div>
                        {/* /row */}
                        <div className="form-group terms">
                          <label className="container_check">
                            Please accept our
                            {" "}
                            <a
                              href="#"
                              data-bs-toggle="modal"
                              data-bs-target="#terms-txt"
                              style={{
                                color: "#fff",
                                textDecoration: "underline",
                              }}
                            >
                              Syarat dan ketentuan
                            </a>
                            <input
                              type="checkbox"
                              name="terms"
                              checked={agreement}
                              onChange={() => setAgreement(!agreement)}
                              className="required"
                            />
                            <span className="checkmark" />
                          </label>
                        </div>
                      </div>
                      ) : null}
                      {/** part 2 */}
                      {stepPage === 1 ? (
                        <div className="step">
                          <div className="scrolling-box">
                            <p align="justify">
                              Kuesioner kepuasan mahasiswa terhadap pelayanan
                              akademik merupakan suatu kiat jurusan Teknik
                              Informatika untuk menjaring masukan, kritik, dan saran
                              dari mahasiswa yang tentunya hasil penjaringan
                              digunakan untuk perbaikan jurusan kedepannya.
                              Kuesioner ini dilakukan setiap akhir semester ganjil
                              dan genap.
                            </p>
                            <h3 className="main_question">
                              <strong />
                              Petunjuk Umum:
                            </h3>
                            <p align="justify">
                              a. Survey ini dilakukan dengan tujuan untuk mengukur
                              tingkat kepuasan mahasiswa jurusan Teknik Informatika
                              terhadap pelayanan dosen, staf administrasi dan juga
                              Jurusan.
                            </p>
                            <p align="justify">
                              b. Mahasiswa dimohon untuk mengisi seluruh instrumen
                              ini sesuai dengan pengalaman, pengetahuan, presepsi,
                              dan keadaan yang sebenarnya.
                            </p>
                            <p align="justify">
                              c. Partisipan saudara untuk mengisi instrumen ini
                              secara objektif sangat besar artinya bagi Jurusan
                              Teknik Informatika guna mendapatkan masukan yang
                              akurat dalam rangka perbaikan dan peningkatan
                              pelayanan akademik, serta administrasi untuk
                              kedepannya.
                            </p>
                            <p align="justify">
                              d. Jawaban saudara DIJAMIN kerahasiaan dan TIDAK
                              memiliki dampak negatif dalam bentuk apapun.
                            </p>
                            <p align="justify">
                              e. Instrumen ini terdiri dari seperangkat pertanyaan
                              atau pernyataan untuk mengukur:
                            </p>
                            <p align="justify">(1) Keandalan/Reliability</p>
                            <p align="justify">(2) Daya tanggap/Responsiveness</p>
                            <p align="justify">(3) Kepastian/Assurance</p>
                            <p align="justify">(4) Empati/Empathy</p>
                            <p align="justify">(5) Tangible</p>
                            <p align="justify">
                              e. Instrumen ini terdiri dari seperangkat pertanyaan
                              atau pernyataan untuk mengukur:
                            </p>
                            <p align="justify">
                              f. Pilihlah salah satu dari alternatif yang disediakan
                              dengan cara mengklik skala jawaban.
                            </p>
                            <p align="justify">Angka 1 : Sangat Rendah (SR)</p>
                            <p align="justify">Angka 2 : Rendah (R)</p>
                            <p align="justify">Angka 3 : Cenderung Rendah (CR)</p>
                            <p align="justify">Angka 4 : Cenderung Tinggi (CT)</p>
                            <p align="justify">Angka 5 : Tinggi (T)</p>
                            <p align="justify">Angka 6 : Sangat Tinggi (ST)</p>
                          </div>
                        </div>
                      ) : null}
                      {/**part 3 */}
                      {stepPage > 1 && stepPage < 17 ? (
                        <div className="step">
                          <h3 className="main_question">
                            <strong>{stepQuestions + 1} of 15</strong>
                            {questions && questions[stepQuestions].pertanyaan}?
                          </h3>
                          <div className="review_block_numbers">
                            <ul className="clearfix">
                              <li>
                                <div className="container_numbers">
                                  <input
                                    value="1"
                                    checked={answer === "1"}
                                    type="radio"
                                    id="very_bad_1"
                                    className="required"
                                    onChange={({ target: { value } }) => setAnswer(value)}
                                  />
                                  <label
                                    className="radio very_bad"
                                    htmlFor="very_bad_1"
                                  >
                                    1
                                  </label>
                                </div>
                              </li>
                              <li>
                                <div className="container_numbers">
                                  <input

                                    checked={answer === "2"}
                                    value="2"
                                    type="radio"
                                    id="bad_1"
                                    className="required"
                                    onChange={({ target: { value } }) => setAnswer(value)}
                                  />
                                  <label className="radio bad" htmlFor="bad_1">
                                    2
                                  </label>
                                </div>
                              </li>
                              <li>
                                <div className="container_numbers">
                                  <input
                                    checked={answer === "3"}
                                    value="3"
                                    type="radio"
                                    id="average_1"
                                    className="required"
                                    onChange={({ target: { value } }) => setAnswer(value)}
                                  />
                                  <label
                                    className="radio average"
                                    htmlFor="average_1"
                                  >
                                    3
                                  </label>
                                </div>
                              </li>
                              <li>
                                <div className="container_numbers">
                                  <input
                                    checked={answer === "4"}
                                    value="4"
                                    type="radio"
                                    id="good_1"
                                    className="required"
                                    onChange={({ target: { value } }) => setAnswer(value)}
                                  />
                                  <label className="radio good" htmlFor="good_1">
                                    4
                                  </label>
                                </div>
                              </li>
                              <li>
                                <div className="container_numbers">
                                  <input  
                                    checked={answer === "5"}
                                    value="5"
                                    type="radio"
                                    id="very_good_1"
                                    className="required"
                                    onChange={({ target: { value } }) => setAnswer(value)}
                                  />
                                  <label
                                    className="radio very_good"
                                    htmlFor="very_good_1"
                                  >
                                    5
                                  </label>
                                </div>
                              </li>
                              <li>
                                <div className="container_numbers">
                                  <input  
                                    checked={answer === "6"}
                                    value="6"
                                    type="radio"
                                    id="perfect_1"
                                    className="required"
                                    onChange={({ target: { value } }) => setAnswer(value)}
                                  />
                                  <label
                                    className="radio perfect"
                                    htmlFor="perfect_1"
                                  >
                                    6
                                  </label>
                                </div>
                              </li>
                            </ul>
                            <div className="row justify-content-between add_bottom_25">
                              <div className="col-4">
                                <em>Sangat Rendah</em>
                              </div>
                              <div className="col-4 text-end">
                                <em>Sangat Tinggi</em>
                              </div>
                            </div>
                          </div>
                          <div className="form-group">
                            <label htmlFor="additional_message_label">Alasan</label>
                            <textarea
                              name="additional_message"
                              id="additional_message_label"
                              className="form-control"
                              style={{ height: 180 }}
                              value={reason}
                              onChange={({ target : { value } }) => setReason(value)}
                            />
                          </div>
                        </div>
                      ) : null}
                      {/* /part 4*/}
                      {stepPage === 17 ? (
                        <div className="step text-white text-center">
                          <h1 className="text-white bold">TERIMA KASIH SUDAH BERPARTISIPASI</h1>
                          <p>
                            Survey Anda Sangat Berarti Untuk Kemajuan Jurusan.
                          </p>
                        </div>
                      ) : null}
                    </div>
                    {/* /middle-wizard */}
                    <div id="bottom-wizard">
                      {displayButton ? (
                        <>
                          {/* <button
                            type="button"
                            name="backward"
                            className="backward"
                            id="previousClick"
                            onClick={onClickPrevStep}
                          >
                            Kembalinya
                          </button> */}
                          <button
                            type="button"
                            name="forward"
                            className="forward"
                            id="nextClick"
                            onClick={onClickNextStep}
                          >
                            Selanjutnya
                          </button>
                        </>
                      ) : null}
                      {displaySubmitButton ? (
                        <button 
                          type="button" 
                          name="process" 
                          className="submit"
                          onClick={onClickValidationForm}
                        >
                          Masukan
                        </button>
                      ) : null}
                    </div>
                    {/* /bottom-wizard */}
                  </form>
                </div>
                {/* /Wizard container */}
              </div>
              {/* /col */}
            </div>
          </div>
          {/* /row */}
        </div>
        {/* /container_centering */}
        <footer>
          <div className="container-fluid">
            <div className="row">
              <div className="col-md-3">
                ©2022 Teknik Informatika UIN SDG Bandung
              </div>
              <div className="col-md-9">
                {/* <ul class="clearfix">
            <li><a href="#0" class="animated_link">Purchase this template</a></li>
            <li><a href="index.html" class="animated_link">Demo 1</a></li>
            <li><a href="index-2.html" class="animated_link">Demo 2</a></li>
            <li><a href="index-3.html" class="animated_link">Demo 3</a></li>
          </ul> */}
              </div>
            </div>
            {/* /row */}
          </div>
          {/* /container-fluid */}
        </footer>
        {/* /footer */}
      </div>
      {/* /wrapper_centering */}
      {/* Modal terms */}
      <div
        className="modal fade"
        id="terms-txt"
        tabIndex={-1}
        role="dialog"
        aria-labelledby="termsLabel"
        aria-hidden="true"
      >
        <div className="modal-dialog modal-dialog-centered">
          <div className="modal-content">
            <div className="modal-header">
              <h4 className="modal-title" id="termsLabel">
                Terms and conditions
              </h4>
              <button
                type="button"
                className="btn-close"
                data-bs-dismiss="modal"
                aria-label="Close"
              />
            </div>
            <div className="modal-body">
              <p>
                Lorem ipsum dolor sit amet, in porro albucius qui, in{" "}
                <strong>nec quod novum accumsan</strong>, mei ludus tamquam
                dolores id. No sit debitis meliore postulant, per ex prompta
                alterum sanctus, pro ne quod dicunt sensibus.
              </p>
              <p>
                Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod
                novum accumsan, mei ludus tamquam dolores id. No sit debitis
                meliore postulant, per ex prompta alterum sanctus, pro ne quod
                dicunt sensibus. Lorem ipsum dolor sit amet,{" "}
                <strong>in porro albucius qui</strong>, in nec quod novum
                accumsan, mei ludus tamquam dolores id. No sit debitis meliore
                postulant, per ex prompta alterum sanctus, pro ne quod dicunt
                sensibus.
              </p>
              <p>
                Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod
                novum accumsan, mei ludus tamquam dolores id. No sit debitis
                meliore postulant, per ex prompta alterum sanctus, pro ne quod
                dicunt sensibus.
              </p>
            </div>
            <div className="modal-footer">
              <button type="button" className="btn_1" data-dismiss="modal">
                Close
              </button>
            </div>
          </div>
          {/* /.modal-content */}
        </div>
        {/* /.modal-dialog */}
      </div>
      <Toaster 
        toastOptions={{
          style: {
            background: '#33e881',
            color: '#000',
            minWidth: '40%',
            maxWidth: '100%'
          },
          success: {
            theme: {
              primary: 'green',
              secondary: 'red'
            }
          }
        }}
      />
    </>
)}
  
// DOM element
if (document.getElementById('user')) {
    ReactDOM.render(<Index />, document.getElementById('user'));
}