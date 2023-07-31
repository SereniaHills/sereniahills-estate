<div class="modal" id="myModal-requestCallback" style="z-index: 9999;">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Book Appointment</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <form action="<?= get_site_url()?>" method="post">
                                <div class="mb-3">
                                    <label for="fullnameRequestcallback" class="col-form-label">Nama</label>
                                    <input type="text" class="form-control" id="fullname-requestcallback"
                                        name="fullnameRequestcallback">
                                </div>
                                <div class="mb-3">
                                    <label for="phoneRequestcallback" class="col-form-label">No Tlp</label>
                                    <input type="tel" id="phone-requestcallback" class="form-control"
                                        name="phoneRequestcallback" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}"
                                        placeholder="08xx - xxx - xxx">
                                </div>
                                <div class="mb-3">
                                    <label for="timeCallRequestcallback" class="col-form-label">Best time to
                                        call</label>
                                    <select class="form-select" aria-label="Default Best time Call"
                                        name="timeCallRequestcallback">
                                        <option>9:00-12:00</option>
                                        <option>12:00-13:00</option>
                                        <option>13:00-15:00</option>
                                        <option>15:00-18:00</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="perihalRequestcallback" class="col-form-label">Perihal</label>
                                    <textarea class="form-control" id="perihal-requestcallback"
                                        name="perihalRequestcallback"></textarea>
                                </div>
                                <div class="mb-3 text-right">
                                    <button type="button" class="btn bg-dark-gray text-white">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>