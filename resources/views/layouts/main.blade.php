<!doctype html>
<html lang="en">

@include("components.head")

<body>
<div class="container-fluid full_height">
    <div class="row">
        <div class="col-8 content_block no_padding d-flex h-100">
            <div class="align-self-center mx-auto">
                @yield("content")
            </div>
        </div>
        <div class="col-4 sidebar_block no_padding d-flex h-100">
            <div class="col-12 h-100 top_gradient"></div>
            <div class="col-12 bottom_gradient"></div>
            @include("components._sidebar")
        </div>
    </div>
</div>
@include("components.scripts")
</body>
</html>
