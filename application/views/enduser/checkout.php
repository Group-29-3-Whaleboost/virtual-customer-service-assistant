<html>
    <head>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/webrtc-adapter/3.3.3/adapter.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.min.js"></script>
<script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<style>
    /* Apply styles to the video element */
/* #preview {
    width: 100%;
    height: 100vh; /* Make the video element take up the full viewport height */
    object-fit: cover; /* Maintain aspect ratio and cover the entire viewport */
    position: fixed; /* Position the video element fixed to the viewport */
    top: 0;
    left: 0;
    z-index: -1; /* Place the video element behind the content */
}

/* Ensure the body and HTML elements take up the full viewport */
html, body {
    height: 100%;
    margin: 0;
    padding: 0;
    overflow: hidden; /* Hide any overflow content */
} */

</style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div>
                    <video id="preview" width="100%"></video>
                </div>
                <!-- <div class="col-md-6">
                    <label>SCAN QR CODE</label>
                    <input type="text" name="text" id="text" readonyy="" placeholder="scan qrcode" class="form-control">
                </div> -->
                <div id="item">
                    
                </div>
            </div>
        </div>

        <!-- <script>
           let scanner = new Instascan.Scanner({ video: document.getElementById('preview')});
           Instascan.Camera.getCameras().then(function(cameras){
               if(cameras.length > 0 ){
                   scanner.start(cameras[0]);
               } else{
                   alert('No cameras found');
               }

           }).catch(function(e) {
               console.error(e);
           });

           scanner.addListener('scan',function(c){
               document.getElementById('text').value=c;
           });

        </script> -->

        <script>
            let scanner = new Instascan.Scanner({ video: document.getElementById('preview') });

            // Get the available cameras and select the back camera if available
            Instascan.Camera.getCameras().then(function (cameras) {
                let backCamera = cameras.find(camera => camera.name.toLowerCase().includes('back'));

                if (backCamera) {
                    scanner.start(backCamera);
                } else if (cameras.length > 0) {
                    // If no back camera is found, fall back to the first available camera
                    scanner.start(cameras[0]);
                } else {
                    alert('No cameras found');
                }
            }).catch(function (e) {
                console.error(e);
            });

            scanner.addListener('scan', function (c) {
                // document.getElementById('text').value = c;
                console.log(c);
                var itemData = JSON.parse(c);
                console.log(itemData.image);
                // console.log(itemData.price);
                document.getElementById('item').innerHTML = ' <div class="container mt-5"><div class="card"><img src="uploads/'+itemData.image+'" class="card-img-top" alt="Item Image"><div class="card-body"><h5 class="card-title" id="title">'+itemData.item_name+'</h5><p class="card-text">'+itemData.description+'</p><p class="card-text" id="price">'+itemData.price+'</p><p class="card-text" id="discount">'+itemData.discount+'</p><p class="card-text">Category: '+itemData.category+'</p></div></div></div><button class="add-to-cart" onclick="myFunction()">Add to cart</button>';
            });
        </script>

        <?php include(APPPATH . 'views/includes/cart-component-javascript.php'); ?>

    </body>
</html>