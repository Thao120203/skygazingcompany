<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="#" class="app-brand-link">
            <i class="bx bxs-school"></i>
            <span class="app-brand-text demo menu-text fw-bolder ms-2">APTECH</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        {{-- <li class="menu-item">
            <a href="#" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li> --}}

        <!-- Layouts -->
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class=" bx bx-user"></i>
                <div data-i18n="Layouts">Members</div>
            </a>

            <ul class="menu-sub">
                <li class="">
                    <a href="{{route('admin.member.index')}}" class="menu-link">
                        <i class="bx bx-list-ul"></i>
                        <div data-i18n="Without menu">List Members</div>
                    </a>
                </li>
                <li class="" >
                    <a href="{{route('admin.member.create')}}" class="menu-link">
                        <i class="bx bx-list-plus"></i>
                        <div data-i18n="Without navbar">Create Members</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i  class=" bx bx-planet "></i>
                <div data-i18n="Layouts">Astronomical Entity</div>
            </a>

            <ul class="menu-sub">
                <li class="">
                    <a href="{{route('admin.astronomicalentity.index')}}" class="menu-link">
                        <i class="bx bx-list-ul"></i>
                        <div data-i18n="Without menu">List Astronomical Entity</div>
                    </a>
                </li>
                <li class="" >
                    <a href="{{route('admin.astronomicalentity.create')}}" class="menu-link">
                        <i class="bx bx-list-plus"></i>
                        <div data-i18n="Without navbar">Create Astronomical Entity</div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i animation="spin" class=" bx bx-atom bx-spin"></i>
                <div data-i18n="Layouts">Solar System</div>
            </a>

            <ul class="menu-sub">
                <li class="">
                    <a href="{{route('admin.ss.index')}}" class="menu-link">
                        <i class="bx bx-list-ul"></i>
                        <div data-i18n="Without menu">List Solar System</div>
                    </a>
                </li>
                <li class="" >
                    <a href="{{route('admin.ss.create')}}" class="menu-link">
                        <i class="bx bx-list-plus"></i>
                        <div data-i18n="Without navbar">Create Solar System</div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class=" bx bx-shape-polygon bx-rotate-270"></i>
                <div data-i18n="Layouts">Constellation</div>
            </a>

            <ul class="menu-sub">
                <li class="">
                    <a href="{{route('admin.constellation.index')}}" class="menu-link">
                        <i class="bx bx-list-ul"></i>
                        <div data-i18n="Without menu">List Constellation</div>
                    </a>
                </li>
                <li class="" >
                    <a href="{{route('admin.constellation.create')}}" class="menu-link">
                        <i class="bx bx-list-plus"></i>
                        <div data-i18n="Without navbar">Create Constellation</div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="bx bxs-binoculars"></i>
                <div data-i18n="Layouts">Observatory</div>
            </a>

            <ul class="menu-sub">
                <li class="">
                    <a href="{{route('admin.observatory.index')}}" class="menu-link">
                        <i class="bx bx-list-ul"></i>
                        <div data-i18n="Without menu">List Observatory</div>
                    </a>
                </li>
                <li class="" >
                    <a href="{{route('admin.observatory.create')}}" class="menu-link">
                        <i class="bx bx-list-plus"></i>
                        <div data-i18n="Without navbar">Create Observatory</div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class=" bx bx-news"></i>
                <div data-i18n="Layouts">News</div>
            </a>

            <ul class="menu-sub">
                <li class="">
                    <a href="{{route('admin.news.index')}}" class="menu-link">
                        <i class="bx bx-list-ul"></i>
                        <div data-i18n="Without menu">List News</div>
                    </a>
                </li>
                <li class="" >
                    <a href="{{route('admin.news.create')}}" class="menu-link">
                        <i class="bx bx-list-plus"></i>
                        <div data-i18n="Without navbar">Create News</div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="bx bx-meteor"></i>
                <div data-i18n="Layouts">Comet</div>
            </a>

            <ul class="menu-sub">
                <li class="">
                    <a href="{{route('admin.comet.index')}}" class="menu-link">
                        <i class="bx bx-list-ul"></i>
                        <div data-i18n="Without menu">List Comet</div>
                    </a>
                </li>
                <li class="" >
                    <a href="{{route('admin.comet.create')}}" class="menu-link">
                        <i class="bx bx-list-plus"></i>
                        <div data-i18n="Without navbar">Create Comet</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="{{route('admin.contact.index')}}" class="menu-link">
                <i class='bx bxs-contact'></i>
                <div data-i18n="Layouts">Contact</div>
            </a>

        </li>
        <li class="menu-item">
            <a href="{{Route('admin.cart.index')}}" class="menu-link">
                <i class='bx bx-cart-alt' ></i>
                <div data-i18n="Layouts">Cart</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{Route('home')}}" class="menu-link">
                <i class='bx bx-arrow-back'></i>
                <div data-i18n="Layouts">Back to Home</div>
            </a>
        </li>
    </ul>
</aside>
