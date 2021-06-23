@extends('layouts.admin_layout.admin_layout')
@section('content')

<main>
    <div class="container-fluid">
        
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Walk in Complains</li>
        </ol>



<div class="container-fluid">
<div class="col-xl-12">
     <div class="card mb-4">
        <div class="card-header"><i class="fa fa-plus mr-1"></i>&nbsp; Register a complain</div>
        <form action="upload.php" method="post" class="col-md-8 offset-2 py-4">
           <div class="form-group">
             <label for="">Informant Names</label>
             <input type="text" class="form-control" name="cnames" id="names" aria-describedby="helpId" placeholder="Full Name">
             <input type="hidden" name="status" class="form-control" value="unattended">
            <input type="hidden" name="complain_date" value="2021-05-12">
             <small id="helpId" class="form-text text-muted">Enter the reporter/Informant Names'</small>
           </div>
           <div class="form-group">
             <label for="">Phone Number</label>
             <input type="text" class="form-control" name="phone" id="phone" aria-describedby="helpId" placeholder="Enter phone number (0712 345 678)">
             <small id="helpId" class="form-text text-muted">Enter the reporter/Informant's Contact</small>
           </div>

           <div class="form-group">
             <label for="">Informant's Email</label>
             <input type="email" class="form-control" name="email" id="names" aria-describedby="helpId" placeholder="Enter informant's Email Address">
             <small id="helpId" class="form-text text-muted">Enter the reporter's/Informant's Email address</small>
           </div>

           <div class="form-group">
            <label for="exampleFormControlSelect1">Gender</label>
            <select class="form-control" name="gender" id="exampleFormControlSelect1">
              <option>Male</option>
              <option>Female</option>
              <option>Prefer not to say</option>
              
            </select>
          </div>

          <div class="form-group">
             <label for="">Date Of Incident</label>
             <input type="date" class="form-control" name="insdate" id="dateofinsident" aria-describedby="helpId" placeholder="Full Name">
             <small id="helpId" class="form-text text-muted">Pick the date the incident happened</small>
           </div>

           <div class="form-group">
            <label for="exampleFormControlSelect1">Place of Residence</label>
            <select class="form-control" name="residence" id="exampleFormControlSelect1">
              <option disabled="disabled" selected="selected">Place of residence Resident</option>
                    <option>Baringo</option>
                    <option>Bomet</option>
                    <option>Bungoma</option>
                    <option>Busia</option>
                    <option>Elgeyo Marakwet</option>
                    <option>Embu</option>
                    <option>Garissa</option>
                    <option>Homa Bay</option>
                    <option>Isiolo</option>
                    <option>Kajiado</option>
                    <option>Kakamega</option>
                    <option>Kericho</option>
                    <option>Kiambu</option>
                    <option>Kilifi</option>
                    <option>Kirinyaga</option>
                    <option>Kisii</option>
                    <option>Kisumu</option>
                    <option>Kitui</option>
                    <option>Kwale</option>
                    <option>Laikipia</option>
                    <option>Lamu</option>
                    <option>Machakos</option>
                    <option>Makueni</option>
                    <option>Mandera</option>
                    <option>Meru</option>
                    <option>Migori</option>
                    <option>Marsabit</option>
                    <option>Mombasa</option>
                    <option>Muranga</option>
                    <option>Nairobi</option>
                    <option>Nakuru</option>
                    <option>Nandi</option>
                    <option>Narok</option>
                    <option>Nyamira</option>
                    <option>Nyandarua</option>
                    <option>Nyeri</option>
                    <option>Samburu</option>
                    <option>Siaya</option>
                    <option>Taita Taveta</option>
                    <option>Tana River</option>
                    <option>Tharaka Nithi</option>
                    <option>Trans Nzoia</option>
                    <option>Turkana</option>
                    <option>Uasin Gishu</option>
                    <option>Vihiga</option>
                    <option>Wajir</option>
                    <option>West Pokot</option>
              
            </select>
          </div>

          <div class="form-group">
             <label for="">Report Entry</label>
             <textarea type="text" class="form-control" name="complain" id="names" aria-describedby="helpId">                             </textarea> 
             <small id="helpId" class="form-text text-muted">Feed in the report from the informant</small>
           </div>

           <div class="form-group">
             <label for="">Images/Documents Attachements</label>
             <input type="file" class="form-control" name="photo" id="photo" aria-describedby="helpId" placeholder="Enter informant's Email Address">
             <small id="helpId" class="form-text text-muted">Attach informant's evidence or supporting documents if where available</small>
           </div>




           <center><button class="btn btn-primary" name="save">Submit Report</button></center>

          

        </form>
    </div>
</div>

       
</div>

</div></main>

@endsection