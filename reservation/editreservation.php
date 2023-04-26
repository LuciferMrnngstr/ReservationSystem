<!-- Edit Villas Modal -->
<div class="modal fade" id="editHotelroomModal" tabindex="-1" aria-labelledby="editHotelroomModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 50%;">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="editHotelroomModalLabel">Edit Hotel Rooms</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form action="villascode.php" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        <input type="hidden" name="edit_id" id="edit_id">
                        <div class="row">
                        <div class="col-sm-6">
                                <div class="form-group">
                                <label for="">Photos</label>
                                <input type="file" id="image-input" name="photo1" id="photo1" multiple accept="image/*" />
                                <div id="image-preview"></div>
                            </div>
                            <small class="form-text text-muted">Accepted file: .jpg, .jpeg, .png</small>
                                <div class="form-group bern">
                                    <img src="../azzura-img/about.jpg" alt="">
                                </div>
                                <div class="form-group">
                                    <label for="">Inclusion</label>
                                    <textarea name="inclusion" class="form-control" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                            <div class="form-group">
                                <label for="">Villa Type</label>
                                <div class="select-wrapper">
                                    <select name="vill_type" id="" class="form-control">
                                    <option value="None">--Choose One--</option>
                                    <option value="Family Room">Family Room</option>
                                    <option value="Standard">Standard</option>
                                    </select>
                                </div>
                            </div>
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <input type="text" name="description" id="edit_description" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="capacity">Capacity</label>
                                    <input type="number" name="capacity" id="edit_capacity" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Free Entrance</label>
                                    <input type="number" name="free_entrance" id="edit_free_entrance" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <input type="number" name="price" id="edit_price" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="rstatus">Status</label>
                                    <div class="form-check">
                                        <input type="radio" name="status" id="edit_status_available" value="Available" class="form-check-input">
                                        <label for="edit_status_available">Available</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" name="status" id="edit_status_unavailable" value="Unavailable" class="form-check-input">
                                        <label for="edit_status_unavailable">Unavailable</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" name="update_hotelrooms" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End of Edit Villas Modal -->