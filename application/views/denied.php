<?php $this->load->view('includes/header'); ?>
<div class="content-wrapper">
    <!-- Your content goes here -->
</div>

<script>
if (document.body.textContent.includes('Access Denied')) {

    alert('Access Denied: You do not have permission to view this page.');
}
</script>

<?php $this->load->view('includes/footer'); ?>