<x-main-layout>



        <main>
            <div class="top_banner">
                <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.3)">
                    <div class="container">
                        <div class="breadcrumbs">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Category</a></li>
                                <li>Page active</li>
                            </ul>
                        </div>
                        <h1>Search Result</h1>
                    </div>
                </div>
                <img src="{{ asset('assets/img/bg_cat_shoes.jpg') }}" class="img-fluid" alt="">
            </div>
            <!-- /toolbox -->

            <div class="container margin_30">

                <div class="row">

                    <div class="col-lg-12">

                        <div class="row small-gutters"  id="result">

                        @include('frontpage.items')

                        </div>


                    </div>
                    <!-- /col -->
                </div>
                <!-- /row -->

            </div>
            <!-- /container -->
        </main>
        <!-- /main -->




@push('scripts')
        <script src="{{asset('assets/js/sticky_sidebar.min.js')}}"></script>
        <script src="{{asset('assets/js/specific_listing.js')}}"></script>

    @endpush
</x-main-layout>

