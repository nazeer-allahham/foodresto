@foreach ($meals as $meal)
<div class="card-box meal">
    <h1 class="header-title mt-0 m-b-15">{{$meal->title}}</h1>

    <div class="px-3">
        <div class="row aos-item" data-aos="fade-up">
            <div class="col-10">{{$meal->description}}</div>
            <div class="col-2 text-left py-2" style="border-left:4px solid black">{{$meal->price}}$</div>
        </div>
        <div class="d-flex flex-wrap aos-item" data-aos="fade-up">
            <img src="{{$meal->image}}" class="image img-fluid img-thumbnail"/>
            <img src="{{$meal->image}}" class="image img-fluid img-thumbnail"/>
            <img src="{{$meal->image}}" class="image img-fluid img-thumbnail"/>
            <img src="{{$meal->image}}" class="image img-fluid img-thumbnail"/>
            <img src="{{$meal->image}}" class="image img-fluid img-thumbnail"/>
        </div>
        <div class="mt-2 aos-item" data-aos="fade-up">
            <button class="btn btn-sm btn-purple px-4 py-1 mt-0" data-meal-id="{{ $meal->id}}" data-toggle="modal" data-target="#orderModal" v-on:click="onclick">Order</button>
        </div>
    </div>
</div>
@endforeach