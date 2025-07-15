<!DOCTYPE html>

<html lang="en-us">
@include('components.partial.head')


<body>
    @include('components.partial.nav')
{{$slot}}
    @include('components.partial.bottom')
    
</body>
@include('components.partial.script')
</html>