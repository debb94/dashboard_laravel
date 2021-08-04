<!-- head -->
@include("template.head")
<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        @include("template.sidebar")
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                @include("template.topbar")
                <!-- Begin Page Content -->
                <div class="container-fluid col-8">
                    <h1 class="h3 mb-2 text-gray-800">@yield('screen')</h1>
                    @yield("section-dynamic")
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Daniel Bolivar 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    @include("template.modal")

</body>
<!-- footer -->
@include("template.footer")