@include('includes.front_header')


    <!-- Navigation -->
        @include('includes.front_nav')
    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->

            @yield('content')

            <!-- Blog Sidebar Widgets Column -->
           @include('includes.front_sidebar')

        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
      @include('includes.front_footer')
