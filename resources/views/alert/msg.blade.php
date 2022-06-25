@if($errors->any())
@foreach($errors->all() as $error)
<div class="alert alert-danger alert-dismissible pull-right">
     
    <strong>Error!</strong>{{$error}}
<button type="button" class="close" data-dismiss="alert">&times;</button>
    
</div>
@endforeach
@endif

@if(session('error'))

<div class="alert alert-danger alert-dismissible pull-right">
     
    <strong> Error ! </strong>{{session('error')}}
</div>

@endif
@if(session('success'))

<div class="alert alert-primary alert-dismissible pull-right">
     
    <strong> Success !</strong>{{session('success')}}
</div>

@endif