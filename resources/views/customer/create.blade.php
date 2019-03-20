<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            
            <div class="modal-header">
                <h5 class="modal-title">Add Customer</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            
            <form method="post" action="{{route('customer.store')}}">
            <div class="modal-body">
               
                    {{csrf_field()}} 
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" class="form-control form-control-sm" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="">Address</label>
                        <textarea name="address" class="form-control form-control-sm" cols="30" rows="5" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Phone</label>
                        <input type="text" class="form-control form-control-sm" name="phone" required>
                    </div>
            </div>
            
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-success" value="Submit">
            </div>

            </form>
        </div>
    </div>
</div>