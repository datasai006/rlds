<div class="mt-1">
    <footer class="main-footer mt-5">
        <strong>Copyright &copy; 2014-2021
            <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 3.2.0
        </div>
    </footer>
</div>
<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
</div>
<!-- ./wrapper -->
<!-- Then include Bootstrap's JavaScript -->
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>

<!-- Bootstrap -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- Other plugins -->
<script src="<?= base_url('assets/') ?>plugins/chart.js/Chart.min.js"></script>
<script src="<?= base_url('assets/') ?>plugins/sparklines/sparkline.js"></script>
<script src="<?= base_url('assets/') ?>plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?= base_url('assets/') ?>plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<script src="<?= base_url('assets/') ?>plugins/jquery-knob/jquery.knob.min.js"></script>
<script src="<?= base_url('assets/') ?>plugins/moment/moment.min.js"></script>
<script src="<?= base_url('assets/') ?>plugins/daterangepicker/daterangepicker.js"></script>
<script src="<?= base_url('assets/') ?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="<?= base_url('assets/') ?>plugins/summernote/summernote-bs4.min.js"></script>
<script src="<?= base_url('assets/') ?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>

<!-- AdminLTE -->
<script src="<?= base_url('assets/') ?>dist/js/adminlte.js"></script>

<!-- Custom script -->
<script src="<?= base_url('assets/') ?>dist/js/pages/dashboard.js"></script>

<!-- DateRangePicker -->

<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

<!-- Your other JavaScript links -->

<script>
$(document).ready(function() {
    // Toggle sidebar on small devices
    $('.toggle-sidebar').click(function() {
        $('body').toggleClass('sidebar-collapse');
    });
});
</script>
<script>
$(document).ready(function() {
    $('.nav-link').click(function(e) {
        var $parentNavItem = $(this).parent('.nav-item');
        var $submenu = $parentNavItem.children('.nav-treeview');
        if ($submenu.length > 0) {
            e.preventDefault();
            $parentNavItem.toggleClass(
                'menu-open');
        } else {
            return true;
        }
    });
    $('.nav-item').click(function(e) {
        e.stopPropagation();
    });
    $(document.body).click(function() {
        $('.nav-item').removeClass('menu-open');
    });
});
</script>

<script>
$(document).ready(function() {
    $('.menu-checkbox').change(function() {
        var selectedMenus = [];
        $('.menu-checkbox:checked').each(function() {
            selectedMenus.push($(this).val());
        });

        // Send AJAX request for each selected menu
        selectedMenus.forEach(function(menuId) {
            $.ajax({
                url: '<?php echo base_url("menu/get_entity_id"); ?>',
                type: 'POST',
                data: {
                    menu_id: menuId
                },
                success: function(response) {
                    var entityId = response.entity_id;
                    // Use entityId for setting permissions or further processing
                    console.log('Entity ID for Menu ' + menuId + ':', entityId);
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        });
    });
});
</script>

<!----income mobile view for data inserting ------->

<script>
var baseUrl = "<?php echo base_url(); ?>";

$(document).ready(function() {

    // $('.nextBtn').click(function() {
    //     var currentSection = $(this).closest('.section');
    //     var nextSection = currentSection.next('.section');

    //     currentSection.hide();
    //     nextSection.show();

    //     return false;
    // });
    $('.nextBtn').click(function() {
        var currentSection = $(this).closest('.section');
        var nextSection = currentSection.next('.section');
        var formData = $('#final-form').serialize();

        $.ajax({
            type: 'POST',
            url: baseUrl + 'verification/income/add_income',
            data: formData,
            success: function(response) {
                console.log('AJAX Response:', response);
                var match = response.match(/\d+/);
                var insert_id = parseInt(match[0]);
                window.location.href = baseUrl + 'verification/income/edit_income/' +
                    insert_id;
                localStorage.setItem('insertId', insert_id);
                console.log('insertId set in local storage:', insert_id);

            },
            error: function(xhr, status, error) {
                console.error('AJAX Error:', status, error);
                alert('Error occurred while saving data: ' + error);
            }
        });

        // Hide current section and show next section after the AJAX call
        currentSection.hide();
        nextSection.show();

        return false;
    });
    $('.backBtn').click(function() {
        var currentSection = $(this).closest('.section');
        var prevSection = currentSection.prev('.section');
        currentSection.hide();
        prevSection.show();
        return false;
    });

    $('.submitBtn').click(function() {
        var formData = $('#final-form').serialize();

        $.ajax({
            type: 'POST',
            url: baseUrl + 'verification/Income/add_income',
            data: formData,
            success: function(response) {
                alert('Data saved successfully!');
                window.location.href = baseUrl + 'dashboard';
            },
            error: function() {
                alert('Error occurred while saving data.');
            }
        });
        return false;
    });
});
</script>
<script>
var baseUrl = "<?php echo base_url(); ?>";

$(document).ready(function() {

    $('.nextBtn1').click(function() {
        var currentSection = $(this).closest('.section');
        var nextSection = currentSection.next('.section');

        currentSection.hide();
        nextSection.show();

        return false;
    });


    $('.backBtn1').click(function() {
        var currentSection = $(this).closest('.section');
        var prevSection = currentSection.prev('.section');
        currentSection.hide();
        prevSection.show();
        return false;
    });

    $('.submitBtn1').click(function() {
        var formData = $('#final-form1').serialize();

        $.ajax({
            type: 'POST',
            url: baseUrl + 'verification/Residence/add_residence',
            data: formData,
            success: function(response) {
                window.location.href = baseUrl + 'dashboard';
            },
            error: function() {
                alert('Error occurred while saving data.');
            }
        });
        return false;
    });
});
</script>


<!-- <script>
$('.section').not(':first').hide();
var baseUrl = "<?php echo base_url(); ?>";

$(document).ready(function() {

    $('.nextBtn2').click(function() {
        var currentSection = $(this).closest('.section');
        var nextSection = currentSection.next('.section');

        currentSection.hide();
        nextSection.show();

        return false;
    });


    $('.backBtn2').click(function() {
        var currentSection = $(this).closest('.section');
        var prevSection = currentSection.prev('.section');
        currentSection.hide();
        prevSection.show();
        return false;
    });

    $('.submitBtn2').click(function() {
        var formData = $('#final_form2').serialize();
        var_dump('formData', formData);

        $.ajax({
            type: 'POST',
            url: baseUrl + 'verification/Office/add_office',
            data: formData,
            success: function(response) {
                // alert('Data saved successfully!');
            },
            error: function() {
                alert('Error occurred while saving data.');
            }
        });
        return false;
    });
});
</script> -->
<script>
$(document).ready(function() {
    $('.section').not(':first').hide();
    var baseUrl = "<?php echo base_url(); ?>";

    $('.nextBtn2').click(function() {
        var currentSection = $(this).closest('.section');
        var nextSection = currentSection.next('.section');

        currentSection.hide();
        nextSection.show();

        return false;
    });


    $('.backBtn2').click(function() {
        var currentSection = $(this).closest('.section');
        var prevSection = currentSection.prev('.section');
        currentSection.hide();
        prevSection.show();
        return false;
    });

    $('.submitBtn2').click(function() {
        var formData = $('#final_form2').serialize();

        $.ajax({
            type: 'POST',
            url: baseUrl + 'verification/Office/add_office',
            data: formData,
            success: function(response) {

                alert('Data saved successfully!');


                window.location.href = baseUrl + 'dashboard';
            },
            error: function(xhr, status, error) {
                console.error('AJAX Error: ', status, error);
                alert(
                    'Error occurred while saving data. Please check console for details.'
                );
            }
        });
        return false;
    });

});
</script>
</body>

</html>