<div class="col-xl-8 enquiry-container" data-aos="fade-up">
    <div class="inner">
        <div class="heading mx-auto text-center">
            <h2 class="h2 text-primary">Download Brochure</h2>
            <p class="mb-0 text-sans">Wish to get a call back from our team? Fill in your details.</p>
        </div>
        <div class="alert py-2 small d-none rounded-0 pe_status"></div>
        <div class="form" id="let_form">
            <form id="projectform" method="POST">
                <div class="row g-3 justify-content-center">
                    <div class="col-md-4">
                        <div class="input-group">
                            <div class="form-floating">
                                <input type="text" name="pe_name" id="pe_name" class="form-control" placeholder="Name*">
                                <label for="pe_name">Name*</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="input-group">
                            <div class="form-floating">
                                <input type="tel" name="pe_mobile" id="pe_mobile" maxlength="10" class="form-control" placeholder="Mobile*">
                                <label for="pe_mobile">Mobile*</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="input-group">
                            <div class="form-floating">
                                <input type="email" name="pe_email" id="pe_email" class="form-control" placeholder="Email*">
                                <label for="pe_email">Email*</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="readmore mt-0">
                            <input type="hidden" name="query_nature" value="project">
                            <input type="hidden" name="projectname" value="<?= $page_title?>">
                            <button type="submit" id="projectsubmit" class="button mx-auto justify-content-center">Submit <i class="fa fa-paper-plane"></i></button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>