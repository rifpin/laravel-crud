<div class="modal fade" id="destroy">
  <div class="modal-dialog">
    <div class="modal-content">
    
     
      <div class="modal-header">
        <h4 class="modal-title">Delete Customer</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      
   
      <div class="modal-body">
        Are you sure to permanent delete customer?
      </div>
      
     
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancel</button>
        <form method="post" action="{{route('customer.destroy','id')}}">
          {{csrf_field()}}{{method_field('delete')}}
          <input type="hidden" name="id" id="id">
          <button class="btn btn-danger btn-sm">Delete</button>
        </form> 
      </div>
      
    </div>
  </div>
</div>