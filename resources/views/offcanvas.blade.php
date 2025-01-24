<!-- <head> -->
    <link rel="stylesheet" href="{{asset('assets/css/floating_button.css')}}" />
<!-- </head> -->
<!-- <body> -->
<div class="floating-button">
    <!-- <button type="button" class="btn btn-warning" data-bs-toggle=""> </button> -->
    <div class="offcanvas offcanvas-end" id="demo">
    <div class="offcanvas-header">
        <h1 class="offcanvas-title">Heading</h1>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body">
        <p>Some text lorem ipsum.</p>
        <p>Some text lorem ipsum.</p>
        <button class="btn btn-secondary" type="button">A Button</button>
    </div>
    </div>

    <!-- Button to open the offcanvas sidebar -->
    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#demo">
    Open Offcanvas Sidebar
    </button>
</div>
<!-- </body> -->