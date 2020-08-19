<!--begin:: Widgets/Personal Income -->
<div class="m-portlet m-portlet--head-overlay m-portlet--full-height  m-portlet--rounded-force">
    <div class="m-portlet__head m-portlet__head--fit-">
        <div class="m-portlet__head-caption">
            <div class="m-portlet__head-title">
                <h3 class="m-portlet__head-text m--font-light">
                   
                </h3>
            </div>
        </div>
        <div class="m-portlet__head-tools">
            <ul class="m-portlet__nav">
                <li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push"
                    m-dropdown-toggle="hover">
                    <a href="#"
                       class="m-portlet__nav-link m-dropdown__toggle dropdown-toggle btn btn--sm m-btn--pill m-btn btn-outline-light m-btn--hover-light">
                        January
                    </a>
                    <div class="m-dropdown__wrapper">
                        <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                        <div class="m-dropdown__inner">
                            <div class="m-dropdown__body">
                                <div class="m-dropdown__content">
                                    <ul class="m-nav">
                                       
                                        <li class="m-nav__item">
                                            <a href="" class="m-nav__link">
                                                {{-- <i class="m-nav__link-icon flaticon-share"></i> --}}
                                                <span class="m-nav__link-text">February</span>
                                            </a>
                                        </li>
                                        <li class="m-nav__item">
                                            <a href="" class="m-nav__link">
                                                {{-- <i class="m-nav__link-icon flaticon-chat-1"></i> --}}
                                                <span class="m-nav__link-text">March</span>
                                            </a>
                                        </li>
                                        <li class="m-nav__item">
                                            <a href="" class="m-nav__link">
                                                {{-- <i class="m-nav__link-icon flaticon-info"></i> --}}
                                                <span class="m-nav__link-text">April</span>
                                            </a>
                                        </li>
                                        <li class="m-nav__item">
                                            <a href="" class="m-nav__link">
                                                {{-- <i class="m-nav__link-icon flaticon-lifebuoy"></i> --}}
                                                <span class="m-nav__link-text">May</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="m-portlet__body">
        <div class="m-widget27 m-portlet-fit--sides">
            <div class="m-widget27__pic">
                <img src="{{asset('assets/app/media/img//bg/bg-7.jpg')}}" alt="">
                <h3 class="m-widget27__title m--font-light">
                    <span>

                        {{-- 0 {{ $showCounts }}  --}}

                        <h2>Tender Closing Date</h2>
                    </span>
                </h3>
               
            </div>
            <div class="m-widget27__container">
                <!-- begin::Nav pills -->
              
                <!-- end::Nav pills -->

                <!-- begin::Tab Content -->
                <div class="m-widget27__tab tab-content m-widget27--no-padding">
                    <div id="m_personal_income_quater_1" class="tab-pane active">
                        <div class="row  align-items-center">
                            {{-- <div class="col">
                                 <div id="m_chart_personal_income_quater_1"
                                class="m-widget27__chart" style="height: 160px">
                               <div class="m-widget27__stat"><h1 style="color:Tomato;"> 0 {{ $showCounts }}</h1>
                             </div>
                           </div> --}}
                               
                    <p style="font-size:20px"><span><p style="font-size:20px"> {{ $closing_dates }}
                    </p></span></p>
                                </div>
                            </div>
                            {{-- <div class="col">
                                <div class="m-widget27__legends">
                                    <div class="m-widget27__legend">
                                        <span class="m-widget27__legend-bullet m--bg-accent"></span>
                                        <span class="m-widget27__legend-text">37% Case</span>
                                    </div>
                                    <div class="m-widget27__legend">
                                        <span class="m-widget27__legend-bullet m--bg-warning"></span>
                                        <span class="m-widget27__legend-text">42% Events</span>
                                    </div>
                                    <div class="m-widget27__legend">
                                        <span class="m-widget27__legend-bullet m--bg-brand"></span>
                                        <span class="m-widget27__legend-text">19% Others</span>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                    <div id="m_personal_income_quater_2" class="tab-pane fade">
                        <div class="row  align-items-center">
                            <div class="col">
                                <div id="m_chart_personal_income_quater_2"
                                     class="m-widget27__chart" style="height: 160px">
                                    <div class="m-widget27__stat">70</div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="m-widget27__legends">
                                    <div class="m-widget27__legend">
                                        <span class="m-widget27__legend-bullet m--bg-focus"></span>
                                        <span class="m-widget27__legend-text">57% Case</span>
                                    </div>
                                    <div class="m-widget27__legend">
                                        <span class="m-widget27__legend-bullet m--bg-success"></span>
                                        <span class="m-widget27__legend-text">20% Events</span>
                                    </div>
                                    <div class="m-widget27__legend">
                                        <span class="m-widget27__legend-bullet m--bg-danger"></span>
                                        <span class="m-widget27__legend-text">19% Others</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="m_personal_income_quater_3" class="tab-pane fade">
                        <div class="row  align-items-center">
                            <div class="col">
                                <div id="m_chart_personal_income_quater_3"
                                     class="m-widget27__chart" style="height: 160px">
                                    <div class="m-widget27__stat">67</div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="m-widget27__legends">
                                    <div class="m-widget27__legend">
                                        <span class="m-widget27__legend-bullet m--bg-info"></span>
                                        <span class="m-widget27__legend-text">47% Case</span>
                                    </div>
                                    <div class="m-widget27__legend">
                                        <span class="m-widget27__legend-bullet m--bg-danger"></span>
                                        <span class="m-widget27__legend-text">55% Events</span>
                                    </div>
                                    <div class="m-widget27__legend">
                                        <span class="m-widget27__legend-bullet m--bg-brand"></span>
                                        <span class="m-widget27__legend-text">27% Others</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="m_personal_income_quater_4" class="tab-pane fade">
                        <div class="row  align-items-center">
                            <div class="col">
                                <div id="m_chart_personal_income_quater_4"
                                     class="m-widget27__chart" style="height: 160px">
                                    <div class="m-widget27__stat">77</div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="m-widget27__legends">
                                    <div class="m-widget27__legend">
                                        <span class="m-widget27__legend-bullet m--bg-warning"></span>
                                        <span class="m-widget27__legend-text">37% Case</span>
                                    </div>
                                    <div class="m-widget27__legend">
                                        <span class="m-widget27__legend-bullet m--bg-primary"></span>
                                        <span class="m-widget27__legend-text">65% Events</span>
                                    </div>
                                    <div class="m-widget27__legend">
                                        <span class="m-widget27__legend-bullet m--bg-danger"></span>
                                        <span class="m-widget27__legend-text">33% Others</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end::Tab Content -->
            </div>
        </div>
    </div>
</div>
<!--end:: Widgets/Personal Income -->