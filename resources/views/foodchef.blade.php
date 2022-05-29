<section class="section" id="chefs">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-lg-4 text-center">
                <div class="section-heading">
                    <h6>Nos Chefs</h6>
                    <h2>Les meilleurs chefs pour de meilleurs repas</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($data as $data )
            <div class="col-lg-4">
               
                <div class="chef-item">
                    <div class="thumb">
                        <div class="overlay"></div>
                        <ul class="social-icons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                        <img height="200" width="200"src="chefimage/{{$data->image}}" alt="Chef">
                    </div>
                    <div class="down-content">
                        <h4>{{$data->name}}</h4>
                        <span>{{$data->sepeciality}}</span>
                    </div>
                </div>
                
               
            </div>
            @endforeach
            <div class="col-lg-4">
               
            </div>
            <div class="col-lg-4">
                
            </div>
        </div>
    </div>
</section>