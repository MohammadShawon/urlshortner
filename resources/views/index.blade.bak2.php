@include('layout.head')
<body>
    <!--Start header-->
    <header class="fan-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="header">
                        <div class="header-logo float-left">
                            <a href="http://gofan.us"><img src="images/header-logo.jpg" alt="header-logo" /></a>
                        </div>
                        <div class="header-url-btn float-right">
                            <a href="#" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#fanmodal">create &amp; add new urls</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

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
                                <div class="upload-option">
                                    <form action="#">
                                        <div class="box">
                                            <input type="file" name="file" id="file" class="inputfile" data-multiple-caption="{count} files selected" multiple />
                                            <label for="file"><span></span> <strong> browser for file</strong></label>
                                        </div>
                                    <button type="submit" class="submit-btn">Upload</button>
                                    </form>
                                </div>
                                    <div class="panel-wrapper">
                                        <div class="panel-with-form"> 
                                        <div class="panel-heading text-left pt-4">
                                            <h2 class="form-heading d-inline-block">choose campaigns</h2> <span class="sub-heading"><a href="#"> (Add New) </a></span>
                                        </div>

                                           <!-- Start Select Options -->
                                            <div class="add-to-campain">
                                                <form action="#"> 
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="one-fourth">
                                                        <div class="field-caption">
                                                            <p>Variation name</p>
                                                        </div>
                                                        <div class="product-name-field">
                                                           <input type="text" name="product_name" id="product_name">
                                                        </div>
                                                        </div>
                                                        <div class="one-fourth">
                                                        <div class="field-caption">
                                                            <p>Source</p>
                                                        </div>                                                        
                                                           <div class="select">
                                                            <select name="facebook_post" id="facebook_post">
                                                                <option value="1"> FacebookPost </option>
                                                                <option value="2"> FacebookPaid</option>
                                                                <option value="3"> TwitterPost</option>
                                                                <option value="4"> FanBlast </option>
                                                                <option value="5"> NDHS </option>
                                                                <option value="6"> HomeSchool</option>
                                                                <option value="7"> AwaySchool</option>
                                                                <option value="8"> < campaign ></option>
                                                                <option value="9"> < event ></option>
                                                                <option value="10"> < home ></option>
                                                                <option value="11"> < away ></option>
                                                                <option value="12"> *NEW*</option>
                                                            </select>
                                                           </div>
                                                        </div>
                                                        <div class="one-fourth">
                                                        <div class="field-caption">
                                                            <p>Medium</p>
                                                        </div>                                                        
                                                          <div class="select">
                                                           <select name="twitter_post">
                                                                <option value="1"> Email</option>
                                                                <option value="2"> Social</option>
                                                                <option value="3"> School</option>
                                                                <option value="4"> < campaign ></option>
                                                                <option value="5"> < event ></option>
                                                                <option value="6"> < home ></option>
                                                                <option value="7"> < away ></option>
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
                                                                <option value="1"> < campaign ></option>
                                                                <option value="2"> < event ></option>
                                                                <option value="3"> < home ></option>
                                                                <option value="4"> < away ></option>
                                                                <option value="5"> *NEW*</option>
                                                            </select>
                                                         </div>
                                                        </div>
                                                    </div>
                                                    <button type="submit" class="medium-btn bg-green text-white">Save</button>
                                                    <button class="medium-btn btn-danger bg-red text-white close_btn">Exit</button>
                                                  </div>
                                                </form>
                                            </div>
                                            <!-- End Select Options --> 
                                            </div>
                                        <div class="panel-body">
 
                                          <div class="single-item FacebookPaid"> 
                                            <table class="my-3 content-table">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="squaredcheckbox">
                                                                <input type="checkbox" value="None" id="squared1" name="check1">
                                                                <label for="squared1"></label>
                                                            </div>
                                                        </td>
                                                        <td class="text-left">
                                                            <a href="#"> <span class="bold">FACEffBOOK PAID </span>| social| < Home_school ></a>
                                                        </td>
                                                        <td class="edit"><a class="edit_btn" href="#">&#9998;</a></td>
                                                        <td class="cross"><a class="exit_btn" href="#">&#x2716;</a></td>
                                                        <table class="hidden-table">
                                                            <tbody>
                                                                <tr>
                                                                 <!-- Start Select Options -->
                                                                    <div class="add-to-campain hidden">
                                                                        <form action="#"> 
                                                                        <div class="container">
                                                                            <div class="row">
                                                                                <div class="one-fourth">
                                                                                <div class="field-caption">
                                                                                    <p>Variation name</p>
                                                                                </div>
                                                                                <div class="product-name-field">
                                                                                   <input type="text" name="product_name" id="product_name">
                                                                                </div>
                                                                                </div>
                                                                                <div class="one-fourth">
                                                                                <div class="field-caption">
                                                                                    <p>Source</p>
                                                                                </div>                                                        
                                                                                   <div class="select">
                                                                                    <select name="facebook_post" id="facebook_post">
                                                                                        <option value="1"> FacebookPost </option>
                                                                                        <option value="2"> FacebookPaid</option>
                                                                                        <option value="3"> TwitterPost</option>
                                                                                        <option value="4"> FanBlast </option>
                                                                                        <option value="5"> NDHS </option>
                                                                                        <option value="6"> HomeSchool</option>
                                                                                        <option value="7"> AwaySchool</option>
                                                                                        <option value="8"> < campaign ></option>
                                                                                        <option value="9"> < event ></option>
                                                                                        <option value="10"> < home ></option>
                                                                                        <option value="11"> < away ></option>
                                                                                        <option value="12"> *NEW*</option>
                                                                                    </select>
                                                                                   </div>
                                                                                </div>
                                                                                <div class="one-fourth">
                                                                                <div class="field-caption">
                                                                                    <p>Medium</p>
                                                                                </div>                                                        
                                                                                  <div class="select">
                                                                                   <select name="twitter_post">
                                                                                        <option value="1"> Email</option>
                                                                                        <option value="2"> Social</option>
                                                                                        <option value="3"> School</option>
                                                                                        <option value="4"> < campaign ></option>
                                                                                        <option value="5"> < event ></option>
                                                                                        <option value="6"> < home ></option>
                                                                                        <option value="7"> < away ></option>
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
                                                                                        <option value="1"> < campaign ></option>
                                                                                        <option value="2"> < event ></option>
                                                                                        <option value="3"> < home ></option>
                                                                                        <option value="4"> < away ></option>
                                                                                        <option value="5"> *NEW*</option>
                                                                                    </select>
                                                                                 </div>
                                                                                </div>
                                                                            </div>
                                                                            <button type="submit" class="medium-btn bg-green text-white">Save</button>
                                                                            <button class="medium-btn btn-danger bg-red text-white close_btn">Exit</button>
                                                                          </div>
                                                                        </form>
                                                                    </div>
                                                                    <!-- End Select Options --> 
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            </div>
                                          <div class="single-item FacebookPost"> 
                                            <table class="my-3 content-table">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="squaredcheckbox">
                                                                <input type="checkbox" value="None" id="squared1" name="check1">
                                                                <label for="squared1"></label>
                                                            </div>
                                                        </td>
                                                        <td class="text-left">
                                                            <a href="#"> <span class="bold">FACEBOOK  </span>| FacebookPost | social| < Home_school ></a>
                                                        </td>
                                                        <td class="edit"><a class="edit_btn" href="#">&#9998;</a></td>
                                                        <td class="cross"><a class="exit_btn" href="#">&#x2716;</a></td>
                                                        <table class="hidden-table">
                                                            <tbody>
                                                                <tr>
                                                               <!-- Start Select Options -->
                                                                <div class="add-to-campain hidden">
                                                                    <form action="#"> 
                                                                    <div class="container">
                                                                        <div class="row">
                                                                            <div class="one-fourth">
                                                                            <div class="field-caption">
                                                                                <p>Variation name</p>
                                                                            </div>
                                                                            <div class="product-name-field">
                                                                               <input type="text" name="product_name" id="product_name">
                                                                            </div>
                                                                            </div>
                                                                            <div class="one-fourth">
                                                                            <div class="field-caption">
                                                                                <p>Source</p>
                                                                            </div>                                                        
                                                                               <div class="select">
                                                                                <select name="facebook_post" id="facebook_post">
                                                                                    <option value="1"> FacebookPost </option>
                                                                                    <option value="2"> FacebookPaid</option>
                                                                                    <option value="3"> TwitterPost</option>
                                                                                    <option value="4"> FanBlast </option>
                                                                                    <option value="5"> NDHS </option>
                                                                                    <option value="6"> HomeSchool</option>
                                                                                    <option value="7"> AwaySchool</option>
                                                                                    <option value="8"> < campaign ></option>
                                                                                    <option value="9"> < event ></option>
                                                                                    <option value="10"> < home ></option>
                                                                                    <option value="11"> < away ></option>
                                                                                    <option value="12"> *NEW*</option>
                                                                                </select>
                                                                               </div>
                                                                            </div>
                                                                            <div class="one-fourth">
                                                                            <div class="field-caption">
                                                                                <p>Medium</p>
                                                                            </div>                                                        
                                                                              <div class="select">
                                                                               <select name="twitter_post">
                                                                                    <option value="1"> Email</option>
                                                                                    <option value="2"> Social</option>
                                                                                    <option value="3"> School</option>
                                                                                    <option value="4"> < campaign ></option>
                                                                                    <option value="5"> < event ></option>
                                                                                    <option value="6"> < home ></option>
                                                                                    <option value="7"> < away ></option>
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
                                                                                    <option value="1"> < campaign ></option>
                                                                                    <option value="2"> < event ></option>
                                                                                    <option value="3"> < home ></option>
                                                                                    <option value="4"> < away ></option>
                                                                                    <option value="5"> *NEW*</option>
                                                                                </select>
                                                                             </div>
                                                                            </div>
                                                                        </div>
                                                                        <button type="submit" class="medium-btn bg-green text-white">Save</button>
                                                                        <button class="medium-btn btn-danger bg-red text-white close_btn">Exit</button>
                                                                      </div>
                                                                    </form>
                                                                </div>
                                                                <!-- End Select Options --> 
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            </div>
                                          <div class="single-item TwitterPost"> 
                                            <table class="my-3 content-table">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="squaredcheckbox">
                                                                <input type="checkbox" value="None" id="squared1" name="check1">
                                                                <label for="squared1"></label>
                                                            </div>
                                                        </td>
                                                        <td class="text-left">
                                                            <a href="#"> <span class="bold">Twitter  </span>| TwitterPost | social| < Home_school ></a>
                                                        </td>
                                                        <td class="edit"><a class="edit_btn" href="#">&#9998;</a></td>
                                                        <td class="cross"><a class="exit_btn" href="#">&#x2716;</a></td>
                                                        <table class="hidden-table">
                                                            <tbody>
                                                                <tr>
                                                                   <!-- Start Select Options -->
                                                                    <div class="add-to-campain hidden">
                                                                        <form action="#"> 
                                                                        <div class="container">
                                                                            <div class="row">
                                                                                <div class="one-fourth">
                                                                                <div class="field-caption">
                                                                                    <p>Variation name</p>
                                                                                </div>
                                                                                <div class="product-name-field">
                                                                                   <input type="text" name="product_name" id="product_name">
                                                                                </div>
                                                                                </div>
                                                                                <div class="one-fourth">
                                                                                <div class="field-caption">
                                                                                    <p>Source</p>
                                                                                </div>                                                        
                                                                                   <div class="select">
                                                                                    <select name="facebook_post" id="facebook_post">
                                                                                        <option value="1"> FacebookPost </option>
                                                                                        <option value="2"> FacebookPaid</option>
                                                                                        <option value="3"> TwitterPost</option>
                                                                                        <option value="4"> FanBlast </option>
                                                                                        <option value="5"> NDHS </option>
                                                                                        <option value="6"> HomeSchool</option>
                                                                                        <option value="7"> AwaySchool</option>
                                                                                        <option value="8"> < campaign ></option>
                                                                                        <option value="9"> < event ></option>
                                                                                        <option value="10"> < home ></option>
                                                                                        <option value="11"> < away ></option>
                                                                                        <option value="12"> *NEW*</option>
                                                                                    </select>
                                                                                   </div>
                                                                                </div>
                                                                                <div class="one-fourth">
                                                                                <div class="field-caption">
                                                                                    <p>Medium</p>
                                                                                </div>                                                        
                                                                                  <div class="select">
                                                                                   <select name="twitter_post">
                                                                                        <option value="1"> Email</option>
                                                                                        <option value="2"> Social</option>
                                                                                        <option value="3"> School</option>
                                                                                        <option value="4"> < campaign ></option>
                                                                                        <option value="5"> < event ></option>
                                                                                        <option value="6"> < home ></option>
                                                                                        <option value="7"> < away ></option>
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
                                                                                        <option value="1"> < campaign ></option>
                                                                                        <option value="2"> < event ></option>
                                                                                        <option value="3"> < home ></option>
                                                                                        <option value="4"> < away ></option>
                                                                                        <option value="5"> *NEW*</option>
                                                                                    </select>
                                                                                 </div>
                                                                                </div>
                                                                            </div>
                                                                            <button type="submit" class="medium-btn bg-green text-white">Save</button>
                                                                            <button class="medium-btn btn-danger bg-red text-white close_btn">Exit</button>
                                                                          </div>
                                                                        </form>
                                                                    </div>
                                                                    <!-- End Select Options --> 
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            </div>
                                          <div class="single-item BlastEmail"> 
                                            <table class="my-3 content-table">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="squaredcheckbox">
                                                                <input type="checkbox" value="None" id="squared1" name="check1">
                                                                <label for="squared1"></label>
                                                            </div>
                                                        </td>
                                                        <td class="text-left">
                                                            <a href="#"> <span class="bold">Fan Blast Email  </span>| FanBlast | Email| < Home_School ></a>
                                                        </td>
                                                        <td class="edit"><a class="edit_btn" href="#">&#9998;</a></td>
                                                        <td class="cross"><a class="exit_btn" href="#">&#x2716;</a></td>
                                                        <table class="hidden-table">
                                                            <tbody>
                                                                <tr>
                                                                 <!-- Start Select Options -->
                                                                    <div class="add-to-campain hidden">
                                                                        <form action="#"> 
                                                                        <div class="container">
                                                                            <div class="row">
                                                                                <div class="one-fourth">
                                                                                <div class="field-caption">
                                                                                    <p>Variation name</p>
                                                                                </div>
                                                                                <div class="product-name-field">
                                                                                   <input type="text" name="product_name" id="product_name">
                                                                                </div>
                                                                                </div>
                                                                                <div class="one-fourth">
                                                                                <div class="field-caption">
                                                                                    <p>Source</p>
                                                                                </div>                                                        
                                                                                   <div class="select">
                                                                                    <select name="facebook_post" id="facebook_post">
                                                                                        <option value="1"> FacebookPost </option>
                                                                                        <option value="2"> FacebookPaid</option>
                                                                                        <option value="3"> TwitterPost</option>
                                                                                        <option value="4"> FanBlast </option>
                                                                                        <option value="5"> NDHS </option>
                                                                                        <option value="6"> HomeSchool</option>
                                                                                        <option value="7"> AwaySchool</option>
                                                                                        <option value="8"> < campaign ></option>
                                                                                        <option value="9"> < event ></option>
                                                                                        <option value="10"> < home ></option>
                                                                                        <option value="11"> < away ></option>
                                                                                        <option value="12"> *NEW*</option>
                                                                                    </select>
                                                                                   </div>
                                                                                </div>
                                                                                <div class="one-fourth">
                                                                                <div class="field-caption">
                                                                                    <p>Medium</p>
                                                                                </div>                                                        
                                                                                  <div class="select">
                                                                                   <select name="twitter_post">
                                                                                        <option value="1"> Email</option>
                                                                                        <option value="2"> Social</option>
                                                                                        <option value="3"> School</option>
                                                                                        <option value="4"> < campaign ></option>
                                                                                        <option value="5"> < event ></option>
                                                                                        <option value="6"> < home ></option>
                                                                                        <option value="7"> < away ></option>
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
                                                                                        <option value="1"> < campaign ></option>
                                                                                        <option value="2"> < event ></option>
                                                                                        <option value="3"> < home ></option>
                                                                                        <option value="4"> < away ></option>
                                                                                        <option value="5"> *NEW*</option>
                                                                                    </select>
                                                                                 </div>
                                                                                </div>
                                                                            </div>
                                                                            <button type="submit" class="medium-btn bg-green text-white">Save</button>
                                                                            <button class="medium-btn btn-danger bg-red text-white close_btn">Exit</button>
                                                                          </div>
                                                                        </form>
                                                                    </div>
                                                                    <!-- End Select Options --> 
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            </div>
                                          <div class="single-item Nfhs_email"> 
                                            <table class="my-3 content-table">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="squaredcheckbox">
                                                                <input type="checkbox" value="None" id="squared1" name="check1">
                                                                <label for="squared1"></label>
                                                            </div>
                                                        </td>
                                                        <td class="text-left">
                                                            <a href="#"> <span class="bold">NFHS Email  </span>| NFHS | Email| < Home_school > </a>
                                                        </td>
                                                        <td class="edit"><a class="edit_btn" href="#">&#9998;</a></td>
                                                        <td class="cross"><a class="exit_btn" href="#">&#x2716;</a></td>
                                                        <table class="hidden-table">
                                                            <tbody>
                                                                <tr>
                                                                 <!-- Start Select Options -->
                                                                    <div class="add-to-campain hidden">
                                                                        <form action="#"> 
                                                                        <div class="container">
                                                                            <div class="row">
                                                                                <div class="one-fourth">
                                                                                <div class="field-caption">
                                                                                    <p>Variation name</p>
                                                                                </div>
                                                                                <div class="product-name-field">
                                                                                   <input type="text" name="product_name" id="product_name">
                                                                                </div>
                                                                                </div>
                                                                                <div class="one-fourth">
                                                                                <div class="field-caption">
                                                                                    <p>Source</p>
                                                                                </div>                                                        
                                                                                   <div class="select">
                                                                                    <select name="facebook_post" id="facebook_post">
                                                                                        <option value="1"> FacebookPost </option>
                                                                                        <option value="2"> FacebookPaid</option>
                                                                                        <option value="3"> TwitterPost</option>
                                                                                        <option value="4"> FanBlast </option>
                                                                                        <option value="5"> NDHS </option>
                                                                                        <option value="6"> HomeSchool</option>
                                                                                        <option value="7"> AwaySchool</option>
                                                                                        <option value="8"> < campaign ></option>
                                                                                        <option value="9"> < event ></option>
                                                                                        <option value="10"> < home ></option>
                                                                                        <option value="11"> < away ></option>
                                                                                        <option value="12"> *NEW*</option>
                                                                                    </select>
                                                                                   </div>
                                                                                </div>
                                                                                <div class="one-fourth">
                                                                                <div class="field-caption">
                                                                                    <p>Medium</p>
                                                                                </div>                                                        
                                                                                  <div class="select">
                                                                                   <select name="twitter_post">
                                                                                        <option value="1"> Email</option>
                                                                                        <option value="2"> Social</option>
                                                                                        <option value="3"> School</option>
                                                                                        <option value="4"> < campaign ></option>
                                                                                        <option value="5"> < event ></option>
                                                                                        <option value="6"> < home ></option>
                                                                                        <option value="7"> < away ></option>
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
                                                                                        <option value="1"> < campaign ></option>
                                                                                        <option value="2"> < event ></option>
                                                                                        <option value="3"> < home ></option>
                                                                                        <option value="4"> < away ></option>
                                                                                        <option value="5"> *NEW*</option>
                                                                                    </select>
                                                                                 </div>
                                                                                </div>
                                                                            </div>
                                                                            <button type="submit" class="medium-btn bg-green text-white">Save</button>
                                                                            <button class="medium-btn btn-danger bg-red text-white close_btn">Exit</button>
                                                                          </div>
                                                                        </form>
                                                                    </div>
                                                                    <!-- End Select Options --> 
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            </div>
                                          <div class="single-item HomeSchool"> 
                                            <table class="my-3 content-table">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="squaredcheckbox">
                                                                <input type="checkbox" value="None" id="squared1" name="check1">
                                                                <label for="squared1"></label>
                                                            </div>
                                                        </td>
                                                        <td class="text-left">
                                                            <a href="#"> <span class="bold">Home School  </span>| School | School| < Home_School > </a>
                                                        </td>
                                                        <td class="edit"><a class="edit_btn" href="#">&#9998;</a></td>
                                                        <td class="cross"><a class="exit_btn" href="#">&#x2716;</a></td>
                                                        <table class="hidden-table">
                                                            <tbody>
                                                                <tr>
                                                                 <!-- Start Select Options -->
                                                                    <div class="add-to-campain hidden">
                                                                        <form action="#"> 
                                                                        <div class="container">
                                                                            <div class="row">
                                                                                <div class="one-fourth">
                                                                                <div class="field-caption">
                                                                                    <p>Variation name</p>
                                                                                </div>
                                                                                <div class="product-name-field">
                                                                                   <input type="text" name="product_name" id="product_name">
                                                                                </div>
                                                                                </div>
                                                                                <div class="one-fourth">
                                                                                <div class="field-caption">
                                                                                    <p>Source</p>
                                                                                </div>                                                        
                                                                                   <div class="select">
                                                                                    <select name="facebook_post" id="facebook_post">
                                                                                        <option value="1"> FacebookPost </option>
                                                                                        <option value="2"> FacebookPaid</option>
                                                                                        <option value="3"> TwitterPost</option>
                                                                                        <option value="4"> FanBlast </option>
                                                                                        <option value="5"> NDHS </option>
                                                                                        <option value="6"> HomeSchool</option>
                                                                                        <option value="7"> AwaySchool</option>
                                                                                        <option value="8"> < campaign ></option>
                                                                                        <option value="9"> < event ></option>
                                                                                        <option value="10"> < home ></option>
                                                                                        <option value="11"> < away ></option>
                                                                                        <option value="12"> *NEW*</option>
                                                                                    </select>
                                                                                   </div>
                                                                                </div>
                                                                                <div class="one-fourth">
                                                                                <div class="field-caption">
                                                                                    <p>Medium</p>
                                                                                </div>                                                        
                                                                                  <div class="select">
                                                                                   <select name="twitter_post">
                                                                                        <option value="1"> Email</option>
                                                                                        <option value="2"> Social</option>
                                                                                        <option value="3"> School</option>
                                                                                        <option value="4"> < campaign ></option>
                                                                                        <option value="5"> < event ></option>
                                                                                        <option value="6"> < home ></option>
                                                                                        <option value="7"> < away ></option>
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
                                                                                        <option value="1"> < campaign ></option>
                                                                                        <option value="2"> < event ></option>
                                                                                        <option value="3"> < home ></option>
                                                                                        <option value="4"> < away ></option>
                                                                                        <option value="5"> *NEW*</option>
                                                                                    </select>
                                                                                 </div>
                                                                                </div>
                                                                            </div>
                                                                            <button type="submit" class="medium-btn bg-green text-white">Save</button>
                                                                            <button class="medium-btn btn-danger bg-red text-white close_btn">Exit</button>
                                                                          </div>
                                                                        </form>
                                                                    </div>
                                                                    <!-- End Select Options --> 
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            </div>
                                          <div class="single-item AwaySchool"> 
                                            <table class="my-3 content-table">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="squaredcheckbox">
                                                                <input type="checkbox" value="None" id="squared1" name="check1">
                                                                <label for="squared1"></label>
                                                            </div>
                                                        </td>
                                                        <td class="text-left">
                                                            <a href="#"> <span class="bold">Away School  </span>| School | School| < Home_school > </a>
                                                        </td>
                                                        <td class="edit"><a class="edit_btn" href="#">&#9998;</a></td>
                                                        <td class="cross"><a class="exit_btn" href="#">&#x2716;</a></td>
                                                        <table class="hidden-table">
                                                            <tbody>
                                                                <tr>
                                                                 <!-- Start Select Options -->
                                                                    <div class="add-to-campain hidden">
                                                                        <form action="#"> 
                                                                        <div class="container">
                                                                            <div class="row">
                                                                                <div class="one-fourth">
                                                                                <div class="field-caption">
                                                                                    <p>Variation name</p>
                                                                                </div>
                                                                                <div class="product-name-field">
                                                                                   <input type="text" name="product_name" id="product_name">
                                                                                </div>
                                                                                </div>
                                                                                <div class="one-fourth">
                                                                                <div class="field-caption">
                                                                                    <p>Source</p>
                                                                                </div>                                                        
                                                                                   <div class="select">
                                                                                    <select name="facebook_post" id="facebook_post">
                                                                                        <option value="1"> FacebookPost </option>
                                                                                        <option value="2"> FacebookPaid</option>
                                                                                        <option value="3"> TwitterPost</option>
                                                                                        <option value="4"> FanBlast </option>
                                                                                        <option value="5"> NDHS </option>
                                                                                        <option value="6"> HomeSchool</option>
                                                                                        <option value="7"> AwaySchool</option>
                                                                                        <option value="8"> < campaign ></option>
                                                                                        <option value="9"> < event ></option>
                                                                                        <option value="10"> < home ></option>
                                                                                        <option value="11"> < away ></option>
                                                                                        <option value="12"> *NEW*</option>
                                                                                    </select>
                                                                                   </div>
                                                                                </div>
                                                                                <div class="one-fourth">
                                                                                <div class="field-caption">
                                                                                    <p>Medium</p>
                                                                                </div>                                                        
                                                                                  <div class="select">
                                                                                   <select name="twitter_post">
                                                                                        <option value="1"> Email</option>
                                                                                        <option value="2"> Social</option>
                                                                                        <option value="3"> School</option>
                                                                                        <option value="4"> < campaign ></option>
                                                                                        <option value="5"> < event ></option>
                                                                                        <option value="6"> < home ></option>
                                                                                        <option value="7"> < away ></option>
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
                                                                                        <option value="1"> < campaign ></option>
                                                                                        <option value="2"> < event ></option>
                                                                                        <option value="3"> < home ></option>
                                                                                        <option value="4"> < away ></option>
                                                                                        <option value="5"> *NEW*</option>
                                                                                    </select>
                                                                                 </div>
                                                                                </div>
                                                                            </div>
                                                                            <button type="submit" class="medium-btn bg-green text-white">Save</button>
                                                                            <button class="medium-btn btn-danger bg-red text-white close_btn">Exit</button>
                                                                          </div>
                                                                        </form>
                                                                    </div>
                                                                    <!-- End Select Options --> 
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            </div> 
                                                                                    
                                            <div class="external-links py-5">
                                                <a href="#" class="submit-btn">Create Urls</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="single-event" role="tabpanel">
                                <div class="single-event-content">
                                    <form action="#" class="form-inline event-form">
                                        <div class="form-group my-4">
                                            <input type="text" name="event" placeholder="EVENT">
                                            <input type="text" name="campaign" placeholder="CAMPAIGN">
                                            <input type="text" name="home_team" placeholder="HOME TEAM">
                                            <input type="text" name="away_team" placeholder="AWAY TEAM">
                                        </div>
                                        <button type="submit" class="submit-btn">Add Event</button>
                                    </form>
                                    <div class="panel-wrapper">
                                        <div class="panel-heading text-left pt-4">
                                            <h2 class="form-heading d-inline-block">choose campaigns</h2> <span class="sub-heading"><a href="#"> (Add New) </a></span>
                                        </div>
                                        <div class="panel-body">
                                          <div class="single-item FacebookPaid"> 
                                            <table class="my-3 content-table">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="squaredcheckbox">
                                                                <input type="checkbox" value="None" id="squared1" name="check1">
                                                                <label for="squared1"></label>
                                                            </div>
                                                        </td>
                                                        <td class="text-left">
                                                            <a href="#"> <span class="bold">FACEffBOOK PAID </span>| social| < Home_school ></a>
                                                        </td>
                                                        <td class="edit"><a class="edit_btn" href="#">&#9998;</a></td>
                                                        <td class="cross"><a class="exit_btn" href="#">&#x2716;</a></td>
                                                        <table class="hidden-table">
                                                            <tbody>
                                                                <tr>
                                                                  <!-- Start Select Options -->
                                                                    <div class="add-to-campain hidden">
                                                                        <form action="#"> 
                                                                        <div class="container">
                                                                            <div class="row">
                                                                                <div class="one-fourth">
                                                                                <div class="field-caption">
                                                                                    <p>Variation name</p>
                                                                                </div>
                                                                                <div class="product-name-field">
                                                                                   <input type="text" name="product_name" id="product_name">
                                                                                </div>
                                                                                </div>
                                                                                <div class="one-fourth">
                                                                                <div class="field-caption">
                                                                                    <p>Source</p>
                                                                                </div>                                                        
                                                                                   <div class="select">
                                                                                    <select name="facebook_post" id="facebook_post">
                                                                                        <option value="1"> FacebookPost </option>
                                                                                        <option value="2"> FacebookPaid</option>
                                                                                        <option value="3"> TwitterPost</option>
                                                                                        <option value="4"> FanBlast </option>
                                                                                        <option value="5"> NDHS </option>
                                                                                        <option value="6"> HomeSchool</option>
                                                                                        <option value="7"> AwaySchool</option>
                                                                                        <option value="8"> < campaign ></option>
                                                                                        <option value="9"> < event ></option>
                                                                                        <option value="10"> < home ></option>
                                                                                        <option value="11"> < away ></option>
                                                                                        <option value="12"> *NEW*</option>
                                                                                    </select>
                                                                                   </div>
                                                                                </div>
                                                                                <div class="one-fourth">
                                                                                <div class="field-caption">
                                                                                    <p>Medium</p>
                                                                                </div>                                                        
                                                                                  <div class="select">
                                                                                   <select name="twitter_post">
                                                                                        <option value="1"> Email</option>
                                                                                        <option value="2"> Social</option>
                                                                                        <option value="3"> School</option>
                                                                                        <option value="4"> < campaign ></option>
                                                                                        <option value="5"> < event ></option>
                                                                                        <option value="6"> < home ></option>
                                                                                        <option value="7"> < away ></option>
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
                                                                                        <option value="1"> < campaign ></option>
                                                                                        <option value="2"> < event ></option>
                                                                                        <option value="3"> < home ></option>
                                                                                        <option value="4"> < away ></option>
                                                                                        <option value="5"> *NEW*</option>
                                                                                    </select>
                                                                                 </div>
                                                                                </div>
                                                                            </div>
                                                                            <button type="submit" class="medium-btn bg-green text-white">Save</button>
                                                                            <button class="medium-btn btn-danger bg-red text-white close_btn">Exit</button>
                                                                          </div>
                                                                        </form>
                                                                    </div>
                                                                    <!-- End Select Options --> 
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            </div>
                                          <div class="single-item FacebookPost"> 
                                            <table class="my-3 content-table">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="squaredcheckbox">
                                                                <input type="checkbox" value="None" id="squared1" name="check1">
                                                                <label for="squared1"></label>
                                                            </div>
                                                        </td>
                                                        <td class="text-left">
                                                            <a href="#"> <span class="bold">FACEBOOK  </span>| FacebookPost | social| < Home_school ></a>
                                                        </td>
                                                        <td class="edit"><a class="edit_btn" href="#">&#9998;</a></td>
                                                        <td class="cross"><a class="exit_btn" href="#">&#x2716;</a></td>
                                                        <table class="hidden-table">
                                                            <tbody>
                                                                <tr>
                                                                  <!-- Start Select Options -->
                                                                    <div class="add-to-campain hidden">
                                                                        <form action="#"> 
                                                                        <div class="container">
                                                                            <div class="row">
                                                                                <div class="one-fourth">
                                                                                <div class="field-caption">
                                                                                    <p>Variation name</p>
                                                                                </div>
                                                                                <div class="product-name-field">
                                                                                   <input type="text" name="product_name" id="product_name">
                                                                                </div>
                                                                                </div>
                                                                                <div class="one-fourth">
                                                                                <div class="field-caption">
                                                                                    <p>Source</p>
                                                                                </div>                                                        
                                                                                   <div class="select">
                                                                                    <select name="facebook_post" id="facebook_post">
                                                                                        <option value="1"> FacebookPost </option>
                                                                                        <option value="2"> FacebookPaid</option>
                                                                                        <option value="3"> TwitterPost</option>
                                                                                        <option value="4"> FanBlast </option>
                                                                                        <option value="5"> NDHS </option>
                                                                                        <option value="6"> HomeSchool</option>
                                                                                        <option value="7"> AwaySchool</option>
                                                                                        <option value="8"> < campaign ></option>
                                                                                        <option value="9"> < event ></option>
                                                                                        <option value="10"> < home ></option>
                                                                                        <option value="11"> < away ></option>
                                                                                        <option value="12"> *NEW*</option>
                                                                                    </select>
                                                                                   </div>
                                                                                </div>
                                                                                <div class="one-fourth">
                                                                                <div class="field-caption">
                                                                                    <p>Medium</p>
                                                                                </div>                                                        
                                                                                  <div class="select">
                                                                                   <select name="twitter_post">
                                                                                        <option value="1"> Email</option>
                                                                                        <option value="2"> Social</option>
                                                                                        <option value="3"> School</option>
                                                                                        <option value="4"> < campaign ></option>
                                                                                        <option value="5"> < event ></option>
                                                                                        <option value="6"> < home ></option>
                                                                                        <option value="7"> < away ></option>
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
                                                                                        <option value="1"> < campaign ></option>
                                                                                        <option value="2"> < event ></option>
                                                                                        <option value="3"> < home ></option>
                                                                                        <option value="4"> < away ></option>
                                                                                        <option value="5"> *NEW*</option>
                                                                                    </select>
                                                                                 </div>
                                                                                </div>
                                                                            </div>
                                                                            <button type="submit" class="medium-btn bg-green text-white">Save</button>
                                                                            <button class="medium-btn btn-danger bg-red text-white close_btn">Exit</button>
                                                                          </div>
                                                                        </form>
                                                                    </div>
                                                                    <!-- End Select Options --> 
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            </div>
                                          <div class="single-item TwitterPost"> 
                                            <table class="my-3 content-table">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="squaredcheckbox">
                                                                <input type="checkbox" value="None" id="squared1" name="check1">
                                                                <label for="squared1"></label>
                                                            </div>
                                                        </td>
                                                        <td class="text-left">
                                                            <a href="#"> <span class="bold">Twitter  </span>| TwitterPost | social| < Home_school ></a>
                                                        </td>
                                                        <td class="edit"><a class="edit_btn" href="#">&#9998;</a></td>
                                                        <td class="cross"><a class="exit_btn" href="#">&#x2716;</a></td>
                                                        <table class="hidden-table">
                                                            <tbody>
                                                                <tr>
                                                                  <!-- Start Select Options -->
                                                                    <div class="add-to-campain hidden">
                                                                        <form action="#"> 
                                                                        <div class="container">
                                                                            <div class="row">
                                                                                <div class="one-fourth">
                                                                                <div class="field-caption">
                                                                                    <p>Variation name</p>
                                                                                </div>
                                                                                <div class="product-name-field">
                                                                                   <input type="text" name="product_name" id="product_name">
                                                                                </div>
                                                                                </div>
                                                                                <div class="one-fourth">
                                                                                <div class="field-caption">
                                                                                    <p>Source</p>
                                                                                </div>                                                        
                                                                                   <div class="select">
                                                                                    <select name="facebook_post" id="facebook_post">
                                                                                        <option value="1"> FacebookPost </option>
                                                                                        <option value="2"> FacebookPaid</option>
                                                                                        <option value="3"> TwitterPost</option>
                                                                                        <option value="4"> FanBlast </option>
                                                                                        <option value="5"> NDHS </option>
                                                                                        <option value="6"> HomeSchool</option>
                                                                                        <option value="7"> AwaySchool</option>
                                                                                        <option value="8"> < campaign ></option>
                                                                                        <option value="9"> < event ></option>
                                                                                        <option value="10"> < home ></option>
                                                                                        <option value="11"> < away ></option>
                                                                                        <option value="12"> *NEW*</option>
                                                                                    </select>
                                                                                   </div>
                                                                                </div>
                                                                                <div class="one-fourth">
                                                                                <div class="field-caption">
                                                                                    <p>Medium</p>
                                                                                </div>                                                        
                                                                                  <div class="select">
                                                                                   <select name="twitter_post">
                                                                                        <option value="1"> Email</option>
                                                                                        <option value="2"> Social</option>
                                                                                        <option value="3"> School</option>
                                                                                        <option value="4"> < campaign ></option>
                                                                                        <option value="5"> < event ></option>
                                                                                        <option value="6"> < home ></option>
                                                                                        <option value="7"> < away ></option>
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
                                                                                        <option value="1"> < campaign ></option>
                                                                                        <option value="2"> < event ></option>
                                                                                        <option value="3"> < home ></option>
                                                                                        <option value="4"> < away ></option>
                                                                                        <option value="5"> *NEW*</option>
                                                                                    </select>
                                                                                 </div>
                                                                                </div>
                                                                            </div>
                                                                            <button type="submit" class="medium-btn bg-green text-white">Save</button>
                                                                            <button class="medium-btn btn-danger bg-red text-white close_btn">Exit</button>
                                                                          </div>
                                                                        </form>
                                                                    </div>
                                                                    <!-- End Select Options --> 
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            </div>
                                          <div class="single-item BlastEmail"> 
                                            <table class="my-3 content-table">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="squaredcheckbox">
                                                                <input type="checkbox" value="None" id="squared1" name="check1">
                                                                <label for="squared1"></label>
                                                            </div>
                                                        </td>
                                                        <td class="text-left">
                                                            <a href="#"> <span class="bold">Fan Blast Email  </span>| FanBlast | Email| < Home_school > </a>
                                                        </td>
                                                        <td class="edit"><a class="edit_btn" href="#">&#9998;</a></td>
                                                        <td class="cross"><a class="exit_btn" href="#">&#x2716;</a></td>
                                                        <table class="hidden-table">
                                                            <tbody>
                                                                <tr>
                                                                 <!-- Start Select Options -->
                                                                    <div class="add-to-campain hidden">
                                                                        <form action="#"> 
                                                                        <div class="container">
                                                                            <div class="row">
                                                                                <div class="one-fourth">
                                                                                <div class="field-caption">
                                                                                    <p>Variation name</p>
                                                                                </div>
                                                                                <div class="product-name-field">
                                                                                   <input type="text" name="product_name" id="product_name">
                                                                                </div>
                                                                                </div>
                                                                                <div class="one-fourth">
                                                                                <div class="field-caption">
                                                                                    <p>Source</p>
                                                                                </div>                                                        
                                                                                   <div class="select">
                                                                                    <select name="facebook_post" id="facebook_post">
                                                                                        <option value="1"> FacebookPost </option>
                                                                                        <option value="2"> FacebookPaid</option>
                                                                                        <option value="3"> TwitterPost</option>
                                                                                        <option value="4"> FanBlast </option>
                                                                                        <option value="5"> NDHS </option>
                                                                                        <option value="6"> HomeSchool</option>
                                                                                        <option value="7"> AwaySchool</option>
                                                                                        <option value="8"> < campaign ></option>
                                                                                        <option value="9"> < event ></option>
                                                                                        <option value="10"> < home ></option>
                                                                                        <option value="11"> < away ></option>
                                                                                        <option value="12"> *NEW*</option>
                                                                                    </select>
                                                                                   </div>
                                                                                </div>
                                                                                <div class="one-fourth">
                                                                                <div class="field-caption">
                                                                                    <p>Medium</p>
                                                                                </div>                                                        
                                                                                  <div class="select">
                                                                                   <select name="twitter_post">
                                                                                        <option value="1"> Email</option>
                                                                                        <option value="2"> Social</option>
                                                                                        <option value="3"> School</option>
                                                                                        <option value="4"> < campaign ></option>
                                                                                        <option value="5"> < event ></option>
                                                                                        <option value="6"> < home ></option>
                                                                                        <option value="7"> < away ></option>
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
                                                                                        <option value="1"> < campaign ></option>
                                                                                        <option value="2"> < event ></option>
                                                                                        <option value="3"> < home ></option>
                                                                                        <option value="4"> < away ></option>
                                                                                        <option value="5"> *NEW*</option>
                                                                                    </select>
                                                                                 </div>
                                                                                </div>
                                                                            </div>
                                                                            <button type="submit" class="medium-btn bg-green text-white">Save</button>
                                                                            <button class="medium-btn btn-danger bg-red text-white close_btn">Exit</button>
                                                                          </div>
                                                                        </form>
                                                                    </div>
                                                                    <!-- End Select Options --> 
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            </div>
                                          <div class="single-item Nfhs_email"> 
                                            <table class="my-3 content-table">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="squaredcheckbox">
                                                                <input type="checkbox" value="None" id="squared1" name="check1">
                                                                <label for="squared1"></label>
                                                            </div>
                                                        </td>
                                                        <td class="text-left">
                                                            <a href="#"> <span class="bold"> NFHS Email  </span>| NFHS | Email| < Home_school > </a>
                                                        </td>
                                                        <td class="edit"><a class="edit_btn" href="#">&#9998;</a></td>
                                                        <td class="cross"><a class="exit_btn" href="#">&#x2716;</a></td>
                                                        <table class="hidden-table">
                                                            <tbody>
                                                                <tr>
                                                                  <!-- Start Select Options -->
                                                                    <div class="add-to-campain hidden">
                                                                        <form action="#"> 
                                                                        <div class="container">
                                                                            <div class="row">
                                                                                <div class="one-fourth">
                                                                                <div class="field-caption">
                                                                                    <p>Variation name</p>
                                                                                </div>
                                                                                <div class="product-name-field">
                                                                                   <input type="text" name="product_name" id="product_name">
                                                                                </div>
                                                                                </div>
                                                                                <div class="one-fourth">
                                                                                <div class="field-caption">
                                                                                    <p>Source</p>
                                                                                </div>                                                        
                                                                                   <div class="select">
                                                                                    <select name="facebook_post" id="facebook_post">
                                                                                        <option value="1"> FacebookPost </option>
                                                                                        <option value="2"> FacebookPaid</option>
                                                                                        <option value="3"> TwitterPost</option>
                                                                                        <option value="4"> FanBlast </option>
                                                                                        <option value="5"> NDHS </option>
                                                                                        <option value="6"> HomeSchool</option>
                                                                                        <option value="7"> AwaySchool</option>
                                                                                        <option value="8"> < campaign ></option>
                                                                                        <option value="9"> < event ></option>
                                                                                        <option value="10"> < home ></option>
                                                                                        <option value="11"> < away ></option>
                                                                                        <option value="12"> *NEW*</option>
                                                                                    </select>
                                                                                   </div>
                                                                                </div>
                                                                                <div class="one-fourth">
                                                                                <div class="field-caption">
                                                                                    <p>Medium</p>
                                                                                </div>                                                        
                                                                                  <div class="select">
                                                                                   <select name="twitter_post">
                                                                                        <option value="1"> Email</option>
                                                                                        <option value="2"> Social</option>
                                                                                        <option value="3"> School</option>
                                                                                        <option value="4"> < campaign ></option>
                                                                                        <option value="5"> < event ></option>
                                                                                        <option value="6"> < home ></option>
                                                                                        <option value="7"> < away ></option>
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
                                                                                        <option value="1"> < campaign ></option>
                                                                                        <option value="2"> < event ></option>
                                                                                        <option value="3"> < home ></option>
                                                                                        <option value="4"> < away ></option>
                                                                                        <option value="5"> *NEW*</option>
                                                                                    </select>
                                                                                 </div>
                                                                                </div>
                                                                            </div>
                                                                            <button type="submit" class="medium-btn bg-green text-white">Save</button>
                                                                            <button class="medium-btn btn-danger bg-red text-white close_btn">Exit</button>
                                                                          </div>
                                                                        </form>
                                                                    </div>
                                                                    <!-- End Select Options --> 
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            </div>
                                          <div class="single-item HomeSchool"> 
                                            <table class="my-3 content-table">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="squaredcheckbox">
                                                                <input type="checkbox" value="None" id="squared1" name="check1">
                                                                <label for="squared1"></label>
                                                            </div>
                                                        </td>
                                                        <td class="text-left">
                                                            <a href="#"> <span class="bold">Home School  </span>| School | School| < Home_school > </a>
                                                        </td>
                                                        <td class="edit"><a class="edit_btn" href="#">&#9998;</a></td>
                                                        <td class="cross"><a class="exit_btn" href="#">&#x2716;</a></td>
                                                        <table class="hidden-table">
                                                            <tbody>
                                                                <tr>
                                                                  <!-- Start Select Options -->
                                                                    <div class="add-to-campain hidden">
                                                                        <form action="#"> 
                                                                        <div class="container">
                                                                            <div class="row">
                                                                                <div class="one-fourth">
                                                                                <div class="field-caption">
                                                                                    <p>Variation name</p>
                                                                                </div>
                                                                                <div class="product-name-field">
                                                                                   <input type="text" name="product_name" id="product_name">
                                                                                </div>
                                                                                </div>
                                                                                <div class="one-fourth">
                                                                                <div class="field-caption">
                                                                                    <p>Source</p>
                                                                                </div>                                                        
                                                                                   <div class="select">
                                                                                    <select name="facebook_post" id="facebook_post">
                                                                                        <option value="1"> FacebookPost </option>
                                                                                        <option value="2"> FacebookPaid</option>
                                                                                        <option value="3"> TwitterPost</option>
                                                                                        <option value="4"> FanBlast </option>
                                                                                        <option value="5"> NDHS </option>
                                                                                        <option value="6"> HomeSchool</option>
                                                                                        <option value="7"> AwaySchool</option>
                                                                                        <option value="8"> < campaign ></option>
                                                                                        <option value="9"> < event ></option>
                                                                                        <option value="10"> < home ></option>
                                                                                        <option value="11"> < away ></option>
                                                                                        <option value="12"> *NEW*</option>
                                                                                    </select>
                                                                                   </div>
                                                                                </div>
                                                                                <div class="one-fourth">
                                                                                <div class="field-caption">
                                                                                    <p>Medium</p>
                                                                                </div>                                                        
                                                                                  <div class="select">
                                                                                   <select name="twitter_post">
                                                                                        <option value="1"> Email</option>
                                                                                        <option value="2"> Social</option>
                                                                                        <option value="3"> School</option>
                                                                                        <option value="4"> < campaign ></option>
                                                                                        <option value="5"> < event ></option>
                                                                                        <option value="6"> < home ></option>
                                                                                        <option value="7"> < away ></option>
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
                                                                                        <option value="1"> < campaign ></option>
                                                                                        <option value="2"> < event ></option>
                                                                                        <option value="3"> < home ></option>
                                                                                        <option value="4"> < away ></option>
                                                                                        <option value="5"> *NEW*</option>
                                                                                    </select>
                                                                                 </div>
                                                                                </div>
                                                                            </div>
                                                                            <button type="submit" class="medium-btn bg-green text-white">Save</button>
                                                                            <button class="medium-btn btn-danger bg-red text-white close_btn">Exit</button>
                                                                          </div>
                                                                        </form>
                                                                    </div>
                                                                    <!-- End Select Options --> 
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            </div>
                                          <div class="single-item AwaySchool"> 
                                            <table class="my-3 content-table">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="squaredcheckbox">
                                                                <input type="checkbox" value="None" id="squared1" name="check1">
                                                                <label for="squared1"></label>
                                                            </div>
                                                        </td>
                                                        <td class="text-left">
                                                            <a href="#"> <span class="bold">Away School  </span>| School | School| < Home_school > </a>
                                                        </td>
                                                        <td class="edit"><a class="edit_btn" href="#">&#9998;</a></td>
                                                        <td class="cross"><a class="exit_btn" href="#">&#x2716;</a></td>
                                                        <table class="hidden-table">
                                                            <tbody>
                                                                <tr>
                                                                   <!-- Start Select Options -->
                                                                    <div class="add-to-campain hidden">
                                                                        <form action="#"> 
                                                                        <div class="container">
                                                                            <div class="row">
                                                                                <div class="one-fourth">
                                                                                <div class="field-caption">
                                                                                    <p>Variation name</p>
                                                                                </div>
                                                                                <div class="product-name-field">
                                                                                   <input type="text" name="product_name" id="product_name">
                                                                                </div>
                                                                                </div>
                                                                                <div class="one-fourth">
                                                                                <div class="field-caption">
                                                                                    <p>Source</p>
                                                                                </div>                                                        
                                                                                   <div class="select">
                                                                                    <select name="facebook_post" id="facebook_post">
                                                                                        <option value="1"> FacebookPost </option>
                                                                                        <option value="2"> FacebookPaid</option>
                                                                                        <option value="3"> TwitterPost</option>
                                                                                        <option value="4"> FanBlast </option>
                                                                                        <option value="5"> NDHS </option>
                                                                                        <option value="6"> HomeSchool</option>
                                                                                        <option value="7"> AwaySchool</option>
                                                                                        <option value="8"> < campaign ></option>
                                                                                        <option value="9"> < event ></option>
                                                                                        <option value="10"> < home ></option>
                                                                                        <option value="11"> < away ></option>
                                                                                        <option value="12"> *NEW*</option>
                                                                                    </select>
                                                                                   </div>
                                                                                </div>
                                                                                <div class="one-fourth">
                                                                                <div class="field-caption">
                                                                                    <p>Medium</p>
                                                                                </div>                                                        
                                                                                  <div class="select">
                                                                                   <select name="twitter_post">
                                                                                        <option value="1"> Email</option>
                                                                                        <option value="2"> Social</option>
                                                                                        <option value="3"> School</option>
                                                                                        <option value="4"> < campaign ></option>
                                                                                        <option value="5"> < event ></option>
                                                                                        <option value="6"> < home ></option>
                                                                                        <option value="7"> < away ></option>
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
                                                                                        <option value="1"> < campaign ></option>
                                                                                        <option value="2"> < event ></option>
                                                                                        <option value="3"> < home ></option>
                                                                                        <option value="4"> < away ></option>
                                                                                        <option value="5"> *NEW*</option>
                                                                                    </select>
                                                                                 </div>
                                                                                </div>
                                                                            </div>
                                                                            <button type="submit" class="medium-btn bg-green text-white">Save</button>
                                                                            <button class="medium-btn btn-danger bg-red text-white close_btn">Exit</button>
                                                                          </div>
                                                                        </form>
                                                                    </div>
                                                                    <!-- End Select Options -->  
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            </div>
                                            <div class="external-links py-5">
                                                <a href="#" class="submit-btn">Create Urls</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!--End header-->
    <!-- Start filter -->
    <div class="fan-filter">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form class="filter-form" method="GET" action="{{ $filter_route }}" accept-charset="UTF-8">
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
                                <input name="campaign" type="text" value="@if(isset($filters['campaign'])){{$filters['campaign']}} @endif" class="form-control form-control-lg" placeholder="Campaign" />
                            </div>
                            <div class="input-group">
                                <input name="source" type="text" value="@if(isset($filters['source'])){{$filters['source']}} @endif" class="form-control form-control-lg" placeholder="Source" />
                            </div>
                            <div class="input-group">
                                <input name="medium" type="text" value="@if(isset($filters['medium'])){{$filters['medium']}} @endif" class="form-control form-control-lg" placeholder="Medium" />
                            </div>
                            <div class="input-group">
                                <input name="home" type="text" value="@if(isset($filters['home'])){{$filters['home']}} @endif" class="form-control form-control-lg" placeholder="Home Team" />
                            </div>
                            <div class="input-group">
                                <input name="away" type="text" value="@if(isset($filters['away'])){{$filters['away']}} @endif" class="form-control form-control-lg" placeholder="Away Team" />
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
                            <div class="select-menu"><a id="delete_select" href="#" data-url="{{ URL::to('url/delete/select')}}" class="btn btn-primary btn-lg">delete results</a></div>
                            <div class="select-menu"><a id="export_select"  href="#" data-url="{{ URL::to('url/export/select')}}" class="btn btn-success btn-lg">export results</a></div>
                            <div class="select-menu"><a  id="copy_select" href="#"  data-url="{{ URL::to('url/copy/select')}}" class="btn btn-danger btn-lg">copy results</a></div>
                            <div class="select-menu"><a  id="select_all" href="#" class="btn btn-info btn-lg">select all results</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End select -->
    <!-- Start table -->
    <div class="fan-table">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="table">
                        <table class="table">
                            <tbody>
                            <form id="form_urls" name="urls" method="POST" action="">
                                {{ csrf_field() }}
                                @foreach($campaigns as $c)
                                <tr>
                                    <td>
                                        <div class="squaredcheckbox">
                                            <input class="docheck" type="checkbox" value="None" id="squared_{{$c->id}}" name="urls[{{$c->id}}]" />
                                            <label for="squared_{{$c->id}}"></label>
                                        </div>
                                    </td>
                                    <td class="table-select"><a class="copyUrl" data-content="{{$c->shorts}}" href="#"><img src="images/select.png" alt="#" /></a></td>
                                    <td class="table-grid"><a class="edit_url" data-toggle="modal" data-target="#editUrl" href="{{ URL::to('url/edit') . '/' . $c->id }}"><img src="images/grid.png" alt="#" /></a></td>
                                    <td class="table-text">{{$c->variation->name}} | {{$c->event->home_school}}Vs{{$c->event->away_school}} | <a href="{{$c->shorts}}"> {{$c->shorts}}</a> --> <a href="{{$c->longs}}">{{App\Helper\CampaignHelper::shorten($c->longs, 40)}} </a></td>
                                    <td class="close"><a class="delete" href="{{ URL::to('url/delete') . '/' . $c->id }}"><img src="images/close.png" alt="#" /></a></td>
                                </tr>
                                @endforeach
                            </form>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-12">
                    {{ $campaigns->appends($filters)->links() }}
                </div>
            </div>
        </div>
    </div>

    <!-- End table -->
    @include('layout.foot')