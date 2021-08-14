<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Basic Banking System</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/A.animate.css+flaticon.css+tiny-slider.css+glightbox.min.css+aos.css+datepicker.min.css+style.css,Mcc.z2wXGN8Aor.css.pagespeed.cf.rkzq6iDOYd.css">
    
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <script defer src="js/index.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://kit.fontawesome.com/5680908766.js" crossorigin="anonymous"></script>

</head>

<body>
    <nav class=" navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid d-flex">
            <a class="navbar-brand" href="#">Bank of Intern</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class=" collapse navbar-collapse  justify-content-end " id="navbarSupportedContent">
                <ul class=" navbar-nav mb-2 mb-lg-0 ">
                    <li class="nav-item px-2 ">
                        <a class="nav-link active px-2" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link active px-2" href="transfer_history.php">Transfer History</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link active px-2" href="customer.php">Our Customers</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link active px-2" href="#contactus">Contact</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link active px-2" target="_blank"
                            href="https://www.xe.com/currencyconverter/">Currency-Convertor</a>
                    </li>
                </ul>
                <form class="d-flex">
                </form>
            </div>
        </div>
    </nav>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/quick.jpg" class="d-block w-100" alt="Basic Banking System" height="650px">
      <div class="carousel-caption d-none d-md-block">
        <h5>Saving Account</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/loan.jpg" class="d-block w-100" alt="Quick Personal Loans" height="650px">
      <div class="carousel-caption d-none d-md-block">
        <h5>Quick Personal Loans</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/cust.jpg" class="d-block w-100" alt="Customer Satisfaction" height="650px">
      <div class="carousel-caption d-none d-md-block">
        <h5>Customer Satisfaction</h5>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

    <section class="ftco-section">
        <div class="container-xl">
            <div class="row g-lg-5">
                <div class="col-lg-6 order-lg-last heading-section d-flex align-items-center" data-aos="fade-left" ata-aos-duration="1000">
                    <div class="mt-0 my-lg-5 py-5">
                        <span class="subheading">About Bank Of Intern</span>
                        <h2 class="mb-4">More than 10M+ Trusted Our Financial & Conusultation Institution</h2>
                        <p>At Bank Of Intern we work on trust. After all, you want to be able to trust financial
                            institutions such as your bank or insurance firm. They deserve our trust if they are
                            well-managed and in good financial health. It means you
                            all rest assured your savings are safe and your insurance claims are paid out.Trust also
                            means you can be confident your savings retain their value. And your pension rights. You
                            also want to be sure online payments are smooth
                            and safe.
                        </p>
                        <p>In short, at Bank Of Intern we are committed to safeguarding financial stability and thereby
                            contributing to sustainable prosperity in the India.</p>
                        <p class="mt-4"><a href="#" class="btn btn-primary py-3 px-4">Learn More</a></p>
                    </div>
                </div>
                <div class="col-lg-6 d-flex align-items-stretch" data-aos="fade-right" data-aos-duration="1000">
                    <div class="row">
                        <div class="col-md-6 d-flex align-items-stretch services-wrap"  data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                            <div class="services">
                                <div class="icon"><span class="flaticon-accountant">
                                        <img src="img/accountant.png"" alt="" height=" 35px" width="35px"">
                                </span></div>
                                <div class=" text">
                                        <h2>Professional Consultants</h2>
                                        <p class="mb-0">We provide guidance on your choice of goal, how long you want to invest and the risk you want to take.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex align-items-stretch services-wrap" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                            <div class="services active">
                                <div class="icon"><span class="flaticon-research">
                                        <img src="img/research.png"" alt="" height=" 35px" width="35px">
                                    </span></div>
                                <div class="text">
                                    <h2>Comprehensive Services</h2>
                                    <p class="mb-0">Now you can access your Accounts, Credit Cards Investment Services by calling on a Single Number.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex align-items-stretch services-wrap" data-aos="fade-down-right" data-aos-delay="100" data-aos-duration="1000">
                            <div class="services">
                                <div class="icon"><span class="flaticon-recession">
                                        <img src="img/recession.png"" alt="" height=" 35px" width="35px" >
                                </span></div>
                                <div class=" text">
                                        <h2>A Culture that Delivers</h2>
                                        <p class="mb-0">We are making progress and we regularly check whether we can still achieve our objectives.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex align-items-stretch services-wrap" data-aos="fade-down-right" data-aos-delay="100" data-aos-duration="1000">
                            <div class="services">
                                <div class="icon"><span class="flaticon-money">
                                        <img src="img/profits.png" alt="" height="35px" width="35px" ">
                                </span></div>
                                <div class=" text">
                                        <h2>Insurance</h2>
                                        <p class="mb-0">Term life insurance can help you fulfil your child’s dreams when you are not around.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container services-down">
        <div class="row section" >
            <div class="col-lg-12" >
                <h2 class="section_heading" data-aos="fade-down" data-aos-duration="850">
                    <span>We are here to assist You</span>
                    <span class="spann" style="width: 22%;"></span>
                </h2>
                <p style="text-align: center;">You can visit any Bank Of Intern branch to open a checking account. You’ll still need identification and personal details, such as a valid government-issued ID.</p>
            </div>
        </div>
        <center>
            <div style="display: flex;box-sizing: border-box;">
                <div style="flex: 50%;padding: 10px;height: 338px;" data-aos="fade-right" data-aos-duration="1000">
                    <img src="img/home-transaction.webp" height="270" width="300" style="padding-bottom:25px;">
                    <h4>View Transfer History</h4>
                    <p>Views all transfer details that has been done till date among customers.</p><br>
                    <a href="transfer_history.php"><button class="button2" style="vertical-align:middle">
                            <h5><span style="font-family: Trebuchet MS">Transfer History</span></h5>
                        </button></a>

                </div>
                <div style="flex: 50%;padding: 10px;height: 338px;" data-aos="fade-left" data-aos-duration="1000">
                    <img src="img/home-customer.jpg" height="270" width="400" style="padding-bottom:25px;">
                    <h4>View Customers</h4>
                    <p>Views all customers registered and transfer money to customers as required.</p><br>
                    <a href="customer.php"><button class="button2" style="vertical-align:middle">
                            <h5><span style="font-family: Trebuchet MS">Our Customers</span></h5>
                        </button></a>
                </div>
            </div>
        </center>
        <div><br><br><br></div>
    </div>

    <section id="contactus">
        <div class="container-fluid mt-4 mb-5 ">
            <h2 class="section_heading" >
                <span>Contact Us</span>
                <span></span>
            </h2>

            <div class="container-fluid pb-4 ">
                <div class="row pt-3 " id="contact_section ">
                    <div class="col-md-6 order-md-first order-last mt-4 " >
                        <!-- Contact Form -->
                        <div class="container-lg px-lg-5 ">
                            <form class="contact_form" onsubmit="event.preventDefault(); contactUs();"
                                autocomplete="off" method="GET">
                                <div class="row">
                                    <div class="col mb-4">
                                        <label for="name" class="form-label">First Name</label>
                                        <input type="text" class="form-control" id="firstname">
                                    </div>
                                    <div class="col mb-4">
                                        <label for="lastname" class="form-label">Last Name</label>
                                        <input type="text" class="form-control" id="lastname">
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label for="email" class="form-label">Email Address</label>
                                    <input type="email" class="form-control" id="contactEmail" required />
                                </div>
                                <div class="mb-4">
                                    <label for="subject" class="form-label">Subject</label>
                                    <input type="text" class="form-control" id="contactSubject" required />
                                </div>
                                <div class="mb-4">
                                    <label for="message" class="form-label">Message</label>
                                    <textarea name="contactMessage" class="form-control" id="contactMessage" rows="3"
                                        required></textarea>
                                </div>
                                <button type="submit" class="btn btn-secondary submit_button" ">Submit</button>
                            </form>
                        </div>
                    </div>
                    <div class=" col-md-6 order-md-last order-first mt-4 " >
                        <iframe src="
                                    https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d81706.69424506!2d72.8503359461155!3d19.071183313121875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c6306644edc1%3A0x5da4ed8f8d648c69!2sMumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1628575559699!5m2!1sen!2sin "class="
                                    contact_map" style=" border:0;" allowfullscreen=" " loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <footer class="bg-light text-center text-white">
        <div class="container p-4 pb-0">
            <section class="mb-4">
                <a class="btn btn-primary btn-floating m-1" style="background-color: #3b5998;" href="#"
                    role="button"><i class="fab fa-facebook-f"></i></a>

                <a class="btn btn-primary btn-floating m-1" style="background-color: #55acee;" href="#"
                    role="button"><i class="fab fa-twitter"></i></a>

                <a class="btn btn-primary btn-floating m-1" style="background-color: #dd4b39;" href="#"
                    role="button"><i class="fab fa-google"></i></a>

                <a class="btn btn-primary btn-floating m-1" style="background-color: #ac2bac;" href="#"
                    role="button"><i class="fab fa-instagram"></i></a>

                <a class="btn btn-primary btn-floating m-1" style="background-color: #0082ca;" href="#"
                    role="button"><i class="fab fa-linkedin-in"></i></a>

                <a class="btn btn-primary btn-floating m-1" style="background-color: #333333;" href="#"
                    role="button"><i class="fab fa-github"></i></a>
            </section>
        </div>
        <div class="text-center p-3" style="background-color: rgba(4 4 4 / 29%); font-weight: 700;">
            Copyright &copy; SanyamSharma | All right reserved!
        </div>
    </footer>
    <script>
        AOS.init({
            delay: 100,
            duration: 1000,
            easing: 'ease-in-out',
            once: true
        });
    </script>
</body>

</html>