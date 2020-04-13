<link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>


<body>
    <a href="{{ route('resumes.index') }}" class="btn btn-primary">resume</a>
    <a href="{{ route('tags.index') }}" class="btn btn-primary">tags</a>
    <div class="container">
            <section class="content">
                <div>
                    @yield('content')
                </div>
            </section>
        </div>
</body>
