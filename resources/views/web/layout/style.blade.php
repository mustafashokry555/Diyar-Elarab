<link rel="stylesheet" type="text/css"
    href="//fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800%7CPoppins:300,400,700">
<link rel="stylesheet" href='{{ URL::asset('web/css/bootstrap.css') }}'>
<link rel="stylesheet" href='{{ URL::asset('web/css/fonts.css') }}'>
<link rel="stylesheet" href='{{ URL::asset('web/css/style.css') }}' id="main-styles-link">

<style>
    .ie-panel {
        display: none;
        background: #212121;
        padding: 10px 0;
        box-shadow: 3px 3px 5px 0 rgba(0, 0, 0, .3);
        clear: both;
        text-align: center;
        position: relative;
        z-index: 1;
    }

    html.ie-10 .ie-panel,
    html.lt-ie-10 .ie-panel {
        display: block;
    }
</style>

@yield('style')
