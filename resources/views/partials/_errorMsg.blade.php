
    <!-- DISPLAY ERRORS -->
    @if($errors->any())
        <div class="alert alert-danger">
            <strong>Error:</strong> There are some problems with your input.<br/><br/>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <!-- END DISPLAY ERRORS -->