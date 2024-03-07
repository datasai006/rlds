  <?php $this->load->view('includes/header') ?>
  <?php $this->load->view('includes/sidebar') ?>
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
          <div class="container-fluid">
              <div class="row mb-2">
                  <div class="col-sm-6">
                      <h1>New Menu </h1>
                  </div>
                  <div class="col-sm-6">
                      <ol class="breadcrumb float-sm-right">
                          <li class="breadcrumb-item"><a href="#">Home</a></li>
                          <li class="breadcrumb-item"><a href="#">Menu</a></li>
                          <li class="breadcrumb-item active">New</li>
                      </ol>
                  </div>
              </div>
          </div>
      </section>
      <section>
          <div class="row p-3">
              <div class="col-sm-4">
                  <div class="card">
                      <div class="card-body">
                          <form role="form" enctype="multipart/form-data" id="quickForm" name="myForm"
                              action="<?php echo base_url( )?>Menu/add" method="post">
                              <div class="row">
                                  <div class="form-group col-md-12">
                                      <label for="menu_level">Menu Level</label>
                                      <input type="text" name="menu_level" class="form-control" id="menu_level"
                                          placeholder="1" required>
                                  </div>
                                  <!-- <div class="form-group col-md-12">
                                      <label for="menu_id">Menu Id</label>
                                      <input type="text" name="menu_id" class="form-control" id="menu_id"
                                          placeholder="rach" required>
                                  </div> -->
                                  <div class="form-group col-md-12">
                                      <label for="entity_id">Entity</label>
                                      <select name="entity_id" class="form-control" id="entity_id">
                                          <option value="">Select Entity</option>
                                          <?php foreach ($entities as $entity): ?>
                                          <option value="<?= $entity['id'] ?>"><?= $entity['name'] ?></option>
                                          <?php endforeach; ?>
                                      </select>
                                  </div>
                                  <div class="form-group col-md-12">
                                      <label for="name">Name</label>
                                      <input type="text" name="name" class="form-control" id="name"
                                          placeholder="menu name" required>
                                  </div>
                                  <div class="form-group col-md-12">
                                      <label for="menu_icon">Menu Icon</label>
                                      <input type="varchar" name="menu_icon" class="form-control" id="password"
                                          placeholder="fa fa icons" required>
                                  </div>
                                  <div class="form-group col-md-12">
                                      <label for="menu_link">Menu Link</label>
                                      <input type="link" name="menu_link" class="form-control" id="menu_link"
                                          placeholder="/Dashboard" required>
                                  </div>
                                  <div class="form-group col-md-12">
                                      <label for="parent_id">Parent Id </label>
                                      <?php if (empty($menuslevel)): ?>
                                      <input type="text" name="parent_id" class="form-control"
                                          placeholder="Enter Parent ID" required>
                                      <?php else: ?>
                                      <select name="parent_id" class="form-control" required>
                                          <option value="">Select Parent ID</option>
                                          <option value="0">null</option>
                                          <?php foreach ($menuslevel as $menu): ?>
                                          <option value="<?php echo $menu['menu_id']; ?>"><?php echo $menu['name']; ?>
                                          </option>
                                          <?php // Check if the current menu has children and add them to the dropdown ?>
                                          <?php foreach ($menu['children'] as $child): ?>
                                          <option value="<?php echo $child['menu_id']; ?>">
                                              &nbsp;&nbsp;<?php echo $child['name']; ?></option>
                                          <?php endforeach; ?>
                                          <?php endforeach; ?>
                                      </select>
                                      <?php endif; ?>
                                  </div>
                              </div>
                              <div class="card-footer">
                                  <button type="submit" class="btn btn-primary">Submit</button>
                              </div>
                          </form>

                      </div>
                  </div>
              </div>
              <div class="col-sm-8">
                  <div class="card">
                      <div class="card-body">
                          <div class="card-box table-responsive">
                              <h4 class="m-t-0 header-title">
                                  <b> </b>
                              </h4>
                              <div class="d-flex">
                                  <div class="col-sm-12 col-md-6 p-3">
                                      <div class="dt-buttons btn-group flex-wrap">
                                          <button class="btn btn-secondary buttons-copy buttons-html5" tabindex="0"
                                              aria-controls="example1" type="button">
                                              <span>Copy</span>
                                          </button>
                                          <button class="btn btn-secondary buttons-csv buttons-html5" tabindex="0"
                                              aria-controls="example1" type="button">
                                              <span>CSV</span>
                                          </button>
                                          <button class="btn btn-secondary buttons-excel buttons-html5" tabindex="0"
                                              aria-controls="example1" type="button">
                                              <span>Excel</span>
                                          </button>
                                          <button class="btn btn-secondary buttons-pdf buttons-html5" tabindex="0"
                                              aria-controls="example1" type="button">
                                              <span>PDF</span>
                                          </button>
                                          <button class="btn btn-secondary buttons-print" tabindex="0"
                                              aria-controls="example1" type="button">
                                              <span>Print</span>
                                          </button>
                                      </div>
                                  </div>
                                  <label class="pl-5">search :
                                      <div class="form-inline">
                                          <input class="form-control form-control-sm" type="search" placeholder
                                              aria-contral="example1" />
                                      </div>
                                  </label>
                              </div>
                              <div class="overflow"></div>
                              <div class="p-3">
                                  <table class="table table-bordered">
                                      <thead>
                                          <tr>
                                              <!-- <th scope="col">SI.NO</th> -->
                                              <th scope="col">Menu Level</th>
                                              <th scope="col">Menu Id</th>
                                              <th scope="col">Name</th>
                                              <th scope="col">Menu Icon</th>
                                              <th scope="col">Menu Link</th>
                                              <th scope="col">parent id</th>
                                              <th scope="col">Action</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                          <?php foreach ($menus as $menu) { ?>
                                          <tr>
                                              <!-- <td><?php echo $menu['id']; ?></td> -->
                                              <td>
                                                  <h6><?php echo $menu['menu_level']; ?></h6>
                                              </td>
                                              <td>
                                                  <h6><?php echo $menu['menu_id']; ?></h6>
                                              </td>
                                              <td><?php echo $menu['name']; ?></td>
                                              <td><?php echo $menu['menu_icon']?></td>
                                              <td><?php echo $menu['menu_link']?></td>
                                              <td><?php echo $menu['parent_id']?></td>
                                              <td style="color: blue">
                                                  <!-- <a href="#"><i class="bi bi-printer"></i></a> | -->
                                                  <a href="<?= base_url() ?>Menu/update/<?= $menu['id'] ?>"><i
                                                          class="bi bi-pencil-square"></i></a> |
                                                  <a href="<?= base_url() ?>Menu/delete_menu/<?= $menu['id'] ?>"><i
                                                          class="bi bi-trash3"></i></a>
                                              </td>
                                          </tr>
                                          <?php } ?>
                                      </tbody>
                                  </table>
                              </div>
                              <div class="row p-3">
                                  <div class="col-sm-12 col-md-5">
                                      <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">
                                          Showing 1 to 10 of 929 entries
                                      </div>
                                  </div>
                                  <div class="col-sm-12 col-md-7">
                                      <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                                          <ul class="pagination">
                                              <li class="paginate_button page-item previous disabled"
                                                  id="example1_previous">
                                                  <a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0"
                                                      class="page-link">Previous</a>
                                              </li>
                                              <li class="paginate_button page-item active">
                                                  <a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0"
                                                      class="page-link">1</a>
                                              </li>
                                              <li class="paginate_button page-item">
                                                  <a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0"
                                                      class="page-link">2</a>
                                              </li>
                                              <li class="paginate_button page-item">
                                                  <a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0"
                                                      class="page-link">3</a>
                                              </li>
                                              <li class="paginate_button page-item">
                                                  <a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0"
                                                      class="page-link">4</a>
                                              </li>
                                              <li class="paginate_button page-item">
                                                  <a href="#" aria-controls="example1" data-dt-idx="5" tabindex="0"
                                                      class="page-link">5</a>
                                              </li>
                                              <li class="paginate_button page-item next" id="example1_next">
                                                  <a href="#" aria-controls="example1" data-dt-idx="8" tabindex="0"
                                                      class="page-link">Next</a>
                                              </li>
                                          </ul>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
  </div>
  <?php $this->load->view('includes/footer') ?>