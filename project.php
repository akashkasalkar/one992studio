<?php
    include "./header.php";
?>
<style>
    .container {
  position: relative;
  width: 50%;
}

/* Make the image to responsive */
.image {
  width: 100%;
  height: auto;
}

/* The overlay effect (full height and width) - lays on top of the container and over the image */
.overlay {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background-color: #008CBA;
  overflow: hidden;
  width: 100%;
  height: 100%;
  transform: scale(0);
  transition: .3s ease;
}

/* When you mouse over the container, the overlay text will "zoom" in display */
.container:hover .overlay {
  transform: scale(1);
}

/* Some text inside the overlay, which is positioned in the middle vertically and horizontally */
.text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}
</style>

    <!-- breadcam_area_start -->
    <div class="breadcam_area bradcam_bg overlay2">
        <div class="bradcam_text">
            <h3>Projects</h3>
        </div>
    </div>
    <!-- breadcam_area_end -->

    <!-- lastest_project_strat -->
    <div class="lastest_project">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title mb-60">
                        <span class="sub_heading">Project view</span>
                        <h3>Our Latest Projects</h3>
                        <div class="seperator"></div>
                    </div>
                </div>
            </div>
            <div class="row align-items-center mb-80">
                <div class="col-xl-6 col-md-6">
                    <div class="single_project_thumb">
                        <img src="img/project/1.png" alt="">
                        <div class="overlay">
                             <div class="text">Hello World</div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 offset-xl-1 col-md-6">
                    <div class="section_title">
                        <span class="sub_heading2">Dubai, UAE</span>
                        <h4>Abahoni Building</h4>
                        <p>Consectetur adipiscing elit, sed do eiusmod tempor labore et dolore magna aliqua
                            quis ipsum suspendisse.</p>
                        <a href="project-details.html" class="boxed-btn">View More</a>
                    </div>
                </div>
            </div>
            <div class="row align-items-center mb-80">
                <div class="col-xl-6 col-md-6">
                    <div class="section_title">
                        <span class="sub_heading2">Dhaka, Bangladesh</span>
                        <h4>MR Kholifa Tower</h4>
                        <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua
                            quis ipsum suspendisse.</p>
                        <a href="project-details.html" class="boxed-btn">View More</a>
                    </div>
                </div>
                <div class="col-xl-5 offset-xl-1 col-md-6">
                    <div class="single_project_thumb">
                        <img src="img/project/2.png" alt="">
                       
                    </div>
                </div>
            </div>
            <div class="row align-items-center mb-80">
                <div class="col-xl-6 col-md-6">
                    <div class="single_project_thumb">
                        <img src="img/project/3.png" alt="">
                        
                    </div>
                </div>
                <div class="col-xl-5 offset-xl-1 col-md-6">
                    <div class="section_title">
                        <span class="sub_heading2">Dubai, UAE</span>
                        <h4>Galoni Plan & Design</h4>
                        <p>Consectetur adipiscing elit, sed do eiusmod tempor labore et dolore magna aliqua
                            quis ipsum suspendisse.</p>
                        <a href="project-details.html" class="boxed-btn">View More</a>
                    </div>
                </div>
            </div>
            <div class="row align-items-center mb-80">
                <div class="col-xl-6 col-md-6">
                    <div class="section_title">
                        <span class="sub_heading2">Dhaka, Bangladesh</span>
                        <h4>Hiclick Mirror design</h4>
                        <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua
                            quis ipsum suspendisse.</p>
                        <a href="project-details.html" class="boxed-btn">View More</a>
                    </div>
                </div>
                <div class="col-xl-5 offset-xl-1 col-md-6">
                    <div class="single_project_thumb">
                        <img src="img/project/4.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- lastest_project_end -->
<?php
    include "./footer.php";
?>