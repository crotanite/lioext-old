<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-100">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ env('APP_NAME') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body class="h-100">
        <!-- app -->
        <div id="app" class="d-flex flex-column h-100">

            <!-- navigation -->
            <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
                <div class="container">
                    <!-- title -->
                    <a class="navbar-brand" href="/">LioExt</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <!-- links -->
                    <div class="collapse navbar-collapse ml-auto w-100 justify-content-end" id="navigation">
                        <ul class="nav nav-tabs" id="navtabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#lioimage">LioImage</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#liogene">LioGene</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#liomart">LioMart</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <!-- main -->
            <main class="flex-shrink-0">
                <div class="container">
                    <!-- tabs -->
                    <div class="tab-content" id="navtabscontent">
                        <div class="tab-pane fade show active" id="home">
                            @include('partials.home.index')
                        </div>
                        <div class="tab-pane fade" id="lioimage">
                            @include('partials.lioimage.index')
                        </div>
                        <div class="tab-pane fade" id="liogene">
                            @include('partials.liogene.index')
                        </div>
                        <div class="tab-pane fade" id="liomart">
                            @include('partials.liomart.index')
                        </div>
                    </div>
                </div>
            </main>

            <!-- footer-->
            <footer class="footer mt-auto py-3">
                <div class="container text-center">
                    <span class="text-muted">
                        <a href="https://www.lioden.com/">
                            <img src="https://static.lioden.com/img/layout/logo-full-2.png" style="height:60px">
                        </a>
                        <br>
                        Website © <a href="https://paigejones.me">Paige Jones</a>. Art assets including Lioden logo © <a href="https://www.lioden.com/">Lioden</a>
                    </span>
                </div>
            </footer>
        </div>

        <!-- Scripts -->
        <script src="/js/app.js"></script>
        <script>
            function open_nav_tab(tab)
            {
                $('.nav-tabs a[href="#' + tab + '"]').tab('show');
            }

            // fetch the genes
            $.getJSON('/data/liogene.json', populate_selects);

            // populate the selects
            function populate_selects(data)
            {
                // set variables
                var options = '';

                // loop through data
                $.each(data, function(color, groups)
                {
                    // loop through groups
                    $.each(groups, function(group, shades)
                    {
                        // loop through shades
                        $.each(shades, function(shade, bases)
                        {
                            // add shade
                            options += '<optgroup label="' + color + ' ' + group + ' ' + shade + '">';
                            
                            // loop through bases
                            $.each(bases, function(base_slug, base_name)
                            {
                                // add the bases
                                options += '<option value="' + color + '-' + group + '-' + shade + '-' + base_slug + '">' + base_name.name + '</option>';
                            });

                            // close shade
                            options += '</optgroup>';
                        });
                    });
                });

                // loop through dropdowns
                $('.genes').append(options);
            }

            $(document).on('submit', 'form#lioimage_form', function() {
                $('#output_image').html('<em class="fa fa-spinner fa-pulse fa-3x fa-fw"></em>');
                $.ajax({
                    url: 'lioimage',
                    type: 'POST',
                    data: $(this).serialize(),
                    success: function(data)
                    {
                        var image = new Image();
                        image.src = data;
                        $('#output_image').html(image);
                    },
                    error: function(xhr, error)
                    {
                        $('#output_image').html(xhr.responseText);
                    },
                });
                return false;
            });

            // submitting the form
            $('#liogene_form').on('submit', function()
            {
                // change submit to loading icon
                $('#liogene_form_submit').val('Processing...').prop('disabled', true);

                // clear output
                $('#liogene_output').html('');

                // send to process
                $.ajax({
                    url: 'liogene',
                    type: 'POST',
                    data: $(this).serialize(),
                    success: function(data)
                    {
                        $('#liogene_form_submit').val('Submit').prop('disabled', false);
                        //handle_data(data);
                        $('#liogene_output').html(data);
                    },
                    error: function(xhr, error)
                    {
                        $('#liogene_form_submit').val('Submit').prop('disabled', false);
                        $('#liogene_output').html(xhr.responseText);
                    },
                });

        // return
        return false;
    });
        </script>
    </body>
</html>