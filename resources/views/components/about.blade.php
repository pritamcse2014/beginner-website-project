<!-- About Section-->
<section class="bg-light py-5">
    <div class="container px-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-xxl-8">
                <div class="text-center my-5">
                    <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">About Me</span></h2>
                    <p id="title" class="lead fw-light mb-4"></p>
                    <p id="details" class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit dolorum itaque qui unde quisquam consequatur autem. Eveniet quasi nobis aliquid cumque officiis sed rem iure ipsa! Praesentium ratione atque dolorem?</p>
                    <div class="d-flex justify-content-center fs-2 gap-4">
                        <a target="_blank" id="twitterLink" class="text-gradient" href=""><i class="bi bi-twitter"></i></a>
                        <a target="_blank" id="linkedinLink" class="text-gradient" href=""><i class="bi bi-linkedin"></i></a>
                        <a target="_blank" id="githubLink" class="text-gradient" href=""><i class="bi bi-github"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    getAboutData()
    async function getAboutData() {
        let URL = '/aboutData'
        // let response = await axios.get(URL);
        try {
            let response = await axios.get(URL);
            document.getElementById('title').innerHTML = response.data.title;
            document.getElementById('details').innerHTML = response.data.details;
        } catch (error) {
            alert(error);
        }
    }
    
    getSocialData()
    async function getSocialData() {
        let URL = '/socialData'
        // let response = await axios.get(URL);
        try {
            let response = await axios.get(URL);
            document.getElementById('twitterLink').href = response.data['twitterLink'];
            document.getElementById('githubLink').href = response.data['githubLink'];
            document.getElementById('linkedinLink').href = response.data['linkedinLink'];
        } catch (error) {
            alert(error);
        }
    }
</script>