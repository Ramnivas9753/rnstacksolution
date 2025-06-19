@php
    $current_route = request()->route()->getName();
    $currenturl = url()->full();
    $baseUrl = request()->root();
@endphp

<!--**********************************
    Sidebar start
***********************************-->
<div class="deznav">
    <div class="deznav-scroll">
        <ul class="metismenu" id="menu">
            @if(checkAccess('1'))
            <li>
                <a href="{{ route('admin.dashboard') }}" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-networking"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>
            @endif
                
            @if(checkAccess('5') || checkAccess('6') || checkAccess('7'))
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-settings-2"></i>
                    <span class="nav-text">Settings Manage</span>
                </a>
                <ul aria-expanded="false">
                    @if(checkAccess('5'))
                    <li><a href="{{ route('admin.business_setting') }}">Bussiness Setting</a></li>
                    <li><a href="{{ route('admin.about_setting') }}">About Setting</a></li>
                    @endif
                </ul>
            </li>
            @endif

            @if(checkAccess('19'))
            <li><a href="{{ route('admin.slider') }}" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-television"></i>
                    <span class="nav-text">Home Video</span>
                </a>
            </li>
            @endif

            {{-- @if(checkAccess('22')) --}}
            <li>
                <a href="{{ route('admin.services') }}" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-network"></i>
                    <span class="nav-text">Our Services</span>
                </a>
            </li>
            {{-- @endif --}}
            
            {{-- @if(checkAccess('22')) --}}
            <li>
                <a href="{{ route('admin.testimonial') }}" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-network"></i>
                    <span class="nav-text">Our Team</span>
                </a>
            </li>
            {{-- @endif --}}
            
            <li>
                <a href="{{ route('admin.blog') }}" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-internet"></i>
                    <span class="nav-text">Blogs</span>
                </a>
            </li>

            <li>
                <a href="{{ route('admin.product') }}" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-internet"></i>
                    <span class="nav-text">Careers</span>
                </a>
            </li>
            
            
            @if(checkAccess('20'))
            <li>
                <a href="{{ route('admin.feature') }}" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-internet"></i>
                    <span class="nav-text">About Facilities</span>
                </a>
            </li>
            @endif
            
            @if(checkAccess('14'))
            <li>
                <a href="{{ route('admin.gallery') }}" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-notepad"></i>
                    <span class="nav-text">Gallery</span>
                </a>
            </li>
            @endif
            @if(checkAccess('16'))
            <li>
                <a href="{{ route('admin.contact') }}" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-notepad"></i>
                    <span class="nav-text">Invest Enquiry</span>
                </a>
            </li>
            @endif

            <li>
                <a href="{{ route('admin.productEnquiry') }}" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-notepad"></i>
                    <span class="nav-text">Product Enquiry</span>
                </a>
            </li>

            @if(checkAccess('24'))
            <li><a href="{{ route('admin.seo') }}" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-settings-2"></i>
                    <span class="nav-text">SEO</span>
                </a>
            </li>
            @endif
        </ul>
    </div>
</div>
<!--**********************************
    Sidebar end
***********************************-->

