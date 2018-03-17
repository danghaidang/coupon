@extends('app')

@section('content_main')
    <div class="coupon">
        <div class="i-c">
            <div class="t-s">
                <div class="m-c-w">
                    <div class="h1">Recommended top stores</div>
                    <div class="t-s-l">
                        @include('elements.recomended_top')
                        @include('elements.recomended_bottom')
                    </div>
                </div>
            </div>


            <div class="t-o">
                <div class="m-c-w">
                    <div class="h1">Top Offers</div>
                    <div class="c-r-list">
                        <!-- top offer list -->
                        @foreach(range(0,10) as $v)
                            @include('elements.coupon_items')
                        @endforeach
                        <!-- end top offer list -->
                    </div>
                </div>
            </div>

            <div class="m-c-w">
                <div class="t">
                    <h3>Never miss another deal</h3>
                    <p class="text">Get the top deals from 100s of retailers in the Best of CouponsAtCheckout emails.</p>
                    <div class="sbb-i">
                        <input name="s-email" type="email" placeholder="Enter email address...">
                        <button class="sbb-i-s">Notify Me</button>
                    </div>
                </div>
            </div>

        </div>
@endsection