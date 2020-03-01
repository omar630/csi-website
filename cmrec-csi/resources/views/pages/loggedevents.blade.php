@extends('pages.logged')
@section('content')
<section>
<div>
<h1 class="heading2" style="padding-top:10px;text-align:center;"><b>Events</b></h1>
</div>

<div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Sign up</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <i class='fas fa-sticky-note prefix'></i>
          <input type="text" id="orangeForm-name" class="form-control validate" value="Event Name" required="required">
        </div>
        <div class="bootstrap-iso">
 <div class="container-fluid">
  <div class="row">
   <div class="col-md-6 col-sm-6 col-xs-12">
   <div class="form-group">
   <i class='fas fa-calendar-alt' style='font-size:24px' required="required"></i>
   <b>Event Date</b>
   <div style="padding-left:20px;padding-top:10px;">
        <input type="date" id="birthDate" class="form-control" >
       </div>
    </div>
    </div>
  </div>    
 </div>
</div>       
        <div class="file-upload-wrapper" style="padding-top:10px;">
           <input type="file" id="input-file-now" class="file-upload" />
        </div>
      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-deep-orange">SUBMIT</button>
      </div>
    </div>
  </div>
</div>
<div style="padding-left:150px;padding-top:20px;" data-toggle="modal" data-target="#modalRegisterForm">
<button type="button" class="btn btn-primary" >Create</button>
</div>
<section>

<section>
<div class="container">
        <div class="row">
            <div class="column">&nbsp;</div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            
            <div class="col-md-12">
                <div class="list-group">
  
 <div class="container" align=center>
 <table style="border:1px solid #CCC;width:80%;margin-top:20px;" cellpadding=0 cellspacing=0 class="table responsive table-hover">
        <tr style="background:#dc143c !important;"><td colspan=5 class="text-center">
        <a href="http://www.csi-india.org/news/index.php" class="list-group-item list-group-item-action active" style="background:#dc143c !important;border:#dc143c !important">
   <h4 style="font-size:20px;"> LATEST EVENTS </h4>
  </a></td>
        </tr>
        <tr>
            <th class="text-left">S. No.</th>
            <th class="text-left">Event Name</th>
            <th class="text-left">Description</th>
            <th class="text-center">Event Date</th>
            <th class="text-left">Edit</th>
        </tr>

<tr>
    <td width="10%">1</td>
    <td width="25%"><a target=_blank >Hackathone</a></td>
    <td width="35%">this is a hackathone based on pythone.this will be held at anurag college of institution on the occation of the anurag college fest.</td>
    <td width="25%" style="text-align:center;">21-12-2019</td>
    <td width="15%"><a href="">icon</a>
</tr>   
    </table>
</div>
            </div>  
        </div>
    </div>
</body>
</section>
@endsection