<footer class="main-footer">
    <strong>Copyright &copy; 2014-2021
        <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.2.0
    </div>
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/3.1.0/daterangepicker.min.js"></script>

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

</body>

</html>