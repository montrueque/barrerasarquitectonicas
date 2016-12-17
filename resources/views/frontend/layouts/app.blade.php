<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta name="csrf-token" content="{{ csrf_token() }}"/>

        <title>@yield('title', app_name())</title>

        <!-- Meta -->
        <meta name="description" content="@yield('meta_description', 'Laravel 5 Boilerplate')"/>
        <meta name="author" content="@yield('meta_author', 'Anthony Rappa')"/>
        @yield('meta')

        <!-- Styles -->
        @yield('before-styles')

        {{ Html::style(elixir('css/frontend.css')) }}

        <!-- Check if the language is set to RTL, so apply the RTL layouts -->
        @langRTL
            {!! Html::style(elixir('css/rtl.css')) !!}
        @endif

        @yield('after-styles')

        <!-- Scripts -->
        <script type="text/javascript">
            window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
            ]); ?>
        </script>
    </head>
    <body id="app-layout">
<a href="#main" id="skiplink">Saltar al contenido principal</a>
<section role="region" id="app">
            @include('includes.partials.logged-in-as')
@include('frontend.includes.nav')

            <main role="main" aria-label="Contenido principal" class="container" id="main">
                @include('includes.partials.messages')
                @yield('content')
            </main><!-- container -->
        </section><!--#app-->
@include('frontend.includes.footer')
        <!-- Scripts -->
        @yield('before-scripts')
        {!! Html::script(elixir('js/frontend.js')) !!}
        @yield('after-scripts')

        @include('includes.partials.ga')
    </body>
</html>