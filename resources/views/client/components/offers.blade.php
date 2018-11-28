<div class="d-flex justify-content-center align-items-center">
    <div class="card-group list-group offer-adapter adapter" data-period=5000 data-size=4>
        @foreach ($offers as $offer)
        <div class="card bg-dark text-white adapter-item">
            <img class="card-img" src="{{ $offer->meal()->image }}" alt="{{ $offer->title }}">
            <div class="adapter-item-content">
                <div class="card-img-overlay">
                    <div class="row mb-0">
                        <h3 class="col-12 text-center my-0">{{$offer->meal()->title}}</h3>
                    </div>
                    <div class="row mt-0 mb-1">
                        <h4 class="col-12 text-center my-0">{{$offer->description}}</h4>
                    </div>
                    <div class="row">
                        <h4 class="col-6 badge badge-danger text-center"><strike>{{$offer->meal()->price}}</strike> $</h4>
                        <h4 class="col-6 badge badge-warning text-center">{{$offer->current_price}} $</h4>
                    </div>
                    <div class="row">
                        <form action="orders/update" method="post">
                            @csrf
                            <input type="hidden" name="type" value="push"/>
                            <input type="hidden" name="category" value="offer"/>
                            <input type="hidden" name="title" value="{{$offer->meal()->title}}"/>
                            <button class="col-12 btn btn-primary btn-waves text-center" type="submit">Order Now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>