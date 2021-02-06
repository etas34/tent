<x-main-layout>



    <main class="bg_gray">


        <div class="container margin_30">
            <div class="page_header">
                <div class="breadcrumbs">
                    <ul>
                        <li><a href="#">{{__('Home')}}</a></li>
                        <li><a href="#">{{__('Category')}}</a></li>
                        <li>{{__('Page active')}}</li>
                    </ul>
                </div>
                <h1>{{__('Help and Support')}}</h1>
            </div>
            <!-- /page_header -->
            <div class="search-input">
                <input type="text" placeholder="Search question or article...">
                <button type="submit"><i class="ti-search"></i></button>
            </div>
            <!-- /search-input -->

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <a class="box_topic" href="#0">
                        <i class="ti-wallet"></i>
                        <h3>{{__('Payments')}}</h3>
                        <p>{{__('Payments description')}}</p>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6">
                    <a class="box_topic" href="#0">
                        <i class="ti-user"></i>
                        <h3>{{__('Account')}}</h3>
                        <p>{{__('Account description')}}</p>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6">
                    <a class="box_topic" href="#0">
                        <i class="ti-help"></i>
                        <h3>{{__('General help')}}</h3>
                        <p>{{__('General help description')}}</p>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6">
                    <a class="box_topic" href="#0">
                        <i class="ti-truck"></i>
                        <h3>{{__('Shipping')}}</h3>
                        <p>{{__('Shipping description')}}</p>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6">
                    <a class="box_topic" href="#0">
                        <i class="ti-eraser"></i>
                        <h3>{{__('Cancellation')}}</h3>
                        <p>{{__('Cancellation description')}}</p>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6">
                    <a class="box_topic" href="#0">
                        <i class="ti-comments"></i>
                        <h3>{{__('Reviews')}}</h3>
                        <p>{{__('Reviews description')}}</p>
                    </a>
                </div>
            </div>
            <!--/row-->
        </div>
        <!-- /container -->
        <div class="bg_white">
            <div class="container margin_30">
                <h5>Popular Articles</h5>
                <div class="list_articles add_bottom_15 clearfix">
                    <ul>
                        <li><a href="#0"><i class="ti-file"></i><strong>{{__('Account')}}</strong>{{__('Account description')}}</a></li>
                        <li><a href="#0"><i class="ti-file"></i><strong>{{__('Refund')}}</strong>{{__('Refund description')}}</a></li>
                        <li><a href="#0"><i class="ti-file"></i><strong>{{__('Shipping')}}</strong> {{__('Shipping description')}}</a></li>
                        <li><a href="#0"><i class="ti-file"></i><strong>{{__('Payments')}}</strong>{{__('Payments description')}}</a></li>
                        <li><a href="#0"><i class="ti-file"></i><strong>{{__('Warranty')}}</strong>{{__('Warranty description')}}</a></li>
                        <li><a href="#0"><i class="ti-file"></i><strong>{{__('Refund')}}</strong>{{__('Refund description')}}</a></li>
                        <li><a href="#0"><i class="ti-file"></i><strong>{{__('Reviews')}}</strong>{{__('Reviews description')}}</a></li>
                    </ul>
                </div>
                <!-- /list_articles -->
            </div>
        </div>
        <!-- /bg_white -->
    </main>





</x-main-layout>

