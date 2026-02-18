<!-- import jquery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!--Modal JS Script -->
<script type="text/javascript">
    window.onload = () => {
        $('#onload').modal('show');
    }
</script>

<body class="bg-gradient-primary">
    <div class="modal fade" id="onload" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"> <!-- Add this line to your code -->
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header alert-danger">
                    <h5 class="modal-title" id="exampleModalLabel">Reminder</h5>
                </div>
                <div class="modal-body">
                    <p><h5>This application is expired, To be able to use it, please subscribe and contact the developer of this application.</p>
                    </h5><p><h5 class="modal-title" id="exampleModalLabel"><a href="https://www.skyrainstudio.id/" style="text-decoration: none;" target="blank">@skyrain.studio</a></h5></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div> <!-- And the relavant closing div tag -->