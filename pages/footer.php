<footer class="footer  py-5">
        <div class="container">
            <div class="row ">
                <div class="col-lg-2 col-md-2 col-4">
                    <!-- <h6 class="text-sm">Company</h6>
                    <ul class="flex-column ms-n3 nav">
                        <li class="nav-item">
                            <a class="nav-link text-body" href="javascript:;">
                                Marketing
                            </a>
                        </li>

                    
                    </ul>
                </div>
                <div class="col-lg-2 col-md-2 col-4">
                    <h6 class="text-sm">Support</h6>
                    <ul class="flex-column ms-n3 nav">
                        <li class="nav-item">
                            <a class="nav-link text-body" href="javascript:;">
                                Pricing
                            </a>
                        </li>

                       
                </div>
                <div class="col-lg-2 col-md-2 col-4">
                    <h6 class="text-sm">Company</h6>
                    <ul class="flex-column ms-n3 nav">
                        <li class="nav-item">
                            <a class="nav-link text-muted" href="javascript:;">
                                About Us
                            </a>
                        </li>

                    </ul> -->
                </div>

                <div class="col-lg-4 col-md-5 col-sm-6 col-12 ms-auto mt-4 mt-sm-0">
                    <h6>Inscrever-se</h6>
                    <p class="text-sm">Tenha acesso a ofertas exclusivas para assinantes e seja o primeiro a ser informado sobre novos descontos..</p>
                    <div class="row">
                        <div class="col-md-8 col-7">
                            <div class="form-group">
                                <div class="input-group input-group-alternative mb-4">
                                    <input class="form-control" placeholder="Digite seu e-mail" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-5 ps-0">
                            <button type="button" class="btn btn-success">Inscrever</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="./assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="./assets/js/soft-design-system.min.js" type="text/javascript"></script>
    <script src="./assets/js/countup.min.js" type="text/javascript"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>


    <script>
        if (document.getElementById("state1")) {
                    const countUp = new CountUp("state1", document.getElementById("state1").getAttribute("countTo"));
                    if (!countUp.error) {
                      countUp.start();
                    } else {
                      console.error(countUp.error);
                    }
                  }
                  if (document.getElementById("state2")) {
                    const countUp1 = new CountUp("state2", document.getElementById("state2").getAttribute("countTo"));
                    if (!countUp1.error) {
                      countUp1.start();
                    } else {
                      console.error(countUp1.error);
                    }
                  }
                  if (document.getElementById("state3")) {
                    const countUp2 = new CountUp("state3", document.getElementById("state3").getAttribute("countTo"));
                    if (!countUp2.error) {
                      countUp2.start();
                    } else {
                      console.error(countUp2.error);
                    };
                  }
        
         if (document.querySelector('.datepicker-1')) {
              flatpickr('.datepicker-1', {
              }); // flatpickr
            } 
        
         if (document.querySelector('.datepicker-2')) {
              flatpickr('.datepicker-2', {
              }); // flatpickr
            }
    </script>
</body>
</html>