<div class="footer-top-area">
    <div class="container">
        <div class="footer-top">

            <div class="footer-column">
                <h2>দৃষ্টি আকর্ষণ </h2>
                <p>এই সাইটে সাধারণত আমরা নিজস্ব কোনো খবর তৈরী করি না..আমরা বিভিন্ন নিউজ সাইট থেকে খবরগুলো সংশ্লিষ্ট সূত্রসহ প্রকাশ করে থাকি..তাই কোনো খবর নিয়ে আপত্তি বা অভিযোগ থাকলে সংশ্লিষ্ট নিউজ সাইটের কতৃপক্ষের সাথে যোগাযোগ করার অনুরোধ রইলো।</p>
                {{-- @if(isset($headersettings) && $headersettings['about_us'])
                    {!! $headersettings['about_us'] !!}
                @endif --}}
            </div>

            <div class="footer-column">
                <div class="fb-page" data-href="https://www.facebook.com/newsboard.bd/" data-tabs="timeline" data-width="" data-height="200" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/newsboard.bd/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/newsboard.bd/">NewsBoard.BD</a></blockquote></div>
                {{-- <h2>Categoies</h2>
                @foreach($footernewscategorylist as $newscategory)
                    <div class="section-item news-category-list">
                        <h3>
                            <i class="far fa-arrow-alt-circle-right"></i>
                            <a href="{{ route('page.category',$newscategory->slug) }}">{{ $newscategory->name }}</a>
                            <span>({{ $newscategory->newslist_count }})</span>
                        </h3>
                    </div>
                @endforeach --}}
            </div>

            <div class="footer-column">
                <h2>News Subscription</h2>
                <div class="newsletter-subscription">
                    <p>Stay updated and get our latest news right into your inbox and get awesome offers.</p>
                    <form action="" method="">
                        <input type="email" name="" class="mailbox" placeholder="yourmail@example.com">
                        <input type="submit" value="Subscribe" class="submitbox">
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="footer-bottom-area">
    <div class="container">
        <div class="footer-bottom">
            <p>&copy; {{ date('Y') }} - All right reserved by News Board BD</p>
        </div>
    </div>
</div>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v6.0&appId=236133480505915&autoLogAppEvents=1"></script>