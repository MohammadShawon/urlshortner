<?php echo $__env->make('layout.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<body>

    <?php if(Session::get('note') != '' && Session::get('note_type') != ''): ?>
    <div class="alert alert-<?php echo e(Session::get('note_type')); ?> alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong><?php echo e(Session::get('note_type')); ?>!</strong> <?php echo e(Session::get('note')); ?>

    </div>
    <?php endif; ?>
    <style>
        
        input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
  -webkit-appearance: none; 
  margin: 0; 
}
    </style>
    
    <link href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet"/>
  

    <!--Start header-->
    <header class="fan-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="header">
                        <div class="header-logo float-left">
                            <a href="http://gofan.us"><img src="https://gofan.co/img/logo-gofan--one-color-black.svg" alt="header-logo" /></a>
                        </div>
                        <div class="header-url-btn float-right">
                            <a href="#" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#fanmodal">create &amp; add new urls</a>
                            <!-- ADDED NEW -->
                            <a href="#" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#add_new_school">Add New School</a>
                            <!-- ADDED NEW -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ADDED NEW -->
    <div class="modal fade" id="add_new_school" tabindex="-1" role="dialog" aria-labelledby="add_new_school" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content text-center">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="modal-tab-wrapper">
                        <h2 class="form-heading text-left py-3">add school</h2>
                        <form action="<?php echo e(Url::to('/school/add')); ?>" method="POST">
                            <?php echo e(csrf_field()); ?>

                            <div class="form-group row">
                                <label for="schoolcode" class="col-2 col-form-label">Code</label>
                                <div class="col-10">
                                    <input class="form-control" type="text" placeholder="AK13956" id="schoolcode" name="code">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="schoolname" class="col-2 col-form-label">School</label>
                                <div class="col-10">
                                    <input class="form-control" type="text" placeholder="A.J. Dimond High School" id="schoolname" name="school">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="street" class="col-2 col-form-label">Street</label>
                                <div class="col-10">
                                    <input class="form-control" type="text" placeholder="2909 W 88TH AVE" id="street" name="street">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="city" class="col-2 col-form-label">City</label>
                                <div class="col-10">
                                    <input class="form-control" type="text" placeholder="ANCHORAGE" id="city" name="city">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="state" class="col-2 col-form-label">State</label>
                                <div class="col-10">
                                    <input class="form-control" type="text" placeholder="0" id="state" name="state">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="zip" class="col-2 col-form-label">Zip</label>
                                <div class="col-10">
                                    <input class="form-control" type="text" placeholder="99950" id="zip" name="zip">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="county" class="col-2 col-form-label">County</label>
                                <div class="col-10">
                                    <input class="form-control" type="text" placeholder="Dallas" id="county" name="county">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="dma" class="col-2 col-form-label">DMA</label>
                                <div class="col-10">
                                    <input class="form-control" type="text" placeholder="Montgomery (Selma) DMA" id="dma" name="dma">
                                </div>
                            </div>
                            <div class="form-group row">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>



            </div>
        </div>
    </div>
    <!-- ADDED NEW -->
    <div class="modal fade" id="editUrl" tabindex="-1" role="dialog" aria-labelledby="editUrl" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content text-center">
            </div>
        </div>
    </div>

    <div class="modal fade" id="multipleCopy" tabindex="-1" role="dialog" aria-labelledby="editUrl" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content text-center">
            </div>
        </div>
    </div>

    <div class="modal fade" id="fanmodal" tabindex="-1" role="dialog" aria-labelledby="fanmodal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content text-center">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="modal-tab-wrapper">
                        <h2 class="form-heading text-left py-3">add events</h2>
                        <nav class="nav events-tabs nav-tabs" role="tablist">
                            <a class="tab-link float-left active p-2" id="nav-home-tab" data-toggle="tab" href="#multiple-event" role="tab">Add Multiple Events</a>
                            <a class="tab-link float-right p-2" id="nav-profile-tab" data-toggle="tab" href="#single-event" role="tab">Add One Record Manually</a>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="multiple-event" role="tabpanel">
                                <div class="multiple-event-content">
                                    <form action="<?php echo e(URL::to('url/upload')); ?>" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
                                        <div class="upload-option">
                                            <div class="box">
                                                <input type="file" name="file" id="file" class="inputfile" data-multiple-caption="{count} files selected" />
                                                <label for="file"><span></span> <strong> Browse for file</strong></label>
                                            </div>
                                        </div>
                                        <div class="panel-wrapper">
                                            <div class="panel-with-form">
                                                <div class="panel-heading text-left pt-4">
                                                    <h2 class="form-heading d-inline-block">choose campaigns</h2> <span class="sub-heading"><a href="#" id="add_var"> (Add New) </a></span>
                                                </div>

                                                <!-- Start Select Options -->
                                                <div class="add-to-campain" id="add-variation">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="one-fourth">
                                                                <div class="field-caption">
                                                                    <p>Variation name</p>
                                                                </div>
                                                                <div class="product-name-field">
                                                                    <input type="text" name="name" id="v_name">
                                                                </div>
                                                            </div>
                                                            <div class="one-fourth">
                                                                <div class="field-caption">
                                                                    <p>Source</p>
                                                                </div>
                                                                <div class="select">
                                                                    <select name="source" id="v_source">
                                                                        <option value="FacebookPost"> FacebookPost </option>
                                                                        <option value="FacebookPaid"> FacebookPaid</option>
                                                                        <option value="TwitterPost"> TwitterPost</option>
                                                                        <option value="FanBlast"> FanBlast </option>
                                                                        <option value="NDHS"> NDHS </option>
                                                                        
                                                                    </select>
                                                                </div>
                                                            </div>
															
                                                            <div class="one-fourth">
                                                                <div class="field-caption">
                                                                    <p>Medium</p>
                                                                </div>
                                                                <div class="select">
                                                                    <select name="medium" id="v_medium">
                                                                        <option value="Email"> Email</option>
                                                                        <option value="Social"> Social</option>
                                                                        <option value="School"> School</option>
                                                                        <option value="8"> *NEW* ></option>
                                                                    </select>
                                                                </div>
																
                                                            </div>
                                                            <div class="one-fourth">
                                                                <div class="field-caption">
                                                                    <p>Term</p>
                                                                </div>
                                                                <div class="select">
                                                                    <select name="social_feed" id="v_term">
                                                                        <option value="campaign"> < campaign ></option>
                                                                        <option value="event"> < event ></option>
                                                                        <option value="Home_School"> < home ></option>
                                                                        <option value="Away_School"> < away ></option>
                                                                   </select>
                                                                </div>
                                                            </div>
                                                            <input type="hidden" value="<?php echo e(csrf_token()); ?>" id="v_token" />
                                                        </div>
                                                        <button data-url="<?php echo e(URL::to('variation/add')); ?>" class="medium-btn bg-green text-white add_variation">Save</button>
                                                        <button class="medium-btn btn-danger bg-red text-white close_btn">Exit</button>
                                                    </div>
                                                </div>
                                                <!-- End Select Options -->
                                            </div>
                                            <div class="panel-body">
                                                <?php $__currentLoopData = $variations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div class="single-item <?php echo e($v->name); ?>">
                                                    <table class="my-3 content-table">
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <div class="squaredcheckbox">
                                                                        <input type="checkbox" value="1" id="squared<?php echo e($v->id); ?>" name="variation[<?php echo e($v->id); ?>]" checked="checked">
                                                                        <label for="squared<?php echo e($v->id); ?>"></label>
                                                                    </div>
                                                                </td>
                                                                <td class="text-left">
                                                                    <a href="#"> <span class="bold"><?php echo e($v->name); ?> </span> | <?php echo e($v->source); ?> | <?php echo e($v->medium); ?> | <?php echo e($v->term); ?></a>
                                                                </td>
                                                                <td class="edit"><a class="edit_btn" data-id="#f<?php echo e($v->id); ?>" href="#">&#9998;</a></td>
                                                                <td class="cross"><a class="exit_btn" href="variation/delete/<?php echo e($v->id); ?>">&#x2716;</a></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <table id="f<?php echo e($v->id); ?>" class="hidden-table">
                                                        <tbody>
                                                            <tr>
                                                                <!-- Start Select Options -->
                                                        <div class="add-to-campain hidden">
                                                            <form action="#" id="upv_<?php echo e($v->id); ?>">
                                                                <div class="container">
                                                                    <div class="row">
                                                                        <div class="one-fourth">
                                                                            <div class="field-caption">
                                                                                <p>Variation name</p>
                                                                            </div>
                                                                            <div class="product-name-field">
                                                                                <input type="text" name="name" id="vname_<?php echo e($v->id); ?>"  value="<?php echo e($v->name); ?>">
                                                                            </div>
                                                                        </div>
                                                                        <div class="one-fourth">
                                                                            <div class="field-caption">
                                                                                <p>Source</p>
                                                                            </div>
                                                                            <div class="select">
                                                                                <select name="source" id="vsource_<?php echo e($v->id); ?>">
                                                                                    <option value="FacebookPost"> FacebookPost </option>
                                                                                    <option value="FacebookPaid"> FacebookPaid</option>
                                                                                    <option value="TwitterPost"> TwitterPost</option>
                                                                                    <option value="FanBlast"> FanBlast </option>
                                                                                    <option value="NDHS"> NDHS </option>
                                                                                    <option value="HomeSchool"> HomeSchool</option>
                                                                                    <option value="AwaySchool"> AwaySchool</option>
                                                                                    <option value="12"> *NEW*</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="one-fourth">
                                                                            <div class="field-caption">
                                                                                <p>Medium</p>
                                                                            </div>
                                                                            <div class="select">
                                                                                <select name="medium" id="vmedium_<?php echo e($v->id); ?>">
                                                                                    <option value="Email"> Email</option>
                                                                                    <option value="Social"> Social</option>
                                                                                    <option value="School"> School</option>
                                                                                    <option value="8"> *NEW* ></option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="one-fourth">
                                                                            <div class="field-caption">
                                                                                <p>Term</p>
                                                                            </div>
                                                                            <div class="select">
                                                                                <select name="social_feed" id="vterm_<?php echo e($v->id); ?>">
                                                                                    <option value="campaign"> < campaign ></option>
                                                                                    <option value="event"> < event ></option>
                                                                                    <option value="Home_School"> < home ></option>
                                                                                    <option value="Away_School"> < away ></option>
                                                                                    <option value="5"> *NEW*</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <input type="hidden" value="<?php echo e($v->id); ?>" id="vid_<?php echo e($v->id); ?>" />
                                                                    <input type="hidden" value="<?php echo e(csrf_token()); ?>" id="vtoken_<?php echo e($v->id); ?>" />
                                                                    <button data-id="<?php echo e($v->id); ?>" data-url="/variation/update" class="btnUpdateVariation" class="medium-btn bg-green text-white">Save</button>
                                                                    <button class="medium-btn btn-danger bg-red text-white close_btn">Exit</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <!-- End Select Options -->
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <div class="external-links py-5">
                                                    <?php echo e(csrf_field()); ?>

                                                    <input type="submit" class="submit-btn" value="Create Urls"/>
                                                </div>
                                            </div>

                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="single-event" role="tabpanel">
                                <div class="single-event-content">

                                    <form action="<?php echo e(URL::to('url/single')); ?>" method="POST">
                                        <div class="event-form form-inline">
                                            <div class="form-group my-4">
                                                <input type="number" name="event" placeholder="EVENT">
                                                <input type="text" name="campaign" placeholder="CAMPAIGN">
                                                <input type="text" name="home" placeholder="HOME TEAM">
                                                <input type="text" name="away" placeholder="AWAY TEAM">
                                            </div>
                                            <!--button type="submit" class="submit-btn">Add Event</button -->
                                        </div>

                                        <div class="panel-wrapper">
                                            <div class="panel-with-form">
                                                <div class="panel-heading text-left pt-4">
                                                    <h2 class="form-heading d-inline-block">choose campaigns</h2> <span class="sub-heading"><a href="#" id="add_varb"> (Add New) </a></span>
                                                </div>
                                                <!-- Start Select Options -->
                                                <div class="add-to-campain" id="add-variationb">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="one-fourth">
                                                                <div class="field-caption">
                                                                    <p>Variation name</p>
                                                                </div>
                                                                <div class="product-name-field">
                                                                    <input type="text" name="name" id="vb_name">
                                                                </div>
                                                            </div>
                                                            <div class="one-fourth">
                                                                <div class="field-caption">
                                                                    <p>Source</p>
                                                                </div>
                                                                <div class="select">
                                                                    <select name="source" id="vb_source">
                                                                        <option value="FacebookPost"> FacebookPost </option>
                                                                        <option value="FacebookPaid"> FacebookPaid</option>
                                                                        <option value="TwitterPost"> TwitterPost</option>
                                                                        <option value="FanBlast"> FanBlast </option>
                                                                        <option value="NDHS"> NDHS </option>
                                                                        <option value="HomeSchool"> HomeSchool</option>
                                                                        <option value="AwaySchool"> AwaySchool</option>
                                                                        <option value="12"> *NEW*</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="one-fourth">
                                                                <div class="field-caption">
                                                                    <p>Medium</p>
                                                                </div>
                                                                <div class="select">
                                                                    <select name="medium" id="vb_medium">
                                                                        <option value="Email"> Email</option>
                                                                        <option value="Social"> Social</option>
                                                                        <option value="School"> School</option>
                                                                        <option value="8"> *NEW* ></option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="one-fourth">
                                                                <div class="field-caption">
                                                                    <p>Term</p>
                                                                </div>
                                                                <div class="select">
                                                                    <select name="social_feed" id="vb_term">
                                                                        <option value="campaign"> < campaign ></option>
                                                                        <option value="event"> < event ></option>
                                                                        <option value="Home_School"> < home ></option>
                                                                        <option value="Away_School"> < away ></option>
                                                                        <option value="5"> *NEW*</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <input type="hidden" value="<?php echo e(csrf_token()); ?>" id="vb_token" />
                                                        </div>
                                                        <button data-url="<?php echo e(URL::to('variation/add')); ?>" class="medium-btn bg-green text-white add_variationb">Save</button>
                                                        <button class="medium-btn btn-danger bg-red text-white close_btn">Exit</button>
                                                    </div>
                                                </div>
                                                <!-- End Select Options -->
                                            </div>
                                            <div class="panel-body">
                                                <?php $__currentLoopData = $variations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div class="single-item <?php echo e($v->name); ?>">
                                                    <table class="my-3 content-table">
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <div class="squaredcheckbox">
                                                                        <input type="checkbox" value="1" id="squaredr<?php echo e($v->id); ?>" name="variations[<?php echo e($v->id); ?>] " checked="checked">
                                                                        <label for="squaredr<?php echo e($v->id); ?>"></label>
                                                                    </div>
                                                                </td>
                                                                <td class="text-left">
                                                                    <a href="#"> <span class="bold"><?php echo e($v->name); ?> </span> | <?php echo e($v->source); ?> | <?php echo e($v->medium); ?> | <?php echo e($v->term); ?></a>
                                                                </td>
                                                                <td class="edit"><a class="edit_btn" data-id="#ff<?php echo e($v->id); ?>" href="#">&#9998;</a></td>
                                                                <td class="cross"><a class="exit_btn" href="variation/delete/<?php echo e($v->id); ?>">&#x2716;</a></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <table id="ff<?php echo e($v->id); ?>" class="hidden-table">
                                                        <tbody>
                                                            <tr>
                                                                <!-- Start Select Options -->
                                                        <div class="add-to-campain hidden">
                                                            <form action="#" id="upvv_<?php echo e($v->id); ?>">
                                                                <div class="container">
                                                                    <div class="row">
                                                                        <div class="one-fourth">
                                                                            <div class="field-caption">
                                                                                <p>Variation name</p>
                                                                            </div>
                                                                            <div class="product-name-field">
                                                                                <input type="text" name="name" id="product_name"  value="<?php echo e($v->name); ?>">
                                                                            </div>
                                                                        </div>
                                                                        <div class="one-fourth">
                                                                            <div class="field-caption">
                                                                                <p>Source</p>
                                                                            </div>
                                                                            <div class="select">
                                                                                <select name="source" id="facebook_post">
                                                                                    <option value="FacebookPost"> FacebookPost </option>
                                                                                    <option value="FacebookPaid"> FacebookPaid</option>
                                                                                    <option value="TwitterPost"> TwitterPost</option>
                                                                                    <option value="FanBlast"> FanBlast </option>
                                                                                    <option value="NDHS"> NDHS </option>
                                                                                    <option value="HomeSchool"> HomeSchool</option>
                                                                                    <option value="AwaySchool"> AwaySchool</option>
                                                                                    <option value="12"> *NEW*</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="one-fourth">
                                                                            <div class="field-caption">
                                                                                <p>Medium</p>
                                                                            </div>
                                                                            <div class="select">
                                                                                <select name="medium">
                                                                                    <option value="Email"> Email</option>
                                                                                    <option value="Social"> Social</option>
                                                                                    <option value="School"> School</option>
                                                                                    <option value="8"> *NEW* ></option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="one-fourth">
                                                                            <div class="field-caption">
                                                                                <p>Term</p>
                                                                            </div>
                                                                            <div class="select">
                                                                                <select name="social_feed">
                                                                                    <option value="campaign"> < campaign ></option>
                                                                                    <option value="event"> < event ></option>
                                                                                    <option value="Home_School"> < home ></option>
                                                                                    <option value="Away_School"> < away ></option>
                                                                                    <option value="5"> *NEW*</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <button data-id="<?php echo e($v->id); ?>" class="btnUpdateVariation" type="submit" class="medium-btn bg-green text-white">Save</button>
                                                                    <button class="medium-btn btn-danger bg-red text-white close_btn">Exit</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <!-- End Select Options -->
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <div class="external-links py-5">
                                                    <?php echo e(csrf_field()); ?>

                                                    <input type="submit" class="submit-btn" value="Create Urls"/>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div></div>
        </div>
    </div>

    <!--End header-->
    <!-- Start filter -->
    <div class="fan-filter">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form class="filter-form" method="GET" action="<?php echo e($filter_route); ?>" accept-charset="UTF-8">
                        <div class="filter-top">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="filter-title">
                                        <h2>available filter</h2>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="filter-range input-group">
                                        <label for="demo">date range</label>
                                        <input name="range" type="text" id="demo" class="form-control form-control-lg"  placeholder="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="filter-bottom">

                            <div class="input-group">
                                <input name="campaign" type="text" value="<?php if(isset($filters['campaign'])): ?><?php echo e($filters['campaign']); ?> <?php endif; ?>" class="form-control form-control-lg" placeholder="Campaign" />
                            </div>
                            <div class="input-group">
                                <input name="source" type="text" value="<?php if(isset($filters['source'])): ?><?php echo e($filters['source']); ?> <?php endif; ?>" class="form-control form-control-lg" placeholder="Source" />
                            </div>
                            <div class="input-group">
                                <input name="medium" type="text" value="<?php if(isset($filters['medium'])): ?><?php echo e($filters['medium']); ?> <?php endif; ?>" class="form-control form-control-lg" placeholder="Medium" />
                            </div>
                            <div class="input-group">
                                <input name="school" type="text" value="<?php if(isset($filters['home'])): ?><?php echo e($filters['home']); ?> <?php endif; ?>" class="form-control form-control-lg" placeholder="School" />
                            </div>
                            <div class="input-group">
                                <input name="event" type="text" value="<?php if(isset($filters['number'])): ?><?php echo e($filters['number']); ?> <?php endif; ?>" class="form-control form-control-lg" placeholder="event" />
                            </div>
                            <button class="btn btn-primary btn-lg" type="submit">Filter results</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End filter -->
    <!-- Start select -->
    <div class="fan-select">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="select">
                        <!--  <div class="select-menu-group float-left">
                              <select>
                                  <option value="Name">Name</option>
                                  <option value="Source">Source</option>
                                  <option value="Medium">Medium</option>
                                  <option value="Term">Term</option>
                              </select>
                          </div> -->
                        <div class="select-menu-main float-left">
                            <div class="select-menu"><a id="delete_select" href="#" data-url="url/delete/select" class="btn btn-primary btn-lg">delete results</a></div>
                            <div class="select-menu"><a id="export_select"  href="#" data-url="<?php echo e(URL::to('url/export/select')); ?>" class="btn btn-success btn-lg">export results</a></div>
                            <div class="select-menu"><a  id="copy_select" href="#"  data-url="<?php echo e(URL::to('url/copy/select')); ?>" class="btn btn-danger btn-lg">copy results</a></div>
                            <div class="select-menu"><a  id="select_all" href="#" class="btn btn-info btn-lg">select all results</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End select -->
    <!-- Start table -->
    
    <br><br>
    <div class="fan-table">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    
                    
                    <div class="table">
                        <table class="table" id="variations">
                            <thead> <tr> 
                            <th>  </th> <th>  </th> <th>  </th>
                            
                            <th>  </th>
                            <th>  </th>
                            
                            </tr> </thead>
                            <tbody>
                                
                                 
                                    <form id="form_urls" name="urls" method="POST"  action="">
                                <?php echo e(csrf_field()); ?> 
                                <?php $__currentLoopData = $campaigns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td>
                                        <div class="squaredcheckbox">
                                            <input class="docheck" type="checkbox" value="None" id="squared_<?php echo e($c->id); ?>" name="urls[<?php echo e($c->id); ?>]" />
                                            <label for="squared_<?php echo e($c->id); ?>"></label>
                                        </div>
                                    </td>
                                    <td class="table-select"><a class="copyUrl" data-content="<?php echo e($c->shorts); ?>" href="#"><img src="images/select.png" alt="#" /></a></td>
                                    <td class="table-grid"><a class="edit_url" data-toggle="modal" data-target="#editUrl" href="<?php echo e(URL::to('url/edit') . '/' . $c->id); ?>"><img src="images/grid.png" alt="#" /></a></td>
                                    <td class="table-text"><?php if(isset($c->event->away->school)){ echo $c->event->away->school; } ?> at <?php if(isset($c->event->home->school)){ echo $c->event->home->school; } ?>| <?php if(isset($c->variation->name)) { echo $c->variation->name; }  ?> | <a href="<?php echo e($c->shorts); ?>"> <?php echo e($c->shorts); ?></a> --> <a href="<?php echo e($c->longs); ?>"><?php echo e(App\Helper\CampaignHelper::shorten($c->longs, 40)); ?> </a></td>
                                    <td class="close"><a class="delete" href="<?php echo e(URL::to('url/delete') . '/' . $c->id); ?>"><img src="images/close.png" alt="#" /></a></td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </form>
                                     
                                 
                                
                                
                            </tbody>
                            <tfoot>
                                <tr> 
                            <th>  </th> <th>  </th> <th>  </th>
                            
                            <th>  </th>
                            <th>  </th>
                            
                            </tr>
                                
                            </tfoot>
                           
                        </table>
                    </div>
                </div>
                <!--<div class="col-md-12">
                    
                </div>-->
            </div>
        </div>
    </div>
     

    <!-- End table -->
    <?php echo $__env->make('layout.foot', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    
  
    <script src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.0/js/dataTables.buttons.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
    <script src="//cdn.datatables.net/buttons/1.5.0/js/buttons.print.min.js"></script>
    <script src="//cdn.datatables.net/buttons/1.5.0/js/buttons.html5.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"> </script>
    <script src="//cdn.datatables.net/buttons/1.5.0/js/buttons.flash.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"> </script>
    
    
    <script>
    var count=0;
  
 
   
   
       // alert("Called");
    var table=$('#variations').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
    
        
      

</script>