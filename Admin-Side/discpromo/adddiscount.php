<style>
    #hotelroomModal > div > div > form > div.modal-body > div:nth-child(1) > div:nth-child(2) > div > select{
        position: absolute;
        margin-top: 1.5rem;
        margin-left: -6.9rem;
        width: 31%;
        height: 22%;
        border-radius: 7px;
        border: 1px solid #DCDCDC;
    }
</style>

<!-- Add Discount Modal -->
<div class="modal fade" id="hotelroomModal" tabindex="-1" aria-labelledby="hotelroomModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 65%;">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="hotelroomModalLabel">Discounts</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form action="discountcode.php" method="POST">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="dname">Discount Name</label>
                                    <input type="text" name="dname" class="form-control" placeholder="Enter Discount Name" required>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="dtype">Discount Type</label>
                                    <select name="dtype" id="dtype">
                                        <option value="percentage" name="percentage">Percentage</option>
                                        <option value="amount" name="amount">Amount</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="dvalue">Discount Value</label>
                                    <input type="number" name="dvalue" class="form-control" placeholder="Enter Discount Value" min="1" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="start_date">Start Date</label>
                                    <input type="date" name="start_date" class="form-control" placeholder="Enter Start Date" required>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="end_date">End Date</label>
                                    <input type="date" name="end_date" class="form-control" placeholder="Enter End Date">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <div class="form-check">
                                        <input type="radio" name="status" value="Available" class="form-check-input">
                                        <label for="">Available</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" name="status" value="Unavailable" class="form-check-input">
                                        <label for="">Unavailable</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" name="save_hotelrooms" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Endd of Add Discount Modal -->
