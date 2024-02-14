<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js'></script>

    <!-- Google Fonts Link For Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0">

    
    <link rel="stylesheet" href="availablePetsClient.css">
    <title>Available Pets</title>
</head>
<body onload=display_ct7();>
<!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
      <!-- Logo -->
      <a class="navbar-brand fs-1 text-uppercase" id href="#"><img src="petLogo.png" alt="LOGO" id="logo">Pet Adoption</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

    <!-- Navbar -->
    <div class="sidebar offcanvas offcanvas-start text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
        <!-- Sidebar Header -->
        <div class="offcanvas-header text-white border-bottom">
            <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Dark offcanvas</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item d-flex flex-column" style="display: inline-flex; justify-content: center; align-items: right;">
                    <span style="padding-right: 15px;" class="fs-3">Welcome, Username</span>
                    <span id='ct7' style="background-color: none"></span>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 profile-menu"> 
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <div class="profile-pic">
                        <img src="https://source.unsplash.com/250x250?girl" alt="Profile Picture">
                    </div>

                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="account.html"><i class="fas fa-sliders-h fa-fw"></i>Account</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fas fa-cog fa-fw"></i>Settings</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="index.html"><i class="fas fa-sign-out-alt fa-fw"></i>Log Out</a></li>
                      </ul>
                </li>
            </ul>
        </div>
      </div>
    </div>
  </nav>

    <!-- JS for live clock and date -->
    <script>
    function display_ct7() {
        var x = new Date()
        var ampm = x.getHours( ) >= 12 ? ' PM' : ' AM';
        hours = x.getHours( ) % 12;
        hours = hours ? hours : 12;
        hours = hours.toString().length==1? 0+hours.toString() : hours;
    
        var minutes=x.getMinutes().toString()
        minutes=minutes.length==1 ? 0+minutes : minutes;
    
        var seconds=x.getSeconds().toString()
        seconds=seconds.length==1 ? 0+seconds : seconds;
    
        var month=(x.getMonth() +1).toString();
        month=month.length==1 ? 0+month : month;
    
        var dt=x.getDate().toString();
        dt=dt.length==1 ? 0+dt : dt;
    
        var x1=month + "/" + dt + "/" + x.getFullYear(); 
        x1 = x1 + " - " +  hours + ":" +  minutes + ":" +  seconds + " " + ampm;
        document.getElementById('ct7').innerHTML = x1;
        display_c7();
    }

    function display_c7() {
        var refresh=1000; // Refresh rate in milli seconds
        mytime=setTimeout('display_ct7()',refresh)
    }
    
    display_c7()
    </script>


    <!-- JS for profile pic drop down, to account, settings, and logout -->
    <script>
    document.querySelectorAll('.dropdown-toggle').forEach(item => {
        item.addEventListener('click', event => {
        
            if(event.target.classList.contains('dropdown-toggle') ){
            event.target.classList.toggle('toggle-change');
            }
            else if(event.target.parentElement.classList.contains('dropdown-toggle')){
            event.target.parentElement.classList.toggle('toggle-change');
            }
        })
    });
    </script>


    <!-- Sidenav -->
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 sidenav">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100 sidebar-panel">
                    
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                        <li class="nav-item">
                            <a href="home.html" class="nav-link align-middle px-0">
                                <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                            </a>
                        </li>

                        <li>
                            <a href="availablePetsClient.html" class="nav-link px-0 align-middle active">
                                <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Available Pets</span></a>
                        </li>
                        <li>
                            <a href="#" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">About Us</span></a>
                        </li>
                        <li>
                            <a href="#" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Contact Us</span></a>
                        </li>
                        
                    </ul>
                    
                </div>
            </div>
            <div class="col content">

                <!-- Content for Home -->
                <div class="container">
                    <header>
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <h3 class="fw-bold">Available Pets</h3>
                            <h4 class="fw-bold">Pet Availables</h4>
                        </div>                       
                        <nav aria-label="breadcrumb" class="bg-transparent">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="home.html">Main Dashboard</a></li>
                              <li class="breadcrumb-item"><a href="#">Available Pets</a></li>
                            </ol>
                          </nav>
                        
                    </header>

                    <div class="laman">
                        <div class="laman-container">

                            <h1 class="fw-bold text-white">Dogs</h1>
                            <div class="slider-wrapper">
                                <button id="prev-slide" class="slide-button material-symbols-rounded" style="z-index: 1;">chevron_left</button>

                                <div class="image-list">
                                    
                                    <a href="home.html" class="image-link" data-info="Corgi">
                                        <img src="corgi.png" alt="corgi" class="image-item">
                                        <div class="hover-text">View More</div>
                                    </a>
                                    <a href="dog_info.html" class="image-link" data-info="Golden Retriever">
                                        <img src="golden.png" alt="golden" class="image-item">
                                        <div class="hover-text">View More</div>
                                    </a>
                                    <a href="dog_info.html" class="image-link" data-info="Great Dane">
                                        <img src="greatdane.png" alt="greatdane" class="image-item">
                                        <div class="hover-text">View More</div>
                                    </a>
                                    <a href="dog_info.html" class="image-link" data-info="Labrador">
                                        <img src="labrador.png" alt="labrador" class="image-item">
                                        <div class="hover-text">View More</div>
                                    </a>
                                    <a href="dog_info.html" class="image-link" data-info="Pug">
                                        <img src="pug.png" alt="pug" class="image-item">
                                        <div class="hover-text">View More</div>
                                    </a>
                                    <a href="dog_info.html" class="image-link" data-info="Shih Tzu">
                                        <img src="shihtzu.png" alt="shihtzu" class="image-item">
                                        <div class="hover-text">View More</div>
                                    </a>

                                </div>

                                <button id="next-slide" class="slide-button material-symbols-rounded">chevron_right</button>
                            </div>
                            
                            <div class="slider-scrollbar">
                                <div class="scrollbar-track">
                                    <div class="scrollbar-thumb">

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Cat Slider -->
                    <div class="laman">
                        <div class="laman-container">

                            <h1 class="fw-bold text-white">Cats</h1>
                            <div class="slider-wrapper-cat">
                                <button id="prev-slide-cat" class="slide-button-cat material-symbols-rounded" style="z-index: 1;">chevron_left</button>

                                <div class="image-list-cat">
                                    <a href="home.html" class="image-link" data-info="persian">
                                        <img src="persian.png" alt="persian" class="image-item-cat">
                                        <div class="hover-text">View More</div>
                                    </a>

                                    <a href="home.html" class="image-link" data-info="persian">
                                        <img src="siamese.png" alt="siamese" class="image-item-cat">
                                        <div class="hover-text">View More</div>
                                    </a>

                                    <a href="home.html" class="image-link" data-info="persian">
                                        <img src="mainecoon.png" alt="mainecoon" class="image-item-cat">
                                        <div class="hover-text">View More</div>
                                    </a>

                                    <a href="home.html" class="image-link" data-info="persian">
                                        <img src="ragdoll.png" alt="ragdoll" class="image-item-cat">
                                        <div class="hover-text">View More</div>
                                    </a>

                                    <a href="home.html" class="image-link" data-info="persian">
                                        <img src="bengal.png" alt="bengal" class="image-item-cat">
                                        <div class="hover-text">View More</div>
                                    </a>

                                    <a href="home.html" class="image-link" data-info="persian">
                                        <img src="sphynx.png" alt="sphynx" class="image-item-cat">
                                        <div class="hover-text">View More</div>
                                    </a>
                                          
                                </div>

                                <button id="next-slide-cat" class="slide-button-cat material-symbols-rounded">chevron_right</button>
                            </div>

                            <div class="slider-scrollbar-cat">
                                <div class="scrollbar-track-cat">
                                    <div class="scrollbar-thumb-cat"></div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Bird Slider -->
                    <div class="laman">
                        <div class="laman-container">

                            <h1 class="fw-bold text-white">Birds</h1>
                            <div class="slider-wrapper-bird">
                                <button id="prev-slide-bird" class="slide-button-bird material-symbols-rounded" style="z-index: 1;">chevron_left</button>

                                <div class="image-list-bird">
                                    <a href="home.html" class="image-link" data-info="persian">
                                        <img src="parrot.png" alt="parrot" class="image-item-bird">
                                        <div class="hover-text">View More</div>
                                    </a>

                                    <a href="home.html" class="image-link" data-info="persian">
                                        <img src="canary.png" alt="canary" class="image-item-bird">
                                        <div class="hover-text">View More</div>
                                    </a>
                                    
                                    <a href="home.html" class="image-link" data-info="persian">
                                        <img src="owl.png" alt="owl" class="image-item-bird">
                                        <div class="hover-text">View More</div>
                                    </a>
                                    
                                    <a href="home.html" class="image-link" data-info="persian">
                                        <img src="lovebird.png" alt="eagle" class="image-item-bird">
                                        <div class="hover-text">View More</div>
                                    </a>
                                    
                                    <a href="home.html" class="image-link" data-info="persian">
                                        <img src="hummingbird.png" alt="hummingbird" class="image-item-bird">
                                        <div class="hover-text">View More</div>
                                    </a>

                                    <a href="home.html" class="image-link" data-info="persian">
                                        <img src="duck.png" alt="penguin" class="image-item-bird">
                                        <div class="hover-text">View More</div>
                                    </a>

                                    
                                    
                                </div>

                                <button id="next-slide-bird" class="slide-button-bird material-symbols-rounded">chevron_right</button>
                            </div>

                            <div class="slider-scrollbar-bird">
                                <div class="scrollbar-track-bird">
                                    <div class="scrollbar-thumb-bird"></div>
                                </div>
                            </div>

                        </div>
                    </div>

                        
                      




                </div>
                
                
</body>

<!-- JS for date picker -->
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>  
<script src ="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<!-- JS for dog slider -->
<script>
    const initSlider = () => {
    const imageList = document.querySelector(".slider-wrapper .image-list");
    const slideButtons = document.querySelectorAll(".slider-wrapper .slide-button");
    const sliderScrollbar = document.querySelector(".laman-container .slider-scrollbar");
    const scrollbarThumb = sliderScrollbar.querySelector(".scrollbar-thumb");
    const maxScrollLeft = imageList.scrollWidth - imageList.clientWidth;

    // Handle scrollbar thumb drag
    scrollbarThumb.addEventListener("mousedown", (e) => {
        const startX = e.clientX;
        const thumbPosition = scrollbarThumb.offsetLeft;

        // Update thumb position on mouse move
        const handleMouseMove = (e) => {
            const deltaX = e.clientX - startX;
            const newThumbPosition = thumbPosition + deltaX;
            const maxThumbPosition = sliderScrollbar.getBoundingClientRect().width - scrollbarThumb.offsetWidth;

            const boundedPosition = Math.max(0, Math.min(maxThumbPosition, newThumbPosition));
            const scrollPosition = (boundedPosition / maxThumbPosition) * maxScrollLeft;

            scrollbarThumb.style.left = `${boundedPosition}px`;
            imageList.scrollLeft = scrollPosition;
        }


        // Remove event listeners on mouse up
        const handleMouseUp = () => {
            document.removeEventListener("mousemove", handleMouseMove);
            document.removeEventListener("mouseup", handleMouseUp);
        }

        // Add event listeners for drag interaction
        document.addEventListener("mousemove", handleMouseMove);
        document.addEventListener("mouseup", handleMouseUp);
    } )

    // Slide images according to the slide button clicks
    slideButtons.forEach(button => {
        button.addEventListener("click", () => {
            const direction = button.id === "prev-slide" ? -1 : 1;
            const scrollAmount = imageList.clientWidth * direction;
            imageList.scrollBy({ left: scrollAmount, behavior: "smooth" });
        });
    });

    const handleSlideButtons = () => {
        slideButtons[0].style.display = imageList.scrollLeft <= 0 ? "none" : "block";
        slideButtons[1].style.display = imageList.scrollLeft >= maxScrollLeft ? "none" : "block";
    };


    const updateScrollThumbPosition = () => {
        const scrollPosition = imageList.scrollLeft;
        const maxScrollLeft = imageList.scrollWidth - imageList.clientWidth;
        const thumbPosition = (scrollPosition / maxScrollLeft) * (sliderScrollbar.clientWidth - scrollbarThumb.offsetWidth);
        scrollbarThumb.style.left = `${thumbPosition}px`;
};

    imageList.addEventListener("scroll", () => {
        handleSlideButtons();
        updateScrollThumbPosition();
    });
};

window.addEventListener("load", initSlider);

</script>

<!-- JS for cat slider -->
<script>
    const initCatSlider = () => {
        const imageListCat = document.querySelector(".slider-wrapper-cat .image-list-cat");
        const slideButtonsCat = document.querySelectorAll(".slider-wrapper-cat .slide-button-cat");
        const sliderScrollbarCat = document.querySelector(".laman-container .slider-scrollbar-cat");
        const scrollbarThumbCat = sliderScrollbarCat.querySelector(".scrollbar-thumb-cat");
        const maxScrollLeftCat = imageListCat.scrollWidth - imageListCat.clientWidth;

        // Handle scrollbar thumb drag for cat slider
        scrollbarThumbCat.addEventListener("mousedown", (e) => {
            const startX = e.clientX;
            const thumbPosition = scrollbarThumbCat.offsetLeft;

            // Update thumb position on mouse move
            const handleMouseMoveCat = (e) => {
                const deltaX = e.clientX - startX;
                const newThumbPosition = thumbPosition + deltaX;
                const maxThumbPosition = sliderScrollbarCat.getBoundingClientRect().width - scrollbarThumbCat.offsetWidth;

                const boundedPosition = Math.max(0, Math.min(maxThumbPosition, newThumbPosition));
                const scrollPositionCat = (boundedPosition / maxThumbPosition) * maxScrollLeftCat;

                scrollbarThumbCat.style.left = `${boundedPosition}px`;
                imageListCat.scrollLeft = scrollPositionCat;
            }

            // Remove event listeners on mouse up
            const handleMouseUpCat = () => {
                document.removeEventListener("mousemove", handleMouseMoveCat);
                document.removeEventListener("mouseup", handleMouseUpCat);
            }

            // Add event listeners for drag interaction
            document.addEventListener("mousemove", handleMouseMoveCat);
            document.addEventListener("mouseup", handleMouseUpCat);
        });

        // Slide images according to the slide button clicks for cat slider
        slideButtonsCat.forEach(button => {
            button.addEventListener("click", () => {
                const direction = button.id === "prev-slide-cat" ? -1 : 1;
                const scrollAmountCat = imageListCat.clientWidth * direction;
                imageListCat.scrollBy({ left: scrollAmountCat, behavior: "smooth" });
            });
        });

        const handleSlideButtonsCat = () => {
            slideButtonsCat[0].style.display = imageListCat.scrollLeft <= 0 ? "none" : "block";
            slideButtonsCat[1].style.display = imageListCat.scrollLeft >= maxScrollLeftCat ? "none" : "block";
        };

        const updateScrollThumbPositionCat = () => {
            const scrollPositionCat = imageListCat.scrollLeft;
            const maxScrollLeftCat = imageListCat.scrollWidth - imageListCat.clientWidth;
            const thumbPositionCat = (scrollPositionCat / maxScrollLeftCat) * (sliderScrollbarCat.clientWidth - scrollbarThumbCat.offsetWidth);
            scrollbarThumbCat.style.left = `${thumbPositionCat}px`;
        };

        imageListCat.addEventListener("scroll", () => {
            handleSlideButtonsCat();
            updateScrollThumbPositionCat();
        });
    };

    window.addEventListener("load", initCatSlider);
</script>

<!-- JS for bird slider -->
<script>
    const initBirdSlider = () => {
        const imageListBird = document.querySelector(".slider-wrapper-bird .image-list-bird");
        const slideButtonsBird = document.querySelectorAll(".slider-wrapper-bird .slide-button-bird");
        const sliderScrollbarBird = document.querySelector(".laman-container .slider-scrollbar-bird");
        const scrollbarThumbBird = sliderScrollbarBird.querySelector(".scrollbar-thumb-bird");
        const maxScrollLeftBird = imageListBird.scrollWidth - imageListBird.clientWidth;

        // Handle scrollbar thumb drag for bird slider
        scrollbarThumbBird.addEventListener("mousedown", (e) => {
            const startX = e.clientX;
            const thumbPosition = scrollbarThumbBird.offsetLeft;

            // Update thumb position on mouse move
            const handleMouseMoveBird = (e) => {
                const deltaX = e.clientX - startX;
                const newThumbPosition = thumbPosition + deltaX;
                const maxThumbPosition = sliderScrollbarBird.getBoundingClientRect().width - scrollbarThumbBird.offsetWidth;

                const boundedPosition = Math.max(0, Math.min(maxThumbPosition, newThumbPosition));
                const scrollPositionBird = (boundedPosition / maxThumbPosition) * maxScrollLeftBird;

                scrollbarThumbBird.style.left = `${boundedPosition}px`;
                imageListBird.scrollLeft = scrollPositionBird;
            }

            // Remove event listeners on mouse up
            const handleMouseUpBird = () => {
                document.removeEventListener("mousemove", handleMouseMoveBird);
                document.removeEventListener("mouseup", handleMouseUpBird);
            }

            // Add event listeners for drag interaction
            document.addEventListener("mousemove", handleMouseMoveBird);
            document.addEventListener("mouseup", handleMouseUpBird);
        });

        // Slide images according to the slide button clicks for bird slider
        slideButtonsBird.forEach(button => {
            button.addEventListener("click", () => {
                const direction = button.id === "prev-slide-bird" ? -1 : 1;
                const scrollAmountBird = imageListBird.clientWidth * direction;
                imageListBird.scrollBy({ left: scrollAmountBird, behavior: "smooth" });
            });
        });

        const handleSlideButtonsBird = () => {
            slideButtonsBird[0].style.display = imageListBird.scrollLeft <= 0 ? "none" : "block";
            slideButtonsBird[1].style.display = imageListBird.scrollLeft >= maxScrollLeftBird ? "none" : "block";
        };

        const updateScrollThumbPositionBird = () => {
            const scrollPositionBird = imageListBird.scrollLeft;
            const maxScrollLeftBird = imageListBird.scrollWidth - imageListBird.clientWidth;
            const thumbPositionBird = (scrollPositionBird / maxScrollLeftBird) * (sliderScrollbarBird.clientWidth - scrollbarThumbBird.offsetWidth);
            scrollbarThumbBird.style.left = `${thumbPositionBird}px`;
        };

        imageListBird.addEventListener("scroll", () => {
            handleSlideButtonsBird();
            updateScrollThumbPositionBird();
        });
    };

    window.addEventListener("load", initBirdSlider);
</script>


</html>
