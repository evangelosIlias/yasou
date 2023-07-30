@php 

  $homeTechnologies = App\Models\Technologies::latest()->first();
  $allTechMultiImage = App\Models\TechMutliImage::all();

@endphp

<section class="partner">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <ul class="partner__logo__wrap">
                    {{-- Adding all the images --}}
                    @foreach($allTechMultiImage as $item)
                    <li>
                        <img class="light" src="{{ asset($item->tech_multi_image)}} " alt="XD">
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-lg-6">
                <div class="about__content">
                    <div class="section__title">
                        <span class="sub-title">05 - Technologies</span>
                        <h2 class="title">{{ $homeTechnologies->tech_title}}</h2>
                    </div>
                    <div class="about__exp">
                        <div class="about__exp__icon">
                            <img src="{{ asset('frontend/assets/img/icons/about_icon.png') }}" alt="">
                        </div>
                        <div class="about__exp__content">
                            <p>{{ $homeTechnologies->tech_short_title }}</p>
                        </div>
                    </div>
                    <p class="desc">{{ $homeTechnologies->tech_short_description }}</p>
                    <a href="{{ route('technologies.page') }}" class="btn">Check here</a>
                </div>
            </div>
        </div>
    </div>
</section>