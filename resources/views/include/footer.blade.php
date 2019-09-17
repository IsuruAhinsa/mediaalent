<footer class="footer-area">

    <div class="container">

        <div class="row">

            <div class="col-12">

                <div class="footer-content d-flex align-items-center justify-content-between">

                    <!-- Copywrite Text -->
                    <div class="copywrite-text">

                        <p>
                            Copyright &copy; {{ date('Y') }}
                            All rights reserved | This website is created
                            <i class="fa fa-heart-o" aria-hidden="true"></i> by
                            <a href="#" target="_blank">Isuru Jayawickrama</a>
                        </p>

                    </div>

                    <!-- Footer Logo -->
                    <div class="footer-logo">
                        <a href="#"><img src="{{ Voyager::image(setting('site.logo')) }}" alt="" style="width: 152.55px; height: 31.19px;"></a>
                    </div>

                    <!-- Social Info -->
                    {{ menu('footer', 'partials.menus.footer') }}

                </div>

            </div>

        </div>

    </div>

</footer>
