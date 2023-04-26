<!-- Add Discount Modal -->
<div class="modal fade" id="hotelroomModal" tabindex="-1" aria-labelledby="hotelroomModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 65%;">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="hotelroomModalLabel">Promos</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form action="promocode.php" method="POST">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="promo_code">Promo Code</label>
                                    <input type="text" name="promo_code" class="form-control" placeholder="Enter Promo Code" required>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="promo_name">Promo Name</label>
                                    <input type="text" name="promo_name" class="form-control" placeholder="Enter Promo Name" required>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="minimum_amount">Minimum Amount</label>
                                    <input type="number" name="minimum_amount" class="form-control" placeholder="Enter Required Minimum Amount" min="1" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="discount_value">Discount Value</label>
                                    <input type="number" name="discount_value" class="form-control" placeholder="Enter Discount Value" required>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="start_date">Start Date</label>
                                    <input type="date" name="start_date" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="end_date">End Date</label>
                                    <input type="date" name="end_date" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                
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
    <!-- Endd of Add promo Modal -->
