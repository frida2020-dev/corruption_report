@extends('layouts.admin_layout.admin_layout')
@section('content')

<main>
    <div class="container-fluid">
        <h2 class="mt-4">Manage Admins</h2>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Teams Officers</li>
        </ol>
        
                                
        <div class="container-fluid">
        
        <div class="card mb-4 ">
            <div class="card-body ">

            
            <button type="button" class="btn btn-success" data-toggle="modal" <a="" href="#addnew"><span class="glyphicon glyphicon-user"></span> &nbsp; Add New Admin
            
            </button></div>
        </div>
           
        

        
           
    
    <!-- Task End/.row -->


        <div class="col-xl-8"></div>
        <div class="card mb-8">
            <div class="card-header"><i class="fa fa-users mr-1"></i>Registered TEAMS Administrators</div>
            <div class="card-body">
                <div class="table-responsive">
                    <div class="modal fade" id="edit_1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<center><h4 class="modal-title" id="myModalLabel">Edit Hub Admin</h4></center>
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

</div>
<div class="modal-body">
<div class="container-fluid">
<form method="POST" action="editadmin.php"></form>

<div class="row form-group">
    <div class="col-sm-4">
        <label class="control-label modal-label">First name:</label>
    </div>
    <div class="col-sm-10">
        <input type="hidden" name="password" value="password">
        <input type="hidden" name="id" value="1">
        <input type="text" class="form-control" onkeyup="this.value = this.value.toUpperCase();" name="firstname" value="Brian">
    </div>
</div>
<div class="row form-group">
    <div class="col-sm-4">
        <label class="control-label modal-label">Middle name:</label>
    </div>
    <div class="col-sm-10">
        <input type="text" class="form-control" onkeyup="this.value = this.value.toUpperCase();" name="midname" value="CHEMASE">
    </div>
</div>
<div class="row form-group">
    <div class="col-sm-4">
        <label class="control-label modal-label">Lastname:</label>
    </div>
    <div class="col-sm-10">
        <input type="text" class="form-control" onkeyup="this.value = this.value.toUpperCase();" name="lastname" value="Anikayi">
    </div>
</div>
<div class="row form-group">
    <div class="col-sm-4">
        <label class="control-label modal-label">Email Address:</label>
    </div>
    <div class="col-sm-10">
        <input type="text" class="form-control" name="email" value="brianchemo@gmail.com">
    </div>
</div>
<div class="row form-group">
    <div class="col-sm-4">
        <label class="control-label modal-label">Phone:</label>
    </div>
    <div class="col-sm-10">
        <input type="text" class="form-control" name="phone" value="0725670606">
    </div>
</div>
<div class="row form-group">
    <div class="col-sm-4">
        <label class="control-label modal-label">Username:</label>
    </div>
    <div class="col-sm-10">
        <input type="text" class="form-control" name="username" value="brian_anikayi">
    </div>
</div>


</div> 
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
<button type="submit" name="edit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Update

</button></div>

</div>
</div>
</div><div class="modal fade" id="delete_brian_anikayi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<center><h4 class="modal-title" id="myModalLabel">Delete Hub User</h4></center>
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

</div>
<div class="modal-body">	
<p class="text-center">Are you sure you want to Delete</p>
<h2 class="text-center">Brian Anikayi</h2>
<p class="text-center">Are you sure you want to Delete</p>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
<a href="delete_user.php?id=brian_anikayi" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Yes</a>
</div>

</div>
</div>
</div><div class="modal fade" id="edit_2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<center><h4 class="modal-title" id="myModalLabel">Edit Hub Admin</h4></center>
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

</div>
<div class="modal-body">
<div class="container-fluid">
<form method="POST" action="editadmin.php"></form>

<div class="row form-group">
    <div class="col-sm-4">
        <label class="control-label modal-label">First name:</label>
    </div>
    <div class="col-sm-10">
        <input type="hidden" name="password" value="password">
        <input type="hidden" name="id" value="2">
        <input type="text" class="form-control" onkeyup="this.value = this.value.toUpperCase();" name="firstname" value="samuel">
    </div>
</div>
<div class="row form-group">
    <div class="col-sm-4">
        <label class="control-label modal-label">Middle name:</label>
    </div>
    <div class="col-sm-10">
        <input type="text" class="form-control" onkeyup="this.value = this.value.toUpperCase();" name="midname" value=" ">
    </div>
</div>
<div class="row form-group">
    <div class="col-sm-4">
        <label class="control-label modal-label">Lastname:</label>
    </div>
    <div class="col-sm-10">
        <input type="text" class="form-control" onkeyup="this.value = this.value.toUpperCase();" name="lastname" value="kibet">
    </div>
</div>
<div class="row form-group">
    <div class="col-sm-4">
        <label class="control-label modal-label">Email Address:</label>
    </div>
    <div class="col-sm-10">
        <input type="text" class="form-control" name="email" value="samkibe2961@gmail.com">
    </div>
</div>
<div class="row form-group">
    <div class="col-sm-4">
        <label class="control-label modal-label">Phone:</label>
    </div>
    <div class="col-sm-10">
        <input type="text" class="form-control" name="phone" value="0722709360">
    </div>
</div>
<div class="row form-group">
    <div class="col-sm-4">
        <label class="control-label modal-label">Username:</label>
    </div>
    <div class="col-sm-10">
        <input type="text" class="form-control" name="username" value="Kibet_chepkok">
    </div>
</div>


</div> 
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
<button type="submit" name="edit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Update

</button></div>

</div>
</div>
</div><div class="modal fade" id="delete_Kibet_chepkok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<center><h4 class="modal-title" id="myModalLabel">Delete Hub User</h4></center>
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

</div>
<div class="modal-body">	
<p class="text-center">Are you sure you want to Delete</p>
<h2 class="text-center">samuel kibet</h2>
<p class="text-center">Are you sure you want to Delete</p>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
<a href="delete_user.php?id=Kibet_chepkok" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Yes</a>
</div>

</div>
</div>
</div><div class="modal fade" id="edit_3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<center><h4 class="modal-title" id="myModalLabel">Edit Hub Admin</h4></center>
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

</div>
<div class="modal-body">
<div class="container-fluid">
<form method="POST" action="editadmin.php"></form>

<div class="row form-group">
    <div class="col-sm-4">
        <label class="control-label modal-label">First name:</label>
    </div>
    <div class="col-sm-10">
        <input type="hidden" name="password" value="password">
        <input type="hidden" name="id" value="3">
        <input type="text" class="form-control" onkeyup="this.value = this.value.toUpperCase();" name="firstname" value="Benjamin">
    </div>
</div>
<div class="row form-group">
    <div class="col-sm-4">
        <label class="control-label modal-label">Middle name:</label>
    </div>
    <div class="col-sm-10">
        <input type="text" class="form-control" onkeyup="this.value = this.value.toUpperCase();" name="midname" value="">
    </div>
</div>
<div class="row form-group">
    <div class="col-sm-4">
        <label class="control-label modal-label">Lastname:</label>
    </div>
    <div class="col-sm-10">
        <input type="text" class="form-control" onkeyup="this.value = this.value.toUpperCase();" name="lastname" value="Haya">
    </div>
</div>
<div class="row form-group">
    <div class="col-sm-4">
        <label class="control-label modal-label">Email Address:</label>
    </div>
    <div class="col-sm-10">
        <input type="text" class="form-control" name="email" value="benjamin.haya1@gmail.com">
    </div>
</div>
<div class="row form-group">
    <div class="col-sm-4">
        <label class="control-label modal-label">Phone:</label>
    </div>
    <div class="col-sm-10">
        <input type="text" class="form-control" name="phone" value="0722316132">
    </div>
</div>
<div class="row form-group">
    <div class="col-sm-4">
        <label class="control-label modal-label">Username:</label>
    </div>
    <div class="col-sm-10">
        <input type="text" class="form-control" name="username" value="benjamin_haya">
    </div>
</div>


</div> 
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
<button type="submit" name="edit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Update

</button></div>

</div>
</div>
</div><div class="modal fade" id="delete_benjamin_haya" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<center><h4 class="modal-title" id="myModalLabel">Delete Hub User</h4></center>
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

</div>
<div class="modal-body">	
<p class="text-center">Are you sure you want to Delete</p>
<h2 class="text-center">Benjamin Haya</h2>
<p class="text-center">Are you sure you want to Delete</p>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
<a href="delete_user.php?id=benjamin_haya" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Yes</a>
</div>

</div>
</div>
</div><div class="modal fade" id="edit_4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<center><h4 class="modal-title" id="myModalLabel">Edit Hub Admin</h4></center>
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

</div>
<div class="modal-body">
<div class="container-fluid">
<form method="POST" action="editadmin.php"></form>

<div class="row form-group">
    <div class="col-sm-4">
        <label class="control-label modal-label">First name:</label>
    </div>
    <div class="col-sm-10">
        <input type="hidden" name="password" value="password">
        <input type="hidden" name="id" value="4">
        <input type="text" class="form-control" onkeyup="this.value = this.value.toUpperCase();" name="firstname" value="Customer">
    </div>
</div>
<div class="row form-group">
    <div class="col-sm-4">
        <label class="control-label modal-label">Middle name:</label>
    </div>
    <div class="col-sm-10">
        <input type="text" class="form-control" onkeyup="this.value = this.value.toUpperCase();" name="midname" value=" ">
    </div>
</div>
<div class="row form-group">
    <div class="col-sm-4">
        <label class="control-label modal-label">Lastname:</label>
    </div>
    <div class="col-sm-10">
        <input type="text" class="form-control" onkeyup="this.value = this.value.toUpperCase();" name="lastname" value="Care">
    </div>
</div>
<div class="row form-group">
    <div class="col-sm-4">
        <label class="control-label modal-label">Email Address:</label>
    </div>
    <div class="col-sm-10">
        <input type="text" class="form-control" name="email" value="amazingbenji01@gmail.com">
    </div>
</div>
<div class="row form-group">
    <div class="col-sm-4">
        <label class="control-label modal-label">Phone:</label>
    </div>
    <div class="col-sm-10">
        <input type="text" class="form-control" name="phone" value="0724959797">
    </div>
</div>
<div class="row form-group">
    <div class="col-sm-4">
        <label class="control-label modal-label">Username:</label>
    </div>
    <div class="col-sm-10">
        <input type="text" class="form-control" name="username" value="customer_care">
    </div>
</div>


</div> 
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
<button type="submit" name="edit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Update

</button></div>

</div>
</div>
</div><div class="modal fade" id="delete_customer_care" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<center><h4 class="modal-title" id="myModalLabel">Delete Hub User</h4></center>
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

</div>
<div class="modal-body">	
<p class="text-center">Are you sure you want to Delete</p>
<h2 class="text-center">Customer Care</h2>
<p class="text-center">Are you sure you want to Delete</p>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
<a href="delete_user.php?id=customer_care" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Yes</a>
</div>

</div>
</div>
</div><div class="modal fade" id="edit_5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<center><h4 class="modal-title" id="myModalLabel">Edit Hub Admin</h4></center>
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

</div>
<div class="modal-body">
<div class="container-fluid">
<form method="POST" action="editadmin.php"></form>

<div class="row form-group">
    <div class="col-sm-4">
        <label class="control-label modal-label">First name:</label>
    </div>
    <div class="col-sm-10">
        <input type="hidden" name="password" value="password">
        <input type="hidden" name="id" value="5">
        <input type="text" class="form-control" onkeyup="this.value = this.value.toUpperCase();" name="firstname" value="System">
    </div>
</div>
<div class="row form-group">
    <div class="col-sm-4">
        <label class="control-label modal-label">Middle name:</label>
    </div>
    <div class="col-sm-10">
        <input type="text" class="form-control" onkeyup="this.value = this.value.toUpperCase();" name="midname" value="c">
    </div>
</div>
<div class="row form-group">
    <div class="col-sm-4">
        <label class="control-label modal-label">Lastname:</label>
    </div>
    <div class="col-sm-10">
        <input type="text" class="form-control" onkeyup="this.value = this.value.toUpperCase();" name="lastname" value="Admin">
    </div>
</div>
<div class="row form-group">
    <div class="col-sm-4">
        <label class="control-label modal-label">Email Address:</label>
    </div>
    <div class="col-sm-10">
        <input type="text" class="form-control" name="email" value="briananikayi@outlook.com">
    </div>
</div>
<div class="row form-group">
    <div class="col-sm-4">
        <label class="control-label modal-label">Phone:</label>
    </div>
    <div class="col-sm-10">
        <input type="text" class="form-control" name="phone" value="0702230627">
    </div>
</div>
<div class="row form-group">
    <div class="col-sm-4">
        <label class="control-label modal-label">Username:</label>
    </div>
    <div class="col-sm-10">
        <input type="text" class="form-control" name="username" value="banikayi">
    </div>
</div>


</div> 
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
<button type="submit" name="edit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Update

</button></div>

</div>
</div>
</div><div class="modal fade" id="delete_banikayi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<center><h4 class="modal-title" id="myModalLabel">Delete Hub User</h4></center>
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

</div>
<div class="modal-body">	
<p class="text-center">Are you sure you want to Delete</p>
<h2 class="text-center">System Admin</h2>
<p class="text-center">Are you sure you want to Delete</p>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
<a href="delete_user.php?id=banikayi" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Yes</a>
</div>

</div>
</div>
</div><div class="modal fade" id="edit_6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<center><h4 class="modal-title" id="myModalLabel">Edit Hub Admin</h4></center>
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

</div>
<div class="modal-body">
<div class="container-fluid">
<form method="POST" action="editadmin.php"></form>

<div class="row form-group">
    <div class="col-sm-4">
        <label class="control-label modal-label">First name:</label>
    </div>
    <div class="col-sm-10">
        <input type="hidden" name="password" value="password">
        <input type="hidden" name="id" value="6">
        <input type="text" class="form-control" onkeyup="this.value = this.value.toUpperCase();" name="firstname" value="Evance">
    </div>
</div>
<div class="row form-group">
    <div class="col-sm-4">
        <label class="control-label modal-label">Middle name:</label>
    </div>
    <div class="col-sm-10">
        <input type="text" class="form-control" onkeyup="this.value = this.value.toUpperCase();" name="midname" value="Amondo">
    </div>
</div>
<div class="row form-group">
    <div class="col-sm-4">
        <label class="control-label modal-label">Lastname:</label>
    </div>
    <div class="col-sm-10">
        <input type="text" class="form-control" onkeyup="this.value = this.value.toUpperCase();" name="lastname" value="Ochieng">
    </div>
</div>
<div class="row form-group">
    <div class="col-sm-4">
        <label class="control-label modal-label">Email Address:</label>
    </div>
    <div class="col-sm-10">
        <input type="text" class="form-control" name="email" value="amondoevance@gmail.com">
    </div>
</div>
<div class="row form-group">
    <div class="col-sm-4">
        <label class="control-label modal-label">Phone:</label>
    </div>
    <div class="col-sm-10">
        <input type="text" class="form-control" name="phone" value="0700196639">
    </div>
</div>
<div class="row form-group">
    <div class="col-sm-4">
        <label class="control-label modal-label">Username:</label>
    </div>
    <div class="col-sm-10">
        <input type="text" class="form-control" name="username" value="evance_ochieng">
    </div>
</div>


</div> 
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
<button type="submit" name="edit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Update

</button></div>

</div>
</div>
</div><div class="modal fade" id="delete_evance_ochieng" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<center><h4 class="modal-title" id="myModalLabel">Delete Hub User</h4></center>
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

</div>
<div class="modal-body">	
<p class="text-center">Are you sure you want to Delete</p>
<h2 class="text-center">Evance Ochieng</h2>
<p class="text-center">Are you sure you want to Delete</p>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
<a href="delete_user.php?id=evance_ochieng" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Yes</a>
</div>

</div>
</div>
</div><div class="modal fade" id="edit_92" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<center><h4 class="modal-title" id="myModalLabel">Edit Hub Admin</h4></center>
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

</div>
<div class="modal-body">
<div class="container-fluid">
<form method="POST" action="editadmin.php"></form>

<div class="row form-group">
    <div class="col-sm-4">
        <label class="control-label modal-label">First name:</label>
    </div>
    <div class="col-sm-10">
        <input type="hidden" name="password" value="password">
        <input type="hidden" name="id" value="92">
        <input type="text" class="form-control" onkeyup="this.value = this.value.toUpperCase();" name="firstname" value="Fridah">
    </div>
</div>
<div class="row form-group">
    <div class="col-sm-4">
        <label class="control-label modal-label">Middle name:</label>
    </div>
    <div class="col-sm-10">
        <input type="text" class="form-control" onkeyup="this.value = this.value.toUpperCase();" name="midname" value="Njeri">
    </div>
</div>
<div class="row form-group">
    <div class="col-sm-4">
        <label class="control-label modal-label">Lastname:</label>
    </div>
    <div class="col-sm-10">
        <input type="text" class="form-control" onkeyup="this.value = this.value.toUpperCase();" name="lastname" value="Nyaga">
    </div>
</div>
<div class="row form-group">
    <div class="col-sm-4">
        <label class="control-label modal-label">Email Address:</label>
    </div>
    <div class="col-sm-10">
        <input type="text" class="form-control" name="email" value="fridahnjeri2015@gmail.com">
    </div>
</div>
<div class="row form-group">
    <div class="col-sm-4">
        <label class="control-label modal-label">Phone:</label>
    </div>
    <div class="col-sm-10">
        <input type="text" class="form-control" name="phone" value="0729215640">
    </div>
</div>
<div class="row form-group">
    <div class="col-sm-4">
        <label class="control-label modal-label">Username:</label>
    </div>
    <div class="col-sm-10">
        <input type="text" class="form-control" name="username" value="fridah_njeri">
    </div>
</div>


</div> 
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
<button type="submit" name="edit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Update

</button></div>

</div>
</div>
</div><div class="modal fade" id="delete_fridah_njeri" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<center><h4 class="modal-title" id="myModalLabel">Delete Hub User</h4></center>
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

</div>
<div class="modal-body">	
<p class="text-center">Are you sure you want to Delete</p>
<h2 class="text-center">Fridah Nyaga</h2>
<p class="text-center">Are you sure you want to Delete</p>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
<a href="delete_user.php?id=fridah_njeri" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Yes</a>
</div>

</div>
</div>
</div><div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="dataTable_length"><label>Show <select name="dataTable_length" aria-controls="dataTable" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="dataTable_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="dataTable"></label></div></div></div><div class="row"><div class="col-sm-12"><table class="table table-bordered table-sm table-striped dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                        <thead>
                            <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Sno: activate to sort column descending" style="width: 31.2px;">Sno</th><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Firstname: activate to sort column ascending" style="width: 79.2px;">Firstname</th><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Midname: activate to sort column ascending" style="width: 77.2px;">Midname</th><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Lastname: activate to sort column ascending" style="width: 77.2px;">Lastname</th><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Email Address: activate to sort column ascending" style="width: 190.2px;">Email Address</th><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Phone: activate to sort column ascending" style="width: 77.2px;">Phone</th><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Username: activate to sort column ascending" style="width: 104.2px;">Username</th><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 96.2px;">Action</th></tr>
                        </thead>
                        <tfoot>
                            <tr><th rowspan="1" colspan="1">Sno</th><th rowspan="1" colspan="1">Firstname</th><th rowspan="1" colspan="1">Midname</th><th rowspan="1" colspan="1">Lastname</th><th rowspan="1" colspan="1">Email Address</th><th rowspan="1" colspan="1">Phone</th><th rowspan="1" colspan="1">Username</th><th rowspan="1" colspan="1">Action</th></tr>
                        </tfoot>
                        <tbody>
        <!-- Edit -->


<!-- Delete -->
<!-- Edit -->


<!-- Delete -->
<!-- Edit -->


<!-- Delete -->
<!-- Edit -->


<!-- Delete -->
<!-- Edit -->


<!-- Delete -->
<!-- Edit -->


<!-- Delete -->
<!-- Edit -->


<!-- Delete -->
    <tr role="row" class="odd">
                    <td class="sorting_1">1</td>
                    <td>Brian</td>
                    <td>CHEMASE</td>
                    <td>Anikayi</td>
                    <td>brianchemo@gmail.com</td>
                    <td>0725670606</td>
                    <td>brian_anikayi</td>
                    
                    
                    <td>
                        <a href="#edit_1" class="btn btn-success btn-sm" data-toggle="modal"><span class="glyphicon glyphicon-edit"></span> Edit</a>
                        <a href="#delete_brian_anikayi" class="btn btn-danger btn-sm" data-toggle="modal"><span class="glyphicon glyphicon-trash"></span> Delete</a>
                    </td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">2</td>
                    <td>samuel</td>
                    <td> </td>
                    <td>kibet</td>
                    <td>samkibe2961@gmail.com</td>
                    <td>0722709360</td>
                    <td>Kibet_chepkok</td>
                    
                    
                    <td>
                        <a href="#edit_2" class="btn btn-success btn-sm" data-toggle="modal"><span class="glyphicon glyphicon-edit"></span> Edit</a>
                        <a href="#delete_Kibet_chepkok" class="btn btn-danger btn-sm" data-toggle="modal"><span class="glyphicon glyphicon-trash"></span> Delete</a>
                    </td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">3</td>
                    <td>Benjamin</td>
                    <td></td>
                    <td>Haya</td>
                    <td>benjamin.haya1@gmail.com</td>
                    <td>0722316132</td>
                    <td>benjamin_haya</td>
                    
                    
                    <td>
                        <a href="#edit_3" class="btn btn-success btn-sm" data-toggle="modal"><span class="glyphicon glyphicon-edit"></span> Edit</a>
                        <a href="#delete_benjamin_haya" class="btn btn-danger btn-sm" data-toggle="modal"><span class="glyphicon glyphicon-trash"></span> Delete</a>
                    </td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">4</td>
                    <td>Customer</td>
                    <td> </td>
                    <td>Care</td>
                    <td>amazingbenji01@gmail.com</td>
                    <td>0724959797</td>
                    <td>customer_care</td>
                    
                    
                    <td>
                        <a href="#edit_4" class="btn btn-success btn-sm" data-toggle="modal"><span class="glyphicon glyphicon-edit"></span> Edit</a>
                        <a href="#delete_customer_care" class="btn btn-danger btn-sm" data-toggle="modal"><span class="glyphicon glyphicon-trash"></span> Delete</a>
                    </td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">5</td>
                    <td>System</td>
                    <td>c</td>
                    <td>Admin</td>
                    <td>briananikayi@outlook.com</td>
                    <td>0702230627</td>
                    <td>banikayi</td>
                    
                    
                    <td>
                        <a href="#edit_5" class="btn btn-success btn-sm" data-toggle="modal"><span class="glyphicon glyphicon-edit"></span> Edit</a>
                        <a href="#delete_banikayi" class="btn btn-danger btn-sm" data-toggle="modal"><span class="glyphicon glyphicon-trash"></span> Delete</a>
                    </td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">6</td>
                    <td>Evance</td>
                    <td>Amondo</td>
                    <td>Ochieng</td>
                    <td>amondoevance@gmail.com</td>
                    <td>0700196639</td>
                    <td>evance_ochieng</td>
                    
                    
                    <td>
                        <a href="#edit_6" class="btn btn-success btn-sm" data-toggle="modal"><span class="glyphicon glyphicon-edit"></span> Edit</a>
                        <a href="#delete_evance_ochieng" class="btn btn-danger btn-sm" data-toggle="modal"><span class="glyphicon glyphicon-trash"></span> Delete</a>
                    </td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">7</td>
                    <td>Fridah</td>
                    <td>Njeri</td>
                    <td>Nyaga</td>
                    <td>fridahnjeri2015@gmail.com</td>
                    <td>0729215640</td>
                    <td>fridah_njeri</td>
                    
                    
                    <td>
                        <a href="#edit_92" class="btn btn-success btn-sm" data-toggle="modal"><span class="glyphicon glyphicon-edit"></span> Edit</a>
                        <a href="#delete_fridah_njeri" class="btn btn-danger btn-sm" data-toggle="modal"><span class="glyphicon glyphicon-trash"></span> Delete</a>
                    </td>
                </tr></tbody>
                    </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="dataTable_info" role="status" aria-live="polite">Showing 1 to 7 of 7 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="dataTable_previous"><a href="#" aria-controls="dataTable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="dataTable" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item next disabled" id="dataTable_next"><a href="#" aria-controls="dataTable" data-dt-idx="2" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                </div>
            </div>
        </div>
    </div>
    </div>
</main>


@endsection