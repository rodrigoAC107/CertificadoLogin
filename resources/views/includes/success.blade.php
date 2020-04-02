@if(session('success'))
<div class="alert alert-success" role="alert" style="padding-top: 1%">
    <h6>
        {{ session('success') }}
    </h6>
</div>
@endif