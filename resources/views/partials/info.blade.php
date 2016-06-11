@if (session('info'))
    <div class="alert alert-info alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong> Notice!</strong>
        {{ session('info') }}<br><br>
    </div>
@endif