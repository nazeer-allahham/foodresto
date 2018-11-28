<!-- Modal -->
<div class="modal fade" id="orderModal" tabindex="-1" role="dialog" aria-labelledby="orderModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
        <div class="modal-body">
            <div class="row">
            <div class="col-lg-12">
                <div class="bg-image" style="background-image: url({{ asset('images/reservations.jpg')}});"></div>
            </div>
            <div class="col-lg-12 py-2 px-0">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <small>CLOSE </small><span aria-hidden="true">&times;</span>
                </button>
                <h4 class="mb-4 text-uppercase">add to basket</h4>  
                <hr>
                <form action="orders/create-or-update/" method="post" onsubmit="e.preventDefault()">
                    <div class="form-group">
                        <label class="badge badge-secondary">{{ $_COOKIE['chosed_meal_id'] }}</label>
                    </div>
                    <div class="form-group">
                        <label for="quantity" class="col-6">Quantity:</label>
                        <input id="quantity" type="number" class="form-control col-6" value="1" min="1">
                    </div>
                    <hr>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-sm">Okay</button>
                    </div>
                </form>
            </div>
            </div>
            
        </div>
        </div>
    </div>
</div>
<!-- END Modal -->