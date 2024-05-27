<!-- <aside class="main-sidebar sidebar-dark-primary elevation-4">

    <a href="index3.html" class="brand-link">
        <img src="<?=base_url('assets/')?>dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: 0.8" />
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>


    <div class="sidebar">

        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?=base_url('assets/')?>dist/img/user2-160x160.jpg" class="img-circle elevation-2"
                    alt="User Image" />
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item ">
                    <a href="<?=base_url()?>Dashboard" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>

                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fa-solid fa-users"></i>
                        <p>
                            Manage Employee
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?=base_url()?>Employee/Employe/add_employee" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Employee</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?=base_url()?>Employee/Employe/view_employee" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>View Employee</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?=base_url()?>roles/Rolesass" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>assign roles</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fa fa-cog" aria-hidden="true"></i>
                        <p>
                            Manage Settings
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?=base_url()?>Code_values" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Manage Code Values</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?=base_url()?>Code_types" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Manage Code Types</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon far fa-envelope"></i>
                                <p>
                                    manage roles
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>

                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?=base_url()?>roles/Rolesmanage" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>add roles</p>
                                    </a>
                                </li>

                            </ul>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa fa-print" aria-hidden="true"></i>
                                <p>
                                    manage audits
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>

                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?=base_url()?>Audits" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>add audits</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?=base_url()?>Audits" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>view audits</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon far fa-envelope"></i>
                                <p>
                                    manage menu
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>

                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?=base_url()?>Menu/add" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>add menu</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?=base_url()?>Menu" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>view menu</p>
                                    </a>
                                </li>

                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fa fa-check-circle"></i>
                        <p>
                            Manage Work
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon far fa-envelope"></i>
                                <p>
                                    income verification
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>

                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?=base_url()?>verification/Income" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>audit </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?=base_url()?>verification/Income/view_income_data" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>view audits</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon far fa-envelope"></i>
                                <p>
                                    residence verification
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>

                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?=base_url()?>verification/Residence" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>audit</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?=base_url()?>verification/Residence/view_residence_data"
                                        class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>view audits</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon far fa-envelope"></i>
                                <p>
                                    office verification
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>

                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?=base_url()?>verification/Office" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>audit</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?=base_url()?>verification/Office/view_office_data" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>view audits</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon far fa-envelope"></i>
                                <p>
                                    Audits
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>

                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?=base_url()?>verification/Office" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>assign audits</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?=base_url()?>verification/Office/view_office_data" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>view all Audits</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?=base_url()?>verification/Office/view_office_data" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>approved audits</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?=base_url()?>verification/Office/view_office_data" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>pending audits</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?=base_url()?>verification/Office/view_office_data" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>rejected audits</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>

                </li>

            </ul>
        </nav>
    </div>
</aside> -->


<!-- <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="index3.html" class="brand-link">
        <img src="<?= base_url('assets/') ?>dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: 0.8" />
        <span class="brand-text font-weight-light">RLDS</span>
    </a>
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?= base_url('assets/') ?>dist/img/user2-160x160.jpg" class="img-circle elevation-2"
                    alt="User Image" />
            </div>
            <div class="info">
                <a href="#" class="d-block"><?= $this->session->userdata('LoginSession')['username'] ?></a>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" aria-labelledby="dropdownMenu" data-widget="treeview"
                role="menu" data-accordion="false">
                <?php foreach ($menus as $item): ?>
                <?php if ($item['parent_id'] == 0): ?>
                <li class="nav-item has-treeview">
                    <a href="<?= base_url($item['menu_link']) ?>" class="nav-link">
                        <i class="nav-icon <?= $item['menu_icon'] ?>"></i>
                        <p>
                            <?= $item['name'] ?>
                            <?php if ($this->MenuModel->has_grandchildren($item['id'])): ?>
                            <i class="fas fa-angle-left right"></i>
                            <?php endif; ?>
                        </p>
                    </a>
                    <?php $children = $this->MenuModel->get_children($item['id']); ?>
                    <?php if (!empty($children)): ?>
                    <ul class="nav  flex-column  nav-pills nav-sidebar nav-treeview" aria-labelledby="dropdownMenu"
                        data-widget="treeview" role="menu" data-accordion="false">
                        <?php foreach ($children as $child): ?>
                        <li class="nav-item has-treeview">
                            <a href="<?= base_url($child['menu_link']) ?>" class="nav-link">
                                <i class="nav-icon <?= $child['menu_icon'] ?>"></i>
                                <p>
                                    <?= $child['name'] ?>
                                    <?php if ($this->MenuModel->has_grandchildren($child['id'])): ?>
                                    <i class="fas fa-angle-left right"></i>
                                    <?php endif; ?>
                                </p>
                            </a>
                            <?php $grandchildren = $this->MenuModel->get_children($child['id']); ?>
                            <?php if (!empty($grandchildren)): ?>
                            <ul class="nav  flex-column  nav-pills nav-sidebar nav-treeview"
                                aria-labelledby="dropdownMenu" data-widget="treeview" role="menu"
                                data-accordion="false">
                                <?php foreach ($grandchildren as $grandchild): ?>
                                <li class="nav-item has-treeview">
                                    <a href="<?= base_url($grandchild['menu_link']) ?>" class="nav-link">
                                        <i class="nav-icon <?= $grandchild['menu_icon'] ?>"></i>
                                        <p><?= $grandchild['name'] ?></p>
                                    </a>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                            <?php endif; ?>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                    <?php endif; ?>
                </li>
                <?php endif; ?>
                <?php endforeach; ?>
            </ul>
        </nav>
    </div>
</aside> -->

<!-- <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="index3.html" class="brand-link">
        <img src="<?= base_url('assets/') ?>dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: 0.8" />
        <span class="brand-text font-weight-light">RLDS</span>
    </a>
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?= base_url('assets/') ?>dist/img/user2-160x160.jpg" class="img-circle elevation-2"
                    alt="User Image" />
            </div>
            <div class="info">
                <a href="#" class="d-block"><?= $this->session->userdata('LoginSession')['username'] ?></a>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" aria-labelledby="dropdownMenu" data-widget="treeview"
                role="menu" data-accordion="false">
                <?php foreach ($menus as $item): ?>
                <?php if ($item['parent_id'] == 0 && $this->MenuModel->check_permission($item['id'], $role_id)): ?>
                <li class="nav-item has-treeview">
                    <a href="<?= base_url($item['menu_link']) ?>" class="nav-link">
                        <i class="nav-icon <?= $item['menu_icon'] ?>"></i>
                        <p>
                            <?= $item['name'] ?>
                            <?php if ($this->MenuModel->has_grandchildren($item['id'])): ?>
                            <i class="fas fa-angle-left right"></i>
                            <?php endif; ?>
                        </p>
                    </a>
                    <?php $children = $this->MenuModel->get_children($item['id']); ?>
                    <?php if (!empty($children)): ?>
                    <ul class="nav flex-column nav-pills nav-sidebar nav-treeview" aria-labelledby="dropdownMenu"
                        data-widget="treeview" role="menu" data-accordion="false">
                        <?php foreach ($children as $child): ?>
                        <?php if ($this->MenuModel->check_permission($child['id'], $role_id)): ?>
                        <li class="nav-item has-treeview">
                            <a href="<?= base_url($child['menu_link']) ?>" class="nav-link">
                                <i class="nav-icon <?= $child['menu_icon'] ?>"></i>
                                <p>
                                    <?= $child['name'] ?>
                                    <?php if ($this->MenuModel->has_grandchildren($child['id'])): ?>
                                    <i class="fas fa-angle-left right"></i>
                                    <?php endif; ?>
                                </p>
                            </a>
                            <?php $grandchildren = $this->MenuModel->get_children($child['id']); ?>
                            <?php if (!empty($grandchildren)): ?>
                            <ul class="nav flex-column nav-pills nav-sidebar nav-treeview"
                                aria-labelledby="dropdownMenu" data-widget="treeview" role="menu"
                                data-accordion="false">
                                <?php foreach ($grandchildren as $grandchild): ?>
                                <?php if ($this->MenuModel->check_permission($grandchild['id'], $role_id)): ?>
                                <li class="nav-item has-treeview">
                                    <a href="<?= base_url($grandchild['menu_link']) ?>" class="nav-link">
                                        <i class="nav-icon <?= $grandchild['menu_icon'] ?>"></i>
                                        <p><?= $grandchild['name'] ?></p>
                                    </a>
                                </li>
                                <?php endif; ?>
                                <?php endforeach; ?>
                            </ul>
                            <?php endif; ?>
                        </li>
                        <?php endif; ?>
                        <?php endforeach; ?>
                    </ul>
                    <?php endif; ?>
                </li>
                <?php endif; ?>
                <?php endforeach; ?>
            </ul>
        </nav>
    </div>
</aside> -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?= base_url('assets/') ?>dist/img/user2-160x160.jpg" class="img-circle elevation-2"
                    alt="User Image" />
            </div>
            <div class="info">
                <a href="#" class="d-block"><?= $this->session->userdata('LoginSession')['username'] ?></a>
            </div>
        </div>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <?php foreach ($menus as $item): ?>
                <?php if (is_array($item) && isset($item['parent_id']) && $item['parent_id'] == 0): ?>
                <?php if ($this->MenuModel->has_permission($item['menu_id'], $this->session->userdata('LoginSession')['id'])): ?>
                <li class="nav-item has-treeview">
                    <a href="<?= base_url($item['menu_link']) ?>" class="nav-link">
                        <i class="nav-icon <?= $item['menu_icon'] ?>"></i>
                        <p>
                            <?= $item['name'] ?>
                            <?php if ($this->MenuModel->has_grandchildren($item['menu_id'])): ?>
                            <i class="fas fa-angle-left right"></i>
                            <?php endif; ?>
                        </p>
                    </a>
                    <?php $children = $this->MenuModel->get_children($item['menu_id']); ?>
                    <?php if (!empty($children)): ?>
                    <ul class="nav nav-treeview">
                        <?php foreach ($children as $child): ?>
                        <?php if ($this->MenuModel->has_permission($child['menu_id'], $this->session->userdata('LoginSession')['id'])): ?>
                        <li class="nav-item has-treeview">
                            <a href="<?= base_url($child['menu_link']) ?>" class="nav-link">
                                <i class="nav-icon <?= $child['menu_icon'] ?>"></i>
                                <p>
                                    <?= $child['name'] ?>
                                    <?php if ($this->MenuModel->has_grandchildren($child['menu_id'])): ?>
                                    <i class="fas fa-angle-left right"></i>
                                    <?php endif; ?>
                                </p>
                            </a>
                            <?php $grandchildren = $this->MenuModel->get_children($child['menu_id']); ?>
                            <?php if (!empty($grandchildren)): ?>
                            <ul class="nav nav-treeview">
                                <?php foreach ($grandchildren as $grandchild): ?>
                                <?php if ($this->MenuModel->has_permission($grandchild['menu_id'], $this->session->userdata('LoginSession')['id'])): ?>
                                <li class="nav-item">
                                    <a href="<?= base_url($grandchild['menu_link']) ?>" class="nav-link">
                                        <i class="nav-icon <?= $grandchild['menu_icon'] ?>"></i>
                                        <p><?= $grandchild['name'] ?></p>
                                    </a>
                                </li>
                                <?php endif; ?>
                                <?php endforeach; ?>
                            </ul>
                            <?php endif; ?>
                        </li>
                        <?php endif; ?>
                        <?php endforeach; ?>
                    </ul>
                    <?php endif; ?>
                </li>
                <?php endif; ?>
                <?php endif; ?>
                <?php endforeach; ?>
            </ul>
        </nav>
    </div>
</aside>