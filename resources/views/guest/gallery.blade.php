@extends('layouts.guest')

@section('content')
<div class="about">
    <div class="top_section">
        <header>
            <div class="container align-items-center justify-content-center top_content d-flex mt-5 about-titl">
                <div class="col-lg-8 ">
                    <h1 class="text-white text-center text-lg-centr text-white mb-5 header-title">Portfolio</h1>
                </div>
            </div>
        </header>
    </div>
  </div>

<section class=" my-lg-2">
    <div class=" container d-flex  justify-content-between flex-lg-column my-5">
        <div class="  d-flex  justify-content-between align-items-center flex-lg-row my-5">
            <div class="main">
                <div class="card-portfolio">
                  <div class="card_content">
                  <img src="{{ asset('assets/images/portofolio/website-1.jpg') }}" alt="">

                  </div>
                </div>
                <div class="data">
                  <div class="img">
                    <img src="https://cdn2.iconfinder.com/data/icons/super-hero/154/batman-comics-hero-avatar-head-mask-512.png" alt="">
                  </div>
                  <div class="text">
                    <div class="text-m">Website</div>
                    <div class="text-s">Milav</div>
                  </div>
                </div>
                <div class="btns">
                  <div class="likes">
                    <svg class="likes_svg" viewBox="-2 0 105 92"><path d="M85.24 2.67C72.29-3.08 55.75 2.67 50 14.9 44.25 2 27-3.8 14.76 2.67 1.1 9.14-5.37 25 5.42 44.38 13.33 58 27 68.11 50 86.81 73.73 68.11 87.39 58 94.58 44.38c10.79-18.7 4.32-35.24-9.34-41.71Z"></path></svg><span class="likes_text">22</span>
                  </div>
                  <div class="comments">
                    <svg class="comments_svg" viewBox="-405.9 238 56.3 54.8" title="Comment"><path d="M-391 291.4c0 1.5 1.2 1.7 1.9 1.2 1.8-1.6 15.9-14.6 15.9-14.6h19.3c3.8 0 4.4-.8 4.4-4.5v-31.1c0-3.7-.8-4.5-4.4-4.5h-47.4c-3.6 0-4.4.9-4.4 4.5v31.1c0 3.7.7 4.4 4.4 4.4h10.4v13.5z"></path></svg><span class="comments_text">12</span>
                  </div>
                  <div class="views">
                    <svg class="views_svg" viewBox="0 0 30.5 16.5" title="Views"><path d="M15.3 0C8.9 0 3.3 3.3 0 8.3c3.3 5 8.9 8.3 15.3 8.3s12-3.3 15.3-8.3C27.3 3.3 21.7 0 15.3 0zm0 14.5c-3.4 0-6.2-2.8-6.2-6.2C9 4.8 11.8 2 15.3 2c3.4 0 6.2 2.8 6.2 6.2 0 3.5-2.8 6.3-6.2 6.3z"></path></svg><span class="views_text">332</span>
                  </div>
                </div>
              </div>

              <div class="main">
                <div class="card-portfolio">
                  <div class="card_content">
                       <img src="{{ asset('assets/images/portofolio/website-2.jpg') }}" alt="">
                  </div>
                </div>
                <div class="data">
                  <div class="img">
                    <img src="../images/section_3/avatar/Avatar.png" alt="">
                  </div>
                  <div class="text">
                    <div class="text_m">Website</div>
                    <div class="text_s">Milav</div>
                  </div>
                </div>
                <div class="btns">
                  <div class="likes">
                    <svg class="likes_svg" viewBox="-2 0 105 92"><path d="M85.24 2.67C72.29-3.08 55.75 2.67 50 14.9 44.25 2 27-3.8 14.76 2.67 1.1 9.14-5.37 25 5.42 44.38 13.33 58 27 68.11 50 86.81 73.73 68.11 87.39 58 94.58 44.38c10.79-18.7 4.32-35.24-9.34-41.71Z"></path></svg><span class="likes_text">22</span>
                  </div>
                  <div class="comments">
                    <svg class="comments_svg" viewBox="-405.9 238 56.3 54.8" title="Comment"><path d="M-391 291.4c0 1.5 1.2 1.7 1.9 1.2 1.8-1.6 15.9-14.6 15.9-14.6h19.3c3.8 0 4.4-.8 4.4-4.5v-31.1c0-3.7-.8-4.5-4.4-4.5h-47.4c-3.6 0-4.4.9-4.4 4.5v31.1c0 3.7.7 4.4 4.4 4.4h10.4v13.5z"></path></svg><span class="comments_text">12</span>
                  </div>
                  <div class="views">
                    <svg class="views_svg" viewBox="0 0 30.5 16.5" title="Views"><path d="M15.3 0C8.9 0 3.3 3.3 0 8.3c3.3 5 8.9 8.3 15.3 8.3s12-3.3 15.3-8.3C27.3 3.3 21.7 0 15.3 0zm0 14.5c-3.4 0-6.2-2.8-6.2-6.2C9 4.8 11.8 2 15.3 2c3.4 0 6.2 2.8 6.2 6.2 0 3.5-2.8 6.3-6.2 6.3z"></path></svg><span class="views_text">332</span>
                  </div>
                </div>
              </div>

              <div class="main">
                <div class="card-portfolio">
                  <div class="card_content">
                      <img src="{{ asset('assets/images/portofolio/website-3.jpg') }}" alt="">
                  </div>
                </div>
                <div class="data">
                  <div class="img">
                    <img src="../images/section_3/avatar/Avatar.png" alt="">
                  </div>
                  <div class="text">
                    <div class="text_m">Website</div>
                    <div class="text_s">Milav</div>
                  </div>
                </div>
                <div class="btns">
                  <div class="likes">
                    <svg class="likes_svg" viewBox="-2 0 105 92"><path d="M85.24 2.67C72.29-3.08 55.75 2.67 50 14.9 44.25 2 27-3.8 14.76 2.67 1.1 9.14-5.37 25 5.42 44.38 13.33 58 27 68.11 50 86.81 73.73 68.11 87.39 58 94.58 44.38c10.79-18.7 4.32-35.24-9.34-41.71Z"></path></svg><span class="likes_text">22</span>
                  </div>
                  <div class="comments">
                    <svg class="comments_svg" viewBox="-405.9 238 56.3 54.8" title="Comment"><path d="M-391 291.4c0 1.5 1.2 1.7 1.9 1.2 1.8-1.6 15.9-14.6 15.9-14.6h19.3c3.8 0 4.4-.8 4.4-4.5v-31.1c0-3.7-.8-4.5-4.4-4.5h-47.4c-3.6 0-4.4.9-4.4 4.5v31.1c0 3.7.7 4.4 4.4 4.4h10.4v13.5z"></path></svg><span class="comments_text">12</span>
                  </div>
                  <div class="views">
                    <svg class="views_svg" viewBox="0 0 30.5 16.5" title="Views"><path d="M15.3 0C8.9 0 3.3 3.3 0 8.3c3.3 5 8.9 8.3 15.3 8.3s12-3.3 15.3-8.3C27.3 3.3 21.7 0 15.3 0zm0 14.5c-3.4 0-6.2-2.8-6.2-6.2C9 4.8 11.8 2 15.3 2c3.4 0 6.2 2.8 6.2 6.2 0 3.5-2.8 6.3-6.2 6.3z"></path></svg><span class="views_text">332</span>
                  </div>
                </div>
              </div>

              <div class="main">
                <div class="card-portfolio">
                  <div class="card_content">
                      <img src="{{ asset('assets/images/portofolio/website-4.jpg') }}" alt="">
                  </div>
                </div>
                <div class="data">
                  <div class="img">
                    <img src="../images/section_3/avatar/Avatar.png" alt="">
                  </div>
                  <div class="text">
                    <div class="text_m">Website</div>
                    <div class="text_s">Milav</div>
                  </div>
                </div>
                <div class="btns">
                  <div class="likes">
                    <svg class="likes_svg" viewBox="-2 0 105 92"><path d="M85.24 2.67C72.29-3.08 55.75 2.67 50 14.9 44.25 2 27-3.8 14.76 2.67 1.1 9.14-5.37 25 5.42 44.38 13.33 58 27 68.11 50 86.81 73.73 68.11 87.39 58 94.58 44.38c10.79-18.7 4.32-35.24-9.34-41.71Z"></path></svg><span class="likes_text">22</span>
                  </div>
                  <div class="comments">
                    <svg class="comments_svg" viewBox="-405.9 238 56.3 54.8" title="Comment"><path d="M-391 291.4c0 1.5 1.2 1.7 1.9 1.2 1.8-1.6 15.9-14.6 15.9-14.6h19.3c3.8 0 4.4-.8 4.4-4.5v-31.1c0-3.7-.8-4.5-4.4-4.5h-47.4c-3.6 0-4.4.9-4.4 4.5v31.1c0 3.7.7 4.4 4.4 4.4h10.4v13.5z"></path></svg><span class="comments_text">12</span>
                  </div>
                  <div class="views">
                    <svg class="views_svg" viewBox="0 0 30.5 16.5" title="Views"><path d="M15.3 0C8.9 0 3.3 3.3 0 8.3c3.3 5 8.9 8.3 15.3 8.3s12-3.3 15.3-8.3C27.3 3.3 21.7 0 15.3 0zm0 14.5c-3.4 0-6.2-2.8-6.2-6.2C9 4.8 11.8 2 15.3 2c3.4 0 6.2 2.8 6.2 6.2 0 3.5-2.8 6.3-6.2 6.3z"></path></svg><span class="views_text">332</span>
                  </div>
                </div>
              </div>

        </div>
    </div>
    <div class=" container d-flex  justify-content-between flex-lg-column my-5">
        <div class="  d-flex  justify-content-between align-items-center flex-lg-row my-5">
            <div class="main">
                <div class="card-portfolio">
                  <div class="card_content">
                  <img src="{{ asset('assets/images/portofolio/website-5.jpg') }}" alt="">

                  </div>
                </div>
                <div class="data">
                  <div class="img">
                    <img src="https://cdn2.iconfinder.com/data/icons/super-hero/154/batman-comics-hero-avatar-head-mask-512.png" alt="">
                  </div>
                  <div class="text">
                    <div class="text_m">Website</div>
                    <div class="text_s">Milav</div>
                  </div>
                </div>
                <div class="btns">
                  <div class="likes">
                    <svg class="likes_svg" viewBox="-2 0 105 92"><path d="M85.24 2.67C72.29-3.08 55.75 2.67 50 14.9 44.25 2 27-3.8 14.76 2.67 1.1 9.14-5.37 25 5.42 44.38 13.33 58 27 68.11 50 86.81 73.73 68.11 87.39 58 94.58 44.38c10.79-18.7 4.32-35.24-9.34-41.71Z"></path></svg><span class="likes_text">22</span>
                  </div>
                  <div class="comments">
                    <svg class="comments_svg" viewBox="-405.9 238 56.3 54.8" title="Comment"><path d="M-391 291.4c0 1.5 1.2 1.7 1.9 1.2 1.8-1.6 15.9-14.6 15.9-14.6h19.3c3.8 0 4.4-.8 4.4-4.5v-31.1c0-3.7-.8-4.5-4.4-4.5h-47.4c-3.6 0-4.4.9-4.4 4.5v31.1c0 3.7.7 4.4 4.4 4.4h10.4v13.5z"></path></svg><span class="comments_text">12</span>
                  </div>
                  <div class="views">
                    <svg class="views_svg" viewBox="0 0 30.5 16.5" title="Views"><path d="M15.3 0C8.9 0 3.3 3.3 0 8.3c3.3 5 8.9 8.3 15.3 8.3s12-3.3 15.3-8.3C27.3 3.3 21.7 0 15.3 0zm0 14.5c-3.4 0-6.2-2.8-6.2-6.2C9 4.8 11.8 2 15.3 2c3.4 0 6.2 2.8 6.2 6.2 0 3.5-2.8 6.3-6.2 6.3z"></path></svg><span class="views_text">332</span>
                  </div>
                </div>
              </div>

              <div class="main">
                <div class="card-portfolio">
                  <div class="card_content">
                       <img src="{{ asset('assets/images/portofolio/website-6.jpg') }}" alt="">
                  </div>
                </div>
                <div class="data">
                  <div class="img">
                    <img src="../images/section_3/avatar/Avatar.png" alt="">
                  </div>
                  <div class="text">
                    <div class="text_m">Website</div>
                    <div class="text_s">Milav</div>
                  </div>
                </div>
                <div class="btns">
                  <div class="likes">
                    <svg class="likes_svg" viewBox="-2 0 105 92"><path d="M85.24 2.67C72.29-3.08 55.75 2.67 50 14.9 44.25 2 27-3.8 14.76 2.67 1.1 9.14-5.37 25 5.42 44.38 13.33 58 27 68.11 50 86.81 73.73 68.11 87.39 58 94.58 44.38c10.79-18.7 4.32-35.24-9.34-41.71Z"></path></svg><span class="likes_text">22</span>
                  </div>
                  <div class="comments">
                    <svg class="comments_svg" viewBox="-405.9 238 56.3 54.8" title="Comment"><path d="M-391 291.4c0 1.5 1.2 1.7 1.9 1.2 1.8-1.6 15.9-14.6 15.9-14.6h19.3c3.8 0 4.4-.8 4.4-4.5v-31.1c0-3.7-.8-4.5-4.4-4.5h-47.4c-3.6 0-4.4.9-4.4 4.5v31.1c0 3.7.7 4.4 4.4 4.4h10.4v13.5z"></path></svg><span class="comments_text">12</span>
                  </div>
                  <div class="views">
                    <svg class="views_svg" viewBox="0 0 30.5 16.5" title="Views"><path d="M15.3 0C8.9 0 3.3 3.3 0 8.3c3.3 5 8.9 8.3 15.3 8.3s12-3.3 15.3-8.3C27.3 3.3 21.7 0 15.3 0zm0 14.5c-3.4 0-6.2-2.8-6.2-6.2C9 4.8 11.8 2 15.3 2c3.4 0 6.2 2.8 6.2 6.2 0 3.5-2.8 6.3-6.2 6.3z"></path></svg><span class="views_text">332</span>
                  </div>
                </div>
              </div>

              <div class="main">
                <div class="card-portfolio">
                  <div class="card_content">
                      <!-- <img src="../images/bg-1.1.jpg" alt=""> -->
                      <img src="{{ asset('assets/images/portofolio/website-7.jpg') }}" alt="">
                  </div>
                </div>
                <div class="data">
                  <div class="img">
                    <img src="../images/section_3/avatar/Avatar.png" alt="">
                  </div>
                  <div class="text">
                    <div class="text_m">Website</div>
                    <div class="text_s">Milav</div>
                  </div>
                </div>
                <div class="btns">
                  <div class="likes">
                    <svg class="likes_svg" viewBox="-2 0 105 92"><path d="M85.24 2.67C72.29-3.08 55.75 2.67 50 14.9 44.25 2 27-3.8 14.76 2.67 1.1 9.14-5.37 25 5.42 44.38 13.33 58 27 68.11 50 86.81 73.73 68.11 87.39 58 94.58 44.38c10.79-18.7 4.32-35.24-9.34-41.71Z"></path></svg><span class="likes_text">22</span>
                  </div>
                  <div class="comments">
                    <svg class="comments_svg" viewBox="-405.9 238 56.3 54.8" title="Comment"><path d="M-391 291.4c0 1.5 1.2 1.7 1.9 1.2 1.8-1.6 15.9-14.6 15.9-14.6h19.3c3.8 0 4.4-.8 4.4-4.5v-31.1c0-3.7-.8-4.5-4.4-4.5h-47.4c-3.6 0-4.4.9-4.4 4.5v31.1c0 3.7.7 4.4 4.4 4.4h10.4v13.5z"></path></svg><span class="comments_text">12</span>
                  </div>
                  <div class="views">
                    <svg class="views_svg" viewBox="0 0 30.5 16.5" title="Views"><path d="M15.3 0C8.9 0 3.3 3.3 0 8.3c3.3 5 8.9 8.3 15.3 8.3s12-3.3 15.3-8.3C27.3 3.3 21.7 0 15.3 0zm0 14.5c-3.4 0-6.2-2.8-6.2-6.2C9 4.8 11.8 2 15.3 2c3.4 0 6.2 2.8 6.2 6.2 0 3.5-2.8 6.3-6.2 6.3z"></path></svg><span class="views_text">332</span>
                  </div>
                </div>
              </div>

              <div class="main">
                <div class="card-portfolio">
                  <div class="card_content">
                      <!-- <img src="../images/bg-1.1.jpg" alt=""> -->
                      <img src="{{ asset('assets/images/portofolio/website-8.jpg') }}" alt="">
                  </div>
                </div>
                <div class="data">
                  <div class="img">
                    <img src="../images/section_3/avatar/Avatar.png" alt="">
                  </div>
                  <div class="text">
                    <div class="text_m">Website</div>
                    <div class="text_s">Milav</div>
                  </div>
                </div>
                <div class="btns">
                  <div class="likes">
                    <svg class="likes_svg" viewBox="-2 0 105 92"><path d="M85.24 2.67C72.29-3.08 55.75 2.67 50 14.9 44.25 2 27-3.8 14.76 2.67 1.1 9.14-5.37 25 5.42 44.38 13.33 58 27 68.11 50 86.81 73.73 68.11 87.39 58 94.58 44.38c10.79-18.7 4.32-35.24-9.34-41.71Z"></path></svg><span class="likes_text">22</span>
                  </div>
                  <div class="comments">
                    <svg class="comments_svg" viewBox="-405.9 238 56.3 54.8" title="Comment"><path d="M-391 291.4c0 1.5 1.2 1.7 1.9 1.2 1.8-1.6 15.9-14.6 15.9-14.6h19.3c3.8 0 4.4-.8 4.4-4.5v-31.1c0-3.7-.8-4.5-4.4-4.5h-47.4c-3.6 0-4.4.9-4.4 4.5v31.1c0 3.7.7 4.4 4.4 4.4h10.4v13.5z"></path></svg><span class="comments_text">12</span>
                  </div>
                  <div class="views">
                    <svg class="views_svg" viewBox="0 0 30.5 16.5" title="Views"><path d="M15.3 0C8.9 0 3.3 3.3 0 8.3c3.3 5 8.9 8.3 15.3 8.3s12-3.3 15.3-8.3C27.3 3.3 21.7 0 15.3 0zm0 14.5c-3.4 0-6.2-2.8-6.2-6.2C9 4.8 11.8 2 15.3 2c3.4 0 6.2 2.8 6.2 6.2 0 3.5-2.8 6.3-6.2 6.3z"></path></svg><span class="views_text">332</span>
                  </div>
                </div>
              </div>

        </div>
    </div>

</section>
</div>

@endsection