<style>
.timelines {
    list-style-type: none;
    margin: 0;
    padding: 0;
    position: relative;
}
.timelines:before {
    content: '';
    position: absolute;
    top: 5px;
    bottom: 5px;
    width: 5px;
    background: #2d353c;
    left: 5%;
    margin-left: -2.5px;
}
.timelines > li {
    position: relative;
    min-height: 50px;
}
.timelines > li + li {
    margin-top: 10px;
}
.timelines .timelines-time {
    position: absolute;
    left: 0;
    width: 15%;
    text-align: right;
    padding-top: 7px;
}
.timelines .timelines-time .date,
.timelines .timelines-time .time {
    display: block;
}
.timelines .timelines-time .date {
    line-height: 18px;
    font-size: 14px;
}
.timelines .timelines-time .time {
    line-height: 28px;
    font-size: 24px;
    color: #242a30;
}
.timelines .timelines-icon {
    left: 0%;
    position: absolute;
    width: 10%;
    text-align: center;
    top: 5px;
}
.timelines .timelines-icon a {
    text-decoration: none;
    width: 50px;
    height: 50px;
    display: inline-block;
    -webkit-border-radius: 50px !important;
    -moz-border-radius: 50px !important;
    border-radius: 50px !important;
    background: #575d63;
    line-height: 40px;
    color: #fff;
    font-size: 14px;
    border: 5px solid #2d353c;
    transition: background .2s linear;
    -moz-transition: background .2s linear;
    -webkit-transition: background .2s linear;
}
.timelines .timelines-icon a:hover,
.timelines .timelines-icon a:focus {
    background: #00acac;
}
.timelines .timelines-body {
    margin-left: 9%;
    margin-right: 0%;
    background: #fff;
    position: relative;
    padding: 8px 10px;
    border-radius: 4px;
    -moz-border-radius: 4px;
    -webkit-border-radius: 4px;
}
.timelines .timelines-body:before {
    content: '';
    display: block;
    position: absolute;
    border: 10px solid transparent;
    border-right-color: #fff;
    left: -20px;
    top: 20px;
}
.timelines-header {
    padding-bottom: 5px;
    border-bottom: 1px solid #e2e7eb;
    line-height: 15px;
}
.timelines-header .userimage {
    float: left;
    width: 34px;
    height: 34px;
    -webkit-border-radius: 40px;
    -moz-border-radius: 40px;
    border-radius: 40px;
    overflow: hidden;
    margin: -2px 10px -2px 0;
}
.timelines-header .username {
    font-size: 16px;
    font-weight: 600;
}
.timelines-header .username,
.timelines-header .username a {
    color: #00acac;
}
.timelines img {
    max-width: 100%;
    display: block;
}
.timelines-content {
    font-size: 14px;
}
.timelines-header + .timelines-content,
.timelines-header + .timelines-footer,
.timelines-content + .timelines-footer {
    margin-top: 20px;
}
.timelines-content:before,
.timelines-content:after {
    content: '';
    display: table;
    clear: both;
}
.timelines-title {
    margin-top: 0;
}
.timelines-footer {
    margin: -20px -30px;
    padding: 20px 30px;
    background: #e8ecf1;
    -webkit-border-radius: 0 0 4px 4px;
    -moz-border-radius: 0 0 4px 4px;
    border-radius: 0 0 4px 4px;
}
.timelines-footer a:not(.btn) {
    color: #575d63;
}
.timelines-footer a:not(.btn):hover,
.timelines-footer a:not(.btn):focus {
    color: #2d353c;
}
.timelines .dl-horizontal{
	margin-bottom:4px;
}
/* timelines Setting */

@media (max-width: 979px) {
    .timelines .timelines-body {
        margin-left: 25%;
        margin-right: 10%;
    }
    .timelines .timelines-time {
        width: 13%;
    }
    .timelines .timelines-icon {
        left: 13%;
        width: 12%;
    }
    .timelines:before {
        left: 19%;
    }
}
@media (max-width: 767px) {
    .timelines:before {
        left: 50%;
    }
    .timelines .timelines-body {
        margin-right: 0;
        margin-left: 0;
        margin-top: 10px;
        padding: 20px;
    }
    .timelines .timelines-footer {
        margin: 20px -20px -20px;
        padding: 20px;
    }
    .timelines .timelines-body:before {

        border-bottom-color: #fff;
        border-right-color: transparent;
        left: 50%;
        top: -20px;
        margin-left: -10px;
    }
    .timelines .timelines-time {
        right: 50%;
        left: 0;
        width: auto;
        margin-right: 40px;
        padding-top: 5px;
    }
    .timelines .timelines-icon {
        left: 0;
        width: 80px;
        position: relative;
        margin: 0 auto;
    }
}

.static-info {
  margin-bottom: 10px;
}
.static-info .name {
  font-size: 14px;
  font-weight: 600;
}
.static-info .value {
  font-size: 14px;
}
.dl-horizontal dt {
  width: 80px;
}
.dl-horizontal dd {
  margin-left: 112px;
}

@media (max-width: 979px) {
	.dl-horizontal dd {
	  margin-left: 0px;
	}
}
.view-data .control-label {
  text-align: left;
  margin-left:10px;
}
</style>
<div class="row">
    <div class="col-md-12">
		<div class="portlet box green">
<div class="portlet-title"><div class="caption"><?=$name?></div></div>
<div class="portlet-body">
                <div class="table-responsive">
<table class="table table-profile">
<tbody>
<tr class="highlight">
	<td class="field">Username</td>
	<td><?=$user_data->first_name.' '.$user_data->last_name?></td>
</tr>
<tr class="">
	<td class="field">Email</td>
	<td><?=$user_data->email?></td>
</tr>
<tr>
	<td class="field">Phone</td>
	<td><?=$user_data->phone?></td>
</tr>
<tr class="">
	<td class="field">Health Challenge</td>
	<td><?=str_replace('-', '/',$user_data->health_type)?></td>
</tr>
<tr class="">
	<td class="field">Briefly state your health challenges</td>
	<td><?=$user_data->description?></td>
</tr>

</tbody>
</table>                
</div>

                            
            </div>
            
        </div>
    </div>
<div class="col-md-12">
    <ul class="timelines">
    <?php
    if($comment_data){
        foreach($comment_data as $set_data){
            $commentName = 'super Admin';
            if($set_data->admin_id){
                    $commentName = print_value('admin',array('id'=>$set_data->admin_id),'name');
            }
    ?>
    <li>
        <!-- begin timelines-icon -->
        <div class="timelines-icon">
            <a href="javascript:;"><i class="fa fa-user"></i></a>
        </div>
        <!-- end timelines-icon -->
        <!-- begin timelines-body -->
        <div class="timelines-body">
            <div class="timelines-header">
    <!--			                <span class="userimage"><img src="assets/img/user-1.jpg" alt="" /></span>-->
                <span class="username"><a href="javascript:;"><?=$commentName;?></a> <small></small></span>
                <span class="pull-right text-muted"><?=date('d M Y, h:i:A',$set_data->created);?></span>
            </div>
            <div class="timelines-content">
                <p><?=$set_data->description;?></p>
            </div>
        </div>
        <!-- end timelines-body -->
    </li>
    <?php             
       }
    }
    ?>                        
    <li id="list-comment">
    <div class="timelines-icon">
    <a href="javascript:;"><i class="fa fa-edit"></i></a>
    </div>
    <div class="timelines-body">
    <div class="timelines-header">
    <span class="username"><a href="javascript:;">Reply To</a> <small></small></span>
    
    </div>
    <div class="panel-body" style="padding:5px 0 0 0">
    <form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
    <input type="hidden" name="<?=$this->security->get_csrf_token_name(); ?>" value="<?=$this->security->get_csrf_hash();?>" />
    <input type="hidden" name="reply_set" value="set"  />
    <div class="form-body">                    
    <div class="col-md-12">						                                                
    <div class="form-group">
    <label class="col-md-2 control-label"><?=show_static_text($adminLangSession['lang_id'],2706);?>Comment</label>
    <div class="col-md-10">
    <?=form_textarea('description', set_value('description'), 'placeholder="" id="input-comment" rows="1" style="height:100px" class=" form-control" required')?>
    </div>
    </div>
    </div>
    </div>
    <div class="form-actions">
    <div class="row">
    <div class="col-md-offset-2 col-md-9">
    <?=form_submit('submit', show_static_text($adminLangSession['lang_id'],235), 'class="btn btn-primary"')?>
    </div>
    </div>
    </div>
    </form>
    </div>
    </div>
    </li>
                </ul>
</div>                
</div>

