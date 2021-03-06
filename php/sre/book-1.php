<!DOCTYPE html>
<html lang="en" dir="ltr">

    <head>
        <!--All Meta -->
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
      
        <!--Tilie Name -->
        <title>PDF-Books</title>
      
        <!--All Links -->
        <!--Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
          crossorigin="anonymous" />
      
        <!--FontAwesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
          crossorigin="anonymous">
        
        <!--CSS Files-->
        <link rel="stylesheet" href="./Style2.css" />
        <link rel="stylesheet" href="./mobile-style.css">
        <link rel="stylesheet" href="./custom.css">
      </head>

<body>
   <!--Header Strat -->
   <header>
    <div class="container-fluid p-0">
      <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="#">
          <!--
          <i class="fas fa-book-reader fa-2x mx-3"></i>
          -->
          PDF-Books</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
          aria-label="Toggle navigation">
          <i class="fas fa-align-right text-light"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <div class="mr-auto"></div>
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="booksPages.html">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
    </header>
    
    <!-- Start Shwo book-->
    <div class="books">
        <div class="container">
            <div class="book">
                <div class="row">
                    <div class="col-md-4">
                        <div class="book-cover">
                            <img src="../img/book-1.png" alt="Book cover">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="book-content">
                            <h4><a href=""></a>Practices of the Python Pro</h4>
                            <hr>
                            <p>Practices of the Python Pro<br>
                                Dane Hillard</p>
                                <br>
                                <p>Dane Hillard is currently a lead web application <br>developer at ITHAKA, a nonprofit in
                                    higher education. <br>His prior experience includes building <br>inference engines for telemetry
                                    data and ETL<br> pipelines for bioinformatics application</p>
                                <button class="custom-btn" style="width:160px">
                                    
                                    <a href="../books-files/book-1.pdf" download="">Download Book</a>
                                </button>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <!--End Show book -->
    <!--Start Related Books-->
    <div class="related-books ">
        <div class="container">
            <h4>Show More</h4>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="related-book" text-center>
                        <div class="cover">
                            <a href="#">
                                <img src="../img/book-2.jpg" alt="Book Cover">
                            </a>
                        </div>
                        <div class="title">
                            <h5>
                                <a href="#">Introductopn To Deep Learning</a>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="related-book" text-center>
                        <div class="cover">
                            <a href="#">
                                <img src="book-3.png" alt="Book Cover">
                            </a>
                        </div>
                        <div class="title">
                            <h5>
                                <a href="#">Pro HTML5 with CSS , JS and Multimedia</a>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="related-book" text-center>
                        <div class="cover">
                            <a href="#">
                                <img src="book-4.jpg" alt="Book Cover">
                            </a>
                        </div>
                        <div class="title">
                            <h5>
                                <a href="#">Big Data Principles and best practices </a>
                                
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="related-book" text-center>
                        <div class="cover">
                            <a href="#">
                                <img src="book-5.png" alt="Book Cover">
                            </a>
                        </div>
                        <div class="title">
                            <h5>
                                <a href="#"> Book Cover
                                    Data Analysis Using SQL and Excel </a>
                                
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Related Books-->
     <!--Start Footer-->
     <footer class="text-center">
        <P>???????? ???????????? ???????????? &copy2021</P>
    </footer>
    <!--End Footer-->

    <!--JQuery js-->
    <script src="js/jquery-3.4.1.min.js"></script>
    <!--Bootstrp js-->
    <script src="js/bootstrap.min.js"></script>
    </body>
    </html>