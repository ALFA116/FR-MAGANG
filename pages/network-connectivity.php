<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FR MAGANG SMKN64 WEB</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <div class="home-pri">
        <!-- /* tampilan home */ -->
        <section id="home" class="home">
            <div class="container-ip" style="background-color: white; position: relative;  display: flex; flex-direction: column;
                                            padding: 26px 0 0 100px; width: 100%; height: 120px; box-sizing: border-box;">
                <div class="container-8 d-flex justify-content-between align-items-center">
                    <div class="image-9"></div>
                    <div class="container-6 d-flex justify-content-center align-items-center">
                        <div class="home navbar-item"><a href="index.php #home">Home</a></div>
                        <div class="about navbar-item"><a href="#our-journey">About</a></div>
                        <div class="work navbar-item"><a href="#work">Work</a></div>
                        <div class="product-solutions navbar-item dropdown">
                            <a href="#" class="dropbtn" id="dropdownToggle">Product &amp; Solutions <span class="arrow-down">▼</span></a>
                            <div class="dropdown-content" id="dropdownMenu">
                                <a href="ip-telephony-solution.php">IP Telephony Solution</a>
                                <a href="network-connectivity.php" class="active">Network &amp; Connectivity Solution</a>
                                <a href="design-testing.php">Design &amp; Testing</a>
                                <a href="other-services.php">Other IT Services</a>
                            </div>
                        </div>
                        <div class="magang navbar-item"><a href="magang.php">Magang</a></div>
                        <div class="contact navbar-item"><a href="#contact">Contact</a></div>
                    </div>
                </div>
        </section>
        <!-- Floating WhatsApp Button -->
        <div class="whatsapp-float" id="whatsappButton">
            <a href="https://wa.me/your-number" target="_blank">
                <img src="../assets/vectors/vector_4_x2.svg" alt="WhatsApp" class="vector-15" />
            </a>
        </div>

        <!-- TAMPILAN network-connectivity-solution -->
        <div class="ip-telephony-container">
            <div class="ip-telephony-header" style="margin-left: 65px;">
                <div class="ip-telephony-title">Network Connectivity-Solution</div>
                <p class="ip-telephony-subtitle">
                    <span class="highlight">Lets Fix Issue&nbsp;&nbsp;</span> <span>With Innovation</span>
                </p>
            </div>
            <div class="ip-telephony-content">
                <div class="ip-telephony-section">
                    <div class="network-connectivity-icon">
                        <img src="../assets/img/3org.png" alt="SIP Trunking Icon" style="margin-top: -182px; margin-left: 40px;" />
                    </div>
                    <div class="ip-telephony-details">
                        <h2 style="margin-bottom: 15px;">NETWORK DESIGN</br>
                            AND INSTALATION</h2>
                        <p style="margin-bottom: 25px;">
                            Whether you need a basic local area network (LAN), wide area network (WAN), or wireless network, our networking engineers are ready to help. For small and medium companies, setup IT and telecommunication system will be time-consuming as it requires more than one department of information technology. For us, vast experience in helping customers to develop their local and wide area network is our passion.
                        </p>
                    </div>
                </div>
                <div class="ip-telephony-image" style="margin-right: -55px;">
                    <img src="../assets/img/network(1).png" alt="Diagram" />
                </div>
            </div>
            <div class="ip-telephony-content reverse">
                <div class="ip-telephony-image2" style="margin-left: -20px;">
                    <img src="../assets/img/network(2).png" alt="Diagram" />
                </div>
                <div class="ip-telephony-section">
                    <div class="network-connectivity-icon2">
                        <img src="../assets/img/lampu.png" alt="Hosted PABX Icon" style="margin-top: -283px;" />
                    </div>
                    <div class="ip-telephony-details">
                        <h3 style="margin-bottom: 15px;">IT NETWORK MANAGED SERVICE</h3>
                        <p1>IT Network Managed Service.</p1>
                        <p style="margin-bottom: 25px;">
                            Whether you need a basic local area network (LAN), wide area network (WAN), or wireless network, our networking engineers are ready to help. For small and medium companies, setup IT and telecommunication system will be time-consuming as it requires more than one department of information technology. For us, vast experience in helping customers to develop their local and wide area network is our passion
                        </p>
                    </div>
                </div>
            </div>
        </div>


        <!-- Tampilan Our Contact -->
        <section id="contact" class="home">
            <div class="frame">
                <div class="frame-2">
                    <div class="frame-3">
                        <div class="text-wrapper">OUR CONTACT</div>
                        <p class="get-schedule-with-us">
                            <span class="span">Get Schedule</span> <span class="text-wrapper-2"> with Us.</span>
                        </p>
                    </div>
                    <div class="frame-4">
                        <div class="frame-5">
                            <div class="group"><img class="img" src="../assets/img/frame.svg" /></div>
                            <p class="p">Jl. Guntur No.20C, Limo, Kec. Limo, Kota Depok, Jawa Barat 16514</p>
                        </div>
                        <div class="frame-5">
                            <div class="frame-wrapper"><img class="img" src="../assets/img/frame-1.svg" /></div>
                            <div class="text-wrapper-3">Sales Representative</div>
                        </div>
                    </div>
                </div>
                <div class="frame-6">
                    <div class="frame-7">
                        <img class="frame-89" src="../assets/img/frame-2.svg" />
                        <p class="leave-a-message">
                            <span class="span">Leave </span> <span class="text-wrapper-4">A Message.</span>
                        </p>
                    </div>
                    <div class="frame-9">
                        <div class="frame-6">
                            <div class="frame-10">
                                <div class="frame-11">
                                    <label class="text-wrapper-5" for="name">Name</label>
                                    <div class="overlap-group-wrapper">
                                        <input type="text" id="name" class="overlap-group" placeholder="Full Name">
                                    </div>
                                </div>
                                <div class="frame-11">
                                    <label class="text-wrapper-5" for="email">Email</label>
                                    <div class="overlap-group-wrapper">
                                        <input type="email" id="email" class="overlap-group" placeholder="Enter Your Email">
                                    </div>
                                </div>
                            </div>
                            <div class="frame-12">
                                <label class="text-wrapper-5" for="message">Your Message</label>
                                <div class="div-wrapper">
                                    <textarea id="message" class="overlap-group-2" placeholder="Enter Your Message..."></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="frame-13">
                            <div class="text-wrapper-9">Send Now</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Tampilan Footer -->
        <section>
            <div class="footer">
                <div class="footer-content" style=margin-bottom:50px;>
                    <img class="image-4" src="../assets/img/image-6-1.png" alt="Logo" />
                    <div class="footer-info">
                        <p class="we-provide-a-range">
                            We provide a range of IT and telecommunication services consisting of telecomm consultancy, SIP Trunk<br>
                            provider, Call Center Solution, LAN Setup.We do the concept, technical design, and implementation that<br>
                            fits customers&#39; need both effective cost-efficient.
                        </p>
                        <div class="footer-links">
                            <div class="footer-section">
                                <div class="text-wrapper-27">Service</div>
                                <div class="frame-6">
                                    <div class="text-wrapper-28">Our Work</div>
                                    <div class="text-wrapper-29">Our Solutions</div>
                                </div>
                            </div>
                            <div class="footer-section">
                                <div class="text-wrapper-27">About Us</div>
                                <div class="frame-6">
                                    <div class="text-wrapper-28">Overview</div>
                                    <div class="text-wrapper-29">About</div>
                                    <div class="text-wrapper-29">Awards &amp; Recognitions</div>
                                    <div class="text-wrapper-29">Contact Team</div>
                                </div>
                            </div>
                            <div class="footer-section">
                                <div class="text-wrapper-27">PT. Meissa Berkah Teknologi</div>
                                <div class="frame-6">
                                    <p class="text-wrapper-30">Jl. Guntur No.20C, Limo, Kec. Limo, Kota Depok, Jawa Barat 16514</p>
                                    <div class="text-wrapper-220">+6285972510714</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- TAMPILAN FOOTER MENGAMBANG -->

                <div class="footer-bottom">
                    <p class="text-wrapper-31">Copyright@2024. First-Routes Web Team All Rights Reserved.</p>
                    <div class="social-icons">
                        <img class="frame-46" src="../assets/img/frame-10.svg" alt="Icon 1" />
                        <img class="frame-46" src="../assets/img/frame-11.svg" alt="Icon 2" />
                        <img class="frame-46" src="../assets/img/frame-12.svg" alt="Icon 3" />
                        <img class="frame-46" src="../assets/img/frame-13.svg" alt="Icon 4" />
                    </div>
                    <div class="text-wrapper-32">Akun media sosial kami</div>
                </div>
        </section>

        <script>
            document.getElementById('dropdownToggle').addEventListener('click', function(event) {
                event.preventDefault(); // Prevent default anchor behavior
                const dropdownMenu = document.getElementById('dropdownMenu');
                dropdownMenu.style.display = dropdownMenu.style.display === 'block' ? 'none' : 'block';
            });

            // Optional: Close the dropdown if clicking outside of it
            window.addEventListener('click', function(event) {
                const dropdownMenu = document.getElementById('dropdownMenu');
                if (!event.target.matches('#dropdownToggle') && dropdownMenu.style.display === 'block') {
                    dropdownMenu.style.display = 'none';
                }
            });

            // Get modal element
            const modal = document.getElementById("aboutUsModal");
            const aboutUsButton = document.getElementById("aboutUsButton");
            const closeModalButton = document.getElementById("closeModal");

            // Listen for open click
            aboutUsButton.addEventListener("click", function(event) {
                event.preventDefault(); // Prevent default anchor click behavior
                modal.style.display = "block"; // Show the modal
            });

            // Listen for close click
            closeModalButton.addEventListener("click", function() {
                modal.style.display = "none"; // Hide the modal
            });

            // Listen for outside click
            window.addEventListener("click", function(event) {
                if (event.target == modal) {
                    modal.style.display = "none"; // Hide the modal if clicked outside
                }
            });

            let hasAnimated = false;

            function animateNumbers() {
                const statNumbers = document.querySelectorAll('.stat-number');
                statNumbers.forEach(stat => {
                    const target = +stat.getAttribute('data-target');
                    let count = 0;
                    const increment = Math.ceil(target / 215); // Adjust speed of animation

                    const updateCount = () => {
                        if (count < target) {
                            count += increment;
                            stat.textContent = count + '+';
                            setTimeout(updateCount, 35); // Adjust interval time
                        } else {
                            stat.textContent = target + '+';
                        }
                    };

                    updateCount();
                });
            }

            window.addEventListener('scroll', () => {
                const statsSection = document.querySelector('.work-stats');
                const sectionPosition = statsSection.getBoundingClientRect().top;
                const screenPosition = window.innerHeight;

                if (!hasAnimated && sectionPosition < screenPosition) {
                    animateNumbers();
                    hasAnimated = true; // Ensure animation only happens once
                }
            });

            window.onscroll = function() {
                const footer = document.querySelector('.footer-bottom');
                if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
                    footer.style.backgroundColor = "#b22222"; // Change color on scroll
                } else {
                    footer.style.backgroundColor = "#ce2038"; // Original color
                }
            };

            window.onscroll = function() {
                var button = document.getElementById("whatsappButton");
                // Keep the button fixed at the same position
                button.style.bottom = "185px"; // Maintain the position above the footer
            };
        </script>

    </div>
    </div>

</body>

</html>