<section class="section-hero-shape" data-offset-top="#header-main" style="padding-top: 147.188px;">
    <div class="section-inside bg-section-agris"></div>

    <!-- SVG illustration -->
    <div class="mt--6 position-absolute middle right-0 col-lg-7 col-xl-6 d-none d-lg-block">
        <img class="img-fluid mb-lg-6 mb-0 p-6" srcs="{{ asset('agris') }}/hero.svg" src="https://demo.themesberg.com/leaf/assets/img/forest.svg" />
    </div>

  

    <!-- Hero container -->
    <div class="container py-5 pt-lg-6 d-flex align-items-center position-relative zindex-100">
        <div class="col">
            @if (session('status'))
            <div class="row">
                <div class="col-8">
                    <div class="mb-4">
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('status') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            @endif

            <div class="row">
                  <div class="col-lg-5 col-xl-6 text-center text-lg-left">
                    <div class=" mb-4">
                        <div class="alert alert-hero" role="alert">
                            @if(auth()->user()&&auth()->user()->hasRole('admin'))
                            <div class="ckedit" key="hot" id="hot">
                                {{ __('whatsapp.hero_badge_type') }}
                            </div>
                            <div class="ckedit" key="hero_badge" id="hero_badge">{{ __('whatsapp.hero_badge') }}</div>
                            @else
                            <span class="badge badge-success badge-pill alert-badge">
                                {{ __('whatsapp.hero_badge_type') }}
                            </span>
                            <span class="alert_content"> {{ __('whatsapp.hero_badge') }}</span>
                            @endif
                        </div>
                    </div>
                  <div>
                  <h2 class=" mb-4 ">
                            <div class="display-4 font-weight-light ckedit" key="hero_title" id="hero_title">
                                {{ __('whatsapp.hero_title') }}</div>
                            <div class="d-block ckedit" key="hero_subtitle" id="hero_subtitle">
                                {{ __('whatsapp.hero_subtitle') }}</div>
                        </h2>
                        <p class="lead  ckedit" key="hero_description" id="hero_description">
                            {{ __('whatsapp.hero_description') }}</p>
                        <div class="mt-5">
                            @if(auth()->user()&&auth()->user()->hasRole('admin'))
                            <div class="ckedit btn btn-icon btn-white rounded-pill" key="start_now" id="start_now">
                                {{ __('whatsapp.start_now') }}</div>
                            <div class="btn btn-icon rounded-pill btn-outline-white" key="see_demo" id="see_demo">
                                {{ __('whatsapp.see_demo') }}</div>
                            @else
                            <button type="button" class="btn btn-icon btn-white rounded-pill" data-toggle="modal"
                                data-target="#modal-register">
                                <span class="btn-inner--text">{{ __('whatsapp.start_now') }}</span>
                                <span class="btn-inner--icon"><i class="fas fa-angle-right"></i></span>
                            </button>

                            <a href="/#demo" class="btn btn-icon rounded-pill btn-outline" type="button">
                                <span class="btn-inner--icon"><i class="fas fa-angle-right"></i></span>
                                <span class="btn-inner--text">{{ __('whatsapp.see_demo')}}</span>
                            </a>

                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
