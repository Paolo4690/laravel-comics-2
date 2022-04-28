@php
    $links = config('myArr.footerLinks');
@endphp
<footer>
    <div class="footer-top">
      <div class="container">
        <div class="footer-top-left">
          <section>
            <ul>
              <li><h3>DC COMICS</h3></li>
                 @foreach ($links['footerLinkComics'] as $link)
                    <li><a href="{{ $link['href'] }}">{{ $link['text'] }}</a></li>
                @endforeach
            </ul>
            <ul>
                <li><h3>SHOP</h3></li>
                @foreach ($links['footerLinkShop'] as $link)
                    <li><a href="{{ $link['href'] }}">{{ $link['text'] }}</a></li>
                @endforeach
            </ul>
          </section>
          <section>
            <ul>
              <li><h3>DC</h3></li>
              @foreach ($links['footerLinkDc'] as $link)
                  <li><a href="{{ $link['href'] }}">{{ $link['text'] }}</a></li>
              @endforeach
            </ul>
          </section>
          <section>
            <ul>
              <li><h3>SITES</h3></li>
              @foreach ($links['footerLinkSites'] as $link)
                  <li><a href="{{ $link['href'] }}">{{ $link['text'] }}</a></li>
              @endforeach
            </ul>
          </section>
        </div>
        <div class="footer-top-right"></div>
      </div>
    </div>
    <div class="footer-social">
      <div class="container">
        <div class="btn-footer">SIGN-UP NOW!</div>
        <div class="container-follow">
          <span>FOLLOW US</span>
          <a href="#"><img src="{{ asset('images/footer-facebook.png') }}" alt="facebook"></a>
          <a href="#"><img src="{{ asset('images/footer-twitter.png') }}" alt="twitter"></a>
          <a href="#"><img src="{{ asset('images/footer-youtube.png') }}" alt="youtube"></a>
          <a href="#"><img src="{{ asset('images/footer-pinterest.png') }}" alt="pinterest"></a>
          <a href="#"><img src="{{ asset('images/footer-periscope.png') }}" alt="periscope"></a>
        </div>
      </div>
    </div>
  </footer>
