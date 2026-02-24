<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style1.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <title>Customer Tracking Form</title>
</head>

<body>
  <div class="content">
    <div class="container">
      <div class="row align-items-stretch no-gutters contact-wrap">
        <div class="col-xl-6 col-lg-8 col-md-10 mx-auto">
          <div class="form h-100">
            <div class="form-logo justify-content-center">
              <img class="img-fluid" alt="Saya Homes" src="https://www.sayahomes.com/images/logo.svg" />
            </div>
            <span class="status text-warning mb-0"></span>
            <form method="post" id="contactForm" enctype="multipart/form-data" name="contactForm">
              <div class="form-row">
                <div class="col-md-6 form-group mb-3">
                  <label for="name" class="col-form-label">Name *</label>
                  <input type="text" class="form-control" name="name" id="name" placeholder="Your name">
                </div>
                <div class="col-md-6 form-group mb-3">
                  <label for="mobile" class="col-form-label">Mobile *</label>
                  <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Your Mobile No.">
                </div>
                <div class="col-md-6 form-group mb-3">
                  <label for="email" class="col-form-label">Email *</label>
                  <input type="text" class="form-control" name="email" id="email" placeholder="Your email">
                </div>
                <div class="col-md-6 form-group mb-3">
                  <label for="projects" class="col-form-label">Project</label>
                  <select class="custom-select" id="projects" name="projects">
                    <option value="">Choose...</option>
                    <option value="Saya Gold Avenue">Saya Gold Avenue</option>
                    <option value="Saya Piazza">Saya Piazza</option>
                    <option value="Saya SouthX">Saya SouthX</option>
                    <option value="Saya S-Class">Saya S-Class</option>
                  </select>
                </div>

                <div class="col-md-12 form-group mb-3">
                  <div class="d-inline">
                    <label for="Source">Source: *</label> <br>
                    <div class="form-check form-check-inline ">
                      <input class="form-check-input sectionChooser" data-sval="emp" type="radio" name="source" id="inlineRadio2" value="Direct">
                      <label class="form-check-label" for="inlineRadio2">Direct</label>
                    </div>
                    <div class="form-check form-check-inline ">
                      <input class="form-check-input sectionChooser" data-sval="ch" type="radio" name="source" id="inlineRadio3" value="Channel Partner">
                      <label class="form-check-label" for="inlineRadio3">Channel Partner</label>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 form-group mb-3 sourcefield emplist chlist d-none">
                  <label for="empname" class="col-form-label">Employee Name *</label>
                  <select class="custom-select" id="empname" name="empname">
                    <option value="">Choose...</option>
                    <!-- <option value="Ankur Garg">Ankur Garg</option> -->
                    <option value="Chetan Bansal">Chetan Bansal</option>
                    <!-- <option value="Ankit Mittal">Ankit Mittal</option>
                    <option value="Sanidhya Agrawal">Sanidhya Agrawal</option> -->
                    <option value="Anil Tyagi">Anil Tyagi</option>
                    <option value="Fahad Ahmed">Fahad Ahmed</option>
                    <option value="Mohit Sharma">Mohit Sharma</option>
                    <option value="Prashant Kumar">Prashant Kumar</option>
                    <!-- <option value="Radha Rana">Radha Rana</option> -->
                    <option value="Vikas Gaur">Vikas Gaur</option>
                    <option value="Madasar Ahmed">Madasar Ahmed</option>
                    <option value="Dipika Pal">Dipika Pal</option>
                  </select>
                </div>
                <div class="col-md-6 form-group mb-3 sourcefield chlist d-none">
                  <label for="channame" class="col-form-label">Channel Partner *</label>
                  <select class="custom-select" id="channame" name="channame">
                    <option value="">Choose...</option>
                    <option value="AOC">AOC</option>
                    <option value="ASSET 4 U">ASSET 4 U</option>
                    <option value="DREAM REALITY">DREAM REALITY</option>
                    <option value="EARTH MATRIX PVT.LTD">EARTH MATRIX PVT.LTD</option>
                    <option value="FEET SQUARE">FEET SQUARE</option>
                    <option value="HADGE HOME'S ">HADGE HOME'S </option>
                    <option value="INDIVIDUAL">INDIVIDUAL</option>
                    <option value="INVESTOR EYE">INVESTOR EYE</option>
                    <option value="INVESTOR FRIENDLY CONSULTANT">INVESTOR FRIENDLY CONSULTANT</option>
                    <option value="IOP">IOP</option>
                    <option value="JEET SQUARE">JEET SQUARE</option>
                    <option value="KMC PROPERTY">KMC PROPERTY </option>
                    <option value="KAPOOR INFRA">KAPOOR INFRA</option>
                    <option value="MAX AREA PROP">MAX AREA PROP</option>
                    <option value="PROPSQUARE">PROPSQUARE</option>
                    <option value="RAIZADA PROPERTIES">RAIZADA PROPERTIES</option>
                    <option value="REAL-ESTATE DESK">REAL-ESTATE DESK</option>
                    <option value="REAL COST PROPERTIES">REAL COST PROPERTIES</option>
                    <option value="REALITY HOMES">REALITY HOMES</option>
                    <option value="SPACE SALES">SPACE SALES</option>
                    <option value="SQUARE YARD">SQUARE YARD</option>
                    <option value="SQ FT REALTORS">SQ FT REALTORS</option>
                    <option value="THE ADDRESS">THE ADDRESS</option>  
                    <option value="TRUE MEN">TRUE MEN</option>
                    <option value="RED">RED</option>
                    <option value="PROPSHOP">PROPSHOP</option>
                    <option value="NANDI REALTORS">NANDI REALTORS</option>
                    <option value="REALTY CARE">REALTY CARE</option>
                    <option value="VETERAN REALTY">VETERAN REALTY</option>
                    <option value="NCR PROPERTY">NCR PROPERTY</option>
                    <option value="TRIPUND REALTORS">TRIPUND REALTORS</option>
                    <option value="REALTY HQ">REALTY HQ</option>
                    <option value="NEOBRIX">NEOBRIX</option>
                    <option value="JMD PROPERTIES">JMD PROPERTIES</option>
                    <option value="WIESTATE">WIESTATE</option>
                    <option value="SAHYOG PROPERTIES">SAHYOG PROPERTIES</option>
                    <option value="RDC">RDC</option>
                    <option value="Next milestone real-estate">Next milestone real-estate</option>
                  </select>
                </div>
                <div class="col-md-6 form-group mb-3 sourcefield chlist d-none">
                  <label for="exicutive" class="col-form-label">Executive *</label>
                  <input type="text" class="form-control" name="exicutive" id="exicutive" placeholder="Your Executive">
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 form-group text-center">
                  <input type="hidden" value="active" name="sayaregistration" class="btn">
                  <input type="submit" value="Register Now" class="btn" id="bsubmit">
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

  </div>

  <script>
    $('.sectionChooser').click(function() {
      if ($(this).is(":checked")) {
        var sourcvalue = $(this).data('sval');
        $(".sourcefield").addClass('d-none');
        $('.' + sourcvalue + 'list').removeClass('d-none');
      } else {
        $(".sourcefield").addClass('d-none');
      }
    });
    $(document).ready(function() {
      $('#contactForm').on('submit', function(event) {
        event.preventDefault();
        var data = new FormData(this);
        $.ajax({
          url: "form.php",
          type: "POST",
          //data:  new FormData(this),
          data: data,
          contentType: false,
          cache: false,
          processData: false,
          beforeSend: function() {
            $(".status").html("Processing...");
            $("#bsubmit").attr('disabled', 'true');
          },
          success: function(data) {
            if (data === 'success') {
              $(".status").html('');
              $("#contactForm")[0].reset();
              $('#bsubmit').removeAttr('disabled');
              window.location.href = 'thank-you.php';
            } else {
              $(".status").html(data);
              $('#bsubmit').removeAttr('disabled');
            }
          }
        });
      });
    });
  </script>

</body>

</html>