<!--begin:: Widgets/Finance Stats -->
<div class="m-portlet m-portlet--head-overlay m-portlet--full-height   m-portlet--rounded-force">
    <div class="m-portlet__head m-portlet__head--fit">
        <div class="m-portlet__head-caption">
            <div class="m-portlet__head-title">
                <h3 class="m-portlet__head-text m--font-light">
                    <p style="color:rgba(3, 5, 37, 0.952)"> 
                        {{-- Finance stats --}}
                        Recent Tender List
                    </p>
                </h3>
            </div>
        </div>
        <div class="m-portlet__head-tools">
            <ul class="m-portlet__nav">
                <li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push"
                    m-dropdown-toggle="hover">
                    <a href="#"
                       class="m-portlet__nav-link m-dropdown__toggle dropdown-toggle btn btn--sm m-btn--pill m-btn btn-outline-light m-btn--hover-light">
                        2020
                    </a>
                    <div class="m-dropdown__wrapper">
                        <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                        <div class="m-dropdown__inner">
                            <div class="m-dropdown__body">
                                <div class="m-dropdown__content">
                                    <ul class="m-nav">
                                        <li class="m-nav__section m-nav__section--first">
                                            <span class="m-nav__section-text">Reports</span>
                                        </li>
                                        <li class="m-nav__item">
                                            <a href="" class="m-nav__link">
                                                <i class="m-nav__link-icon flaticon-share"></i>
                                                <span class="m-nav__link-text">Activity</span>
                                            </a>
                                        </li>
                                        <li class="m-nav__item">
                                            <a href="" class="m-nav__link">
                                                <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                <span class="m-nav__link-text">Messages</span>
                                            </a>
                                        </li>
                                        <li class="m-nav__item">
                                            <a href="" class="m-nav__link">
                                                <i class="m-nav__link-icon flaticon-info"></i>
                                                <span class="m-nav__link-text">FAQ</span>
                                            </a>
                                        </li>
                                        <li class="m-nav__item">
                                            <a href="" class="m-nav__link">
                                                <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                <span class="m-nav__link-text">Support</span>
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
        <div class="m-widget28">
            
            <div class="m-widget28__pic m-portlet-fit--sides"></div>
            <div class="m-widget28__container">
               
                <!-- begin::Nav pills -->
                <ul class="m-widget28__nav-items" >
                    
                        <h3 class="m-widget27__title m--font-light">
                            <span>
                                Recent Tender List
                                   {{-- <h6>{{ $upcoming_dates }} </h6> --}}
        
                            </span>
                        </h3>
                    
                    
                </ul>
                <!-- end::Nav pills -->

                <!-- begin::Tab Content -->
                <div class="m-widget28__tab tab-content">
                    <div id="menu11" class="m-widget28__tab-container tab-pane active">
                        <div class="m-widget28__tab-items">
                            {{-- <div class="m-widget28__tab-item">
                                <span>Company Name</span>
                                <span>{{ $upcoming_names }}</span>
                            </div> --}}
                            <div class="m-widget28__tab-item">
                                {{-- <span>@foreach($tenders as $tender)
                                <option 
                                     value="{{ $tender->id }}">{{ $tender->name }}</option> 
                                            @endforeach</span> --}}
                                            
                                            <span><p style="font-size:15px">@foreach($tenders as $tender)
                                                <option 
                                                   value="{{ $tender->id }}">{{ $tender->name }}
                                                   {{-- :  {{ $tender->publication_date }} --}}
                                                </option> 
                                                   @endforeach
                                            </p></span>
                                       
                            </div>
                            {{-- <div class="m-widget28__tab-item">
                                <span>{{$showName}}</span>
                                <span>USD 1,250.000</span>
                            </div> --}}
                            {{-- <div class="m-widget28__tab-item">
                                <span>Project Description</span>
                                <span>Creating Back-end Components</span>
                            </div> --}}
                        </div>
                    </div>
                    <div id="menu21" class="m-widget28__tab-container tab-pane fade">
                        <div class="m-widget28__tab-items">
                            <div class="m-widget28__tab-item">
                                <span>Project Description</span>
                                <span>Back-End Web Architecture</span>
                            </div>
                            <div class="m-widget28__tab-item">
                                <span>Total Charges</span>
                                <span>USD 2,170.000</span>
                            </div>
                            <div class="m-widget28__tab-item">
                                <span>INE Number</span>
                                <span>D110-1234562546</span>
                            </div>
                            <div class="m-widget28__tab-item">
                                <span>Company Name</span>
                                <span>SLT Back-end Solutions</span>
                            </div>
                        </div>
                    </div>
                    <div id="menu31" class="m-widget28__tab-container tab-pane fade">
                        <div class="m-widget28__tab-items">
                            <div class="m-widget28__tab-item">
                                <span>Total Charges</span>
                                <span>USD 3,450.000</span>
                            </div>
                            <div class="m-widget28__tab-item">
                                <span>Project Description</span>
                                <span>Creating Back-end Components</span>
                            </div>
                            <div class="m-widget28__tab-item">
                                <span>Company Name</span>
                                <span>SLT Back-end Solutions</span>
                            </div>
                            <div class="m-widget28__tab-item">
                                <span>INE Number</span>
                                <span>D510-7431562548</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end::Tab Content -->
            </div>
        </div>
    </div>
</div>
<!--end:: Widgets/Finance Stats -->