<div class="container">










    <div class="row justify-content-center g-gs">
        <div class="col-xxl-4 col-lg-4 mt-lg-0 mt-5">
            <div class="count-wrapper glass--bg rounded-2 text-center">
                <h2 class="title">{{ data_get($schemes['highlight'], 'name') }}</h2><hr>
                <h5 class="pricing-title">{{ data_get($schemes['highlight'], 'total_return') }}% {{ __('ROI') }}</h5><hr>
                <h1 class="percent">{{ data_get($schemes['highlight'], 'rate_text') }}</h1>
                <h5 class="text">{{ __(data_get($schemes['highlight'], 'calc_period')) }}</h5><hr>

                <ul class="pricing-feature">
                    <li>
                        <span>{{ __('Investment Period') }}</span>
                        <h3><span>{{ __(data_get($schemes['highlight'], 'term_text_alter')) }}</span></h3><hr>
                    </li>
                    <li>
                        <span>{{ __('Investments') }}</span>
                        @if (data_get($schemes['highlight'], 'is_fixed'))
                            <span>{{ money(data_get($schemes['highlight'], 'amount'), base_currency()) }}</span>
                        @else
                            <span>{{ money(data_get($schemes['highlight'], 'amount'), base_currency()) }} -
                                {{ data_get($schemes['highlight'], 'maximum') ? money(data_get($schemes['highlight'], 'maximum'), base_currency()) : __('Unlimited') }}</span>
                        @endif
                    </li>
                    @if (sys_settings('iv_plan_terms_show') == 'yes')
                        <li>
                            <span class="label">{{ __('Term Duration') }}</span>
                            <span
                                class="data">{{ data_get($schemes['highlight'], 'term_text_alter') }}</span>
                        </li>
                    @endif
                    @if (sys_settings('iv_plan_payout_show') == 'yes')
                        <li>
                            <span class="label">{{ __('Payout Term') }}</span>
                            <span
                                class="data">{{ data_get($schemes['highlight'], 'payout') == 'after_matured' ? __('After matured') : __('Term basis') }}</span>
                        </li>
                    @endif
                    @if (sys_settings('iv_plan_capital_show') == 'yes')
                        <li>
                            <span>{{ __('Capital Return') }}</span>
                            <span>{{ data_get($schemes['highlight'], 'capital') == 1 ? __('End of Term') : __('Each Term') }}</span>
                        </li>
                    @endif
                </ul><hr>

                <div class="pricing-action mt-auto">
                    @if (!auth()->check())
                        <a class="btn btn-primary btn-lg btn-block"
                            href="{{ route('register') }}">{{ __('Make a deposit') }}</a>
                    @else
                        <a class="btn btn-primary btn-lg btn-block"
                            href="{{ route('user.investment.invest', data_get($schemes['highlight'], 'uid_code')) }}">{{ __('Invest Now') }}</a>
                    @endif
                </div>
            </div>
        </div>


        <div class="col-xxl-4 col-lg-4 mt-lg-0 mt-5">
            <div class="count-wrapper glass--bg rounded-2 text-center">
                <h2 class="title">{{ data_get($schemes['one'], 'name') }}</h2><hr>
                <h5 class="pricing-title">{{ data_get($schemes['one'], 'total_return') }}%{{ __('ROI') }}</h5><hr>
                <h1 class="percent">{{ data_get($schemes['one'], 'rate_text') }}</h1>
                <h5 class="text">{{ __(data_get($schemes['one'], 'calc_period')) }}</h5><hr>

                <ul class="pricing-feature">
                    <li>
                        <span>{{ __('Investment Period') }}</span>
                        <h3><span>{{ __(data_get($schemes['one'], 'term_text_alter')) }}</span></h3><hr>
                    </li>
                    <li>
                        <span>{{ __('Investments') }}</span>
                        @if (data_get($schemes['one'], 'is_fixed'))
                            <span>{{ money(data_get($schemes['one'], 'amount'), base_currency()) }}</span>
                        @else
                            <span>{{ money(data_get($schemes['one'], 'amount'), base_currency()) }} -
                                {{ data_get($schemes['one'], 'maximum') ? money(data_get($schemes['one'], 'maximum'), base_currency()) : __('Unlimited') }}</span>
                        @endif
                    </li>
                    @if (sys_settings('iv_plan_terms_show') == 'yes')
                        <li>
                            <span class="label">{{ __('Term Duration') }}</span>
                            <span
                                class="data">{{ data_get($schemes['one'], 'term_text_alter') }}</span>
                        </li>
                    @endif
                    @if (sys_settings('iv_plan_payout_show') == 'yes')
                        <li>
                            <span class="label">{{ __('Payout Term') }}</span>
                            <span
                                class="data">{{ data_get($schemes['one'], 'payout') == 'after_matured' ? __('After matured') : __('Term basis') }}</span>
                        </li>
                    @endif
                    @if (sys_settings('iv_plan_capital_show') == 'yes')
                        <li>
                            <span>{{ __('Capital Return') }}</span>
                            <span>{{ data_get($schemes['one'], 'capital') == 1 ? __('End of Term') : __('Each Term') }}</span>
                        </li>
                    @endif
                </ul><hr>

                <div class="pricing-action mt-auto">
                    @if (!auth()->check())
                        <a class="btn btn-primary btn-lg btn-block"
                            href="{{ route('register') }}">{{ __('Make a deposit') }}</a>
                    @else
                        <a class="btn btn-primary btn-lg btn-block"
                            href="{{ route('user.investment.invest', data_get($schemes['one'], 'uid_code')) }}">{{ __('Invest Now') }}</a>
                    @endif
                </div>
            </div>
        </div>


        <div class="col-xxl-4 col-lg-4 mt-lg-0 mt-5">
            <div class="count-wrapper glass--bg rounded-2 text-center">
                <h2 class="title">{{ data_get($schemes['two'], 'name') }}</h2><hr>
                <h5 class="pricing-title">{{ data_get($schemes['two'], 'total_return') }}%{{ __('ROI') }}</h5><hr>
                <h1 class="percent">{{ data_get($schemes['two'], 'rate_text') }}</h1>
                <h5 class="text">{{ __(data_get($schemes['two'], 'calc_period')) }}</h5><hr>

                <ul class="pricing-feature">
                    <li>
                        <span>{{ __('Investment Period') }}</span>
                        <h3><span>{{ __(data_get($schemes['two'], 'term_text_alter')) }}</span></h3><hr>
                    </li>
                    <li>
                        <span>{{ __('Investments') }}</span>
                        @if (data_get($schemes['two'], 'is_fixed'))
                            <span>{{ money(data_get($schemes['two'], 'amount'), base_currency()) }}</span>
                        @else
                            <span>{{ money(data_get($schemes['two'], 'amount'), base_currency()) }} -
                                {{ data_get($schemes['two'], 'maximum') ? money(data_get($schemes['two'], 'maximum'), base_currency()) : __('Unlimited') }}</span>
                        @endif
                    </li>
                    @if (sys_settings('iv_plan_terms_show') == 'yes')
                        <li>
                            <span class="label">{{ __('Term Duration') }}</span>
                            <span
                                class="data">{{ data_get($schemes['two'], 'term_text_alter') }}</span>
                        </li>
                    @endif
                    @if (sys_settings('iv_plan_payout_show') == 'yes')
                        <li>
                            <span class="label">{{ __('Payout Term') }}</span>
                            <span
                                class="data">{{ data_get($schemes['two'], 'payout') == 'after_matured' ? __('After matured') : __('Term basis') }}</span>
                        </li>
                    @endif
                    @if (sys_settings('iv_plan_capital_show') == 'yes')
                        <li>
                            <span>{{ __('Capital Return') }}</span>
                            <span>{{ data_get($schemes['two'], 'capital') == 1 ? __('End of Term') : __('Each Term') }}</span>
                        </li>
                    @endif
                </ul><hr>

                <div class="pricing-action mt-auto">
                    @if (!auth()->check())
                        <a class="btn btn-primary btn-lg btn-block"
                            href="{{ route('register') }}">{{ __('Make a deposit') }}</a>
                    @else
                        <a class="btn btn-primary btn-lg btn-block"
                            href="{{ route('user.investment.invest', data_get($schemes['two'], 'uid_code')) }}">{{ __('Invest Now') }}</a>
                    @endif
                </div>
            </div>
        </div>

    </div>{{-- .row --}}
</div>
