<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Bootstrap Example</title>
        <meta charset="utf-8" />
        <title>
            CSV to MySQL
        </title>
        <meta name="description" content="Bootstrap touchspin examples">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--begin::Web font -->
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
        <script>
            WebFont.load({
                google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
                active: function() {
                    sessionStorage.fonts = true;
                }
            });
        </script>
        <!--end::Web font -->
        <!--begin::Base Styles -->
        <link href="assets/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css" />
        <link href="assets/demo/default/base/style.bundle.css" rel="stylesheet" type="text/css" />
        <!--end::Base Styles -->
        <link rel="shortcut icon" href="assets/demo/default/media/img/logo/favicon.ico" />
        <style>
            div {
                margin: 0px
            }
            div.container_ {
                margin: 20px 50px;
            }
            div.row {
                margin: 15px 0px;
            }
            div.my_container_outer {
                padding: 0 10px
            }
            div.my_container {
                border: solid 2px #cccccc;
            }
        </style>
    </head>

    <body style="background-color:#fafffa;">
        <div class="jumbotron text-center" style="height: 30px;">
            <h1>CSV To MySQL</h1>
        </div>
        
        <div class="container_">
            <div class="row">
                <div class="col-lg-12 my_container_outer">
                    <div class="col-lg-12 my_container">
                        <div class="col-lg-12 form-group m-form__group row">
                            <div class="col-lg-1">
                                Filename :
                            </div>
                            <div class="col-lg-11">
                                <input type="file" id="example-fileinput" class="form-control-file">
                            </div>
                        </div>
                        <div class="col-lg-12 form-group m-form__group row">
                            <div class="col-lg-1">
                                Encoding :
                            </div>
                            <div class="col-lg-11">
                                <select class="custom-select ">
                                    <option selected="">Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-12 form-group m-form__group row" style="padding: 0px">
                <div class="col-lg-6 my_container_outer" style="margin: 0px;">
                    <div class="col-lg-12 my_container" style="height: 100%;">
                        <div class="col-lg-12 form-group m-form__group row" style="height: 65%;">                    
                            <label class="col-form-label col-lg-2">
                                Ignore first :
                            </label>
                            <div class="col-lg-9">
                                <input id="m_touchspin_5" type="text" class="form-control bootstrap-touchspin-vertical-btn" value="" name="demo1" placeholder="30" type="text">
                            </div>
                            <label class="col-form-label col-lg-1">
                                lines
                            </label>
                        </div> 
                        <div class="col-lg-12 form-group m-form__group row">                    
                            <label class="m-checkbox">
                                <input type="checkbox" checked="checked">
                                Truncate destination table before import
                                <span></span>
                            </label>
                        </div>                   
                    </div>
                </div>

                
                <div class="col-lg-6 my_container_outer" style="margin: 0px;">
                    <div class="col-lg-12 my_container">
                        <div class="col-lg-12 form-group m-form__group row">                    
                            <label class="col-form-label col-lg-3">
                                Fields terminated by 
                            </label>
                            <div class="col-lg-4">
                                <input class="form-control m-input" type="text" value=";" id="example-text-input">
                            </div>
                        </div>
                        
                        <div class="col-lg-12 form-group m-form__group row">                    
                            <label class="col-form-label col-lg-3">
                                Fields enclosed by 
                            </label>
                            <div class="col-lg-4">
                                <input class="form-control m-input" type="text" value='"' id="example-text-input">
                            </div>
                            <div class="col-lg-3 m-checkbox-list">
                                <label class="m-checkbox">
                                    <input type="checkbox" checked="checked">
                                    optionally
                                    <span></span>
                                </label>
                            </div>
                        </div>

                        <div class="col-lg-12 form-group m-form__group row">                    
                            <label class="col-form-label col-lg-3">
                                Fields escaped by 
                            </label>
                            <div class="col-lg-4">
                                <input class="form-control m-input" type="text" value='"' id="example-text-input">
                            </div>
                        </div>

                        <div class="col-lg-12 form-group m-form__group row">                    
                            <label class="col-form-label col-lg-3">
                                Lines terminated by 
                            </label>
                            <div class="col-lg-4">
                                <input class="form-control m-input" type="text" value="\r\n" id="example-text-input">
                            </div>
                        </div>
                    </div>
                
                </div>
            </div>


            <div class="col-lg-12 form-group m-form__group row" style="padding: 0px">
                <div class="col-lg-6 my_container_outer" style="margin: 0px;">
                    <div class="col-lg-12 my_container" style="height: 100%;">
                        <div class="col-lg-12 form-group m-form__group row">                    
                            <div class="m-radio-list">
                                <label class="m-radio">
                                    <input type="radio" name="example_1" value="1">
                                    INSERT (may throw errors)
                                    <span></span>
                                </label>
                                <label class="m-radio">
                                    <input type="radio" name="example_1" value="2" checked="checked">
                                    INSERT IGNORE (duplicates)
                                    <span></span>
                                </label>
                                <label class="m-radio">
                                    <input type="radio" name="example_1" value="1">
                                    REPLACE (may throw errors)
                                    <span></span>
                                </label>
                            </div>
                        </div>                    
                    </div>                    
                </div>

                
                <div class="col-lg-6 my_container_outer" style="margin: 0px;">
                    <div class="col-lg-12 my_container">
                        <div class="col-lg-12 form-group m-form__group row">                    
                            <label class="col-form-label col-lg-2">
                                Database: 
                            </label>
                            <div class="col-lg-10">
                                <select class="custom-select ">
                                    <option selected="">Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-12 form-group m-form__group row">                    
                            <label class="col-form-label col-lg-2">
                                Tables: 
                            </label>
                            <div class="col-lg-10">
                                <select class="custom-select ">
                                    <option selected="">Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="col-lg-12 form-group m-form__group row">                    
                            <label class="col-form-label col-lg-2">
                                Columns: 
                            </label>
                            <div class="col-lg-10">
                                <div class="list-group checkbox-list-group">
                                    <div class="list-group-item">&nbsp;<label><input type="checkbox"><span class="list-group-item-text"><i class="fa fa-fw"></i> Default</span></label></div>
                                    <div class="list-group-item list-group-item-success"><label>&nbsp;<input type="checkbox"><span class="list-group-item-text"><i class="fa fa-fw"></i> Success</span></label></div>
                                    <div class="list-group-item list-group-item-info"><label>&nbsp;<input type="checkbox"><span class="list-group-item-text"><i class="fa fa-fw"></i> Info</span></label></div>
                                    <div class="list-group-item list-group-item-warning"><label>&nbsp;<input type="checkbox"><span class="list-group-item-text"><i class="fa fa-fw"></i> Warning</span></label></div>
                                    <div class="list-group-item list-group-item-danger"><label>&nbsp;<input type="checkbox"><span class="list-group-item-text"><i class="fa fa-fw"></i> Danger</span></label></div>
                                  </div>
                            </div>
                        </div>
                    </div>
                
                </div>
            </div>

            <div style="float: right;">
                <button type="button" class="btn btn-primary" style="margin-right: 20px;">
                    Import
                </button>
                <button type="button" class="btn btn-secondary">
                    Cancel
                </button>
            </div>
            
        </div>
        <script src="assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
        <script src="assets/demo/default/base/scripts.bundle.js" type="text/javascript"></script>
        <script src="assets/demo/default/custom/components/forms/widgets/bootstrap-touchspin.js" type="text/javascript"></script>
    </body>
</html>
