<!doctype html>
<html lang="en">

@include("components.head")

<body>
<div class="container-fluid">
    <div class="col-8">
        @yield("content")
    </div>
    <div class="col-4">
        @include("components.sidebar")
    </div>
</div>
@include("components.scripts")
</body>
</html>
