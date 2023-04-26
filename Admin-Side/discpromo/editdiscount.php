<style>
    #edit_dtype{
        position: absolute;
        margin-top: 1.5rem;
        margin-left: -6.9rem;
        width: 31%;
        height: 22%;
        border-radius: 7px;
        border: 1px solid #DCDCDC;
    }
</style>

<!-- Edit Discount Modal -->
<div class="modal fade" id="editHotelroomModal" tabindex="-1" aria-labelledby="editHotelroomModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 65%;">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="editHotelroomModalLabel">Edit Discounts</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form action="discountcode.php" method="POST">
                    <div class="modal-body">
                        <input type="hidden" name="edit_id" id="edit_id">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="dname">Discount Name</label>
                                    <input type="text" name="dname" id="edit_dname" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="dtype">Discount Type</label>
                                    <select name="dtype" id="edit_dtype">
                                        <option value="percentage"  name="percentage">Percentage</option>
                                        <option value="amount" name="amount">Amount</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="dvalue">Discount Value</label>
                                    <input type="number" name="dvalue" id="edit_dvalue" class="form-control" min="1" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="start_date">Start Date</label>
                                    <input type="date" name="start_date" id="edit_start_date" class="form-control"  required>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="end_date">End Date</label>
                                    <input type="date" name="end_date" id="edit_end_date" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <div class="form-check">
                                        <input type="radio" name="status" id="edit_status_available" value="Available" class="form-check-input">
                                        <label for="">Available</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" name="status" id="edit_status_unavailable" value="Unavailable" class="form-check-input">
                                        <label for="">Unavailable</label>
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
    <!-- End of Edit Discount Modal -->