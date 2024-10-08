<!-- Page content-->
<section class="py-5">
    <div class="container px-5">
        <!-- Contact form-->
        <div class="bg-light rounded-4 py-5 px-4 px-md-5">
            <div class="text-center mb-5">
                <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div>
                <h1 class="fw-bolder">Get in touch</h1>
                <p class="lead fw-normal text-muted mb-0">Let's work together!</p>
            </div>
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-8   col-xl-6">

                    <form id="contactForm">
                        <!-- Name input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="name" type="text" placeholder="Enter Your Name"/>
                            <label for="name">Enter Your Name</label>
                        </div>
                        <!-- Email address input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="email" type="email" placeholder="Enter Your Email" />
                            <label for="email">Enter Your Email</label>
                        </div>
                        <!-- Phone number input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="phone" type="tel" placeholder="Enter Your Phone"/>
                            <label for="phone">Enter Your Phone</label>
                        </div>
                        <!-- Message input-->
                        <div class="form-floating mb-3">
                            <textarea class="form-control" id="message" type="text" placeholder="Enter Your Message" style="height: 10rem"></textarea>
                            <label for="message">Enter Your Message....</label>
                        </div>
                        <div class="d-grid"><button class="btn btn-primary btn-lg" id="submitButton">Submit</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    let contactForm = document.getElementById('contactForm');
    contactForm.addEventListener('submit', async (event) => {
        event.preventDefault();
        let name = document.getElementById('name').value;
        let email = document.getElementById('email').value;
        let phone = document.getElementById('phone').value;
        let message = document.getElementById('message').value;

        if (name.length === 0) {
            alert('Name is Required');
        } else if (email.length === 0) {
            alert('Email is Required');
        } else if (phone.length === 0) {
            alert('Phone is Required');
        } else {
            let formData = {
                name: name,
                email: email,
                phone: phone,
                message: message,
            }
            let URL = '/contactRequest'

            // Loader Show Content Hide
            document.getElementById('loading-div').classList.remove('d-none');
            document.getElementById('content-div').classList.add('d-none');

            let result = await axios.post(URL, formData);
            
            // Loader Hide Content Show
            document.getElementById('loading-div').classList.add('d-none');
            document.getElementById('content-div').classList.remove('d-none');

            if (result.status === 200 && result.data === 1) {
                alert('Your Request has been Submitted Successfully.');
                contactForm.reset();
            } else {
                alert('Something Went Wrong.');
            }
        }
    })
</script>