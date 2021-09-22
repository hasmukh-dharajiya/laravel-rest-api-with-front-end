<!doctype html>
<html class="no-js" lang="">
<head>
    <?php include 'include/meta.php';?>
    <title>Normal Table | Notika - Notika Admin Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/toastr.css">
    <?php include 'include/css.php';?>
    <link rel="stylesheet" href="css/notification/notification.css">
    <style type="text/css">
         .dataTables_info,  .dataTables_paginate {
            padding-top: 0px;
        }
         .dataTables_info,  .dataTables_paginate {
            padding-top: 0px;
        }
         .dataTables_length,  .dataTables_filter,  .dataTables_info,  .dataTables_processing,  .dataTables_paginate {
            color: #333333;
        }
         .dataTables_paginate {
            float: right;
            text-align: right;
            padding-top: 0.25em;
        }
         .dataTables_paginate .paginate_button.disabled,  .dataTables_paginate .paginate_button.disabled:hover,  .dataTables_paginate .paginate_button.disabled:active {
            cursor: default;
            color: #666 !important;
            border: 1px solid transparent;
            background: transparent;
            box-shadow: none;
        }
         .dataTables_paginate .paginate_button {
            width: 35px;
            height: 35px;
            border-radius: 50%;
            background-color: #f1f1f1;
            vertical-align: top;
            color: #7E7E7E!important;
            margin: 0 2px;
            border: 0!important;
            line-height: 21px;
            box-shadow: none!important;
        }
         .dataTables_paginate .paginate_button {
            box-sizing: border-box;
            display: inline-block;
            min-width: 1.5em;
            padding: 0.5em 1em;
            margin-left: 2px;
            text-align: center;
            text-decoration: none !important;
            cursor: pointer;
            *cursor: hand;
            color: #333333 !important;
            border: 1px solid transparent;
            border-radius: 2px;
        }
        a {
            transition: all 0.3s ease 0s;
            text-decoration: none;
        }
         .dataTables_paginate .paginate_button.next:before,  .dataTables_paginate .paginate_button.previous:before {
            font-family: 'notika-icon';
            font-size: 14px;
            line-height: 35px;
        }
         .dataTables_paginate .paginate_button.previous:before {
            content: '\e903';
        }
         .dataTables_paginate .paginate_button.current,  .dataTables_paginate .paginate_button.current:focus,  .dataTables_paginate .paginate_button.current:hover {
            background: #00c292;
            color: #fff!important;
        }
         .dataTables_paginate .paginate_button.current,  .dataTables_paginate .paginate_button.current:hover {
            color: #333333 !important;
            border: 1px solid #979797;
            background-color: white;
            background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #fff), color-stop(100%, #dcdcdc));
            background: -webkit-linear-gradient(top, #fff 0%, #dcdcdc 100%);
            background: -moz-linear-gradient(top, #fff 0%, #dcdcdc 100%);
            background: -ms-linear-gradient(top, #fff 0%, #dcdcdc 100%);
            background: -o-linear-gradient(top, #fff 0%, #dcdcdc 100%);
            background: linear-gradient(to bottom, #fff 0%, #dcdcdc 100%);
        }
         .dataTables_paginate .paginate_button {
            width: 35px;
            height: 35px;
            border-radius: 50%;
            background-color: #f1f1f1;
            vertical-align: top;
            color: #7E7E7E!important;
            margin: 0 2px;
            border: 0!important;
            line-height: 21px;
            box-shadow: none!important;
        }
         .dataTables_paginate .paginate_button {
            box-sizing: border-box;
            display: inline-block;
            min-width: 1.5em;
            padding: 0.5em 1em;
            margin-left: 2px;
            text-align: center;
            text-decoration: none !important;
            cursor: pointer;
            *cursor: hand;
            color: #333333 !important;
            border: 1px solid transparent;
            border-radius: 2px;
        }
        a {
            transition: all 0.3s ease 0s;
            text-decoration: none;
        }
         .dataTables_paginate .paginate_button {
            width: 35px;
            height: 35px;
            border-radius: 50%;
            background-color: #f1f1f1;
            vertical-align: top;
            color: #7E7E7E!important;
            margin: 0 2px;
            border: 0!important;
            line-height: 21px;
            box-shadow: none!important;
        }
         .dataTables_paginate .paginate_button {
            box-sizing: border-box;
            display: inline-block;
            min-width: 1.5em;
            padding: 0.5em 1em;
            margin-left: 2px;
            text-align: center;
            text-decoration: none !important;
            cursor: pointer;
            *cursor: hand;
            color: #333333 !important;
            border: 1px solid transparent;
            border-radius: 2px;
        }
        a {
            transition: all 0.3s ease 0s;
            text-decoration: none;
        }
         .dataTables_paginate .paginate_button.next,  .dataTables_paginate .paginate_button.previous {
            font-size: 0;
        }
         .dataTables_paginate .paginate_button {
            width: 35px;
            height: 35px;
            border-radius: 50%;
            background-color: #f1f1f1;
            vertical-align: top;
            color: #7E7E7E!important;
            margin: 0 2px;
            border: 0!important;
            line-height: 21px;
            box-shadow: none!important;
        }
         .dataTables_paginate .paginate_button {
            box-sizing: border-box;
            display: inline-block;
            min-width: 1.5em;
            padding: 0.5em 1em;
            margin-left: 2px;
            text-align: center;
            text-decoration: none !important;
            cursor: pointer;
            *cursor: hand;
            color: #333333 !important;
            border: 1px solid transparent;
            border-radius: 2px;
        }
         .dataTables_paginate .paginate_button.next:before {
            content: '\e91e';
        }

         .dataTables_paginate .paginate_button.next:before,  .dataTables_paginate .paginate_button.previous:before {
            font-family: 'notika-icon';
            font-size: 14px;
            line-height: 35px;
        }
        :after {
            visibility: hidden;
            display: block;
            content: "";
            clear: both;
            height: 0;
        }
    </style>
</head>

<body>

    <?php include 'include/header.php';?>

	<!-- Breadcomb area Start-->
	<div class="breadcomb-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcomb-list">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="breadcomb-wp">
                                    <div class="breadcomb-icon">
                                        <i class="notika-icon notika-windows"></i>
                                    </div>
                                    <div class="breadcomb-ctn">
                                        <h2>Data Table</h2>
                                        <p>Welcome to Front End <span class="bread-ntd">Project</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
                                <div class="breadcomb-report">
                                    <button  type="button" class="btn waves-effect" data-toggle="modal" data-target="#myModalone"> + Create New Record</button>
                                </div>
                            </div>
                        </div>
                    </div>
				</div>
			</div>
		</div>
	</div>



	<!-- Breadcomb area End-->
    <!-- Normal Table area Start-->
    <div class="normal-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="normal-table-list mg-t-30">
                        <div class="basic-tb-hd">
                            <h2>Employee</h2>
                        </div>
                        <div class="bsc-tbl-hvr dataTables_wrapper">
                            <table class="table table-hover">
                                <div class="dataTables_length" id="data-table-basic_length">
                                    <label>Show
                                        <select name="count" id="show_entries">
                                            <option value="5">5</option>
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select> entries
                                    </label>
                                </div>
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th>Age</th>
                                        <th>Start date</th>
                                        <th>Salary</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody id="employeeData">

                                </tbody>
                            </table>
                            <div class="dataTables_info" id="data-table-basic_info">
                            </div>
                            <div id="pagination">

                            </div>
<!--                            -->
<!---->
<!--                            <div class="dataTables_paginate paging_simple_numbers" id="data-table-basic_paginate">-->
<!--                                <a class="paginate_button previous disabled" aria-controls="data-table-basic" data-dt-idx="0" tabindex="0" id="data-table-basic_previous">Previous</a>-->
<!--                                <span>-->
<!--                                    <a class="paginate_button current" aria-controls="data-table-basic" data-dt-idx="1" tabindex="0">1</a>-->
<!--                                    <a class="paginate_button " aria-controls="data-table-basic" data-dt-idx="2" tabindex="0">2</a>-->
<!--                                    <a class="paginate_button " aria-controls="data-table-basic" data-dt-idx="3" tabindex="0">3</a>-->
<!--                                    <a class="paginate_button " aria-controls="data-table-basic" data-dt-idx="4" tabindex="0">4</a>-->
<!--                                    <a class="paginate_button " aria-controls="data-table-basic" data-dt-idx="5" tabindex="0">5</a>-->
<!--                                    <a class="paginate_button " aria-controls="data-table-basic" data-dt-idx="6" tabindex="0">6</a>-->
<!--                                </span>-->
<!--                                <a class="paginate_button next" aria-controls="data-table-basic" data-dt-idx="7" tabindex="0" id="data-table-basic_next">Next</a>-->
<!--                            </div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Normal Table area End-->


    <!--  Add  model-->
    <div class="modal fade in" id="myModalone" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                </div>
                <form id="submitForm" >
                    <div class="modal-body">
                        <h2>Create New Record</h2>
                        <div class="form-example-wrap">
                            <div class="form-example-int">
                                <div class="form-group">
                                    <label>Name</label>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control input-sm" placeholder="Enter Name" name="name">
                                    </div>
                                </div>
                            </div>
                            <div class="form-example-int">
                                <div class="form-group">
                                    <label>Position</label>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control input-sm" placeholder="Enter Position" name="position">
                                    </div>
                                </div>
                            </div>
                            <div class="form-example-int">
                                <div class="form-group">
                                    <label>Office</label>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control input-sm" placeholder="Enter Office" name="office">
                                    </div>
                                </div>
                            </div>
                            <div class="form-example-int">
                                <div class="form-group">
                                    <label>Age</label>
                                    <div class="nk-int-st">
                                        <input type="number" class="form-control input-sm" placeholder="Enter Age" name="age">
                                    </div>
                                </div>
                            </div>
                            <div class="form-example-int">
                                <div class="form-group">
                                    <label>Salary</label>
                                    <div class="nk-int-st">
                                        <input type="number" class="form-control input-sm" placeholder="Enter Salary" name="salary">
                                    </div>
                                </div>
                            </div>
                            <div class="form-example-int">
                                <div class="form-group">
                                    <label>Start date</label>
                                    <div class="nk-int-st">
                                        <input type="date" class="form-control" data-mask="99/99/9999" placeholder="dd/mm/yyyy"  name="start_date">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-default">Save changes</button>
                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal" id="close">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--  Edit  model-->
    <div class="modal fade in" id="editModel" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                </div>
                <form id="updateForm" >
                    <input type="hidden" name="id" id="id">
                    <div class="modal-body">
                        <h2>Edit Record</h2>
                        <div class="form-example-wrap">
                            <div class="form-example-int">
                                <div class="form-group">
                                    <label>Name</label>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control input-sm" placeholder="Enter Name" name="name" id="name">
                                    </div>
                                </div>
                            </div>
                            <div class="form-example-int">
                                <div class="form-group">
                                    <label>Position</label>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control input-sm" placeholder="Enter Position" name="position" id="position">
                                    </div>
                                </div>
                            </div>
                            <div class="form-example-int">
                                <div class="form-group">
                                    <label>Office</label>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control input-sm" placeholder="Enter Office" name="office" id="office">
                                    </div>
                                </div>
                            </div>
                            <div class="form-example-int">
                                <div class="form-group">
                                    <label>Age</label>
                                    <div class="nk-int-st">
                                        <input type="number" class="form-control input-sm" placeholder="Enter Age" name="age" id="age">
                                    </div>
                                </div>
                            </div>
                            <div class="form-example-int">
                                <div class="form-group">
                                    <label>Salary</label>
                                    <div class="nk-int-st">
                                        <input type="number" class="form-control input-sm" placeholder="Enter Salary" name="salary" id="salary">
                                    </div>
                                </div>
                            </div>
                            <div class="form-example-int">
                                <div class="form-group">
                                    <label>Start date</label>
                                    <div class="nk-int-st">
                                        <input type="date" class="form-control" data-mask="99/99/9999" placeholder="dd/mm/yyyy"  name="start_date" id="start_date">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-default">Save changes</button>
                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal" id="closeBtn">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <button style="display: none" data-toggle="modal" data-target="#editModel" id="editBtn">Delete Btn</button>

    <?php include 'include/js.php';?>
    <script src="js/toastr.min.js"></script>
    <script src="js/notification/notification-active.js"></script>
    <script>
        <?php include 'js/custom/employee.js';?>
    </script>
</body>

</html>