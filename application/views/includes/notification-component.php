<style>
        .modal-content {
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }

        .modal-body {
            padding: 20px;
        }

        .modal-title {
            font-size: 24px;
            margin-bottom: 15px;
        }

        .modal-content {
            animation: fadeInUp 0.5s;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .notification {
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .notification h6 {
            font-size: 24px;
            margin-bottom: 10px;
        }
    </style>
<div class="modal fade" id="NotificationModel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Notifications</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="Closen"></button>
          </div>
          <div class="modal-body">
                <div class="notification">
                    <h6>Fresh Arrivals Today!</h6>
                    <p>Explore our latest selection of farm-fresh vegetables and juicy fruits. Order now for the best picks!</p>
                </div>
                <div class="notification">
                    <h6>Limited-Time Offer!</h6>
                    <p>Get 20% off on all biscuits and cookies. Use code BISCUIT20 at checkout. Hurry, offer ends soon!</p>
                </div>
                <div class="notification">
                    <h6>Taste of the Season!</h6>
                    <p>Introducing our new range of seasonal fruits. From sweet mangoes to crisp apples, savor the flavors of the season.</p>
                </div>
                <div class="notification">
                    <h6>Stay Healthy with Us!</h6>
                    <p>Looking for nutritious options? Discover our organic fruits and vegetables for a healthier lifestyle.</p>
                </div>
                <div class="notification">
                    <h6>Exclusive Member Discounts!</h6>
                    <p>As a valued member, enjoy an extra 10% off on all your vegetable purchases this week. Shop now!</p>
                </div>
                <div class="notification">
                    <h6>Biscuit Bonanza!</h6>
                    <p>Explore our extensive collection of biscuits - from classic favorites to unique flavors. Find your perfect snack!</p>
                </div>
                <div class="notification">
                    <h6>Don't Forget Your Essentials!</h6>
                    <p>Running low on groceries? Stock up on fresh produce and snacks with us today!</p>
                </div>
          </div>
          <div class="modal-footer">
          </div>
        </div>
      </div>
    </div>


    <script>

var nmodel = new bootstrap.Modal(document.getElementById('NotificationModel'));
            document.getElementById('LinkToNotification').addEventListener('click', function() {
                nmodel.show();
            });

            // document.getElementById('closen').addEventListener('click', function() {
            //     nmodel.hide();
            // });
    </script>