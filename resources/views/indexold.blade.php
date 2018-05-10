@include('layout.head')
<body>
    <!--Start header-->
    <header class="fan-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="header">
                        <div class="header-logo float-left">
                            <a href="#"><img src="images/header-logo.jpg" alt="header-logo" /></a>
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
    <div class="modal fade" id="fanmodal" tabindex="-1" role="dialog" aria-labelledby="fanmodal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content text-center">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h5>BULK URL TAGGING AND SHORTENING | CREATE AND UPLOAD</h5>
                    <form method="POST" action="{{ $post_route }}" accept-charset="UTF-8" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="modal-menu-group">
                            <input type="file" name="file" id="fileupload" class="inputfile inputfile" data-multiple-caption="{count} files selected" />
                            <label for="fileupload"><span></span> <strong><img src="images/uploader.png" alt="image" /></strong></label>
                        </div>
                        <div class="modal-menu-group">
                            <select name="parameters[]" id="multiselect2" multiple="multiple">
                                <option  value="name">Name</option>
                                <option value="source">Source</option>
                                <option value="medium">Medium</option>
                                <option value="term">Term</option>
                            </select>
                        </div>
                        <div class="modal-table-main collapse" id="collapsetable">
                            <h5>URL VARIATIONS</h5>
                            <table class="modal-table text-center">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Source</th>
                                        <th>Medium</th>
                                        <th>Term</th>
                                        <th>&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody id="variations">
                                    <tr id="v0">
                                        <td><input name="variation[0][name]" type="text" class="form-control"  placeholder="facebook paid"></td>
                                        <td><input name="variation[0][source]" type="text" class="form-control"  placeholder=""></td>
                                        <td><input name="variation[0][medium]" type="text" class="form-control"  placeholder=""></td>
                                        <td><input name="variation[0][term]" type="text" class="form-control"  placeholder=""></td>
                                        <td class="close"><a class="remove" href="#"><img src="images/close.png"/></a></td>
                                    </tr>
                                    <tr id="v1">
                                        <td><input name="variation[1][name]" type="text" class="form-control"  placeholder="Twitter"></td>
                                        <td><input name="variation[1][source]" type="text" class="form-control"  placeholder=""></td>
                                        <td><input name="variation[1][medium]" type="text" class="form-control"  placeholder=""></td>
                                        <td><input name="variation[1][term]" type="text" class="form-control"  placeholder=""></td>
                                        <td class="close"><a class="remove" href="#"><img src="images/close.png"/></a></td>
                                    </tr>
                                    <tr id="v2">
                                        <td><input name="variation[2][name]" type="text" class="form-control"  placeholder="Fan Blast Email"></td>
                                        <td><input name="variation[2][source]" type="text" class="form-control"  placeholder=""></td>
                                        <td><input name="variation[2][medium]" type="text" class="form-control"  placeholder=""></td>
                                        <td><input name="variation[2][term]" type="text" class="form-control"  placeholder=""></td>
                                        <td class="close"><a class="remove" href="#"><img src="images/close.png"/></a></td>
                                    </tr>
                                    <tr id="v3">
                                        <td><input name="variation[3][name]" type="text" class="form-control"  placeholder="NFHS email"></td>
                                        <td><input name="variation[3][source]" type="text" class="form-control"  placeholder=""></td>
                                        <td><input name="variation[3][medium]" type="text" class="form-control"  placeholder=""></td>
                                        <td><input name="variation[3][term]" type="text" class="form-control"  placeholder=""></td>
                                        <td class="close"><a class="remove" href="#"><img src="images/close.png"/></a></td>
                                    </tr>
                                    <tr id="v4">
                                        <td><input name="variation[4][name]" type="text" class="form-control"  placeholder="Home School"></td>
                                        <td><input name="variation[4][source]" type="text" class="form-control"  placeholder=""></td>
                                        <td><input name="variation[4][medium]" type="text" class="form-control"  placeholder=""></td>
                                        <td><input name="variation[4][term]" type="text" class="form-control"  placeholder=""></td>
                                        <td class="close"><a class="remove" href="#"><img src="images/close.png"/></a></td>
                                    </tr>
                                    <tr id="v5">
                                        <td><input name="variation[5][name]" type="text" class="form-control"  placeholder="Away School"></td>
                                        <td><input name="variation[5][source]" type="text" class="form-control"  placeholder=""></td>
                                        <td><input name="variation[5][medium]" type="text" class="form-control"  placeholder=""></td>
                                        <td><input name="variation[5][term]" type="text" class="form-control"  placeholder=""></td>
                                        <td class="close"><a class="remove" href="#"><img src="images/close.png"/></a></td>
                                    </tr>
                                    <tr>
                                        <td><a id="addv" class="add-new-btn btn btn-primary" href="#">Add New</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <a class="variation-btn modal-collapse" data-toggle="collapse" href="#collapsetable" aria-expanded="false">
                            <span class="open">( manage url variations )</span>
                            <span class="close">(close)</span>
                        </a>
                        <button type="submit" class="modal-btn btn btn-primary">create &amp; add new urls</button>
                    </form>
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
                        <div class="select-menu-group float-left">
                            <select id="multiselect" multiple="multiple">
                                <option value="Name">Name</option>
                                <option value="Source">Source</option>
                                <option value="Medium">Medium</option>
                                <option value="Term">Term</option>
                            </select>
                        </div>
                        <div class="select-menu-main float-left">
                            <div class="select-menu"><a href="#" class="btn btn-primary btn-lg">delete results</a></div>
                            <div class="select-menu"><a href="#" class="btn btn-success btn-lg">export results</a></div>
                            <div class="select-menu"><a href="#" class="btn btn-danger btn-lg">copy results</a></div>
                            <div class="select-menu"><a href="#" class="btn btn-info btn-lg">select all results</a></div>
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
                                @foreach($campaigns as $c)
                                <tr>
                                    <td>
                                        <div class="squaredcheckbox">
                                            <input type="checkbox" value="None" id="squared_{{$c->id}}" name="check_{{$c->id}}" />
                                            <label for="squared_{{$c->id}}"></label>
                                        </div>
                                    </td>
                                    <td class="table-select"><a class="copyUrl" data-content="{{App\Helper\CampaignHelper::getShort($c)}}" href="#"><img src="images/select.png" alt="#" /></a></td>
                                    <td class="table-grid"><a class="edit" data-toggle="modal" data-target="#editUrl" href="{{ URL::to('campaign/edit') . '/' . $c->id }}"><img src="images/grid.png" alt="#" /></a></td>
                                    <td class="table-text">{{App\Helper\CampaignHelper::getCampaign($c)}}</td>
                                    <td class="table-text">{{App\Helper\CampaignHelper::getContent($c)}}</td>
                                    <td class="table-text"><a href="{{App\Helper\CampaignHelper::getShort($c)}}"> {{App\Helper\CampaignHelper::getShort($c)}}</a></td>
                                    <td class="table-text"><a href="{{App\Helper\CampaignHelper::getLong($c)}}">{{App\Helper\CampaignHelper::shorten(App\Helper\CampaignHelper::getLong($c), 20)}} </a></td>
                                    <td class="close"><a class="delete" href="{{ URL::to('campaign/delete') . '/' . $c->id }}"><img src="images/close.png" alt="#" /></a></td>
                                </tr>
                                @endforeach
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