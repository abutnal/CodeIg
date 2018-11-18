<!DOCTYPE html> 
<html lang="en">

<!-- Mirrored from agileui.com/demo/monarch/demo/admin-template/multi-uploader.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Aug 2018 05:46:16 GMT -->
<head>

    <style>
        /* Loading Spinner */
        .spinner{margin:0;width:70px;height:18px;margin:-35px 0 0 -9px;position:absolute;top:50%;left:50%;text-align:center}.spinner > div{width:18px;height:18px;background-color:#333;border-radius:100%;display:inline-block;-webkit-animation:bouncedelay 1.4s infinite ease-in-out;animation:bouncedelay 1.4s infinite ease-in-out;-webkit-animation-fill-mode:both;animation-fill-mode:both}.spinner .bounce1{-webkit-animation-delay:-.32s;animation-delay:-.32s}.spinner .bounce2{-webkit-animation-delay:-.16s;animation-delay:-.16s}@-webkit-keyframes bouncedelay{0%,80%,100%{-webkit-transform:scale(0.0)}40%{-webkit-transform:scale(1.0)}}@keyframes bouncedelay{0%,80%,100%{transform:scale(0.0);-webkit-transform:scale(0.0)}40%{transform:scale(1.0);-webkit-transform:scale(1.0)}}
    </style>


    <meta charset="UTF-8">
<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
<title> Dashboard </title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<?php include('header.php');?>

</head>


    <body class="boxed-layout fixed-header">
<?php include('nav.php'); ?>

<?php include('side_bar.php');?>


        <div id="page-content-wrapper">
            <div id="page-content">
                
                    <div class="container">
<?php include('widget.php');?>                    

<div id="page-title">
    <h2>Email Database</h2>
    <p>File Upload widget with multiple file selection.</p>
   

  <!--  <div id="theme-options" class="admin-options">
    <a href="javascript:void(0);" class="btn btn-primary theme-switcher tooltip-button" data-placement="left" title="Color schemes and layout options">
        <i class="glyph-icon icon-linecons-cog icon-spin"></i>
    </a>


    <div id="theme-switcher-wrapper">
        <div class="scroll-switcher">
            <h5 class="header">Layout options</h5>
            <ul class="reset-ul">
                <li>
                    <label for="boxed-layout">Boxed layout</label>
                    <input type="checkbox" data-toggletarget="boxed-layout" id="boxed-layout" class="input-switch-alt">
                </li>
                <li>
                    <label for="fixed-header">Fixed header</label>
                    <input type="checkbox" data-toggletarget="fixed-header" id="fixed-header" class="input-switch-alt">
                </li>
                <li>
                    <label for="fixed-sidebar">Fixed sidebar</label>
                    <input type="checkbox" data-toggletarget="fixed-sidebar" id="fixed-sidebar" class="input-switch-alt">
                </li>
                <li>
                    <label for="closed-sidebar">Closed sidebar</label>
                    <input type="checkbox" data-toggletarget="closed-sidebar" id="closed-sidebar" class="input-switch-alt">
                </li>
            </ul>
            <div class="boxed-bg-wrapper hide">
                <h5 class="header">
                    Boxed Page Background
                    <a class="set-background-style" data-header-bg="" title="Remove all styles" href="javascript:void(0);">Clear</a>
                </h5>
                <div class="theme-color-wrapper clearfix">
                    <h5>Patterns</h5>
                    <a class="tooltip-button set-background-style pattern-bg-3" data-header-bg="pattern-bg-3" title="Pattern 3" href="javascript:void(0);">Pattern 3</a>
                    <a class="tooltip-button set-background-style pattern-bg-4" data-header-bg="pattern-bg-4" title="Pattern 4" href="javascript:void(0);">Pattern 4</a>
                    <a class="tooltip-button set-background-style pattern-bg-5" data-header-bg="pattern-bg-5" title="Pattern 5" href="javascript:void(0);">Pattern 5</a>
                    <a class="tooltip-button set-background-style pattern-bg-6" data-header-bg="pattern-bg-6" title="Pattern 6" href="javascript:void(0);">Pattern 6</a>
                    <a class="tooltip-button set-background-style pattern-bg-7" data-header-bg="pattern-bg-7" title="Pattern 7" href="javascript:void(0);">Pattern 7</a>
                    <a class="tooltip-button set-background-style pattern-bg-8" data-header-bg="pattern-bg-8" title="Pattern 8" href="javascript:void(0);">Pattern 8</a>
                    <a class="tooltip-button set-background-style pattern-bg-9" data-header-bg="pattern-bg-9" title="Pattern 9" href="javascript:void(0);">Pattern 9</a>
                    <a class="tooltip-button set-background-style pattern-bg-10" data-header-bg="pattern-bg-10" title="Pattern 10" href="javascript:void(0);">Pattern 10</a>

                    <div class="clear"></div>

                    <h5 class="mrg15T">Solids &amp;Images</h5>
                    <a class="tooltip-button set-background-style bg-black" data-header-bg="bg-black" title="Black" href="javascript:void(0);">Black</a>
                    <a class="tooltip-button set-background-style bg-gray mrg10R" data-header-bg="bg-gray" title="Gray" href="javascript:void(0);">Gray</a>

                    <a class="tooltip-button set-background-style full-bg-1" data-header-bg="full-bg-1 fixed-bg" title="Image 1" href="javascript:void(0);">Image 1</a>
                    <a class="tooltip-button set-background-style full-bg-2" data-header-bg="full-bg-2 fixed-bg" title="Image 2" href="javascript:void(0);">Image 2</a>
                    <a class="tooltip-button set-background-style full-bg-3" data-header-bg="full-bg-3 fixed-bg" title="Image 3" href="javascript:void(0);">Image 3</a>
                    <a class="tooltip-button set-background-style full-bg-4" data-header-bg="full-bg-4 fixed-bg" title="Image 4" href="javascript:void(0);">Image 4</a>
                    <a class="tooltip-button set-background-style full-bg-5" data-header-bg="full-bg-5 fixed-bg" title="Image 5" href="javascript:void(0);">Image 5</a>
                    <a class="tooltip-button set-background-style full-bg-6" data-header-bg="full-bg-6 fixed-bg" title="Image 6" href="javascript:void(0);">Image 6</a>

                </div>
            </div>
            <h5 class="header">
                Header Style
                <a class="set-adminheader-style" data-header-bg="bg-gradient-9" title="Remove all styles" href="javascript:void(0);">Clear</a>
            </h5>
            <div class="theme-color-wrapper clearfix">
                <h5>Solids</h5>
                <a class="tooltip-button set-adminheader-style bg-primary" data-header-bg="bg-primary font-inverse" title="Primary" href="javascript:void(0);">Primary</a>
                <a class="tooltip-button set-adminheader-style bg-green" data-header-bg="bg-green font-inverse" title="Green" href="javascript:void(0);">Green</a>
                <a class="tooltip-button set-adminheader-style bg-red" data-header-bg="bg-red font-inverse" title="Red" href="javascript:void(0);">Red</a>
                <a class="tooltip-button set-adminheader-style bg-blue" data-header-bg="bg-blue font-inverse" title="Blue" href="javascript:void(0);">Blue</a>
                <a class="tooltip-button set-adminheader-style bg-warning" data-header-bg="bg-warning font-inverse" title="Warning" href="javascript:void(0);">Warning</a>
                <a class="tooltip-button set-adminheader-style bg-purple" data-header-bg="bg-purple font-inverse" title="Purple" href="javascript:void(0);">Purple</a>
                <a class="tooltip-button set-adminheader-style bg-black" data-header-bg="bg-black font-inverse" title="Black" href="javascript:void(0);">Black</a>

                <div class="clear"></div>

                <h5 class="mrg15T">Gradients</h5>
                <a class="tooltip-button set-adminheader-style bg-gradient-1" data-header-bg="bg-gradient-1 font-inverse" title="Gradient 1" href="javascript:void(0);">Gradient 1</a>
                <a class="tooltip-button set-adminheader-style bg-gradient-2" data-header-bg="bg-gradient-2 font-inverse" title="Gradient 2" href="javascript:void(0);">Gradient 2</a>
                <a class="tooltip-button set-adminheader-style bg-gradient-3" data-header-bg="bg-gradient-3 font-inverse" title="Gradient 3" href="javascript:void(0);">Gradient 3</a>
                <a class="tooltip-button set-adminheader-style bg-gradient-4" data-header-bg="bg-gradient-4 font-inverse" title="Gradient 4" href="javascript:void(0);">Gradient 4</a>
                <a class="tooltip-button set-adminheader-style bg-gradient-5" data-header-bg="bg-gradient-5 font-inverse" title="Gradient 5" href="javascript:void(0);">Gradient 5</a>
                <a class="tooltip-button set-adminheader-style bg-gradient-6" data-header-bg="bg-gradient-6 font-inverse" title="Gradient 6" href="javascript:void(0);">Gradient 6</a>
                <a class="tooltip-button set-adminheader-style bg-gradient-7" data-header-bg="bg-gradient-7 font-inverse" title="Gradient 7" href="javascript:void(0);">Gradient 7</a>
                <a class="tooltip-button set-adminheader-style bg-gradient-8" data-header-bg="bg-gradient-8 font-inverse" title="Gradient 8" href="javascript:void(0);">Gradient 8</a>
            </div>
            <h5 class="header">
                Sidebar Style
                <a class="set-sidebar-style" data-header-bg="" title="Remove all styles" href="javascript:void(0);">Clear</a>
            </h5>
            <div class="theme-color-wrapper clearfix">
                <h5>Solids</h5>
                <a class="tooltip-button set-sidebar-style bg-primary" data-header-bg="bg-primary font-inverse" title="Primary" href="javascript:void(0);">Primary</a>
                <a class="tooltip-button set-sidebar-style bg-green" data-header-bg="bg-green font-inverse" title="Green" href="javascript:void(0);">Green</a>
                <a class="tooltip-button set-sidebar-style bg-red" data-header-bg="bg-red font-inverse" title="Red" href="javascript:void(0);">Red</a>
                <a class="tooltip-button set-sidebar-style bg-blue" data-header-bg="bg-blue font-inverse" title="Blue" href="javascript:void(0);">Blue</a>
                <a class="tooltip-button set-sidebar-style bg-warning" data-header-bg="bg-warning font-inverse" title="Warning" href="javascript:void(0);">Warning</a>
                <a class="tooltip-button set-sidebar-style bg-purple" data-header-bg="bg-purple font-inverse" title="Purple" href="javascript:void(0);">Purple</a>
                <a class="tooltip-button set-sidebar-style bg-black" data-header-bg="bg-black font-inverse" title="Black" href="javascript:void(0);">Black</a>

                <div class="clear"></div>

                <h5 class="mrg15T">Gradients</h5>
                <a class="tooltip-button set-sidebar-style bg-gradient-1" data-header-bg="bg-gradient-1 font-inverse" title="Gradient 1" href="javascript:void(0);">Gradient 1</a>
                <a class="tooltip-button set-sidebar-style bg-gradient-2" data-header-bg="bg-gradient-2 font-inverse" title="Gradient 2" href="javascript:void(0);">Gradient 2</a>
                <a class="tooltip-button set-sidebar-style bg-gradient-3" data-header-bg="bg-gradient-3 font-inverse" title="Gradient 3" href="javascript:void(0);">Gradient 3</a>
                <a class="tooltip-button set-sidebar-style bg-gradient-4" data-header-bg="bg-gradient-4 font-inverse" title="Gradient 4" href="javascript:void(0);">Gradient 4</a>
                <a class="tooltip-button set-sidebar-style bg-gradient-5" data-header-bg="bg-gradient-5 font-inverse" title="Gradient 5" href="javascript:void(0);">Gradient 5</a>
                <a class="tooltip-button set-sidebar-style bg-gradient-6" data-header-bg="bg-gradient-6 font-inverse" title="Gradient 6" href="javascript:void(0);">Gradient 6</a>
                <a class="tooltip-button set-sidebar-style bg-gradient-7" data-header-bg="bg-gradient-7 font-inverse" title="Gradient 7" href="javascript:void(0);">Gradient 7</a>
                <a class="tooltip-button set-sidebar-style bg-gradient-8" data-header-bg="bg-gradient-8 font-inverse" title="Gradient 8" href="javascript:void(0);">Gradient 8</a>
            </div>
        </div>
    </div>  
</div>-->
</div>


   <div class="panel">
            <div class="panel-body">
               
                <div class="example-box-wrapper">
                    <ul class="list-group list-group-separator row list-group-icons">
                         <li class="col-md-3 active">
                            <a href="#tab-example-1" data-toggle="tab" class="list-group-item">
                                <i class="glyph-icon icon-database"></i>
                                Email Database
                            </a>
                        </li>
                        <li class="col-md-3">
                            <a href="#tab-example-4" id="m1" data-toggle="tab" class="list-group-item">
                                <i class="glyph-icon font-red icon-linecons-mail"></i>
                                 Write Email
                            </a>
                        </li>
                       
                        <li class="col-md-3">
                            <a href="#tab-example-2" data-toggle="tab" class="list-group-item">
                                <i class="glyph-icon font-primary icon-pencil"></i>
                                Enter Database
                            </a>
                        </li>
                        <li class="col-md-3">
                            <a href="#tab-example-3" data-toggle="tab" class="list-group-item">
                                <i class="glyph-icon font-blue-alt icon-upload"></i>
                               Emport Database
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade active in" id="tab-example-1">
                          <div class="row">
                              <div class="col-md-12">
                                    <style type="text/css">
                                        .ui-widget.ui-widget-content {
    border: 1px solid #fff;
}
                                    </style>

                                    <style type="text/css">
    .ui-pg-table .ui-pg-button {
    font-size: 150%;
}
.ui-jqgrid .ui-pg-table .ui-pg-button:not(.ui-state-hover) {
    background: #3498db;
    background-image: -webkit-linear-gradient(top, #3498db, #2980b9);
    background-image: -moz-linear-gradient(top, #3498db, #2980b9);
    background-image: -ms-linear-gradient(top, #3498db, #2980b9);
    background-image: -o-linear-gradient(top, #3498db, #2980b9);
    background-image: linear-gradient(to bottom, #3498db, #2980b9);
    -webkit-border-radius: 5;
    -moz-border-radius: 5;
    border-radius: 5px;
    -webkit-box-shadow: 3px 3px 7px #666666;
    -moz-box-shadow: 3px 3px 7px #666666;
    box-shadow: 3px 3px 7px #666666;
    color: #ffffff;
    font-size: 18px;
    padding: 2px 2px 2px 2px;
    border: solid #0089de 1px;
    text-decoration: none;
}
.ui-jqgrid .ui-pg-table .ui-pg-button.ui-state-hover,
.ui-jqgrid .ui-pg-table .ui-pg-button:hover{
    background: #3cb0fd;
    background-image: -webkit-linear-gradient(top, #3cb0fd, #3498db);
    background-image: -moz-linear-gradient(top, #3cb0fd, #3498db);
    background-image: -ms-linear-gradient(top, #3cb0fd, #3498db);
    background-image: -o-linear-gradient(top, #3cb0fd, #3498db);
    background-image: linear-gradient(to bottom, #3cb0fd, #3498db);
    padding: 2px 2px 2px 2px;
    border-radius: 5px;
    font-size: 18px;
    color: #e6f5ff;
    text-decoration: none;
}

.ui-jqdialog-content .CaptionTD {
    vertical-align: middle;
    border: 0 none;
    padding-top: 16px;
    padding-left: 3px;
    white-space: nowrap;
}

.ui-jqdialog-content .DataTD {
    padding: 0px;
    border-width: 0;
    border-style: none;
    vertical-align: top;
}

.ui-jqdialog .fm-button {
    display: inline-block;
    padding: .4em .5em;
    text-decoration: none;
    cursor: pointer;
    position: relative;
    text-align: center;
    zoom: 1;
   
}
.ui-jqdialog-content input.FormElement, .ui-jqdialog-content select.FormElement {
    padding: .5em;
}
.ui-jqdialog-content td.EditButton {
    border-top: 0 none;
    border-left: 0 none;
    border-right: 0 none;
    padding: 5px 0;
    float: right;
}
.ui-jqdialog-content input.FormElement, .ui-jqdialog-content select.FormElement{
    font-size: 14px;
}
form#FrmGrid_ab-table{
    margin-top: -16px;
}
  </style>
                                    <center>
                                        <div id="dmsg"></div>
                                     <!--   <a href="#" id="m2">click me</a>-->
                                   <table id="ab-table" class="table"></table> 
                                     <div id="ab-paginator" ></div> </center> 
    
    <!--<a href="javascript:void(0)" class="btn btn-warning btn-xs" id="m1">AB UTNAL</a>-->
                              </div>
                          </div> 
   
    
                        </div>


                        <!-- Enter Email database by manually-->
                        <div class="tab-pane fade" id="tab-example-2">
                            <div id="edatabase"></div>
                           <textarea name="txt_Edatabase" id="txt_Edatabase" placeholder="eg: utnal.ab@gmail.com, info@startupsmail.com, ab.utnal@startupsmail.com, ..." rows="2" class="form-control textarea-md"></textarea>

                            <div class="col-12-md ">
                                 <div class="input-group mrg15T mrg15B">
                                 <a type="submit" href="#" id="submitemaildata" class="btn bg-google pull-right">
                                 <span class="glyph-icon icon-separator">
                                 <i class="glyph-icon icon-save"></i>
                                </span>
                                 <span class="button-content">
                                      Save
                                 </span>
                                </a>
                                </div>
                            </div>
                          
                         </div>
                         <!-- /Enter Email database by manually-->

                        <div class="tab-pane fade" id="tab-example-3">
                            <h2>Upload your .csv file</h2>
                            <input type="file" name="csvupload" id="csvupload" class="form-control">
                           

             <script>
             $(document).ready(function(){
    // var data = $('#photo').val();
                    $('#remove').hide();
                    $('#csvupload').change(function(e){
                            //alert('Hello');
                            
                            var files = $('#csvupload').val();
                            //alert(files);
                            $('#remove').show();
                            $('#remove').click(function(){
                            var files = $('#csvupload').val('');
                            $('#remove').hide();
                            });
                    });
                    
                    
                    
             });
             </script>
                             <div class="input-group mrg15T mrg15B">
                                
           
                                 <a type="submit" href="#" id="remove" class="btn bg-warning pull-left">
                                 <span class="glyph-icon icon-separator">
                                 <i class="glyph-icon icon-remove"></i>
                                </span>
                                 <span class="button-content">
                                      Remove
                                 </span>
                                </a>

                                 <a type="submit" href="#" id="submitcsvfile" class="btn bg-google pull-right">
                                 <span class="glyph-icon icon-separator">
                                 <i class="glyph-icon icon-upload"></i>
                                </span>
                                 <span class="button-content">
                                      Upload
                                 </span>
                                </a>
                                </div>
                        </div>
                        <div class="tab-pane fade" id="tab-example-4">
                            <div class="col-sm-8 col-xs-8">
                                <div id="showids"></div>
                                                <span class="input-icon">
                                                    <input type="hidden"  name="recipient"   value=""  id="emailid"  placeholder="Recipient(s)" />
                                                    <input type="hidden"  name="recipient" class="form-control"  value=""  id="emailaddress"  placeholder="" />
                                                    <i class="ace-icon fa fa-user"></i>

                                                </span>
                                            </div>

                            <div class="col-12-md ">
                                <div class="row">
                                     <div class="col-4-md">
                                        <div class="input-group mrg15T mrg15B">
                                 <a href="#" id="bulksendmail"  class="btn bg-google pull-right">
                                 <span class="glyph-icon icon-separator">
                                 <i class="glyph-icon icon-send"></i>
                                </span>
                                 <span class="button-content">
                                      Send
                                 </span>
                                </a>
                            </div> 
                                    </div>
                                    
                                   
                                </div>
                                
                                
                            </div>
                           
                            
                            <div class="input-group mrg15T mrg15B">
                            <span class="input-group-addon">Subject</span>
                            <input type="text" id="subject" name="subject" class="form-control" placeholder="">
                        </div>

                       <textarea id="summernote" name="editordata"></textarea>


                       <div class="files" id="files1">
                              <ul class="fileList"></ul>
                               <span class="btn btn-default btn-xs btn-file">
                              <i class="glyph-icon icon-paperclip"></i> Add Attachment  <input type="file" id="files1" name="files1" multiple />
                         </span>
                          </div>
                        <script>$(document).ready(function() {
                          $('#summernote').summernote();
                        });
                        
                       </script>
                      
                        </div>
                    </div>
                </div>
            </div>
        </div>




    

    <script>
    jQuery("#ab-table").jqGrid({
    url:'<?= base_url('users/data')?>',
    datatype: "json",
      colNames:['ID','EMAIL', 'STATUS', 'DATE','ACTIONS'], 
       colModel:[ 
       {name:'id',index:'id', sorttype:"int", width:30,classes: 'cvteste',  hidden:true}, 
       {name:'email',index:'email', width:60,classes: 'cvteste',editable:true, size:'40'}, 
       {name:'status',index:'status', width:20,classes: 'cvteste',editable:true,align:'center'},
       {name:'date',index:'date', width:40,classes: 'cvteste',align:'center'},
            {name:'act',index:'act', width:12,sortable:false,align:'center'}       
       ],
       
    rowNum:100,
    rowList:[100],
    pager: '#ab-paginator',
   // sortname: 'id',
    viewrecords: true,
    height:245,
    width:'750',
    loadonce: true,
    multiselect: true,
    sortorder: "asc",
    shrinkToFit: true,
    gridview: true,
    
        onSelectRow: function (id) {
        var p = this.p, item = p.data[p._index[id]];
        if (typeof (item.cb) === 'undefined') {
            item.cb = true;
        } else {
            item.cb = !item.cb;
        }
    },
    loadComplete: function () {
        var p = this.p, data = p.data, item, index = p._index, rowid;
        for (rowid in index) {
            if (index.hasOwnProperty(rowid)) {
                item = data[index[rowid]];
                if (typeof (item.cb) === 'boolean' && item.cb) {
                    $(this).jqGrid('setSelection', rowid, false);
                }
            }
        }
    },
    
    gridComplete: function(){
        var ids = jQuery("#ab-table").jqGrid('getDataIDs');
        for(var i=0;i<ids.length;i++){
            var cl = ids[i];
            be = " <i class='glyph-icon font-blue-alt icon-pencil-square-o' style='padding:0px 6px; cursor:pointer' onclick=\"jQuery('#ab-table').jqGrid('editRow','"+cl+"');\"></i>"; 
            se = "<i class='glyph-icon font-green icon-check-square-o' style='cursor:pointer' onclick=\"jQuery('#ab-table').jqGrid('saveRow','"+cl+"');\" ></i>"; 
           // ce = "<i class='glyph-icon icon-remove' style='padding:0px 8px; cursor:pointer' onclick=\"jQuery('#ab-table').jqGrid('restoreRow','"+cl+"');\"></i>"; 
            jQuery("#ab-table").jqGrid('setRowData',ids[i],{act:be+se});
        }   
    },
    
    
    
    editurl: "<?= base_url('users/update')?>"
    
});
jQuery("#ab-table").jqGrid('navGrid',"#ab-paginator",{edit:true,add:true,del:true,search:true},
{
        //Edit
            width:'300',
           
            url:'<?= base_url('users/update')?>',
            loadonce:false,     
            afterComplete:function(response){
             $("#ab-table").jqGrid('setGridParam',{datatype:'json'}).trigger('reloadGrid');
            },
    },
    {
        //Add
            width:'300',
           
            url:'<?= base_url('users/add')?>',
            //closeAfterEdit:true,
             savekey: [true, 13],
            afterComplete:function(response){
            $("#ab-table").jqGrid('setGridParam',{datatype:'json'}).trigger('reloadGrid');
            },
    },
    {
        //Delete
            width:'200',
            
            //closeAfterEdit:true,
           
                beforeShowForm: function ($form) {
                var ids = $form.find("#DelData>td").text().split(",");
                if (ids.length > 1) {
                    $form.find(".delmsg").text("Delete selected " + ids.length + " records?")
                } else {
                    $form.find(".delmsg").text("Delete selected record?")
                }
                //alert(ids);
                
                    $('#dData').click(function(event){
                      event.preventDefault();
                      var ids = $form.find("#DelData>td").text().split(",");
                      //alert(ids);
                      $.ajax({
                                url:'<?= base_url('users/delete')?>',
                                method: 'post',
                                data:{postids:ids},
                                success:function(data){
                                    $('#dmsg').html(data);
                                    //alert(ids);
                                }
                            });
                            });
                
            },
            
            afterComplete:function(response){
            $("#ab-table").jqGrid('setGridParam',{datatype:'json'}).trigger('reloadGrid');
            },
         
    },
    {
        //Delete
            width:'400',
            multipleSearch:true,
            
    },

           $("#submitemaildata").click(function(e){
                e.preventDefault();
                var txt_Edata = $('#txt_Edatabase').val();
                    $.ajax({
                    url:'<?= base_url('users/bulk_email_intert')?>',
                    method:'POST',
                    data:{post_txt_Edata:txt_Edata},
                    success:function(data){
                        $('#edatabase').html(data);
                        $("#ab-table").jqGrid('setGridParam',{datatype:'json'}).trigger('reloadGrid');
                        $("#txt_Edatabase").val('');
                    }
                });

            }),
    
            $("#bulksendmail").click(function(e){
                e.preventDefault();
               var txt_Emailids = $('#emailid').val();
               var txt_Address = $('#emailaddress').val();
               var txt_Subject = $('#subject').val();
               var txt_Body = $('#summernote').val();
              // var txt_File = $('#file1').val();
                //  alert(txt_Emailids);
                   $.ajax({
                    url:'<?= base_url('users/bulksendmail')?>',
                    method:'POST',
                    data:{post_txt_Emailids:txt_Emailids,post_Sub:txt_Subject,post_Body:txt_Body,post_Address:txt_Address},
                    success:function(data){
                        $('#showids').html(data);
                        $("#ab-table").jqGrid('setGridParam',{datatype:'json'}).trigger('reloadGrid');
                       // $("#txt_Edatabase").val('');
                    }
                });

            }),
           
            jQuery("#m1").click( function() {
            var s;
            s = $.extend([], jQuery("#ab-table").jqGrid('getGridParam','selarrrow'));
            $("#emailid").val(s);
           // alert(s);
            var $grid = $("#ab-table"), selIds = $grid.jqGrid("getGridParam", "selarrrow"), i, n,
            cellValues = [];
            for (i = 0, n = selIds.length; i < n; i++) {
             cellValues.push($grid.jqGrid("getCell", selIds[i], "email"));
            }
            //alert(cellValues.join(","));
            $("#emailaddress").val(cellValues.join(", "));
            }),

            jQuery("#m2").click( function() {
          /*  var rowid =  $('#ab-table').jqGrid('getGridParam', 'selrow');
            var YourCellValue = $('#ab-table').jqGrid('getCell', rowid, 'email');
            alert(YourCellValue);*/
           /* var s1 = jQuery("#ab-table").jqGrid('getGridParam','selarrrow');
            var YourCellValue = $('#ab-table').jqGrid('getCell', s1, 'email');
            alert(YourCellValue);*/

            var $grid = $("#ab-table"), selIds = $grid.jqGrid("getGridParam", "selarrrow"), i, n,
    cellValues = [];
for (i = 0, n = selIds.length; i < n; i++) {
    cellValues.push($grid.jqGrid("getCell", selIds[i], "email"));
}
alert(cellValues.join(", "));
            }),

            
            
            


);   
    </script>
    





            <!-- The template to display files available for upload -->
            <script id="template-upload" type="text/x-tmpl">
              {% for (var i=0, file; file=o.files[i]; i++) { %}
                  <tr class="template-upload fade">
                      <td>
                          <span class="preview"></span>
                      </td>
                      <td>
                          <p class="name">{%=file.name%}</p>
                          <strong class="error text-danger"></strong>
                      </td>
                      <td>
                          <p class="size">Processing...</p>
                          <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0"><div class="progress-bar progress-bar-success bg-green" style="width:0%;"></div></div>
                      </td>
                      <td>
                          {% if (!i && !o.options.autoUpload) { %}
                              <button class="btn btn-md btn-default start" disabled>
                                <span class="button-content">
                                  <i class="glyph-icon icon-upload"></i>
                                  Start
                                </span>
                              </button>
                          {% } %}
                          {% if (!i) { %}
                              <button class="btn btn-md btn-warning cancel">
                                  <span class="button-content">
                                    <i class="glyph-icon icon-ban-circle"></i>
                                    Cancel
                                  </span>
                              </button>
                          {% } %}
                      </td>
                  </tr>
              {% } %}
              </script>
                    <!-- The template to display files available for download -->
                    <script id="template-download" type="text/x-tmpl">
              {% for (var i=0, file; file=o.files[i]; i++) { %}
                  <tr class="template-download fade">
                      <td>
                          <span class="preview">
                              {% if (file.thumbnailUrl) { %}
                                  <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" data-gallery><img src="{%=file.thumbnailUrl%}"></a>
                              {% } %}
                          </span>
                      </td>
                      <td>
                          <p class="name">
                              {% if (file.url) { %}
                                  <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" {%=file.thumbnailUrl?'data-gallery':''%}>{%=file.name%}</a>
                              {% } else { %}
                                  <span>{%=file.name%}</span>
                              {% } %}
                          </p>
                          {% if (file.error) { %}
                              <div><span class="label label-danger">Error</span> {%=file.error%}</div>
                          {% } %}
                      </td>
                      <td>
                          <span class="size">{%=o.formatFileSize(file.size)%}</span>
                      </td>
                      <td>
                          {% if (file.deleteUrl) { %}
                              <button class="btn btn-md btn-danger delete" data-type="{%=file.deleteType%}" data-url="{%=file.deleteUrl%}"{% if (file.deleteWithCredentials) { %} data-xhr-fields='{"withCredentials":true}'{% } %}>
                                  <span class="button-content">
                                    <i class="glyph-icon icon-trash"></i>
                                    Delete
                                  </span>
                              </button>
                              <input type="checkbox" name="delete" value="1" class="toggle width-reset float-left">
                          {% } else { %}
                              <button class="btn btn-md btn-warning cancel">
                                  <span class="button-content">
                                    <i class="glyph-icon icon-ban-circle"></i>
                                    Cancel
                                  </span>
                              </button>
                          {% } %}
                      </td>
                  </tr>
              {% } %}
              </script>

              <script>
$.fn.fileUploader = function (filesToUpload) {
    this.closest(".files").change(function (evt) {

        for (var i = 0; i < evt.target.files.length; i++) {
            filesToUpload.push(evt.target.files[i]);
        };
        var output = [];

        for (var i = 0, f; f = evt.target.files[i]; i++) {
            var removeLink = "<a class=\"removeFile\" href=\"#\" data-fileid=\"" + i + "\">Remove</a>";

            output.push("<li><strong>", escape(f.name), "</strong> - ",
                f.size, " bytes. &nbsp; &nbsp; ", removeLink, "</li> ");
        }

        $(this).children(".fileList")
            .append(output.join(""));
    });
};

var filesToUpload = [];

$(document).on("click",".removeFile", function(e){
    e.preventDefault();
    var fileName = $(this).parent().children("strong").text();
     // loop through the files array and check if the name of that file matches FileName
    // and get the index of the match
    for(i = 0; i < filesToUpload.length; ++ i){
        if(filesToUpload[i].name == fileName){
            //console.log("match at: " + i);
            // remove the one element at the index where we get a match
            filesToUpload.splice(i, 1);
        }   
    }
    //console.log(filesToUpload);
    // remove the <li> element of the removed file from the page DOM
    $(this).parent().remove();
});
   $("#files1").fileUploader(filesToUpload);
      $("#uploadBtn").click(function (e) {
        e.preventDefault();
    });
</script>
        </div>
    </div>
</div>
                    </div>

                

            </div>
        </div>
    </div>

<?php include('footer.php');?>

</div>
</body>

<!-- Mirrored from agileui.com/demo/monarch/demo/admin-template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Aug 2018 05:44:45 GMT -->
</html>