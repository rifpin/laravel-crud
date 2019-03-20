<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            
            <div class="modal-header">
                <h5 class="modal-title">Edit Customer</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            
            <form method="post" action="{{route('customer.update','id')}}">
            <div class="modal-body">
                    {{csrf_field()}} {{method_field('patch')}}
                    <input type="hidden" name="id" id="id">
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" class="form-control form-control-sm" name="name" id="name">
                    </div>
                    <div class="form-group">
                        <label for="">Address</label>
                        <textarea name="address" class="form-control form-control-sm" cols="30" rows="5" id="address"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Phone</label>
                        <input type="text" class="form-control form-control-sm" name="phone" id="phone">
                    </div>
            </div>
            
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Cancel</button>
                <input type="submit" class="btn btn-sm btn-success" value="Update">
            </div>

            </form>
        </div>
    </div>
</div>