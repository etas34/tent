<x-main-layout>


    <main class="bg_gray">
        <div class="container margin_60_35 add_bottom_30">
            <div class="main_title">
                <h2>{{$page->header}}</h2>

            </div>
            <div>
                {!! $page->content !!}
            </div>
        </div>

    </main>
    <!--/main-->
</x-main-layout>

