<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Datatable - MyGDM</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php
    echo $this->Html->image('clinician-dash/icon/favicon.ico', ['rel' => 'shortcut icon']);

    echo $this->Html->css('clinician-dash/bootstrap.min.css');
    echo $this->Html->css('clinician-dash/font-awesome.min.css');
    echo $this->Html->css('clinician-dash/themify-icon.css');
    echo $this->Html->css('clinician-dash/metisMenu.css');
    echo $this->Html->css('clinician-dash/owl.carousel.min.css');
    echo $this->Html->css('clinician-dash/slicknav.min.css');

    // style css
    echo $this->Html->css('clinician-dash/typography.css');
    echo $this->Html->css('clinician-dash/default-css.css');
    echo $this->Html->css('clinician-dash/styles.css');
    echo $this->Html->css('clinician-dash/responsive.css');

    // amcharts css
    echo $this->Html->css('https://www.amcharts.com/lib/3/plugins/export/export.css');

    // datatable css
    echo $this->Html->css('https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css');
    echo $this->Html->css('https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css');
    echo $this->Html->css('https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css');
    echo $this->Html->css('https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css');

    // modernizer css
    echo $this->Html->script('clinician-dash/vendor/modernizr-2.8.3.min.css');

    // other plugins
    echo $this->Html->script('https://kit.fontawesome.com/658395d30f.js');
    ?>


</head>

<body>


<!-- page container area start -->
<div class="page-container">
    <!-- sidebar menu area start -->
    <div class="sidebar-menu">
        <div class="sidebar-header">
            <div class="logo">
                <?php
                echo $this->Html->image('logo.png', ['alt' => 'logo', 'url' => ['controller'=>'Pages','Home' => '']]);
                ?>
            </div>
        </div>
        <div class="main-menu">
            <div class="menu-inner">
                <nav>
                    <ul class="metismenu" id="menu">
                        <li class="active">
                            <ul class="collapse">

                            </ul>
                        </li>

                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <!-- sidebar menu area end -->

    <!-- main content area start -->
    <div class="main-content">
        <!-- header area start -->
        <div class="header-area">
            <div class="row align-items-center">
                <!-- nav and search button -->
                <div class="col-md-6 col-sm-8 clearfix">
                    <div class="nav-btn pull-left">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <div class="search-box pull-left">
                        <form action="#">
                            <input type="text" name="search" placeholder="Search..." required>
                            <i class="ti-search"></i>
                        </form>
                    </div>
                </div>
                <!-- profile info & task notification -->
                <div class="col-md-6 col-sm-4 clearfix">
                    <ul class="notification-area pull-right">

                        <li class="settings-btn">
                            <i class="ti-settings"></i>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- header area end -->

        <!-- page title area start -->
        <div class="page-title-area">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <div class="breadcrumbs-area clearfix">
                        <h4 class="page-title pull-left">View Enquiry</h4>
                        <ul class="breadcrumbs pull-left">
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 clearfix">
                    <div class="user-profile pull-right">
                        <?php echo $this->Html->image('clinician-dash/author/avatar.png', ['alt'=>'avatar', 'class'=>'avatar user-thumb']); ?>
                        <h4 class="user-name dropdown-toggle" data-toggle="dropdown">Profile<i class="fa fa-angle-down"></i></h4>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Message</a>
                            <a class="dropdown-item" href="#">Settings</a>
                            <?= $this->Html->link(__('Log Out'), ['controller'=>'Users','action' => 'logout']) ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <legend><?= __('') ?></legend>

        <!-- page title area end -->
        <div class="container-fluid">

            <!-- Page Heading -->


            <legend><?= __('') ?></legend>

            <div class="col-sm-6 col-md-4">
                <div class="wow fadeInDown" data-wow-delay="0.1s">
                    <div class="widget">
                        <div class="row">
                            <aside class="column">
                                <div class="side-nav">
                                </div>
                            </aside>
                            <div class="row">
                                <aside class="column">
                                    <div class="side-nav">

                                    </div>
                                </aside>
                                <div class="row">
                                    <aside class="column">


                                    </aside>
                                    <legend><?= __('') ?></legend>

                                    <div class="row">
                                        <aside class="column">
                                            <div class="side-nav">

                                            </div>
                                        </aside>
                                        <legend><?= __('') ?></legend>

                                        <div class="row">
    <div class="column-responsive">
        <div class="enquiries view content">
            <h3>Enquiry from <b><?= h($enquiry->full_name) ?></b></h3>
            <legend><?= __('') ?></legend>
            <table>
            <tr>
                    <th><?= __('Namel') ?></th>
                    <td><?= $this->Html->link(h($enquiry->full_name), 'mailto:' . $enquiry->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= $this->Html->link(h($enquiry->email), 'mailto:' . $enquiry->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= $this->Html->link(h($enquiry->date_sent), 'mailto:' . $enquiry->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Description') ?></th>
                </tr>
                <legend><?= __('') ?></legend>
                <tr>
                    <td><?= h($enquiry->description) ?></td>
                </tr>
                <tr>
                <legend><?= __('') ?></legend>
                    <th><?= __('Content') ?></th>
                </tr>
                <legend><?= __('') ?></legend>
                <tr>
                    <td><?= h($enquiry->content) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email Sent') ?></th>
                    <td><?= $enquiry->email_sent ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <?= $this->Html->link(__('Back to Enquiries'), ['controller'=>'Enquiries','action' => 'index']) ?>
                    <legend><?= __('') ?></legend>
                    </tr>
                    </tr>

            </table>

        </div>
    </div>
</div>


                                    <!-- page container area end -->

                                    <?php
                                    // jquery latest version
                                    echo $this->Html->script('clinician-dash/vendor/jquery-2.2.4.min');

                                    // bootstrap 4 js
                                    echo $this->Html->script('clinician-dash/vendor/jquery-2.2.4.min');
                                    echo $this->Html->script('clinician-dash/popper.min');
                                    echo $this->Html->script('clinician-dash/bootstrap.min');
                                    echo $this->Html->script('clinician-dash/owl.carousel.min');
                                    echo $this->Html->script('clinician-dash/metisMenu.min');
                                    echo $this->Html->script('clinician-dash/jquery.slimscroll.min');
                                    echo $this->Html->script('clinician-dash/jquery.slicknav.min');

                                    // datatable js
                                    echo $this->Html->script('https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js');
                                    echo $this->Html->script('https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js');
                                    echo $this->Html->script('https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js');
                                    echo $this->Html->script('https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js');
                                    echo $this->Html->script('https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js');

                                    // other plugins
                                    echo $this->Html->script('clinician-dash/plugins');
                                    echo $this->Html->script('clinician-dash/scripts');

                                    ?>

</body>
</html>
