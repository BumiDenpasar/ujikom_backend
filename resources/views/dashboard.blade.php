<x-app-layout>


    <div class="py-12">
        <div class="backdrop-1">
            <svg width="238" height="255" viewBox="0 0 238 255" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g filter="url(#filter0_d_191_290)">
                    <path
                        d="M124.685 243.749C99.7526 251.966 72.7113 239.501 62.7643 215.207L8.1267 81.7613C-2.10845 56.7633 9.36155 28.1555 34.0311 17.1521L62.1499 4.61035C73.8938 -0.627791 87.2045 -1.13985 99.3161 3.18056L189.599 35.3858C202.468 39.9764 212.898 49.6335 218.464 62.1119L229.259 86.3144C235.245 99.7353 235.024 115.11 228.654 128.353L191.499 205.607C185.61 217.85 174.993 227.171 162.089 231.423L124.685 243.749Z"
                        fill="url(#paint0_linear_191_290)" fill-opacity="0.75" shape-rendering="crispEdges" />
                </g>
                <defs>
                    <filter id="filter0_d_191_290" x="0.386719" y="0.274048" width="237.208" height="253.997"
                        filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                        <feColorMatrix in="SourceAlpha" type="matrix"
                            values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                        <feOffset dy="4" />
                        <feGaussianBlur stdDeviation="2" />
                        <feComposite in2="hardAlpha" operator="out" />
                        <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                        <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_191_290" />
                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_191_290" result="shape" />
                    </filter>
                    <linearGradient id="paint0_linear_191_290" x1="106" y1="182.5" x2="-113.719"
                        y2="131.608" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#052792" />
                        <stop offset="1" stop-color="#7CDFCD" />
                    </linearGradient>
                </defs>
            </svg>

        </div>
        <div class="backdrop-2">
            <svg width="238" height="255" viewBox="0 0 238 255" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g filter="url(#filter0_d_191_290)">
                    <path
                        d="M124.685 243.749C99.7526 251.966 72.7113 239.501 62.7643 215.207L8.1267 81.7613C-2.10845 56.7633 9.36155 28.1555 34.0311 17.1521L62.1499 4.61035C73.8938 -0.627791 87.2045 -1.13985 99.3161 3.18056L189.599 35.3858C202.468 39.9764 212.898 49.6335 218.464 62.1119L229.259 86.3144C235.245 99.7353 235.024 115.11 228.654 128.353L191.499 205.607C185.61 217.85 174.993 227.171 162.089 231.423L124.685 243.749Z"
                        fill="url(#paint0_linear_191_290)" fill-opacity="0.75" shape-rendering="crispEdges" />
                </g>
                <defs>
                    <filter id="filter0_d_191_290" x="0.386719" y="0.274048" width="237.208" height="253.997"
                        filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                        <feColorMatrix in="SourceAlpha" type="matrix"
                            values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                        <feOffset dy="4" />
                        <feGaussianBlur stdDeviation="2" />
                        <feComposite in2="hardAlpha" operator="out" />
                        <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                        <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_191_290" />
                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_191_290" result="shape" />
                    </filter>
                    <linearGradient id="paint0_linear_191_290" x1="106" y1="182.5" x2="-113.719"
                        y2="131.608" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#052792" />
                        <stop offset="1" stop-color="#7CDFCD" />
                    </linearGradient>
                </defs>
            </svg>
        </div>


        <div class="mx-auto dashboard-main sm:px-6 lg:px-8 ">

            <div class="dashboard-left animate-slideRight">

                <div class="dashboard-card">
                    <h1>Here's what's happening in your website this week</h1>

                    <div class="dashboard-card-bottom">
                        <div>
                            <h5> <span>{{ $totalVisitsThisWeek }}</span> visits this week</h5>
                            <p> {{ $visits }} overall total visits to your website</p>
                        </div>

                        <a href="" class="btn">
                            View Report
                        </a>
                    </div>
                </div>

                <div class="dashboard-news">

                    <div class="dashboard-card-white">
                        <h5>Total News</h5>
                        <h1 id="totalNews" data-target="{{ $totalNews }}">0</h1>
                    </div>

                    <div class="dashboard-card-white">
                        <h5>Total News Visits</h5>
                        <h1 id="totalViews" data-target="{{ $totalViews }}">0</h1>
                    </div>

                    <div class="dashboard-card-white">
                        <h5>Total News Likes</h5>
                        <h1 id="totalLikes" data-target="{{ $totalLikes }}">0</h1>
                    </div>

                    <div class="dashboard-card-white">
                        <h5>Total News Comments</h5>
                        <h1 id="totalComments" data-target="{{ $totalComments }}">0</h1>
                    </div>


                </div>

                <div class="mt-5 quick-actions">
                    <h1>Quick Actions</h1>

                    <div class="quick-actions-list">
                        <a href={{ route('dashboard.news.create') }} class="add-dashboard">
                            <h5>Add News</h5>
                        </a>

                        <button onclick="add_image_modal.showModal()" class="add-dashboard">
                            <h5>Add Gallery</h5>
                        </button>

                        <a href={{ route('dashboard.events.create') }} class="add-dashboard">
                            <h5>Add Event</h5>
                        </a>
                    </div>
                </div>

            </div>

            <div class="dashboard-right animate-slideLeft">

                <div class="upcoming-events">
                    <div>
                        <h1>Latest Comments</h1>

                        <div class="upcoming-events-list">
                            @foreach ($latestComments as $comment)
                                <div class="upcoming-events-card">
                                    <img src='/assets/images/profile_placeholder.png'>
                                    <div>
                                        <divc class="recent-comment-name">
                                            <h5>{{ $comment->name }}</h5>
                                            <h6 class="recent-comment-date">
                                                {{ \Carbon\Carbon::parse($comment->created_at)->format('H:i') }}</h6>
                                        </divc>
                                        <h6 class="recent-comment-text">{{ Str::limit($comment->text, 60) }}</h6>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                </div>


                <div class="h-full mt-5 upcoming-events">
                    <div>
                        <h1>Upcoming Events</h1>

                        <div class="upcoming-events-list">
                            @foreach ($upcomingEvents as $event)
                                <div class="upcoming-events-card">
                                    <img src={{ $event->img }}>
                                    <div>
                                        <h5>{{ $event->name }}</h5>
                                        <p>{{ \Carbon\Carbon::parse($event->date)->format('d-F-Y') }} |
                                            {{ \Carbon\Carbon::parse($event->time_start)->format('H:i') }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                    </div>
                    <a href={{ route('dashboard.events') }}" class="main-button group">
                        <span class="transition-all duration-500 ease-in-out group-hover:translate-x-3">
                            See All Events
                        </span>
                        <x-heroicon-o-arrow-right
                            class="w-5 h-5 transition-all duration-500 ease-in-out opacity-100 group-hover:translate-x-28 group-hover:opacity-0" />
                    </a>

                </div>

            </div>
        </div>



    </div>
</x-app-layout>


<script>
    document.addEventListener("DOMContentLoaded", function() {

        setTimeout(function() {
            function animateCountUp(element, target) {
                let startValue = 0;
                let duration = 800;
                let increment = target / (duration / 10);

                function updateCount() {
                    startValue += increment;
                    if (startValue >= target) {
                        element.innerText = Math.floor(target);
                    } else {
                        element.innerText = Math.floor(startValue);
                        requestAnimationFrame(updateCount);
                    }
                }

                updateCount();
            }

            animateCountUp(document.getElementById('totalNews'), {{ $totalNews }});
            animateCountUp(document.getElementById('totalViews'), {{ $totalViews }});
            animateCountUp(document.getElementById('totalLikes'), {{ $totalLikes }});
            animateCountUp(document.getElementById('totalComments'), {{ $totalComments }});
        }, 100);
    });
</script>
