<!--
  Nama : fawaz ali sabet
  Nim : 18201246
-->

<!DOCTYPE html>
<html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <link rel="icon" href="https://cdn0.iconfinder.com/data/icons/HTML5/512/HTML_Logo.png" type="image/png">
    <title>Web Developer</title>

    <!--Wow Animated css-->
    <link rel="stylesheet" href="css/animate.css">

    <!--Hover css-->
    <link rel="stylesheet" href="css/hover-min.css">
    

    <!--style css-->
    <link rel="stylesheet" href="css/style.css">
    
  

  </head>

  <body>
    
    
    <div class="wrapper">
      <!--Navbar + slider-->
      <div class="container-fluid px-0">  
        <nav class="navbar  navbar-expand-lg navbar-dark bg-dark fixed-top">
          <div class="container">
              <a class="navbar-brand" href="#!">
                <img src="https://cdn0.iconfinder.com/data/icons/HTML5/512/HTML_Logo.png" alt="Web Developer" width="30" height="30" class="d-inline-block align-top"  loading="lazy">  
                WebDev.Com
                </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item active">
                    <a class="nav-link hvr-grow" href="#!">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link hvr-grow" href="#!dafprog">Gallery</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link hvr-grow" href="#!">Harga Rias</a>
                    </li>
                  <li class="nav-item">
                        <a class="nav-link hvr-grow" href="#!preskil">Skill</a>
                    </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle hvr-grow " href="#!" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      About Me
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="#!">Intagram</a>
                      <a class="dropdown-item" href="#!">Facebook</a>
                      <a class="dropdown-item" href="#!">Whatsapp</a>
                    </div>
                  </li>
                </ul>
              </div>
          </div>
        </nav>

        <!-- #Slider -->
        <div id="carouselExampleControls" class="carousel slide py-4 my-4" data-ride="carousel">
                <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="https://cylonapps.com/wp-content/uploads/2019/08/3-1000x400.png" class="d-block w-100" alt="Great developer">
                  </div>
                  <div class="carousel-item">
                    <img src="https://seobit.ca/wp-content/uploads/2017/01/banner2_1000.jpg" class="d-block w-100" alt="Fast design">
                  </div>
                  <div class="carousel-item">
                    <img src="https://www.espirittech.com/blog/wp-content/uploads/2019/02/PHP.jpg" class="d-block w-100" alt="Best for developer">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
      </div>
      <!--nav = daftar program-->
      <div class="container py-5 my-5">
          <div class="row ">
              <div class="col-12">
                  <h1 id="!dafprog" class="text-center wow animate__animated animate__fadeIn">Daftar Program</h1>
                  
                  <!--Nav-->
                  <div class="row " >
                      <div class="col-12 py-4">
                            <ul class="nav nav-pills mb-3 justify-content-center " id="myTab" role="tablist">
                                    <li class="nav-item wow animate__animated animate__fadeInLeft" role="presentation">
                                      <a class="nav-link active px-5 hvr-grow" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">HTML</a>
                                    </li>
                                    <li class="nav-item wow animate__animated animate__fadeIn" role="presentation">
                                      <a class="nav-link px-5 hvr-grow" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">C++</a>
                                    </li>
                                    <li class="nav-item wow animate__animated animate__fadeInRight" role="presentation">
                                      <a class="nav-link px-5 hvr-grow" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Python</a>
                                    </li>
                                  </ul>
                      </div>
                      <div class="col-12">
                            <div class="tab-content" id="myTabContent">
                                    <!--HTML-->
                                    <div class="tab-pane fade show active  "  id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row ">
                                            <div class="col-lg-4 col-md-6 mb-lg-0 mb-5 px-5 wow animate__animated animate__fadeInUp" data-wow-duration="1s">
                                                    <div class="card shadow-lg hvr-float-shadow">
                                                            <img src="https://i.pinimg.com/originals/5d/6e/19/5d6e19b0d2136a4fb3563ee4b18d9790.png" class="card-img-top" alt="...">
                                                            <div class="card-body">
                                                              <h5 class="card-title">HTML With CSS</h5>
                                                              
                                                              <a href="#!" class="btn btn-primary">More Information</a>
                                                            </div>
                                                          </div>
                                                          
                                                
                                            </div>
                                            <div class="col-lg-4 col-md-6 mb-lg-0 mb-5 px-5 wow animate__animated animate__fadeInUp" data-wow-duration="2s">
                                                    <div class="card shadow-lg hvr-float-shadow" >
                                                            <img src="https://i0.wp.com/psld.ub.ac.id/wp-content/uploads/Medsos-PSLD-UB-2-e1548495751268.jpg?fit=1000%2C1000" class="card-img-top" alt="...">
                                                            <div class="card-body">
                                                              <h5 class="card-title">ALT Fungsi</h5>
                                                              
                                                              <a href="#!" class="btn btn-primary">More Information</a>
                                                            </div>
                                                          </div>
                                                
                                            </div>
                                            <div class="col-lg-4 col-md-6 mb-lg-0 mb-5 px-5 wow animate__animated animate__fadeInUp" data-wow-duration="3s">
                                                    <div class="card shadow-lg hvr-float-shadow" >
                                                            <img src="https://medias2.prestastore.com/1031595-pbig/sitemap-generator-for-seo-xml-html.jpg" class="card-img-top" alt="...">
                                                            <div class="card-body">
                                                              <h5 class="card-title">Implementation</h5>
                                
                                                              <a href="#!" class="btn btn-primary">More Information</a>
                                                            </div>
                                                          </div>
                            
                                            </div>
                                        </div>
                                    </div>
                                    <!--C++-->
                                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                            <div class="row wow animate__animated animate__fadeInUp">
                                                    <div class="col-lg-4 col-md-6 mb-lg-0 mb-5 px-5 wow animate__animated animate__fadeInUp" data-wow-duration="1s">
                                                            <div class="card shadow-lg hvr-float-shadow" >
                                                                    <img src="https://adoptoprod.blob.core.windows.net/careers/9b6270ec-ff18-4417-be0a-e7ee99dedbbf.jpg" class="card-img-top" alt="...">
                                                                    <div class="card-body">
                                                                      <h5 class="card-title">C++ Developer</h5>
                                                                      
                                                                      <a href="#!" class="btn btn-primary">More Information</a>
                                                                    </div>
                                                                  </div>
                                                                  
                                                        
                                                    </div>
                                                    <div class="col-lg-4 col-md-6 mb-lg-0 mb-5 px-5 wow animate__animated animate__fadeInUp" data-wow-duration="2s">
                                                            <div class="card shadow-lg hvr-float-shadow" >
                                                                    <img src="https://toolbox.brightspotcdn.com/dims4/default/c5c3115/2147483647/thumbnail/1000x1000%3E/quality/90/?url=http%3A%2F%2Fziff-davis-brightspot.s3.amazonaws.com%2Fa4%2Ffb%2F96b9961e4b169f8ef87ebae5a16c%2Fistock-871030872.jpg" class="card-img-top" alt="...">
                                                                    <div class="card-body">
                                                                      <h5 class="card-title">C++ Programing</h5>
                                                                      
                                                                      <a href="#!" class="btn btn-primary">More Information</a>
                                                                    </div>
                                                                  </div>
                                                        
                                                    </div>
                                                    <div class="col-lg-4 col-md-6 mb-lg-0 mb-5 px-5 wow animate__animated animate__fadeInUp" data-wow-duration="3s">
                                                            <div class="card shadow-lg hvr-float-shadow" >
                                                                    <img src="https://digitalis.id/wp-content/uploads/2019/04/mas-rhein-1.jpg" class="card-img-top" alt="...">
                                                                    <div class="card-body">
                                                                      <h5 class="card-title">Implementation</h5>
                                        
                                                                      <a href="#!" class="btn btn-primary">More Information</a>
                                                                    </div>
                                                                  </div>
                                    
                                                    </div>
                                                </div>
                                    </div>

                                    <!--Pyhton-->
                                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                            <div class="row ">
                                                    <div class="col-lg-4 col-md-8 mb-lg-0 mb-5 px-5 wow animate__animated animate__fadeInUp" data-wow-duration="1s">
                                                            <div class="card shadow-lg hvr-float-shadow" >
                                                                    <img src="https://spzone-simpleprogrammer.netdna-ssl.com/wp-content/uploads/2019/01/python-square.png" class="card-img-top" alt="...">
                                                                    <div class="card-body">
                                                                      <h5 class="card-title">Python Math</h5>
                                                                      
                                                                      <a href="#!" class="btn btn-primary">More Information</a>
                                                                    </div>
                                                                  </div>
                                                                  
                                                        
                                                    </div>
                                                    <div class="col-lg-4 col-md-8 mb-lg-0 mb-5 px-5 wow animate__animated animate__fadeInUp" data-wow-duration="2s">
                                                            <div class="card shadow-lg hvr-float-shadow" >
                                                                    <img src="https://images-na.ssl-images-amazon.com/images/I/61imwqekQLL.jpg" class="card-img-top" alt="...">
                                                                    <div class="card-body">
                                                                      <h5 class="card-title">Python For Games</h5>
                                                                      
                                                                      <a href="#!" class="btn btn-primary">More Information</a>
                                                                    </div>
                                                                  </div>
                                                        
                                                    </div>
                                                    <div class="col-lg-4 col-md-6 mb-lg-0 mb-5 px-5 wow animate__animated animate__fadeInUp" data-wow-duration="3s">
                                                            <div class="card shadow-lg hvr-float-shadow" >
                                                                    <img src="https://pbs.twimg.com/media/DHvOR9NVYAAtPK0.jpg" class="card-img-top" alt="...">
                                                                    <div class="card-body">
                                                                      <h5 class="card-title">Implementation</h5>
                                        
                                                                      <a href="#!" class="btn btn-primary">More Information</a>
                                                                    </div>
                                                                  </div>
                                    
                                                    </div>
                                                </div>
                                    </div>
                                  </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!--progres = Presentation skill-->
      <div class="container-fluid px-0 py-5 bg-dark ">
        <div class="container text-light">
          <div class="row">
            <div class="col-md-12">
              <h1 id="!preskil" class="text-center py-2 wow animate__animated animate__fadeIn">Presentation Skill</h1>
              <div class="row">
                <div class="col-md-12">
                  <h4>HTML</h4>
                  <div class="progress" style="height: 20px">
                    <div class="progress-bar progress-bar-striped wow animate__animated animate__slideInLeft " role="progressbar" data-wow-duration="3s" data-wow-delay="" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%">75%</div>
                  </div>
                  <h4>C++</h4>
                  <div class="progress" style="height: 20px">
                    <div class="progress-bar progress-bar-striped  bg-warning wow animate__animated animate__slideInLeft" data-wow-duration="3s" data-wow-delay="1s" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                  </div>
                  <h4>PYTHON</h4>
                  <div class="progress" style="height: 20px">
                    <div class="progress-bar progress-bar-striped bg-danger wow animate__animated animate__slideInLeft" data-wow-duration="3s" data-wow-delay="2s" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">10%</div>
                  </div>
                </div>
               </div>
             </div>
            </div>
          </div>
        </div>
      <!--Jumptron-->
      <div class="container-fluid px-5 py-5 bg-dark">
          <div class="jumbotron jumbotron-fluid">
              <div class="container wow animate__animated animate__fadeIn" data-wow-duration="5s">
                <h1 class="display-4">About Skill Presentation</h1>
                <p class="lead">This Is Presentation Skills, explain about how far you understand a program by undergoing tests on this website. If you want to register and know your presentation skills, you can visit the link below</p>
                <hr class="my-4">
                <a class="btn btn-primary hvr-float-shadow" href="#!">Visit Link</a>
              </div>
            </div>
      </div>
        <!--copyright-->
      <div class="container-fluid px-0 py-3 bg-dark text-light text-center">
        <div class="row wow animate__animated animate__fadeIn">
          <div class="col-12">
            <h8>Copyright &copy; Fawasali 2020 All Rights Reserved</h8>
          </div>
        </div>
      </div>
    </div>
    </div>

    
    
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <script src="js/wow.min.js"></script>
              <script>
                new WOW().init();
              </script>
  </body>
</html>