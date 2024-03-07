    <?php $this->load->view('includes/header') ?>

    <div class="content-wrapper">

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Assign Audits</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Audits</a></li>
                            <li class="breadcrumb-item active">New</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>


        <section class="content">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-md-12">

                        <div class="card card-default">
                            <div class="card-header">
                                <h3 class="card-title">Assign <small>Audits</small></h3>
                            </div>

                            <form role="form" enctype="multipart/form-data" id="quickForm" name="myForm"
                                action="<?php echo base_url( )?>Audits/insert" method="post">
                                <div class="card-body row">
                                    <div class="form-group col-md-4">
                                        <label for="fullname">Assign to</label>
                                        <input type="text" name="fullname" class="form-control" id="fullname"
                                            placeholder="Shiva Kumar" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="email">type</label>
                                        <input type="text" name="email" class="form-control" id="email"
                                            placeholder="demo@gmail.com" required>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="mobile_no">Contact Infomation</label>
                                        <input type="text" name="mobile_no" class="form-control" id="mobile_no"
                                            placeholder="91XXXXXXXX" required>
                                    </div>

                                </div>

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>

                    </div>

                    <div class="col-md-6">

                    </div>

                </div>

            </div>
        </section>

    </div>
    <?php $this->load->view('includes/footer') ?>