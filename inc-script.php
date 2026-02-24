
<script src="<?php echo $base_url; ?>/js/jquery-3.5.1.min.js"></script>
<script src="<?php echo $base_url; ?>/js/popper.min.js"></script>
<script src="<?php echo $base_url; ?>/js/bootstrap.min.js"></script>
<script src="<?php echo $base_url; ?>/js/swiper-bundle.min.js"></script>
<script src="<?php echo $base_url; ?>/js/jquery.magnify.js"></script>
<script src="https://unpkg.com/aos@2.3.0/dist/aos.js"></script>
<script src="<?php echo $base_url; ?>/js/custom.js"></script>

<script> 
    $('#modalform').on('submit', function (event) {
        event.preventDefault();

        var form = this;
        var data = new FormData(form);

        // Ensure the PHP knows this is the "modal" enquiry
        data.append('query_nature', 'modal');

        $.ajax({
            url: "<?= $base_url ?>/controller/form_integration.php",
            type: "POST",
            data: data,
            contentType: false,
            cache: false,
            processData: false,
            dataType: 'json', // Expect JSON from the server
            beforeSend: function () {
                $(".modalstatus")
                    .removeClass('alert-danger alert-success d-none')
                    .addClass('alert-warning')
                    .html("Processing...");

                $("#modalsubmit")
                    .attr('disabled', true)
                    .html('Please Wait...');

                $(".form-control").removeClass('is-invalid'); // Reset previous highlights
            },
            success: function (response) {
                $("#modalsubmit")
                    .removeAttr('disabled')
                    .html('Submit');

                if (response.status === 'success') {
                    $(".modalstatus")
                        .removeClass('alert-danger alert-warning d-none')
                        .addClass('alert-success')
                        .html(response.message || 'Your enquiry has been submitted successfully.');

                    $('#modalform')[0].reset(); // Optional: clear the form

                    // Redirect after 1.5 seconds
                    setTimeout(function () {
                        window.location.href = 'thank-you.php';
                    }, 1500);
                } else {
                    $(".modalstatus")
                        .removeClass('alert-success alert-warning d-none')
                        .addClass('alert-danger')
                        .html(response.message || 'Something went wrong. Please try again.');

                    if (response.field) {
                        $('#' + response.field).addClass('is-invalid').focus();
                    }
                }
            },
            error: function (xhr, status, error) {
                console.error('AJAX Error:', status, error);

                $(".modalstatus")
                    .removeClass('alert-success alert-warning d-none')
                    .addClass('alert-danger')
                    .html('Something went wrong. Please try again.');

                $("#modalsubmit")
                    .removeAttr('disabled')
                    .html('Submit');
            }
        });
    });

    setInterval(function() {
    if (!$('#formModal').hasClass('show')) {
        $('#formModal').modal('show');
    }
}, 2000 * 50);
</script>