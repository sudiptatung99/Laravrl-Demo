<x-admin-layout>
    @section('title')Dashboard @endsection
    <div class="nk-block">
        <div class="row g-gs">
            <div class="col-lg-3 col-sm-6">
                <div class="card h-100 bg-primary">
                    <div class="nk-cmwg nk-cmwg1">
                        <div class="pt-3 card-inner">
                            <div class="d-flex justify-content-between">
                                <div class="flex-item">
                                    <div class="flex-wrap text-white d-flex"><span class="fs-2 me-1">56.8K</span><span
                                            class="pb-1 align-self-end fs-14px"><em
                                                class="icon ni ni-arrow-long-up"></em>12.4%</span>
                                    </div>
                                    <h6 class="text-white">Running
                                        Campaign</h6>
                                </div>
                                <div class="card-tools me-n1">
                                    <div class="dropdown"><a href="#"
                                            class="dropdown-toggle btn btn-icon btn-sm btn-trigger on-dark"
                                            data-bs-toggle="dropdown"><em class="icon ni ni-more-v"></em></a>
                                        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                            <ul class="link-list-opt no-bdr">
                                                <li><a href="#" class="active"><span>15
                                                            Days</span></a></li>
                                                <li><a href="#"><span>30
                                                            Days</span></a></li>
                                                <li><a href="#"><span>3
                                                            Months</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto overflow-hidden nk-ck-wrap rounded-bottom">
                            <div class="nk-cmwg1-ck"><canvas class="campaign-line-chart-s1 rounded-bottom"
                                    id="runningCampaign"></canvas></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card h-100 bg-info">
                    <div class="nk-cmwg nk-cmwg1">
                        <div class="pt-3 card-inner">
                            <div class="d-flex justify-content-between">
                                <div class="flex-item">
                                    <div class="flex-wrap text-white d-flex"><span class="fs-2 me-1">857.6K</span><span
                                            class="pb-1 align-self-end fs-14px"><em
                                                class="icon ni ni-arrow-long-up"></em>12.4%</span>
                                    </div>
                                    <h6 class="text-white">Total
                                        Audience</h6>
                                </div>
                                <div class="card-tools me-n1">
                                    <div class="dropdown"><a href="#"
                                            class="dropdown-toggle btn btn-icon btn-sm btn-trigger on-dark"
                                            data-bs-toggle="dropdown"><em class="icon ni ni-more-v"></em></a>
                                        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                            <ul class="link-list-opt no-bdr">
                                                <li><a href="#" class="active"><span>15
                                                            Days</span></a></li>
                                                <li><a href="#"><span>30
                                                            Days</span></a></li>
                                                <li><a href="#"><span>3
                                                            Months</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto nk-cmwg1-ck"><canvas class="campaign-line-chart-s1 rounded-bottom"
                                id="totalAudience"></canvas></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card h-100 bg-warning">
                    <div class="nk-cmwg nk-cmwg1">
                        <div class="pt-3 card-inner">
                            <div class="d-flex justify-content-between">
                                <div class="flex-item">
                                    <div class="flex-wrap text-white d-flex"><span class="fs-2 me-1">9.3K</span><span
                                            class="pb-1 align-self-end fs-14px"><em
                                                class="icon ni ni-arrow-long-up"></em>12.4%</span>
                                    </div>
                                    <h6 class="text-white">Avg.
                                        Rating</h6>
                                </div>
                                <div class="card-tools me-n1">
                                    <div class="dropdown"><a href="#"
                                            class="dropdown-toggle btn btn-icon btn-sm btn-trigger on-dark"
                                            data-bs-toggle="dropdown"><em class="icon ni ni-more-v"></em></a>
                                        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                            <ul class="link-list-opt no-bdr">
                                                <li><a href="#" class="active"><span>15
                                                            Days</span></a></li>
                                                <li><a href="#"><span>30
                                                            Days</span></a></li>
                                                <li><a href="#"><span>3
                                                            Months</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto overflow-hidden nk-ck-wrap rounded-bottom">
                            <div class="nk-cmwg1-ck"><canvas class="campaign-bar-chart-s1 rounded-bottom"
                                    id="avgRating"></canvas></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card h-100 bg-danger">
                    <div class="nk-cmwg nk-cmwg1">
                        <div class="pt-3 card-inner">
                            <div class="d-flex justify-content-between">
                                <div class="flex-item">
                                    <div class="flex-wrap text-white d-flex"><span
                                            class="fs-2 me-1">175.2K</span><span
                                            class="pb-1 align-self-end fs-14px"><em
                                                class="icon ni ni-arrow-long-up"></em>12.4%</span>
                                    </div>
                                    <h6 class="text-white">Subscriber</h6>
                                </div>
                                <div class="card-tools me-n1">
                                    <div class="dropdown"><a href="#"
                                            class="dropdown-toggle btn btn-icon btn-sm btn-trigger on-dark"
                                            data-bs-toggle="dropdown"><em class="icon ni ni-more-v"></em></a>
                                        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                            <ul class="link-list-opt no-bdr">
                                                <li><a href="#" class="active"><span>15
                                                            Days</span></a></li>
                                                <li><a href="#"><span>30
                                                            Days</span></a></li>
                                                <li><a href="#"><span>3
                                                            Months</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto overflow-hidden nk-ck-wrap rounded-bottom">
                            <div class="nk-cmwg1-ck"><canvas class="campaign-line-chart-s1 rounded-bottom"
                                    id="newSubscriber"></canvas></div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="col-xxl-8 col-lg-7">
                <div class="card card-full">
                    <div class="card-inner">
                        <div class="card-title-group">
                            <div class="card-title">
                                <h6 class="title">Performance
                                    Overview</h6>
                            </div>
                            <div class="card-tools">
                                <ul class="card-tools-nav">
                                    <li><a href="#"><span>Week</span></a></li>
                                    <li class="active"><a href="#"><span>Month</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="pt-0 card-inner">
                        <ul class="flex-wrap mb-2 d-flex justify-content-center gx-3">
                            <li class="align-center"><span class="dot" data-bg="#733AEA"></span><span
                                    class="ms-1">Social</span>
                            </li>
                            <li class="align-center"><span class="dot" data-bg="#0FCA7A"></span><span
                                    class="ms-1">Email</span>
                            </li>
                            <li class="align-center"><span class="dot" data-bg="#F2426E"></span><span
                                    class="ms-1">Courses</span>
                            </li>
                            <li class="align-center"><span class="dot" data-bg="#FD9722"></span><span
                                    class="ms-1">Google
                                    Ads</span></li>
                        </ul>
                        <div class="nk-cmwg2-ck"><canvas class="campaign-line-chart-s2"
                                id="performanceOverview"></canvas></div>
                        <div class="chart-label-group ms-5">
                            <div class="chart-label">03
                                Jan</div>
                            <div class="chart-label d-none d-sm-block">10
                                Jan</div>
                            <div class="chart-label d-none d-sm-block">17
                                Jan</div>
                            <div class="chart-label d-none d-sm-block">24
                                Jan</div>
                            <div class="chart-label">31
                                Jan</div>
                        </div>
                    </div>
                </div>
            </div> --}}
            {{-- <div class="col-xxl-4 col-lg-5">
                <div class="card card-full">
                    <div class="card-inner">
                        <div class="card-title-group">
                            <div class="card-title">
                                <h6 class="title">Top
                                    Channels</h6>
                            </div>
                            <div class="card-tools"><a href="#" class="link">View
                                    All</a></div>
                        </div>
                    </div>
                    <div class="pt-0 card-inner">
                        <ul class="gy-4">
                            <li class="justify-between border-0 border-dashed align-center border-bottom">
                                <div class="align-center">
                                    <div class="bg-transparent user-avatar sq"><img
                                            src="images/icons/campaign/brand/google.png" alt>
                                    </div>
                                    <div class="ms-2">
                                        <div class="lead-text">Google
                                        </div>
                                        <div class="sub-text">SEO
                                            &
                                            PPC</div>
                                    </div>
                                </div>
                                <div class="align-center">
                                    <div class="sub-text me-2">70%</div>
                                    <div class="progress rounded-pill w-80px">
                                        <div class="progress-bar bg-success rounded-pill" data-progress="70"></div>
                                    </div>
                                </div>
                            </li>
                            <li class="justify-between border-0 border-dashed align-center border-bottom">
                                <div class="align-center">
                                    <div class="bg-transparent user-avatar sq"><img
                                            src="images/icons/campaign/brand/instagram.png" alt>
                                    </div>
                                    <div class="ms-2">
                                        <div class="lead-text">Instagram
                                        </div>
                                        <div class="sub-text">Social
                                            Media</div>
                                    </div>
                                </div>
                                <div class="align-center">
                                    <div class="sub-text me-2">86%</div>
                                    <div class="progress rounded-pill w-80px">
                                        <div class="progress-bar bg-primary rounded-pill" data-progress="86"></div>
                                    </div>
                                </div>
                            </li>
                            <li class="justify-between border-0 border-dashed align-center border-bottom">
                                <div class="align-center">
                                    <div class="bg-transparent user-avatar sq"><img
                                            src="images/icons/campaign/brand/linkedin.png" alt>
                                    </div>
                                    <div class="ms-2">
                                        <div class="lead-text">Linked
                                            In
                                        </div>
                                        <div class="sub-text">Social
                                            Media</div>
                                    </div>
                                </div>
                                <div class="align-center">
                                    <div class="sub-text me-2">75%</div>
                                    <div class="progress rounded-pill w-80px">
                                        <div class="progress-bar bg-danger rounded-pill" data-progress="75"></div>
                                    </div>
                                </div>
                            </li>
                            <li class="justify-between border-0 border-dashed align-center border-bottom">
                                <div class="align-center">
                                    <div class="bg-transparent user-avatar sq"><img
                                            src="images/icons/campaign/brand/slack.png" alt>
                                    </div>
                                    <div class="ms-2">
                                        <div class="lead-text">Slack
                                        </div>
                                        <div class="sub-text">Messanger</div>
                                    </div>
                                </div>
                                <div class="align-center">
                                    <div class="sub-text me-2">64%</div>
                                    <div class="progress rounded-pill w-80px">
                                        <div class="progress-bar bg-info rounded-pill" data-progress="64"></div>
                                    </div>
                                </div>
                            </li>
                            <li class="justify-between align-center">
                                <div class="align-center">
                                    <div class="bg-transparent user-avatar sq"><img
                                            src="images/icons/campaign/brand/twitter.png" alt>
                                    </div>
                                    <div class="ms-2">
                                        <div class="lead-text">Twitter
                                        </div>
                                        <div class="sub-text">Social
                                            Media</div>
                                    </div>
                                </div>
                                <div class="align-center">
                                    <div class="sub-text me-2">54%</div>
                                    <div class="progress rounded-pill w-80px">
                                        <div class="progress-bar bg-warning rounded-pill" data-progress="54"></div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xxl-8">
                <div class="card card-full">
                    <div class="card-inner">
                        <div class="card-title-group">
                            <div class="card-title">
                                <h6 class="title">Active
                                    Campaign</h6>
                            </div>
                            <div class="card-tools"><a href="#" class="link">View
                                    All</a></div>
                        </div>
                    </div>
                    <div class="py-0 card-inner mt-n2">
                        <div class="nk-tb-list nk-tb-flush nk-tb-dashed">
                            <div class="nk-tb-item nk-tb-head">
                                <div class="nk-tb-col"><span>Subject</span></div>
                                <div class="nk-tb-col tb-col-mb"><span>Channels</span></div>
                                <div class="nk-tb-col tb-col-sm"><span>Status</span></div>
                                <div class="nk-tb-col tb-col-md"><span>Assignee</span></div>
                                <div class="nk-tb-col text-end"><span>Date
                                        Range</span></div>
                            </div>
                            <div class="nk-tb-item">
                                <div class="nk-tb-col"><span class="tb-lead">Happy
                                        Christmas
                                        <span class="dot dot-success d-sm-none ms-1"></span></span><span
                                        class="tb-sub">Created
                                        on 01 Dec
                                        22</span></div>
                                <div class="nk-tb-col tb-col-mb">
                                    <ul class="d-flex gx-1">
                                        <li class="text-facebook"><em class="icon ni ni-facebook-f"></em></li>
                                        <li class="text-instagram"><em class="icon ni ni-instagram"></em></li>
                                        <li class="text-linkedin"><em class="icon ni ni-linkedin"></em></li>
                                        <li class="text-twitter"><em class="icon ni ni-twitter"></em></li>
                                        <li class="text-youtube"><em class="icon ni ni-youtube-fill"></em></li>
                                    </ul>
                                </div>
                                <div class="nk-tb-col tb-col-sm">
                                    <div class="badge badge-dim bg-success">Live
                                        Now</div>
                                </div>
                                <div class="nk-tb-col tb-col-md">
                                    <div class="user-avatar-group">
                                        <div class="user-avatar xs"><img src="images/avatar/e-sm.jpg" alt></div>
                                        <div class="user-avatar xs"><img src="images/avatar/f-sm.jpg" alt></div>
                                        <div class="user-avatar xs"><img src="images/avatar/g-sm.jpg" alt></div>
                                        <div class="user-avatar xs"><span>2+</span></div>
                                    </div>
                                </div>
                                <div class="nk-tb-col text-end"><span>01
                                        Dec - 07
                                        Dec</span></div>
                            </div>
                            <div class="nk-tb-item">
                                <div class="nk-tb-col"><span class="tb-lead">Black
                                        Friday <span class="dot dot-success d-sm-none ms-1"></span></span><span
                                        class="tb-sub">Created
                                        on 01 Dec
                                        22</span></div>
                                <div class="nk-tb-col tb-col-mb">
                                    <ul class="d-flex gx-1">
                                        <li class="text-linkedin"><em class="icon ni ni-linkedin"></em></li>
                                        <li class="text-facebook"><em class="icon ni ni-facebook-f"></em></li>
                                        <li class="text-instagram"><em class="icon ni ni-instagram"></em></li>
                                        <li class="text-youtube"><em class="icon ni ni-youtube-fill"></em></li>
                                    </ul>
                                </div>
                                <div class="nk-tb-col tb-col-sm">
                                    <div class="badge badge-dim bg-success">Live
                                        Now</div>
                                </div>
                                <div class="nk-tb-col tb-col-md">
                                    <div class="user-avatar-group">
                                        <div class="user-avatar xs"><img src="images/avatar/h-sm.jpg" alt></div>
                                        <div class="user-avatar xs"><img src="images/avatar/i-sm.jpg" alt></div>
                                        <div class="user-avatar xs"><img src="images/avatar/j-sm.jpg" alt></div>
                                        <div class="user-avatar xs"><span>7+</span></div>
                                    </div>
                                </div>
                                <div class="nk-tb-col text-end"><span>01
                                        Dec - 07
                                        Dec</span></div>
                            </div>
                            <div class="nk-tb-item">
                                <div class="nk-tb-col"><span class="tb-lead">Tree
                                        Plantation
                                        <span class="dot dot-warning d-sm-none ms-1"></span></span><span
                                        class="tb-sub">Created
                                        on 01 Jan
                                        23</span></div>
                                <div class="nk-tb-col tb-col-mb">
                                    <ul class="d-flex gx-1">
                                        <li class="text-twitter"><em class="icon ni ni-twitter"></em></li>
                                        <li class="text-instagram"><em class="icon ni ni-instagram"></em></li>
                                        <li class="text-linkedin"><em class="icon ni ni-linkedin"></em></li>
                                    </ul>
                                </div>
                                <div class="nk-tb-col tb-col-sm">
                                    <div class="badge badge-dim bg-warning">Paused</div>
                                </div>
                                <div class="nk-tb-col tb-col-md">
                                    <div class="user-avatar-group">
                                        <div class="user-avatar xs"><img src="images/avatar/k-sm.jpg" alt></div>
                                        <div class="user-avatar xs bg-pink"><span>AE</span>
                                        </div>
                                        <div class="user-avatar xs"><img src="images/avatar/e-sm.jpg" alt></div>
                                        <div class="user-avatar xs"><span>3+</span></div>
                                    </div>
                                </div>
                                <div class="nk-tb-col text-end"><span>01
                                        Dec - 07
                                        Dec</span></div>
                            </div>
                            <div class="nk-tb-item">
                                <div class="nk-tb-col"><span class="tb-lead">Getaway
                                        Trailer
                                        <span class="dot dot-success d-sm-none ms-1"></span></span><span
                                        class="tb-sub">Created
                                        on 12 Dec
                                        22</span></div>
                                <div class="nk-tb-col tb-col-mb">
                                    <ul class="d-flex gx-1">
                                        <li class="text-linkedin"><em class="icon ni ni-linkedin"></em></li>
                                        <li class="text-twitter"><em class="icon ni ni-twitter"></em></li>
                                        <li class="text-facebook"><em class="icon ni ni-facebook-f"></em></li>
                                        <li class="text-youtube"><em class="icon ni ni-youtube-fill"></em></li>
                                    </ul>
                                </div>
                                <div class="nk-tb-col tb-col-sm">
                                    <div class="badge badge-dim bg-success">Live
                                        Now</div>
                                </div>
                                <div class="nk-tb-col tb-col-md">
                                    <div class="user-avatar-group">
                                        <div class="user-avatar xs"><img src="images/avatar/i-sm.jpg" alt></div>
                                        <div class="user-avatar xs"><img src="images/avatar/k-sm.jpg" alt></div>
                                        <div class="user-avatar xs"><img src="images/avatar/e-sm.jpg" alt></div>
                                        <div class="user-avatar xs"><img src="images/avatar/g-sm.jpg" alt></div>
                                    </div>
                                </div>
                                <div class="nk-tb-col text-end"><span>01
                                        Dec - 07
                                        Dec</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-md-6">
                <div class="card card-full">
                    <div class="card-inner">
                        <div class="card-title-group">
                            <div class="card-title">
                                <h6 class="title">Key
                                    Statistics</h6>
                            </div>
                            <div class="card-tools me-n1 mt-n1">
                                <div class="dropdown"><a href="#"
                                        class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em
                                            class="icon ni ni-more-h"></em></a>
                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                        <ul class="link-list-opt no-bdr">
                                            <li><a href="#" class="active"><span>15
                                                        Days</span></a></li>
                                            <li><a href="#"><span>30
                                                        Days</span></a></li>
                                            <li><a href="#"><span>3
                                                        Months</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pt-0 card-inner">
                        <ul class="gy-4">
                            <li class="border-0 border-dashed border-bottom">
                                <div class="mb-1"><span class="mb-1 fs-2 lh-1 text-head">85.6K</span>
                                    <div class="sub-text">Average
                                        Like</div>
                                </div>
                                <div class="align-center">
                                    <div class="small text-primary me-2">54%</div>
                                    <div class="progress progress-md rounded-pill w-100 bg-primary-dim">
                                        <div class="progress-bar bg-primary rounded-pill" data-progress="54"></div>
                                    </div>
                                    <div class="dropdown ms-3"><a class="dropdown-toggle dropdown-indicator sub-text"
                                            href="#" type="button" data-bs-toggle="dropdown"
                                            data-bs-offset="0, 10">Dec
                                            22 - Feb
                                            22</a>
                                        <div class="text-right dropdown-menu dropdown-menu-end">
                                            <ul class="link-list-opt">
                                                <li><a href="#"><span>Dec
                                                            22
                                                            -
                                                            Feb
                                                            22</span></a></li>
                                                <li><a href="#"><span>Oct
                                                            22
                                                            -
                                                            Dec
                                                            22</span></a></li>
                                                <li><a href="#"><span>Aug
                                                            22
                                                            -
                                                            Oct
                                                            22</span></a></li>
                                                <li><a href="#"><span>Jun
                                                            22
                                                            -
                                                            Aug
                                                            22</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="border-0 border-dashed border-bottom">
                                <div class="mb-1"><span class="mb-1 fs-2 lh-1 text-head">42.7K</span>
                                    <div class="sub-text">Average
                                        Comments</div>
                                </div>
                                <div class="align-center">
                                    <div class="small text-danger me-2">84%</div>
                                    <div class="progress progress-md rounded-pill w-100 bg-danger-dim">
                                        <div class="progress-bar bg-danger rounded-pill" data-progress="84"></div>
                                    </div>
                                    <div class="dropdown ms-3"><a class="dropdown-toggle dropdown-indicator sub-text"
                                            href="#" type="button" data-bs-toggle="dropdown"
                                            data-bs-offset="0, 10">Dec
                                            22 - Feb
                                            22</a>
                                        <div class="text-right dropdown-menu dropdown-menu-end">
                                            <ul class="link-list-opt">
                                                <li><a href="#"><span>Dec
                                                            22
                                                            -
                                                            Feb
                                                            22</span></a></li>
                                                <li><a href="#"><span>Oct
                                                            22
                                                            -
                                                            Dec
                                                            22</span></a></li>
                                                <li><a href="#"><span>Aug
                                                            22
                                                            -
                                                            Oct
                                                            22</span></a></li>
                                                <li><a href="#"><span>Jun
                                                            22
                                                            -
                                                            Aug
                                                            22</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="mb-1"><span class="mb-1 fs-2 lh-1 text-head">25.4K</span>
                                    <div class="sub-text">Average
                                        Shares</div>
                                </div>
                                <div class="align-center">
                                    <div class="small text-success me-2">62%</div>
                                    <div class="progress progress-md rounded-pill w-100 bg-success-dim">
                                        <div class="progress-bar bg-success rounded-pill" data-progress="62"></div>
                                    </div>
                                    <div class="dropdown ms-3"><a class="dropdown-toggle dropdown-indicator sub-text"
                                            href="#" type="button" data-bs-toggle="dropdown"
                                            data-bs-offset="0, 10">Dec
                                            22 - Feb
                                            22</a>
                                        <div class="text-right dropdown-menu dropdown-menu-end">
                                            <ul class="link-list-opt">
                                                <li><a href="#"><span>Dec
                                                            22
                                                            -
                                                            Feb
                                                            22</span></a></li>
                                                <li><a href="#"><span>Oct
                                                            22
                                                            -
                                                            Dec
                                                            22</span></a></li>
                                                <li><a href="#"><span>Aug
                                                            22
                                                            -
                                                            Oct
                                                            22</span></a></li>
                                                <li><a href="#"><span>Jun
                                                            22
                                                            -
                                                            Aug
                                                            22</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-md-6">
                <div class="card card-full">
                    <div class="card-inner">
                        <div class="card-title-group">
                            <div class="card-title">
                                <h6 class="title">Instagram
                                    Campaign</h6>
                            </div>
                            <div class="card-tools">
                                <ul class="d-flex gx-2">
                                    <li><button class="btn btn-icon btn-sm btn-outline-light rounded-pill"><em
                                                class="icon ni ni-chevron-left"></em></button>
                                    </li>
                                    <li><button class="btn btn-icon btn-sm btn-outline-primary rounded-pill"><em
                                                class="icon ni ni-chevron-right"></em></button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="pt-0 card-inner">
                        <div class="px-2 py-4 rounded bg-primary">
                            <div class="d-flex">
                                <div class="px-4 w-50"><span class="mb-1 text-white fs-2 lh-1">24.6K</span>
                                    <div class="text-white text-opacity-75 fs-14px">New
                                        Followers</div>
                                </div>
                                <div class="opacity-50 border-start"></div>
                                <div class="px-4 w-50"><span class="mb-1 text-white fs-2 lh-1">120.0K</span>
                                    <div class="text-white text-opacity-75 fs-14px">Followers
                                        Goal</div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-3 nk-cmwg3-ck"><canvas class="campaign-line-chart-s3"
                                id="instagramCampaign"></canvas></div>
                        <div class="mt-0 chart-label-group ms-5">
                            <div class="chart-label">03
                                Jan</div>
                            <div class="chart-label d-none d-sm-block">10
                                Jan</div>
                            <div class="chart-label d-none d-sm-block">17
                                Jan</div>
                            <div class="chart-label d-none d-sm-block">24
                                Jan</div>
                            <div class="chart-label">31
                                Jan</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-md-6">
                <div class="card card-full">
                    <div class="card-inner">
                        <div class="card-title-group">
                            <div class="card-title">
                                <h6 class="title">Clicks
                                    by
                                    location</h6>
                            </div>
                            <div class="card-tools me-n1 mt-n1">
                                <div class="dropdown"><a href="#"
                                        class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em
                                            class="icon ni ni-more-h"></em></a>
                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                        <ul class="link-list-opt no-bdr">
                                            <li><a href="#" class="active"><span>15
                                                        Days</span></a></li>
                                            <li><a href="#"><span>30
                                                        Days</span></a></li>
                                            <li><a href="#"><span>3
                                                        Months</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pt-0 card-inner">
                        <ul class="my-n2">
                            <li class="justify-between py-1 border-0 border-dashed align-center gx-1 border-bottom">
                                <div class="lead-text">United
                                    States</div>
                                <div class="sub-text">14,356</div>
                            </li>
                            <li class="justify-between py-1 border-0 border-dashed align-center gx-1 border-bottom">
                                <div class="lead-text">Ireland</div>
                                <div class="sub-text">11,203</div>
                            </li>
                            <li class="justify-between py-1 border-0 border-dashed align-center gx-1 border-bottom">
                                <div class="lead-text">United
                                    Kingdom</div>
                                <div class="sub-text">10,653</div>
                            </li>
                            <li class="justify-between py-1 border-0 border-dashed align-center gx-1 border-bottom">
                                <div class="lead-text">Canada</div>
                                <div class="sub-text">7,215</div>
                            </li>
                            <li class="justify-between py-1 border-0 border-dashed align-center gx-1 border-bottom">
                                <div class="lead-text">Australia</div>
                                <div class="sub-text">6,653</div>
                            </li>
                            <li class="justify-between py-1 border-0 border-dashed align-center gx-1 border-bottom">
                                <div class="lead-text">Japan</div>
                                <div class="sub-text">3,945</div>
                            </li>
                            <li class="justify-between py-1 border-0 border-dashed align-center gx-1 border-bottom">
                                <div class="lead-text">China</div>
                                <div class="sub-text">2,945</div>
                            </li>
                            <li class="justify-between py-1 align-center gx-1">
                                <div class="lead-text">France</div>
                                <div class="sub-text">954</div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-md-6">
                <div class="card card-full">
                    <div class="card-inner">
                        <div class="card-title-group">
                            <div class="card-title">
                                <h6 class="title">Web
                                    conv.
                                    rate</h6>
                            </div>
                            <div class="card-tools me-n1 mt-n1">
                                <div class="dropdown"><a href="#"
                                        class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em
                                            class="icon ni ni-more-h"></em></a>
                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                        <ul class="link-list-opt no-bdr">
                                            <li><a href="#" class="active"><span>15
                                                        Days</span></a></li>
                                            <li><a href="#"><span>30
                                                        Days</span></a></li>
                                            <li><a href="#"><span>3
                                                        Months</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pt-0 card-inner">
                        <div class><span class="mb-1 fs-2 lh-1 text-head">3.86%</span>
                            <div class="fs-14px">This
                                month</div>
                        </div>
                        <div class="mt-4 nk-cmwg4-ck"><canvas class="campaign-line-chart-s3"
                                id="webConvRate"></canvas></div>
                        <div class="mt-0 chart-label-group ms-5">
                            <div class="chart-label">Jan</div>
                            <div class="chart-label d-none d-sm-block">Feb</div>
                            <div class="chart-label d-none d-sm-block">Mar</div>
                            <div class="chart-label d-none d-sm-block">Apr</div>
                            <div class="chart-label d-none d-sm-block">May</div>
                            <div class="chart-label">Jun</div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</x-admin-layout>
