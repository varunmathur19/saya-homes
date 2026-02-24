<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Channel Partner Registration | Saya Homes | Join Our Network</title>
    <meta name="description" content="Become a registered channel partner with Saya Homes. Access exclusive incentives, support, and opportunities in real estate across Delhi NCR." />	
    <?php include_once('inc-css.php') ?>
</head>

<body>
    <?php include_once('inc-header.php') ?>
    <main>
        <div class="inside-banner w-100">
            <picture class="h-100 w-100">
                <source media="(max-width: 500px)" srcset="./images/saya-south-x-banner-sm.webp">
                <source media="(max-width: 1400px)" srcset="./images/saya-south-x-banner-d.webp">
                <img src="./images/south-x/saya-south-x-banner.webp" class="h-100 object-cover" alt="...">
            </picture>
            <div class="container-lg position-absolute mx-auto h-100">
                <div class="bannerText" data-aos="fade-in">
                    <div class="project-title-container">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active">Register As A Channel Partner</li>
                        </ol>
                        <h1 class="h1 title">CP Registeration</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-100 position-relative overflow-hidden section-support padding bg-secondary">
            <div class="container-lg">
                <div class="heading mx-auto text-center">
                    <h2 class="h2 mb-0 text-primary">Register As A Channel Partner</h2>
                </div>
                <div class="row g-4 justify-content-center">
                    <div class="col-12 contact-form">
                        <div class="inner bg-white">
                            <div class="alert alert-danger small d-none chanstatus"></div>
                            <form id="contactForm">
                                <div class="row g-4">
                                    <div class="col-md-6">
                                        <div class="row g-2">
                                            <div class="col-2">
                                                <select class="form-control form-select" id="chansalutation" name="chansalutation">
                                                    <option value="Mr">Mr</option>
                                                    <option value="Ms">Ms</option>
                                                    <option value="Mrs">Mrs</option>
                                                    <option value="Dr">Dr</option>
                                                </select>
                                            </div>
                                            <div class="col-10">
                                                <div class="input-group">
                                                    <div class="form-floating">
                                                        <input type="text" class="form-control" name="channame" id="channame" required="" value="" placeholder="Name*">
                                                        <label for="channame">Name*</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row g-2 align-items-center">
                                            <div class="col-9">
                                                <div class="input-group">
                                                    <div class="form-floating">
                                                        <input type="text" class="form-control" name="chanmobile" id="chanmobile" required="" value="" placeholder="Mobile*">
                                                        <label for="chanmobile">Mobile*</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-3"><button class="verify-btn btn btn-secondary">Verify Mobile</button></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <div class="form-floating">
                                                <input type="email" class="form-control" name="chanemail" id="chanemail" required="" value="" placeholder="Email*">
                                                <label for="chanemail">Email*</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" name="chancompanyname" id="chancompanyname" required="" placeholder="Company Name*">
                                                <label for="chancompanyname">Company Name*</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="input-group">
                                            <div class="form-floating">
                                                <input type="file" class="form-control" name="chandocument" id="chandocument" required="" placeholder="Upload Document*">
                                                <label for="chandocument">Upload Document*</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="readmore mt-2">
                                            <input type="hidden" name="query_nature" value="ChannelPartner">
                                            <button type="submit" class="button justify-content-center inverse mx-auto" id="contsubmti">Submit <i class="fa-solid fa-paper-plane"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php include_once('inc-footer.php') ?>
    <?php include_once('inc-script.php') ?>
</body>

</html>