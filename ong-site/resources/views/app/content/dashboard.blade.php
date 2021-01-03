@extends('app.content.template.base',["title" => "Dashboard"])

@section('app-content')
<div class="income-order-visit-user-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-6">
                <div class="income-dashone-total shadow-reset nt-mg-b-30">
                    <div class="income-title">
                        <div class="main-income-head">
                            <h2>Membres</h2>
                        </div>
                    </div>
                    <div class="income-dashone-pro">
                        <div class="income-rate-total">
                            <div class="price-adminpro-rate">
                                <h3>
                                    <span class="counter">
                                        {{ $data->membres }}
                                    </span>
                                </h3>
                            </div>
                            <div class="price-graph">
                                <span id="sparkline1"></span>
                            </div>
                        </div>

                        <div class="clear"></div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-6">
                <div class="income-dashone-total shadow-reset nt-mg-b-30">
                    <div class="income-title">
                        <div class="main-income-head">
                            <h2>Partenaires</h2>
                        </div>
                    </div>
                    <div class="income-dashone-pro">
                        <div class="income-rate-total">
                            <div class="price-adminpro-rate">
                                <h3>
                                    <span class="counter">
                                        {{ $data->partenaires }}
                                    </span>
                                </h3>
                            </div>
                            <div class="price-graph">
                                <span id="sparkline6"></span>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-6">
                <div class="income-dashone-total shadow-reset nt-mg-b-30">
                    <div class="income-title">
                        <div class="main-income-head">
                            <h2>Donateurs</h2>
                        </div>
                    </div>
                    <div class="income-dashone-pro">
                        <div class="income-rate-total">
                            <div class="price-adminpro-rate">
                                <h3>
                                    <span class="counter">
                                        {{ $data->donateurs }}
                                    </span>
                                </h3>
                            </div>
                            <div class="price-graph">
                                <span id="sparkline2">

                                </span>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-6">
                <div class="income-dashone-total shadow-reset nt-mg-b-30">
                    <div class="income-title">
                        <div class="main-income-head">
                            <h2>Evenements</h2>
                        </div>
                    </div>
                    <div class="income-dashone-pro">
                        <div class="income-rate-total">
                            <div class="price-adminpro-rate">
                                <h3>
                                    <span class="counter">
                                        {{ $data->evenements }}
                                    </span>
                                </h3>
                            </div>
                            <div class="price-graph">
                                <span id="sparkline5"></span>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

