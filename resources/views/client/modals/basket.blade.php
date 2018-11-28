<!-- Modal -->
<div class="modal fade" id="basketModal" tabindex="-1" role="dialog" aria-labelledby="basketModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
        <div class="modal-body">
            <div class="row">
            <div class="col-12" style="height:150px; overflow-y:hidden">
                <img src="{{ asset('images/meal_2.jpg')}}" class="w-100">    
            </div>
            <div class="col-12">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    &times;
                </button>
                <h4 class="mb-1 text-bold">Add to basket</h4>  
                <hr>
                @if (is_null(session()->get('order')))
                <h5 class="badge badge-danger text-center mx-auto col-12">Sorry there is no pending orders</h5>
                @else
                <form action="orders/save" method="post" onsubmit="e.preventDefault()" class="mt-2">
                    @csrf
                    <ul class="list-group mb-2">
                        @foreach (session()->get('order') as $item)
                            <li class="list-group-item">{{$item}}</li>
                        @endforeach
                    </ul>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-sm">Save & Complete the request</button>
                    </div>
                </form>
                @endif
            </div>
            </div>
        </div>
        </div>
    </div>
</div>
<!-- END Modal -->