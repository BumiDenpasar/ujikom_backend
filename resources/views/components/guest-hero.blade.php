<x-backdrop-1 />
<div class="section-flex">
    <x-backdrop-2 />
    
    <div class="hero-text">
        <div>
            <h5>Unlock Your Potential</h5>
    
            <div class="text-cluster">
                    <h1>Crafting a Better</h1>
                    <h1>Life Through Skill</h1>
                    <h1>Development</h1>
                </div>
    
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nostrum nobis in, expedita excepturi
                    praesentium quia, eum fugiat magni voluptates sit, neque error sapiente deserunt dolor reprehenderit
                    voluptas tempore sunt harum?</p>
        </div>

            <a href="">Explore Our App</a>
    </div>

    <div class="hero-banner">
        <div class="absolute-1">
            <div class="hover-1">
                <div class="toga">
                    <x-zondicon-education class="hover-icon" />
                </div>
                <h5>1000 Siswa Siswi</h5>
                <div class="avatar-container">
                    @for ($i = 0; $i <= 4; $i++)
                        <div class="avatar">
                        <div class="avatar-width">
                            <img src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
                        </div>
                        </div>
                    @endfor
                   
                  </div>
            </div>
        </div>

        <div class="hover-container">

            <div class="hover-2">
                <x-lineawesome-industry-solid class="hover-icon"/>
                <div class="hover-text">
                    <h6>Kerja Sama Industri</h6>
                </div>
            </div>
    
            <div class="hover-3">
                <x-fontisto-react class="hover-icon"/>
                <div class="hover-text">
                    <h6>Teknologi Terkini</h6>
                </div>
            </div>
        </div>

        <img src="assets/images/banner.jpg" alt="">
    </div>


</div>
