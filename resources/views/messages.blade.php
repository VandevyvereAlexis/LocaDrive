<!-- MESSAGES ALERT / SUCCESS
===================================================================================== -->
<div class="container-fluid mx-auto col-md-7 col-sm-11 border-0 mt-5 pt-5 p-1 text-center">
    @if (session()->has('message'))
        <p class="alert alert-success">{{ session()->get('message') }}</p>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="p-0" style="list-style-type: none ; text-decoration: none;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>





