@extends('layouts.master')

@section('content')
    <!-- ======= Hero Slider Section ======= -->
    <section id="hero-slider" class="hero-slider">
        <div class="container-md" data-aos="fade-in">
            <div class="row">
                <div class="col-12">
                    <div class="swiper sliderFeaturedPosts">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a href="/MVCOOP/post/{{$postHot['id']}}" class="img-bg d-flex align-items-end"
                                    style="
                                                background-image: url('/MVCOOP/assets/client/assets/img/post-slide-1.jpg');
                                            ">
                                    <div class="img-bg-inner">
                                        <h2>
                                            The Best Homemade Masks for
                                            Face (keep the Pimples Away)
                                        </h2>
                                        <p>
                                            Lorem ipsum dolor sit amet,
                                            consectetur adipisicing
                                            elit. Quidem neque est
                                            mollitia! Beatae minima
                                            assumenda repellat harum
                                            vero, officiis ipsam magnam
                                            obcaecati cumque maxime
                                            inventore repudiandae quidem
                                            necessitatibus rem atque.
                                        </p>
                                    </div>
                                </a>
                            </div>

                            <div class="swiper-slide">
                                <a href="/MVCOOP/post/{{$postHot['id']}}" class="img-bg d-flex align-items-end"
                                    style="
                                                background-image: url('/MVCOOP/assets/client/assets/img/post-slide-2.jpg');
                                            ">
                                    <div class="img-bg-inner">
                                        <h2>
                                            17 Pictures of Medium Length
                                            Hair in Layers That Will
                                            Inspire Your New Haircut
                                        </h2>
                                        <p>
                                            Lorem ipsum dolor sit amet,
                                            consectetur adipisicing
                                            elit. Quidem neque est
                                            mollitia! Beatae minima
                                            assumenda repellat harum
                                            vero, officiis ipsam magnam
                                            obcaecati cumque maxime
                                            inventore repudiandae quidem
                                            necessitatibus rem atque.
                                        </p>
                                    </div>
                                </a>
                            </div>

                            <div class="swiper-slide">
                                <a href="/MVCOOP/post/{{$postHot['id']}}" class="img-bg d-flex align-items-end"
                                    style="
                                                background-image: url('/MVCOOP/assets/client/assets/img/post-slide-3.jpg');
                                            ">
                                    <div class="img-bg-inner">
                                        <h2>
                                            13 Amazing Poems from Shel
                                            Silverstein with Valuable
                                            Life Lessons
                                        </h2>
                                        <p>
                                            Lorem ipsum dolor sit amet,
                                            consectetur adipisicing
                                            elit. Quidem neque est
                                            mollitia! Beatae minima
                                            assumenda repellat harum
                                            vero, officiis ipsam magnam
                                            obcaecati cumque maxime
                                            inventore repudiandae quidem
                                            necessitatibus rem atque.
                                        </p>
                                    </div>
                                </a>
                            </div>

                            <div class="swiper-slide">
                                <a href="/MVCOOP/post/{{$postHot['id']}}" class="img-bg d-flex align-items-end"
                                    style="
                                                background-image: url('/MVCOOP/assets/client/assets/img/post-slide-4.jpg');
                                            ">
                                    <div class="img-bg-inner">
                                        <h2>
                                            9 Half-up/half-down
                                            Hairstyles for Long and
                                            Medium Hair
                                        </h2>
                                        <p>
                                            Lorem ipsum dolor sit amet,
                                            consectetur adipisicing
                                            elit. Quidem neque est
                                            mollitia! Beatae minima
                                            assumenda repellat harum
                                            vero, officiis ipsam magnam
                                            obcaecati cumque maxime
                                            inventore repudiandae quidem
                                            necessitatibus rem atque.
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="custom-swiper-button-next">
                            <span class="bi-chevron-right"></span>
                        </div>
                        <div class="custom-swiper-button-prev">
                            <span class="bi-chevron-left"></span>
                        </div>

                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero Slider Section -->

    <!-- ======= Post Grid Section ======= -->
    <section id="posts" class="posts">
        <div class="container" data-aos="fade-up">
            <div class="row g-5">
                <div class="col-lg-4">
                    <div class="post-entry-1 lg">
                        <a href="/MVCOOP/post/{{$postHot['id']}}"><img src="/MVCOOP/{{ $postHot['image'] }}" alt=""
                                class="img-fluid" /></a>
                        <div class="post-meta">
                            <span class="date">{{ $postHot['c.name'] }}</span>
                            <span class="mx-1">&bullet;</span>
                            <span>Jul 5th '22</span>
                        </div>
                        <h2>
                            <a href="/MVCOOP/post/{{$postHot['id']}}">{{ $postHot['title'] }}</a>
                        </h2>
                        <p class="mb-4 d-block">
                            {{ $postHot['excerpt'] }}
                        </p>

                        <div class="d-flex align-items-center author">
                            <div class="photo">
                                <img src="/MVCOOP/assets/client/assets/img/person-1.jpg" alt="" class="img-fluid" />
                            </div>
                            <div class="name">
                                <h3 class="m-0 p-0">
                                    Cameron Williamson
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="row g-5">
                        @foreach ($postTop6Chunk as $item)
                            <div class="col-lg-4     border-start custom-border">
                                @foreach ($item as $post)
                                    @include('components.post-entry-1', ['post' => $post])
                                @endforeach
                            </div>
                        @endforeach
                        {{-- <div class="col-lg-6 border-start custom-border">
                            <div class="post-entry-1">
                                <a href="/MVCOOP/post/{{$postHot['id']}}"><img src="/MVCOOP/assets/client/assets/img/post-landscape-3.jpg"
                                        alt="" class="img-fluid" /></a>
                                <div class="post-meta">
                                    <span class="date">Business</span>
                                    <span class="mx-1">&bullet;</span>
                                    <span>Jul 5th '22</span>
                                </div>
                                <h2>
                                    <a href="/MVCOOP/post/{{$postHot['id']}}">6 Easy Steps To Create Your Own
                                        Cute Merch For Instagram</a>
                                </h2>
                            </div>
                            <div class="post-entry-1">
                                <a href="/MVCOOP/post/{{$postHot['id']}}"><img src="/MVCOOP/assets/client/assets/img/post-landscape-6.jpg"
                                        alt="" class="img-fluid" /></a>
                                <div class="post-meta">
                                    <span class="date">Tech</span>
                                    <span class="mx-1">&bullet;</span>
                                    <span>Mar 1st '22</span>
                                </div>
                                <h2>
                                    <a href="/MVCOOP/post/{{$postHot['id']}}">10 Life-Changing Hacks Every
                                        Working Mom Should Know</a>
                                </h2>
                            </div>
                            <div class="post-entry-1">
                                <a href="/MVCOOP/post/{{$postHot['id']}}"><img
                                        src="/MVCOOP/assets/client/assets/img/post-landscape-8.jpg" alt=""
                                        class="img-fluid" /></a>
                                <div class="post-meta">
                                    <span class="date">Travel</span>
                                    <span class="mx-1">&bullet;</span>
                                    <span>Jul 5th '22</span>
                                </div>
                                <h2>
                                    <a href="/MVCOOP/post/{{$postHot['id']}}">5 Great Startup Tips for Female
                                        Founders</a>
                                </h2>
                            </div>
                        </div> --}}

                        <!-- Trending Section -->
                        <div class="col-lg-4">
                            <div class="trending">
                                <h3>Trending</h3>
                                <ul class="trending-post">
                                    <li>
                                        <a href="/MVCOOP/post/{{$postHot['id']}}">
                                            <span class="number">1</span>
                                            <h3>
                                                The Best Homemade Masks
                                                for Face (keep the
                                                Pimples Away)
                                            </h3>
                                            <span class="author">Jane Cooper</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/MVCOOP/post/{{$postHot['id']}}">
                                            <span class="number">2</span>
                                            <h3>
                                                17 Pictures of Medium
                                                Length Hair in Layers
                                                That Will Inspire Your
                                                New Haircut
                                            </h3>
                                            <span class="author">Wade Warren</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/MVCOOP/post/{{$postHot['id']}}">
                                            <span class="number">3</span>
                                            <h3>
                                                13 Amazing Poems from
                                                Shel Silverstein with
                                                Valuable Life Lessons
                                            </h3>
                                            <span class="author">Esther Howard</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/MVCOOP/post/{{$postHot['id']}}">
                                            <span class="number">4</span>
                                            <h3>
                                                9 Half-up/half-down
                                                Hairstyles for Long and
                                                Medium Hair
                                            </h3>
                                            <span class="author">Cameron
                                                Williamson</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/MVCOOP/post/{{$postHot['id']}}">
                                            <span class="number">5</span>
                                            <h3>
                                                Life Insurance And
                                                Pregnancy: A Working
                                                Mom’s Guide
                                            </h3>
                                            <span class="author">Jenny Wilson</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Trending Section -->
                    </div>
                </div>
            </div>
            <!-- End .row -->
        </div>
    </section>
    <!-- End Post Grid Section -->
@endsection
