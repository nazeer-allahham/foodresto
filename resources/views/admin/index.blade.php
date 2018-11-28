@extends('admin.layouts.master')

@section('content')
<div class="container" style="margin-top:60px">
    <div class="row">
        <div class="col-12">
            <div class="card-box">
                <div class="pull-right">
                    <div class="d-flex">
                        <input type="text" class="form-control mr-1 py-0" placeholder="Filter">
                        <button type="button" class="btn btn-sm btn-success ml-auto">Add &plus;</button>
                    </div>
                </div>
                <h4 class="card-title font-bold">Meals</h4>

                <form action="meals/store" method="post" class="form mx-auto mt-3 mb-1 p-2 bg-light">
                    @csrf
                    <div class="row">
                        <div class="form-group col-4">
                            <label for="title">Title</label>
                            <input type="text" name="title" id="title" class="form-control bg-light">
                        </div>
                        <div class="form-group col-4">
                            <label for="price">Price</label>
                            <input type="number" min="0" name="price" id="price" class="form-control bg-light">
                        </div>
                        <div class="form-group col-4">
                            <label for="image">Image</label>
                            <input type="file" name="image" id="image" class="form-control bg-light">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-12">
                            <label for="description">Description</label>
                            <textarea rows="3" cols="30" name="description" id="description" class="form-control bg-light"></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-secondary btn-sm">Submit</button>
                </form>

                <div class="list-group mt-4">
                @foreach ($meals as $meal)
                <div class="list-group-item">
                    <div class="row">
                        <div class="col-2">
                            <img class="img-fluid" src="{{$meal->image}}" alt="{{$meal->title}}">
                        </div>
                        <div class="col-10">
                            <h5 class="mt-0 mb-1">{{$meal->title}}</h5>
                            <p>{{$meal->description}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card-box">
                <div class="pull-right">
                    <div class="d-flex">
                        <input type="text" class="form-control mr-1 py-0" placeholder="Filter">
                        <button type="button" class="btn btn-sm btn-success ml-auto">Add &plus;</button>
                    </div>
                </div>
                <h4 class="card-title font-bold">Offers</h4>

                <form action="offers/store" method="post" class="form mx-auto mt-3 mb-1 p-2 bg-light">
                    @csrf
                    <div class="row">
                        <div class="form-group col-6">
                            <label for="mealID">Meal ID</label>
                            <input type="number" name="meal_id" id="mealID" class="form-control bg-light">
                        </div>
                        <div class="form-group col-6">
                            <label for="price">Current Price</label>
                            <input type="number" min="0" name="current_price" id="price" class="form-control bg-light">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-12">
                            <label for="description">Description</label>
                            <textarea rows="3" cols="30" name="description" id="description" class="form-control bg-light"></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-secondary btn-sm">Submit</button>
                </form>

                <div class="list-group mt-4">
                    @foreach ($offers as $offer)
                    <div class="list-group-item">
                        <div class="row">
                            <div class="col-2">
                                <img class="mr-3 img-fluid" src="{{$offer->meal()->image}}" alt="{{$offer->meal()->title}}">
                            </div>
                            <div class="col-10">
                                <h5 class="mt-0 mb-1">{{$offer->description}}</h5>
                                <p>{{$offer->meal()->description}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection