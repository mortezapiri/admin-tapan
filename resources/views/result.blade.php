@include('header')

<section id="intro" class="clearfix">
    <div class="container">

        <div class="intro-img">

        </div>

        <div class="intro-info col-md-12">

            @foreach($paths as $path)

                <?php
                $response = $client->request('GET', $url . '/' . $path->name, ['http_errors' => false]);
                ?>

                @if($response->getStatusCode() == 200)
                    <div class="alert alert-success wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                        <strong>Find! </strong>{{$path->name}}
                    </div>
                @else

                    <div class="alert alert-danger wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                        <strong>Not found! </strong>{{$path->name}}
                    </div>

                @endif

            @endforeach
        </div>

    </div>
</section>