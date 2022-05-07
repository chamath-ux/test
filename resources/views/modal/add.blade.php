<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Sales Rep</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="mb-3">
                <label for="name" class="form-label">Full Name<span style='color:red'>*</span></label>
                <input type="text" class="form-control" id="name" placeholder="Sales rep name">
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email Address<span style='color:red'>*</span></label>
                <input type="email" class="form-control" id="email" placeholder="Email">
              </div>
              <div class="mb-3">
                <label for="telephone" class="form-label">Telephone<span style='color:red'>*</span></label>
                <input type="email" class="form-control" id="telephone" placeholder="Telephone">
              </div>
              <div class="mb-3">
                <label for="current route" class="form-label">Current Route<span style='color:red'>*</span></label>
                <input type="text" class="form-control" id="current_route" placeholder="Route">
              </div>
              <div class="mb-3">
                <label for="comment" class="form-label">Comment<span style='color:red'>*</span></label>
               <textarea id='comment' rows='3' class="form-control" ></textarea>
              </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" id="Add">Save changes</button>
        </div>
      </div>
    </div>
  </div>
