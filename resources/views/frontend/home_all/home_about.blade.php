@php 

  $homeabout = App\Models\About::latest()->first();
  $allMultiImage = App\Models\MultiImage::all();

@endphp
<section id="aboutSection" class="about">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <ul class="about__icons__wrap">
                    {{-- Adding all the images --}}
                    @foreach($allMultiImage as $item)
                    <li>
                        <img class="light" src="{{ asset($item->multi_image)}} " alt="XD">
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-lg-6">
                <div class="about__content">
                    <div class="section__title">
                        <span class="sub-title">01 - About me</span>
                        <h2 class="title">{{ $homeabout->title }}</h2>
                    </div>
                    <div class="about__exp">
                        <div class="about__exp__icon">
                            <img src="{{ asset('frontend/assets/img/icons/about_icon.png') }}" alt="">
                        </div>
                        <div class="about__exp__content">
                            <p>{{ $homeabout->short_title }}</p>
                        </div>
                    </div>
                    <p class="desc">{{$homeabout->short_description }}</p>
                    {{-- <a href="{{ asset('upload/resume/Evnagelos_ilias_PHP_CV.pdf') }}" class="btn" target="_blank">Download my resume</a> --}}
                    <a href="{{ $homeabout->about_resume }}" class="btn" target="_blank">Download my resume</a>
                </div>
            </div>
        </div>
    </div>
</section>